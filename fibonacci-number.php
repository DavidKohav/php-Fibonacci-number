<?php
/**
 * Created by PhpStorm.
 * User: david
 * Date: 05/09/16
 * Time: 14:09
 */
$result = array(1,1);
echo  $result[0] . "<br />" .$result[1];

for($x=1 ; $x<10 ; $x++) {
  $febo_num = $result[$x-1] + $result[$x];
  array_push($result, $sum);

  echo "<br />";
  print_r(end($result));
}


