<?php

/*
Validate strings that consist of the any count of same digit (11, 444, ...)
*/
$pattern = '()';

/* DO NOT CHANGE */
$subjects = [
  '7' => TRUE, '11' => TRUE, '444' => TRUE, '8888' => TRUE,
  '12' => FALSE, '456' => FALSE, 'ugh' => FALSE
];
foreach ($subjects as $subject => $shouldMatch) {
  if ($shouldMatch === (bool)\preg_match($pattern, $subject)) {
    echo "SUCCESS\n";
  } else {
    echo "FAIL\n";
  }
}
