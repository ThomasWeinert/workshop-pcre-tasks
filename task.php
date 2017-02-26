<?php

/* Define the pattern argument */
$pattern = '(\pL)u';

$result = preg_match_all(
  $pattern, 'English, Русский, 中文', $matches
);
if ($result && count($matches[0]) == 16) {
  echo 'SUCCESS';
} else {
  echo 'FAIL';
}