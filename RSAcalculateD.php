<?php
/*
*
* Written by Muhammad Aliff Muazzam (Tester2009)
* https://www.facebook.com/Tester2009
* https://github.com/alepcat1710
* Date: October 21, 2015
* Feel free to use . Do not change copyright, mastah !
*
* RSAcalculateD.php are simple calculation to calculate d value in simple RSA encryption. D value is needed to provide private key. 
* With RSAcalculateD, you can simply find d value without guessing in no time. Just key in the range, e value and t value.
* 
* Equation:
*	d = (d * e) % t = 1
*
* HOWTO:
*	php RSAcalculateD.php range e_value t_value
*
* Example:
*	$ php RSAcalculateD.php 20 7 20
*	$ FOUND. ->	3
*/

/*
The MIT License (MIT)
Copyright (c) [2015] [Muhammad Aliff Muazzam]
Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:
The above copyright notice and this permission notice shall be included in all
copies or substantial portions of the Software.
THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
SOFTWARE.
*/

if (!isset ($argv[1]))
{
//	die("{$argv[0]} d_value e_value t_value");

	die("
            \r  This is how it works:
            \r  php \"{$argv[0]}\" range e_value t_value
            \r\n  Example: php \"{$argv[0]}\" 200 7 20
");
}

for ($i=1; $i<=$argv[1]; $i++) {
$calc = ($i*$argv[2])%$argv[3];
if ($calc==1) {
        echo "          FOUND !\n";
        echo "          ".$i."\n";
}
}
