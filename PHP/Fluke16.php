<?php include("header01.php"); ?>
<?php

/¿ÅØê¤ ÃËÑÊ¹È. 6008111004/

for($i=1;$i<=5;$i++)
{
	for($j=1;$j<=$i;$j++)
	{
	echo (($i+1)-$j);
	}
	for($j=1;$j<=(5-$i);$j++)
	{
	echo ("&nbsp;&nbsp;&nbsp;");
	}
	for($j=1;$j<=$i;$j++)
	{
	echo ("*");
	}
	echo "<br>";
}

?>
<?php include("footer.php"); ?>