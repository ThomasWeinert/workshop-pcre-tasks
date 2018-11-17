<?php

/*
Validate that the input is an ISO639-1 or ISO639-2 language code.
The are strings 2 or 3 letters.
*/
$pattern = '()';

$subjects = [
  'en' => TRUE, 'de' => TRUE,
  'eng' => TRUE, 'deu' => TRUE,
  '123' => FALSE, 'en-US' => FALSE
];
foreach ($subjects as $subject => $shouldMatch) {
  if ($shouldMatch === (bool)\preg_match($pattern, $subject)) {
    echo "SUCCESS\n";
  } else {
    echo "FAIL\n";
  }
}
