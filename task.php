<?php

/*
Validate that the subject ends with a digit.
*/
$pattern = '()';

/* DO NOT CHANGE */
$subjects = [
  'match 1' => TRUE, 'match 2' => TRUE, '42' => TRUE, "21\n" => TRUE,
  'no match' => FALSE, 'a 345 b' => FALSE, '3 start' => FALSE
];
foreach ($subjects as $subject => $shouldMatch) {
  if ($shouldMatch === (bool)\preg_match($pattern, $subject)) {
    echo "SUCCESS\n";
  } else {
    echo "FAIL\n";
  }
}
