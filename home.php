<DOCTYPE html>
	<html>
	
	
	
	<head>
	
	 <script type = "text/javascript">
          function displayNextImage() {
              x = (x === images.length - 1) ? 0 : x + 1;
              document.getElementById("img").src = images[x];
          }

          function displayPreviousImage() {
              x = (x <= 0) ? images.length - 1 : x - 1;
              document.getElementById("img").src = images[x];
          }

          function startTimer() {
              setInterval(displayNextImage, 3000);
          }

          var images = [], x = -1;
          images[0] = "deadmau5.jpg";
          images[1] = "Muse.jpg";
          images[2] = "king.jpg";
		  images[	3] = "muse2.jpg";
      </script>
	
	
	
	
	
	<h1> WELCOME </h1>
	<style>
	h1 {color : white ;}
	h1 {text-align: center;}
	h1 {font-family:'anjasmoro', sans-serif;
    font-size: 26px;
    font-weight:normal;
    text-align: center;
    line-height: 100%;
    border-bottom: 1px solid #484848;
    padding-bottom: 5px;
    margin-bottom:7px;}
	
	p {font-family:'anjasmoro', sans-serif;
    font-size: 26px;
    font-weight:normal;
    text-align: left;
    line-height: 100%;
    border-bottom: 1px solid #484848;
    padding-bottom: 5px;
    margin-bottom:7px;}}
	
	p  {color : white;}
	p  {text-align: center;}
	
	ul {
		font-family:'anjasmoro', sans-serif;
    list-style-type: none;
    margin: 0px;
	margin-top:15;
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
    background-color: #FF8000;
}
	
	</style>
	
	<style>
	
	}
	
	h1 {font-family:'anjasmoro', sans-serif;
    font-size: 26px;
    font-weight:normal;
    text-align: left;
    line-height: 100%;
    border-bottom: 1px solid #484848;
    padding-bottom: 5px;
    margin-bottom:7px;}
	
	p {
	font-family:'anjasmoro', sans-serif;
    font-size: 26px;
    font-weight:normal;
    text-align: left;
    line-height: 100%;
    border-bottom: 1px solid #484848;
    padding-bottom: 5px;
    margin-bottom:7px;}
		
	}
	
	
	
	</style>
	
	
	</head>
	
	
	
	<body>
	
	
	<body onload = "startTimer()">
    <div><img id="img" src="deadmau5.jpg" align="right" height="480" width="640"  />
    </div>   
	
	<audio controls align="left">
	<source src="Gorillaz - Plastic Beach.mp3" type="audio/mpeg" align="left">
	Your browser does not support the audio element.
	</audio>

	
	
	
	<body background="theme5.jpg">
	<ul>
  	<li><a href="http://localhost/dbi2.php">Album Details</a></li>
	<li><a href="http://localhost/artist.php">Artist Details</a></li>
	<li><a href="http://localhost/tracks.php">Track Details</a></li>
	</ul>

	</body>
	
	
	
	
	

	
	</html>