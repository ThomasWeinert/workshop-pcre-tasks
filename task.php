<?php

/*
Validate that the subject start with a digit.
*/
$pattern = '()';

/* DO NOT CHANGE */
$subjects = [
  '1. match' => TRUE, '2. match' => TRUE, '42' => TRUE,
  'not a match' => FALSE, "in 345 between" => FALSE,  "at the end 2" => FALSE
];
foreach ($subjects as $subject => $shouldMatch) {
  if ($shouldMatch == preg_match($pattern, $subject)) {
    echo "SUCCESS\n";
  } else {
    echo "FAIL\n";
  }
}