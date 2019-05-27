<html>
 <body>
<?php
 $a = 20;
 $b = 40;
 
 function addition() {
 	$GLOBALS['c'] = $GLOBALS['a'] + $GLOBALS['b'];
 }
 
 addition();
 echo $c;
?>
</body>
</html>