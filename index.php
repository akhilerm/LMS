<!DOCTYPE HTML>
<html>
<title>DEMO</title>
<body>

<?php
$directory = getcwd()."/Content/";
$phpfiles = glob($directory . "*.*");

foreach($phpfiles as $phpfile)
{
    echo '<a href="'.basename($phpfile).'">'.$phpfile.'</a>';
	echo '<br>';
}
?>
</body>
</html>