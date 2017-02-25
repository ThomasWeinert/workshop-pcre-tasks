<?php

/*
Validate that the subject start with a digit.
*/
$pattern = '()';

/* DO NOT CHANGE */
$subjects = [
  '1. match' => TRUE, '2. match' => TRUE, '42' => TRUE,
  'not a match' => FALSE, "a 345 b" => FALSE,  "end 3" => FALSE
];
foreach ($subjects as $subject => $shouldMatch) {
  if ($shouldMatch == preg_match($pattern, $subject)) {
    echo "SUCCESS\n";
  } else {
    echo "FAIL\n";
  }
}