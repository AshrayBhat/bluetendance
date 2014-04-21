<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="assets/ico/favicon.ico">

    <title>Blutendence</title>

    <!-- Bootstrap core CSS -->
    <link href="dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="jumbotron.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
  

  <body>
    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
	
      <div class="container">
	  
        <div class="navbar-header">
		
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.html">Blutendence</a></br></br></br>
		  		            <form class="navbar-form navbar-right" method="post" action="lecturer_view.php">
		<form class="navbar-form navbar-right" method="post" action="lecturer_view.php">
            		<button type="submit" onsubmit = lecturer_view.php class="btn btn-success">Attendance status</button>
            	</form>
            
		            <form class="navbar-form navbar-right" method="post" action="Logout.php">

            <button type="submit" class="btn btn-success">Log Out</button>
			</form>
        </div>
		</div>
		</div>
  
  
  
  

<body>


<font face="monotype corsiva" size=5>
<br>
<br>
<?php
$con = mysql_connect('localhost','root','');
if (!$con)
{
	die('Could not connect: ' . mysql_error());
}
mysql_select_db("bluetendance", $con);
session_start();
$q=$_GET["m"];
//Use the mysql_query function to extract everything from the example table
$result = mysql_query("SELECT * from lecturer_table
                       WHERE name='$q'");
//Use the mysql_fetch_array function on the resource returned by the mysql_query
$row = mysql_fetch_array($result);
//Display the results
echo nl2br("<font size=6>");
echo nl2br("<center>");
echo nl2br("Welcome ".$row['name']."\n\r");
echo nl2br("</center>");
echo nl2br("Name :".$row['name']."\n\r");
echo nl2br("Email:".$row['email']."\n\r");
echo nl2br("Subject :".$row['subject']."\n\r");
echo nl2br("Subject Code:".$row['subjectCode']."\n\r");
$r=$row['email'];
$_SESSION['E']=$r;
echo("</font>");
?>

</font>
</body>
</html>
