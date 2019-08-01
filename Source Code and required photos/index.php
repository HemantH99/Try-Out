
<style type="text/css">
a{
	font-size:36pt;
	color:white;
}
</style>
<h1 >
<title>TRY-OUT</title>
</h1>
<body background="background.jpg">
<center>
<p>
<img src="tryyy.jpg" alt="image not found" width="430" height="400" align="top">
</p>
<p>
<a href='?page=login.php' >Login</a>
<a href='?page=register.php'> Sign up</a>
</p>
<?php
if(isset($_GET['page']))
{
	$loc=$_GET['page'];
	header("location:$loc");
}
?>
</center>
</body>