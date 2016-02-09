<!DOCTYPE HTML>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>Project1</title>

  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<body>
<?php
$a=0;
$video_dir = "Content/";
$thbdir="Content/thumbs/";
$vids = glob($video_dir."*.*");
foreach($vids as $vid)
{	
	if($a%4==0)
		echo '<div class="row">';
	echo $vid;	
	echo '<div class="responsive-img col l3">';
	$tmb=$thbdir.substr(basename($vid),0,-4).".jpg";
	echo '<a href="'.basename($vid).'"><img class="abcd" src="'.$tmb.'"></img></a>';

	echo '</div>';
	if($a%4==3)
		echo '</div>';
	$a=$a+1;
}
?>

	<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
	<script src="js/materialize.js"></script>
	<script src="js/init.js"></script>
</body>
</html>