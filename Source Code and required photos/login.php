<!DOCTYPE html>
<html>
<style type="text/css">
body{
font-family:serif;
font-size:15px;

}
</style>
<center>
<body background="bk11.jpg">

<form action="login.php" method="post">
<h1>
Log In
</h1>
<br />
<body>
<table>
<tr>
<td>
User name:
</td>
<td>
<input type="text" name="UserName"/>
</td>
<br />
</tr>
<tr>
<td>
Password:
</td>
<td>
<input type="password" name="Password"/>
</td><br />
</tr>
<tr>
<td><input type="submit" value="Log In" name="login" onclick=""/> </td>
</tr>
</table>
</form>
</body>
</center>
</html>
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
if(isset($_POST['login']))
{
$Name=$_POST['UserName'];
$password=$_POST['Password'];
$result=mysql_query("select * from login where username='".$Name."' and password='".$password."'",$link);
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
		$dbpassword=$row['password'];
	}
	if($dbname==$Name&&$dbpassword==$password)
	{
		session_start();
		echo 'logged in';
		$_SESSION['sess_user']=$Name;
		header("Location:userhome.php");
	}
	
}
}
else 
{
	echo '';
}

mysql_close();
?>
