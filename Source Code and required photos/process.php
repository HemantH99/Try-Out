
<html>
<head>
<style type="text/css">
#wrapper {
	
	width:950px;
	 height:auto;
	 padding: 13px;
	 margin-right:auto;
	 margin-left:auto;
	 background-color:#fff;
}
</style>
</head>
<?php 

	$fid = $_GET['id'];

?>
<body bgcolor="#e1e1e1">

<div id="wrapper">

<center><font face="Andalus" size="5">Your Score</font></center>
<br />
<br />

<?php
	$answer1= $_POST['answerone'];
	$answer2= $_POST['answertwo'];
	$answer3= $_POST['answerthree'];
	$answer4= $_POST['answerfour'];
	$answer5= $_POST['answerfive'];
	$answer6= $_POST['answersix'];
	$answer7= $_POST['answerseven'];
	$answer8= $_POST['answereight'];
	$answer9= $_POST['answernine'];
	$answer10= $_POST['answerten'];
	$answer11= $_POST['answereleven'];
	$answer12= $_POST['answertwelve'];
	$answer13= $_POST['answerthirteen'];
	$answer14= $_POST['answerfourteen'];
	$answer15= $_POST['answerfifteen'];
	$answer16= $_POST['answersixteen'];
	$answer17= $_POST['answerseventeen'];
	$answer18= $_POST['answereighteen'];
	$answer19= $_POST['answernineteen'];
	$answer20= $_POST['answertwenty'];
	$answer21= $_POST['answertwentyone'];
	$answer22= $_POST['answertwentytwo'];
	$answer23= $_POST['answertwentythree'];
	$answer24= $_POST['answertwentyfour'];
	$answer25= $_POST['answertwentyfive'];
	$answer26= $_POST['answertwentysix'];
	$answer27= $_POST['answertwentyseven'];
	$answer28= $_POST['answertwentyeight'];
	$answer29= $_POST['answertwentynine'];
	$answer30= $_POST['answerthirty'];
	
	$score = 0;
	
	if ($answer1 == "A"){$score++;}
	if ($answer2 == "B"){$score++;}
	if ($answer3 == "C"){$score++;}
	if ($answer4 == "A"){$score++;}
	if ($answer5 == "B"){$score++;}
	if ($answer6 == "C"){$score++;}
	if ($answer7 == "A"){$score++;}
	if ($answer8 == "B"){$score++;}
	if ($answer9 == "C"){$score++;}
	if ($answer10 == "A"){$score++;}
	if ($answer11== "B"){$score++;}
	if ($answer12 == "C"){$score++;}
	if ($answer13 == "A"){$score++;}
	if ($answer14 == "B"){$score++;}
	if ($answer15 == "C"){$score++;}
	if ($answer16 == "A"){$score++;}
	if ($answer17 == "B"){$score++;}
	if ($answer18 == "C"){$score++;}
	if ($answer19 == "A"){$score++;}
	if ($answer20== "B"){$score++;}
	if ($answer21 == "C"){$score++;}
	if ($answer22 == "A"){$score++;}
	if ($answer23 == "B"){$score++;}
	if ($answer24 == "C"){$score++;}
	if ($answer25 == "A"){$score++;}
	if ($answer26 == "B"){$score++;}
	if ($answer27 == "C"){$score++;}
	if ($answer28 == "A"){$score++;}
	if ($answer29 == "B"){$score++;}
	if ($answer30== "C"){$score++;}
	echo "<center><font face='Berlin Sans FB' size='8'>Your Score is <br> $score/30</font></center>";
	$servername = "localhost";
$username = "root";
$password = "";
$dbname = "userdata";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
session_start();
$Name=$_SESSION['sess_user'];
$sql = "update userdetails set score=$score where username='".$Name."'";

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();
?>

<button class="button"onclick="location.href='userhome.php'">go to home page</button>


</div><!--- end of wrapper div --->

</body>
</html>