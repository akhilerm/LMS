<!DOCTYPE HTML>
<html>
<title>DEMO</title>
<body>

<?php
$video_dir = "/Content/";
$vids = glob($video_dir."*.*");
foreach($vids as $vid)
{	
	echo "in loop";
	$tmb = $video_dir."thumbs/".substr(basename($vid),0,-4).".jpg";
    echo '<a href="'.basename($vid).'">'.basename($tmb).'></a>';
	//echo '<img src="'.$tmb.'" width="50px" height="50px"/>';
	echo '</br>';
}
?>
</body>
</html>