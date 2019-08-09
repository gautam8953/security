<?php 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include 'security.php';
include 'helper.php';

$security = new CI_Security();

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form target="_blank" action="test.php"
      method="post" id="mc-embedded-subscribe-form"
      name="mc-embedded-subscribe-form" class="validate"
>
<input type="text" name="dd" value="d">
<input type="submit" name="exve" value="xcc">
</form>
</body>
</html>