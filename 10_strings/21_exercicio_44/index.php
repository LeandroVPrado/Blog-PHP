<?php 

/**
 * Exercício 44
 * Converta o seguinte array para string:
 * ["O","PHP","é","muito","legal"]
 */

 $arr = ["O","PHP","é","muito","legal"];

 $str = implode(" ", $arr);
 echo "$str <br>";