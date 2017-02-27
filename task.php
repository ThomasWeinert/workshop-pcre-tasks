<?php

/*
Validate strings that start with a title ('Mr.', 'Ms.', 'Mrs.'),
followed by a space and a string that contains at least one letter.
*/
$pattern = '()';

/* DO NOT CHANGE */
$subjects = [
  'Mr. Doe' => TRUE, 'Mrs. Jane Doe' => TRUE, 'Ms. Marple' => TRUE,
  'Mr. ' => FALSE, "Mrs. 1" => FALSE, "1. Mr. Doe" => FALSE
];
foreach ($subjects as $subject => $shouldMatch) {
  if ($shouldMatch == preg_match($pattern, $subject)) {
    echo "SUCCESS\n";
  } else {
    echo "FAIL\n";
  }
}