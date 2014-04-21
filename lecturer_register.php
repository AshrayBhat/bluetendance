<html>
<body>
<?php
$con = mysql_connect('localhost','root','');
if (!$con)
{
	die('Could not connect: ' . mysql_error());
}
mysql_select_db("bluetendance", $con);
session_start();
$name=$_POST['name'];
$email=$_POST['email'];
$subject=$_POST['subject'];
$subjectCode=$_POST['subjectcode'];
$password = $_POST['password'];
$cpassword = $_POST['cpassword'];
if($password == $cpassword)
{
	$insert="INSERT INTO lecturer_table(name,email,subject,subjectCode,password)VALUES('$name', '$email','$subject','$subjectCode','$password')";
	mysql_query($insert);
	Header("Location: lecturer_signup.html?remarks1=success");
	mysql_close($con);
}
else
{
	echo "passwords not matching";
}
?>
</body>
</html>
