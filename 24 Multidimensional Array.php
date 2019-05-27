<html>
<body>
 <?php
 /* Here $flower_shop is an array, where rose, daisy and orchid
 are the ID key which indicates rows and points to array which
 have column values. */
 $flower_shop = array(
	 "rose" => array( "5.00", "7 items", "red" ),
	 "daisy" => array( "4.00", "3 items", "blue" ),
	 "orchid" => array( "2.00", "1 item", "white" )
 );
 
 /* in the array $flower_shop['rose'][0], ‘rose’ indicates row
 and ‘0’ indicates column */
 echo "rose costs ".$flower_shop['rose'][0].", and you get ".$flower_shop['rose'][1].".<br>";
 echo "daisy costs ".$flower_shop['daisy'][0].", and you get ".$flower_shop['daisy'][1].".<br>";
 echo "orchid costs ".$flower_shop['orchid'][0].", and you get ".$flower_shop['orchid'][1].".<br>";
 ?>
</body>
</html>