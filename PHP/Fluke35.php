
<?php include("header01.php"); ?>
<?php
for($i=1;$i<=5;$i++)
{
	echo($i);
	echo("*");
	echo(($i*2)-1);
	echo("*");
	echo($i*2);
	echo "<br>";
}
?>
<?php include("footer.php"); ?>
