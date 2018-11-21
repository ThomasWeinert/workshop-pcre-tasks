<?php

/* Match all vowels (aeiou). */
$pattern = '()';

/* DO NOT CHANGE */
$result = \preg_match_all($pattern, 'https://nevercodealone.de', $matches);
if ($result && \count($matches[0]) === 8) {
  echo 'SUCCESS';
} else {
  echo 'FAIL';
}
