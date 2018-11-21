<?php

/* Match any character that is not a vowel (aeoui) */
$pattern = '()';

/* DO NOT CHANGE */
$result = \preg_match_all($pattern, 'https://nevercodealone.de', $matches);
if ($result && \count($matches[0]) === 17) {
  echo 'SUCCESS';
} else {
  echo 'FAIL';
}
