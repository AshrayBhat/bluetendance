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
$uname = $_POST["uname"];
$upwd = $_POST["upwd"];

  if (!$uname || !$upwd)
  {
	Header("Location: index.html?op=fail");
  }
  
  // Create query
  $q = "SELECT * FROM student_table 
        WHERE name='$uname' 
        AND password='$upwd' 
        LIMIT 1";
  $p= "SELECT * FROM lecturer_table 
        WHERE name='$uname' 
        AND password='$upwd' 
        LIMIT 1";
  // Run query
  $r = mysql_query($q);
  $s=mysql_query($p);

  if ( $obj = @mysql_fetch_object($r) )
        {
        // Login good, create session variables
        $_SESSION["valid_id"] = $obj->usn;
        $_SESSION["valid_user"] = $_POST["uname"];
        $_SESSION["valid_time"] = time();

        // Redirect to member page
        Header("Location: student_profile.php?m=$upwd");
        }
		
  else if( $obj = @mysql_fetch_object($s))
  {
		$_SESSION["valid_id"] = $obj->id;
        $_SESSION["valid_user"] = $_POST["uname"];
        $_SESSION["valid_time"] = time();
        Header("Location: lecturer_profile.php?m=$uname");

  }	
		
  else
  {
        // Login not successful
        //die("Sorry, could not log you in. Wrong login information.");
		Header("Location: index.html?op=fail");
  }
  mysql_close($con) ;
?>
</body>
</html>
