<?php include("header01.php"); ?>
<?php
for($i=5;$i>=1;$i--)
{
	for($j=1;$j<=$i;$j++)
	{
	echo (6-$i);
	}
	for($j=1;$j<=(5-$i);$j++)
	{
	echo ("&nbsp;&nbsp;");
	}
	for($j=1;$j<=$i;$j++)
	{
	echo ("*");
	}
	echo "<br>";
}
?>
<?php include("footer.php"); ?>