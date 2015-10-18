<?php
/*
  October 18, 2015.
  @alepcat1710
  http://aliff.muazzam.my
    Frequency calculator in Hz.
    Formula:
        F= 1/ (2*pi*sqrt (L*C))
*/

$inductor = $argv[1];
$capacitor = $argv[2];
$pi = pi();
$calculate = 1/(2*$pi*sqrt($inductor*$capacitor));
echo $calculate."\n\n";
?>
