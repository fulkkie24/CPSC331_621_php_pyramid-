<?php include("header01.php"); ?>
<?php
for($i=1;$i<=5;$i++)
{
	echo ($i);
	for($j=1;$j<=(7-$i);$j++)
	{
	echo ("*");
	}
	for($j=2;$j<=($i);$j++)
	{
	echo ("&nbsp;");
	}
	echo ($i);
	echo "<br>";
}
?>
<?php include("footer.php"); ?>