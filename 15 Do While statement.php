<html>
<body>
<?php
$i=1;
/* here <condition> is a Boolean expression. Please
note that the condition is evaluated after executing
the loop body. So loop will be executed at least
once even if the condition is false*/
do
{
	echo "i is = $i <br>";
	$i++;
} while($i<5);
?>
</body>
</html>