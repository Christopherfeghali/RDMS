	<DOCTYPE html>
	
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
	
	$sql="SELECT * FROM cd ";
	
	$records=mysqli_query($conn,$sql);
	
	?>
	<html>
	
	<head>
	 <meta charset="utf-8">
	<style>
	
	p {color : rgb(0,0,0);}
	
	p {
    font-family: "Times New Roman", Times, serif;
	}
	
	
	h1 {font-family:'anjasmoro', sans-serif;
    font-size: 26px;
    font-weight:normal;
    text-align: center;
    line-height: 100%;
    border-bottom: 1px solid #484848;
    padding-bottom: 5px;
    margin-bottom:7px;}}
	
	
	
	
	
	h1 {color : rgb();}
	 
	h1 {color : white ;}
	h1 {text-align: center;}
	p  {color : white;}
	p  {text-align: center;}
	
	ul {
		font-family:'anjasmoro', sans-serif;
    list-style-type: none;
    margin: 0;
	margin-top:-30;
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
    background-color: #111;
}
	</style>
	<style>
	table {border-collapse : collapse ;}
	table { margin-top:70px;}
	
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
	
	
	
	
	
	
	
	
	<form action="dbi2.php" method="get">  
		Search: <input id="srch_val" type="text" name="term" />  
	<input id="term" type="submit" value="Submit" />
    </form>
	
	
	
	
	<audio controls>
	<source src="Gorillaz - Plastic Beach.mp3" type="audio/mpeg">
	Your browser does not support the audio element.
	</audio>
	
    <body background="theme5.jpg">
	<h1>Albums Available</h1>
	<ul>
  	<li><a href="http://localhost/home.php">Homepage</a></li>
	<li><a href="http://localhost/artist.php">Artist Details</a></li>
	<li><a href="http://localhost/tracks.php">Track Details</a></li>
	</ul>
	
	<?php
	
	@$term = $_GET['term'];
		if($term=='')
			{
		if($result = mysqli_query($conn,"SELECT * FROM cd ORDER BY title ASC"))
			{
			if(mysqli_num_rows($result) > 0)
				{
				echo '<table width="1500 border="0" cellpadding="18" cellspacing="0" align="left" ">';
				echo "<tr>";
				echo '<th>cdID</th>';
				echo '<th>artId</th>';
				echo '<th>title</th>';
				echo '<th>numberoftracks  </th>';
				echo '<th> genre </th>';
				echo "</tr>";
					
				while($row = mysqli_fetch_array($result))
				{
					echo "<tr>";
					echo '<td>' . $row['cdID'] . '</td>';
					echo '<td>' . $row['artID'] . '</td>';
					echo '<td>' . $row['title'] . '</td>';
					echo '<td>' . $row['numberoftracks'] . '</td>';
					echo '<td>' . $row['genre'] . '</td>';
									
									
					echo '<td><a href= "dbi2.php?=' . $row['cdID'] . '">Edit</a></td>';
					echo "</tr>";
				}
					echo "</table>";
						mysqli_free_result($result);
					}
				}
			}
			else
			{
				$r_query = mysqli_query($conn,"SELECT * FROM cd WHERE title LIKE '%".$term."%' "); 
				
				if(mysqli_num_rows($r_query) > 0)
				{
					echo '<table width="1500 border="0" cellpadding="18" cellspacing="0" align="left" >';
					echo "<tr>";
					echo '<th>cdID</th>';
					echo '<th>artID</th>';
					echo '<th> title </th>';
					echo '<th> numberoftracks </th>';
					echo '<th> genre </th>';
					echo "</tr>";
					
					while ($row = mysqli_fetch_array($r_query))
					{  
					echo "<tr>";
					echo '<td>' . $row['cdID'] . '</td>';
					echo '<td>' . $row['artID'] . '</td>';
					echo '<td>' . $row['title'] . '</td>';
					echo '<td>' . $row['numberoftracks'] . '</td>';
					echo '<td>' . $row['genre'] . '</td>';
					echo '<td><a href= "dbi2.php?=' . $row['cdID'] . '">Edit</a></td>';
					echo "</tr>";    
					}  
					echo "</table>";
				}
			}
			
			
	
	
	?>
	
	
	
	
	</body>
	</html>