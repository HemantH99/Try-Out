<!DOCTYPE html>
<html>
<style>
.button {
    background-color: #4CAF50;
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 24px;
    margin: 4px 2px;
    cursor: pointer;
	padding: 32px 32px;
	-webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;
	
}
.button1 {
    background-color: white;
    color: black;
    border: 2px solid #4CAF50;
}

.button1:hover {
    background-color: #4CAF50;
    color: white;
}

.button2 {
    background-color: white;
    color: black;
    border: 2px solid #008CBA;
}

.button2:hover {
    background-color: #008CBA;
    color: white;
}

.button3 {
    background-color: white;
    color: black;
    border: 2px solid #f44336;
}

.button3:hover {
    background-color: #f44336;
    color: white;
}

.button4 {
    background-color: white;
    color: black;
    border: 2px solid #e7e7e7;
}

.button4:hover {background-color: #e7e7e7;}

.button5 {
    background-color: white;
    color: black;
    border: 2px solid #555555;
}

.button5:hover {
    background-color: #555555;
    color: white;
}
.button6{
	border-radius: 15px;
    box-shadow: 0 9px #999;
}
.button6:hover {background-color: #3e8e41}
.button6:active{
	background-color: #3e8e41;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
	
}
</style>
<body background="background.jpg">
<?php
define('DB_NAME','userdata');
define('DB_USER','root');
define('DB_PASSWORD','');
define('DB_HOST','localhost');

$link=mysql_connect(DB_HOST,DB_USER,DB_PASSWORD);

if(!$link)
{
	die('could not connect:'.mysql_error());
}
$db_selected=mysql_select_db(DB_NAME,$link);
if(!$db_selected)
{
	die('can\'t use'.DB_NAME.':'.mysql_error());
}
session_start();
$Name=$_SESSION['sess_user'];
$result=mysql_query("select * from userdetails where username='".$Name."'",$link);
$norows=mysql_num_rows($result);


if($norows==0)
{
	echo 'account doesnot exist';
	
}
else if($norows==1)
{
	if($row=mysql_fetch_assoc($result))
	{
		$dbname=$row['username'];
	}
	if($dbname==$Name)
	{
		echo "<div style='color:white;text-align:right'><h1>Welcome ". $row['name']."!</h1><h2>Your score : ".$row['score']."</h2></div>";

	}
	
}
else 
{
	echo '';
}

mysql_close();
?>
<center>
<img src="tryyy.jpg" alt="image not found" width="300" height="200" align="top">
<br><br>
<button class="button button1"onclick="location.href='wa.php'">A</button>
<button class="button button2"onclick="location.href='wb.php'">B</button>
<button class="button button3"onclick="location.href='wc.php'">C</button>
<button class="button button4"onclick="location.href='wd.php'">D</button>
<button class="button button5"onclick="location.href='we.php'">E</button>
<button class="button button1"onclick="location.href='wf.php'">F</button>
<button class="button button3"onclick="location.href='wg.php'">G</button>
<button class="button button4"onclick="location.href='wh.php'">H</button>
<button class="button button5"onclick="location.href='wi.php'">I</button>
<button class="button button2"onclick="location.href='wj.php'">J</button>
<button class="button button1"onclick="location.href='wk.php'">K</button>
<button class="button button4"onclick="location.href='wl.php'">L</button>
<button class="button button5"onclick="location.href='wm.php'">M</button>
<br><br>
<button class="button button2"onclick="location.href='wn.php'">N</button>
<button class="button button3"onclick="location.href='wo.php'">O</button>
<button class="button button1"onclick="location.href='wp.php'">P</button>
<button class="button button5"onclick="location.href='wq.php'">Q</button>
<button class="button button2"onclick="location.href='wr.php'">R</button>
<button class="button button3"onclick="location.href='ws.php'">S</button>
<button class="button button4"onclick="location.href='wt.php'">T</button>
<button class="button button1"onclick="location.href='wu.php'">U</button>
<button class="button button2"onclick="location.href='wv.php'">V</button>
<button class="button button3"onclick="location.href='ww.php'">W</button>
<button class="button button4"onclick="location.href='wx.php'">X</button>
<button class="button button5"onclick="location.href='wy.php'">Y</button>
<button class="button button1"onclick="location.href='wz.php'">Z</button>
<button class="button button6"onclick="location.href='test.php'">wanna take a test??</button>
<button class="button button6"onclick="location.href='logout.php'">logout</button>
</center>
</html>