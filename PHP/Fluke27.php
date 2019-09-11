<?php include("header01.php"); ?>
<?php
for($i=1;$i<=5;$i++)
{
	echo ($i);
	for($j=1;$j<=($i);$j++)
	{
	echo ("&nbsp;");
	}
	for($j=1;$j<=($i);$j++)
	{
	echo ("*");
	}
	echo "<br>";
}
?>
<?php include("footer.php"); ?>