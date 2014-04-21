<html>
<body>

</body>
<?php 
$con = mysql_connect('localhost','root','');
if (!$con)
{
	die('Could not connect: ' . mysql_error());
}
mysql_select_db("bluetendance", $con)or die("could not select database");
session_start();
$usn=$_POST['usn'];
$selectedoption = $_POST['yourselectbox'];
$a=(int)$_POST['val'];
echo $usn;
echo $selectedoption;
echo $a;
$res="UPDATE attendance_table SET Unix=9 WHERE usn=1PI11IS016";
$ab=mysql_query($res) or die ("Could not do,may be ID you have entered is wrong") ;
echo $ab;
?>

</html>
