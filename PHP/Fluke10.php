<?php include("header01.php"); ?>
<?php
/¿ÅØê¤ ÃËÑÊ¹È. 6008111004/
for($i=1;$i<=5;$i++) {
	for($k=1;$k<=5-$i;$k++) {
	echo ("&nbsp;");
	}
	for($k=1;$k<=$i;$k++){
		echo ($k);
	}
	for($k=$i;$k<=$i;$k++){
		echo (6-$i);
	}
	for($k=$i;$k>=1;$k--){
		echo ($k);
	}
	echo "<br>";
}

?>
<?php include("footer.php"); ?>