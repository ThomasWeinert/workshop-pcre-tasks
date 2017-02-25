<?php

/* Define the pattern argument */
$pattern = '()';

/* DO NOT CHANGE */
$result = preg_match_all(
  $pattern, 'code CODE code', $matches
);
if ($result && count($matches[0]) == 3) {
  echo 'SUCCESS';
} else {
  echo 'FAIL';
}