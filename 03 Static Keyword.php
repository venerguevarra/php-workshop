<html>
<body>
<?php
	 // Function definition
	function myFunction() {
	 	static $x=45;
	 	echo $x;
	 	echo "<br/>";
	 	$x++;
	}
	
	// Function call
	myFunction();
	myFunction();
	myFunction();
	myFunction();
	myFunction();
?>
<body>
<html>