<?php include("header01.php"); ?>
<?php
for($i=1;$i<=5;$i++) {
	for($k=5;$k>=$i;$k--) {
		echo ($k);
	}
	
	for($k=1;$k<=$i;$k++) {
		echo ("*");
	}
	
	for($k=2;$k<=$i;$k++) {
		echo ("*");
	}
	for($k=$i;$k<=5;$k++) {
		echo ($k);
	}
	echo "<br>";
}
?>
<?php include("footer.php"); ?>