Guess 16 bit signed number
<?php

$x = rand(-32768, 32767);

$y = 0;

do
{
	$y++;
	$z = readline();
	$w = $z > $x ? "TOO HIGH" : "TOO LOW";
	if($x == $z) $w = "\033[31mCongrats! You found the number in $y turns!";
	echo("$w\n");
} while($x != $z)

?>