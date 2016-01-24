<!DOCTYPE HTML>
<html>
<title>DEMO</title>
<body>
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  Name: <input type="text" name="fname">
  Class: <input type="number" name="sclass">
  <input type="submit">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // collect value of input field
    $name = $_REQUEST['fname'];
	$ncls= $_REQUEST['sclass'];
    if (empty($name)) {
        echo "Name is empty";
    } else {
        echo $name;
    }
	echo $ncls;
}
?>
</body>
</html>