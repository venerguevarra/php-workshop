<html>
<body>
 <?php
	$x=24; // global scope
	// Function definition
	function myFunction() {
		$y=59; // local scope
		echo "Variable x is: $x <br>";
		echo "Variable y is: $y";
	}
	myFunction();// Function call
	echo "Variable x is: $x";
	echo "<br>";
	echo "Variable y is: $y";
 ?>
</body>
</html>