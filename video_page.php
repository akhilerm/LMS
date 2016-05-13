<!DOCTYPE HTML>
<html>
<head>
<title>Video</title>
</head>
<body>
	<video width="320" height="240" controls>
	<?php
	echo '<source src="'.$_GET["var"].'" type="video/mp4">';
	?>
  	Your browser does not support the video tag.
	s</video>
</body>
</html>