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
            		<button type="submit" onsubmit = lecturer_view.php class="btn btn-success">Attendance status</button>
            	</form>
            	<form class="navbar-form navbar-right" method="post" action="lecturer_edit.php">

            <button type="submit" class="btn btn-success">Edit</button>
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
$con=mysqli_connect("localhost","root","","bluetendance");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL:";
  }

$result = mysqli_query($con,"SELECT * FROM attendance_table");
echo "<table border='1'>
<tr>
<th>usn</th>
<th>CN</th>
<th>SE</th>
<th>web T</th>
<th>unix</th>
<th>Elective</th>
</tr>";
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_array($result)) {
	echo "<tr border='1 '>";
    	echo "<td>" .$row['usn']."</td>";
    	echo "<td>" .$row['Computer Networks 2']."</td>";
	echo "<td>" .$row['Software Engineering']."</td>";
	echo "<td>" .$row['Web Technology']."</td>";
	echo "<td>" .$row['Unix']."</td>";
	echo "<td>" .$row['Elective']."</td>";
	echo "</tr>";
	 
	
    }
}
else
{
	echo "mistake";
}

mysqli_close($con);
?>

</font>
</body>
</html>
