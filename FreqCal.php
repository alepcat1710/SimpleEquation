<?php
/*
  October 18, 2015.
  @alepcat1710
  http://aliff.muazzam.my
    Frequency calculator in Hz.
    Equation:
        F= 1/(2*pi*sqrt (L*C))
        
  HOWTO:
    $ php FreqCal.php inductor capacitor
    
    Example:
      $ php FreqCal.php 14 12
      $ 0.012279070441053 // returned value
*/

$inductor = $argv[1];
$capacitor = $argv[2];
$pi = pi();
$calculate = 1/(2*$pi*sqrt($inductor*$capacitor));
echo $calculate."\n\n";
?>
