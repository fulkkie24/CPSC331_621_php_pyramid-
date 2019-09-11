<?php include("header01.php"); ?>
<?php
for($i=1;$i<=5;$i++)
{
	echo ($i);
	for($j=1;$j<=(($i*2)-1);$j++)
	{
	echo ("*");
	}
	for($j=1;$j<=(6-$i);$j++)
	{
	echo ($i + "&nbsp;" + $i);
	}
    echo "<br>";
}
?>
<?php include("footer.php"); ?>