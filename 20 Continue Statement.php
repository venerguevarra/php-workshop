<html>
<body>
<?php
/* when $i value becomes 3, it will skip the
particular of the loop*/
for($i=0;$i<=5;$i++) {
	if($i==3) {
		continue;
	}
	else {
		echo "$i ";
	}
}
?>
</body>
</html>