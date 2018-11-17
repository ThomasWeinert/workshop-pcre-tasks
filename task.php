<?php

/*
Validate that the subject a hexadecimal byte.
It should be two characters. Digits and letters
between a and f are allowed. The letters can be uppercase.
*/
$pattern = '()';

$subjects = [
  '01' => TRUE, '0f' => TRUE, 'FA' => TRUE,
  'az' => FALSE, 'foo' => FALSE, '123' => FALSE
];
foreach ($subjects as $subject => $shouldMatch) {
  if ($shouldMatch === (bool)\preg_match($pattern, $subject)) {
    echo "SUCCESS\n";
  } else {
    echo "FAIL\n";
  }
}
