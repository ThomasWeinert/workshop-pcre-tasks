<?php

/* Define the pattern argument */
$pattern = '';

/* DO NOT CHANGE */
$result = preg_match_all($pattern, 'https://nevercodealone.de', $matches);
if ($result && count($matches[0]) == 1) {
  echo 'SUCCESS';
} else {
  echo 'FAIL';
}