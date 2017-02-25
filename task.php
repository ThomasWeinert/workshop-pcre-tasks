<?php

/*
Validate that the subject is a German zip code.
German zip codes consist of 5 digits.
*/
$pattern = '(^\\d)';

/* DO NOT CHANGE */
$subjects = [
  '1. match' => TRUE, '2. match' => TRUE, '42' => TRUE,
  'not a match' => FALSE, "number at the end 2" => FALSE
];
foreach ($subjects as $subject => $shouldMatch) {
  if ($shouldMatch == preg_match($pattern, $subject)) {
    echo "SUCCESS\n";
  } else {
    echo "FAIL\n";
  }
}