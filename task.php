<?php

/*
Validate contains 3 or more consecutive "ugh"s.
*/
$pattern = '()';

/* DO NOT CHANGE */
$subjects = [
  'ughughugh' => TRUE, 'ughughughugh' => TRUE,
  'ughugahugh' => FALSE, "ughughugah" => FALSE,
  "ughughughugah" => TRUE
];
foreach ($subjects as $subject => $shouldMatch) {
  if ($shouldMatch === (bool)preg_match($pattern, $subject)) {
    echo "SUCCESS\n";
  } else {
    echo "FAIL\n";
  }
}
