Guess 16 bit signed number
<?php

$x = rand(-32768, 32767);

$y = 0;

do
{
	$y++;
	$z = readline("\n");
	if($x == $z) break;
	echo "\x54\x4f\x4f " . ($z > $x ? "\x48\x49\x47\x48" : "\x4c\x4f\x57");
} while($x != $z)

?>
Congrats! You found the number in <?php echo($y) ?> turns!
