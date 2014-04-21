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
$uname=$_POST['uname'];
$usn=$_POST['usn'];
$uemail=$_POST['uemail'];
$sem=$_POST['sem'];
$dept=$_POST['dept'];
$upwd=$_POST['upwd'];
$cpass=$_POST['cpass'];
if($upwd != $cpass)
{		
	echo "passwordS donot match";
}

else
{
	$insert="INSERT INTO student_table(usn,email,name,semester,department,password)VALUES('$usn','$uemail','$uname','$sem','$dept','$upwd')";
	mysql_query($insert);
	
	$insert_attend = "INSERT INTO attendance_table(usn) VALUES('$usn')";
	mysql_query($insert_attend);

	Header("Location: student_signup.html?remarks1=success");
}


mysql_close($con);


?>
</body>
</html>
