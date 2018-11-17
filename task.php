<?php
/*
Match a date in the format "YYYY-MM-DD" and Capture  the
parts into named groups (year, month, day).
*/
$pattern = '()';

/* DO NOT CHANGE */
if (
  preg_match($pattern, '2017-02-27', $match) &&
  isset($match['year'], $match['month'], $match['day']) &&
  $match['year'] === '2017' &&
  $match['month'] === '02' &&
  $match['day'] === '27'
) {
  echo "SUCCESS\n";
} else {
  echo "FAIL\n";
}
