	<html>
	<head>
	<title>Rick and Morty</title>
    <link type="text/css" rel="stylesheet" href="rm.css"/>

	</head>
	<body>
	
	<div id="video">
		<?php 
			echo "<iframe width=\"670\" height=\"364\" src=\"\/\/www.youtube.com\/embed\/" . $_POST["id"] ."?autoplay=1\" frameborder=\"0\" allowfullscreen></iframe>";
		?>
		
	</div>
	
	<div id="thereference">
		<p>If you don't understand this, it's <a href="http://www.adultswim.com/videos/rick-and-morty/rixty-minutes/">a reference to Rick and Morty.</a></p>
	</div>
	
	</body>
	</html>