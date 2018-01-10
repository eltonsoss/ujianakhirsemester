<?php

/*
printf
sprintf
sscanf
*/

//$posted = sprintf(This Posted was made on %s,%s,%d, 'june', '7th',2012');

//echo $posted;

//list($month, $day, $year) = sscanf("june 7th, 2012", "$s %[^,], %d");
sscanf("june 7th, 2012", "%s %[^,], %d", $month, $day, $year);

echo $year;

?>