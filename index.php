<!DOCTYPE HTML>
<html>
<head>
	<title>Local Media Server</title>
</head>
<body>
<?php
	$video_dir = "Content/";
	$thbdir="Content/thumbs/";
	$vids = glob($video_dir."*.*");
	foreach($vids as $vid){	
		$tmb=$thbdir.substr(basename($vid),0,-4).".jpg";
		//echo '<a href="'.$vid.'"><img class="abcd" src="'.$tmb.'"></img></a>';
		echo '<a href="video_page.php?var='.$vid.'"><img src="'.$tmb.'"> </img></a>';
	}
?>
</body>
</html>