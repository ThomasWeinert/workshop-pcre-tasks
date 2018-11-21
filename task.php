<?php

/*
Define the pattern argument to match xxXxxXxxxx,
x representing a digit, X a non-digit.
*/
$pattern = '()';

/* DO NOT CHANGE */
$result = \preg_match_all(
  $pattern, "12.34.5678\n123456789\nab.cd.efgh", $matches
);
if ($result && \count($matches[0]) === 1) {
  echo 'SUCCESS';
} else {
  echo 'FAIL';
}
