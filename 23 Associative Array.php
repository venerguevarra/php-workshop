<html>
<body>
<?php
/* Here rose, daisy and orchid indicates ID key and
5.00, 4.00, 2.00 indicates their values respectively
*/
$flower_shop = array (
	"rose" => "5.00",
	"daisy" => "4.00",
	"orchid" => "2.00"
);
// Display the array values
echo "rose costs.$flower_shop['rose'].",daisy costs".$flower_shop['daisy'].",and orchild costs ".$flower_shop['orchild'].";

/* for each loop works only on arrays, and is used
 to loop through each key/value pair in an array */
foreach($flower_shop as $x=>$x_value) {
	echo "Flower=" . $x .", Value=" . $x_value;
	echo "<br>";
}
?>
</body>
</html>