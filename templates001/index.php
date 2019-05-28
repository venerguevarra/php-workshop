<?php
	//include('ninjas.php');
	//require('ninjas.php');

    //require
    //when the file is required by your application, e.g. an important message template or a file containing configuration variables without which the app would break.

    //require_once
    //when the file contains content that would produce an error on subsequent inclusion, e.g. function important() { /* important code */} is definitely needed in your application but since functions cannot be redeclared should not be included again.

    //include when the file is not required and application flow should continue when not found, e.g.
    //great for templates referencing variables from the current scope or something

    //include_once
    //optional dependencies that would produce errors on subsequent loading or maybe remote file inclusion that you do not want to happen twice due to the HTTP overhead
?>

<!DOCTYPE html>
<html>
<head>
	<title>PHP Include Require Demo</title>
</head>
<body>

	<?php include('content.php'); ?>
	<?php include('content.php'); ?>
    <?php require_once('ninjas.php'); ?>
    <?php require_once('ninjas.php'); ?>
</body>
</html>