<?php include("header01.php"); ?>
<?php
/¿ÅØê¤ ÃËÑÊ¹È. 6008111004/
for($i=7;$i>=1;$i--)
{
	for($j=1;$j<=(7-$i);$j++)
	{
		echo ("&nbsp;&nbsp;");
	}
	for($j=1;$j<=$i;$j++)
	{
	echo ($j % 2);
	}
	for($j=2;$j<=$i;$j++)
	{
	echo ($j % 2);
	}
	echo "<br>";
}

?>
<?php include("footer.php"); ?>