<html>
<body>
<?php

function printList($list) {
	foreach($list as $item) {
		printf("%s<br/>, $item");
	}
}

$flowers = array();
$flowers[0] = 'rose';
$flowers[1] = 'daisy';
$flowers[2] = 'orchid';

/* An array $flower_shop is created with three
Values - rose, daisy,orchid */
$flower_shop = array (
	"rose",
	"daisy",
	"orchid"
);

/* Values of array $flower_shop is displayed based
on index. The starting index of an array is Zero */
echo "Flowers: ".$flower_shop[0].",".$flower_shop[1].", ".$flower_shop[2]."";

// Append to an array
$flower_shop[3] = "sunflower";
?>
</body>
</html>