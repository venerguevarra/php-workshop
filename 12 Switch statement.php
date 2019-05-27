<html>
<body>
<?php
	$x=3;
	/* Expression value is compared with each case
	value. If it matches, statements following
	case would be executed. Break statement is
	used to terminate the execution of
	statement.*/
	switch ($x)
	{
		case 1:
			echo "Number 1";
			break;
		case 2:
			echo "Number 2";
			break;
		case 3:
			echo "Number 3";
			break;
		default:
			echo "No number between 1 and 3";
	}
?>
</body>
</html>