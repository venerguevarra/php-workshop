<html>
<body>
<?php
echo "Numbers from 1 to 20 are: <br>";
/*in for loop, initialization usually declares
a loop variable, condition is a Boolean
expression such that if the condition is true,
loop body will be executed and after each
iteration of loop body, expression is executed
which usually increase or decrease loop
variable*/
for ($x=0; $x<=20; $x++) {
	echo "$x ";
}

/* Multiple variables can be declared in
declaration block of for loop */
for ($x=0,$y=1,$z=2;$x<=3;$x++) {
	echo "x = $x, y = $y, z = $z <br>";
} 
?>
</body>
</html>