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
	
	$sql="SELECT * FROM artist";
	
	$records=mysqli_query($conn,$sql);
	
	//mysqli_close($conn);
    ?>

	
	
	<html>
	
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
	
	
	
	
	
	</style>
	
	<style>
	
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
	
	table {margin-top:40px ;}
	
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
	
	<form action="artist.php" method="get">  
		Search: <input id="srch_val" type="text" name="term" />  
	<input id="term" type="submit" value="Submit" />
    </form>	
		
	
	
	

	<audio controls>
	<source src="Gorillaz - Plastic Beach.mp3" type="audio/mpeg">
	Your browser does not support the audio element.
	</audio>
	<h1>Artists</h1>
	<body background="theme5.jpg" height="1920" width="1080">
	
	<ul>
  	<li><a href="http://localhost/home.php">Homepage</a></li>
	<li><a href="http://localhost/dbi2.php">Album Details</a></li>
	<li><a href="http://localhost/tracks.php">Track Details</a></li>
	
	</ul>
	
	
	<?php
	
	@$term = $_GET['term'];
		if($term=='')
		{
		if($result = mysqli_query($conn,"SELECT * FROM artist ORDER BY artID ASC"))
		{
		if(mysqli_num_rows($result) > 0)
		{
			echo '<table width="1500 border="0" cellpadding="18" cellspacing="0" align="left" ">';
			echo "<tr>";
			echo '<th>artID</th>';
			echo '<th>artName</th>';
			echo '<th>  </th>';
			echo "</tr>";
					
			while($row = mysqli_fetch_array($result))
				{
				echo "<tr>";
				echo '<td>' . $row['artID'] . '</td>';
				echo '<td>' . $row['artName'] . '</td>';
									
				$row_id = $row['artID'];
				$r_rowid = mysqli_query($conn, "SELECT * FROM cd WHERE artID = '$row_id'");
				$id = 0;
									
				while($id_data=mysqli_fetch_assoc($r_rowid))
				{
					$id++;
				}
				echo '<td><a href="">'. $id .'</a></td>';
				echo '<td><a href= "artist.php?id=' . $row['artID'] . '">Edit</a></td>';
				echo "</tr>";
				}
				echo "</table>";
				mysqli_free_result($result);
					}
				}
			}
		else
			{
			$r_query = mysqli_query($conn,"SELECT * FROM artist WHERE artName LIKE '%".$term."%' "); 
				
			if(mysqli_num_rows($r_query) > 0)
			{
				echo '<table width="1500 border="0" cellpadding="18" cellspacing="0" align="left" >';
				echo "<tr>";
				echo '<th>artID</th>';
				echo '<th>artName</th>';
				echo '<th>  </th>';
				echo "</tr>";
					
				while ($row = mysqli_fetch_array($r_query))
					{  
					echo "<tr>";
					echo '<td>' . $row['artID'] . '</td>';
					echo '<td>' . $row['artName'] . '</td>';
					echo '<td><a href= "artist.php?id=' . $row['artID'] . '">Edit</a></td>';
					echo "</tr>";    
					}  
					echo "</table>";
				}
			}
			
			
	
	
	?>
	
	
	
	</body>
	</html>