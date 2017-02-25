<?php

/*
Validate that the input is an integer.
The leading sign is optional.
*/
$pattern = '()';

$subjects = [
  '1' => TRUE, '123' => TRUE,
  '+123' => TRUE, '-456' => TRUE,
  '1.1' => FALSE, "abc" => FALSE, "123 456" => FALSE
];
foreach ($subjects as $subject => $shouldMatch) {
  if ($shouldMatch == preg_match($pattern, $subject)) {
    echo "SUCCESS\n";
  } else {
    echo "FAIL\n";
  }
}