<?php include("header01.php"); ?>
<?php
for($row=1;$row<=5;$row++) {
	echo ("*");
	for($col=1;$col<=5-$row;$col++) {
		echo ("*");	
	}
	
	for($col=1;$col<=$row;$col++){
		echo (6-$row);
	}
	for($col=2;$col<=$row;$col++){
		echo (6-$row);
	}
	for($col=0;$col<=5-$row;$col++) {
		echo ("*");	
	}

	echo "<br>";
}
?>
<?php include("footer.php"); ?>