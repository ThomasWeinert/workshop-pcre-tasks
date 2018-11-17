<?php

/*
Validate that the subject is a German zip code.
German zip codes consist of 5 digits.
*/
$pattern = '()';

$subjects = [
  '01234' => TRUE, '50670' => TRUE, '40213' => TRUE,
  'abcdef' => FALSE, "50670\n" => FALSE, '123456' => FALSE
];
foreach ($subjects as $subject => $shouldMatch) {
  if ($shouldMatch === (bool)preg_match($pattern, $subject)) {
    echo "SUCCESS\n";
  } else {
    echo "FAIL\n";
  }
}
