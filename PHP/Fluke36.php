<?php include("header01.php"); ?>
<?php
for($i=1;$i<=3;$i++) {
	for($k=1;$k<=4-$i;$k++){
		echo ($i+$k-1);
	}
	for($k=1;$k<=$i;$k++){
		echo ("*");
	}
	for($k=2;$k<=$i;$k++){
		echo ("*");
	}
	for($k=3;$k>=$i;$k--){
		echo ($k);
	}
	echo "<br>";
}
for($i=2;$i>=1;$i--) {
	for($k=1;$k<=4-$i;$k++){
		echo ($i+$k-1);
	}
	for($k=1;$k<=$i;$k++){
		echo ("*");
	}
	for($k=3;$k<=1+$i;$k++){
		echo ("*");
	}
	
	for($k=3;$k>=$i;$k--) {
		echo ($k);
	}

	echo "<br>";
}

?>
<?php include("footer.php"); ?>