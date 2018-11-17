<?php

/* Define the pattern argument */
$pattern = '()';

/* DO NOT CHANGE */
$result = preg_match_all(
  $pattern, 'code CODE Code', $matches
);
if ($result && \count($matches[0]) === 3) {
  echo 'SUCCESS';
} else {
  echo 'FAIL';
}
