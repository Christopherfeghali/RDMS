	<DOCTYPE html>
	<html>
	
	<?php
	
	//mysql connect
	
	//mysqli_connect('localhost','caf','chris123');
	
	$servername = "localhost";
      $username = "caf";
      $password = "chris123";
      $dbname = "music";
	 
  
      $conn = new mysqli($servername, $username, 
                              $password, $dbname);
	
	//database selection
	
	mysqli_select_db($conn,$dbname);
	
	$sql="SELECT * FROM tracks";
	
	$records=mysqli_query($conn,$sql);

	//mysqli_close($conn);
	?>
	
	<head>
	<style>
	
	h1 {color : white ;}
	h1 {text-align: center;}
	p  {color : white;}
	p  {text-align: center;}
	
	h1 {font-family:'anjasmoro', sans-serif;
    font-size: 26px;
    font-weight:normal;
    text-align: center;
    line-height: 100%;
    border-bottom: 1px solid #484848;
    padding-bottom: 5px;
    margin-bottom:7px;}}
	ul {
		font-family:'anjasmoro', sans-serif;
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
	}
	
	li {
    float: left;
	}
	
	li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
	}
	
	li a:hover {
    background-color: #FFA500;
	}
	
	table {margin-top:160px ;}
	
	th {font-family:'anjasmoro', sans-serif;
    font-size: 26px;
    font-weight:normal;
    text-align: center;
    line-height: 100%;
    border-bottom: 1px solid #484848;
    padding-bottom: 5px;
    margin-bottom:7px;}
	
	tr {font-family:'anjasmoro', sans-serif;
    font-size: 26px;
    font-weight:normal;
    text-align: center;
    line-height: 100%;
    border-bottom: 1px solid #484848;
    padding-bottom: 5px;
    margin-bottom:7px;}
	
	th {
    background-color: #111;
    color: white;
	}
	tr {
    background-color: #111;
    color: white;
	text-align: center;
	}
	
	tr:hover {background-color: #FFA500}
	
	

	</style>
	</head>
	
	<body>
	
	<audio controls>
	<source src="Gorillaz - Plastic Beach.mp3" type="audio/mpeg">
	Your browser does not support the audio element.
	</audio>
	
	<body background="theme5.jpg" height="1920" width="1080">
	<ul>
  	<li><a href="http://localhost/home.php">Homepage</a></li>
	<li><a href="http://localhost/dbi2.php">Album Details</a></li>
	<li><a href="http://localhost/artist.php">Artist Details</a></li>
	
	</ul>
	<table width="1500" border="0" cellpadding="19" cellspacing="0" align="left">
	
	
	<tr>
	
	<th>trackID</th>
	<th>title</th>
	<th>runningtimeseconds</th>
	
	
	
	</body>
	
	<?php
	
	while($cd=mysqli_fetch_assoc($records))
		{
			
		echo "<tr>";
		
		echo "<td>".$cd['trackID']."</td>";
		echo "<td>".$cd['title']."</td>";
		echo "<td>".$cd['runningtimeseconds']."</td>";
		echo "</tr>";
		
		}
	
	
	
	
	
	?>
	
	
	
	
	
	</html>