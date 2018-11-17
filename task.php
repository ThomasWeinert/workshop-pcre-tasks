<?php

/*
Validate that the string is an IpV4.
*/
$pattern = '()';

/* DO NOT CHANGE */
$subjects = [
  '127.0.0.1' => TRUE, '0.0.0.0' => TRUE,
  '255.255.255.0' => TRUE, '1.1.1.256' => FALSE,
  '1.1.1.a' => FALSE, '-1.1.1.1' => FALSE
];
foreach ($subjects as $subject => $shouldMatch) {
  if ($shouldMatch === (bool)\preg_match($pattern, $subject)) {
    echo "SUCCESS\n";
  } else {
    echo "FAIL\n";
  }
}
