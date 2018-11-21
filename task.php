<?php

/* Match all Cyrillic letters */
$pattern = '()u';

$result = \preg_match_all(
  $pattern, 'English, Русский, 中文', $matches
);
if ($result && \count($matches[0]) === 7) {
  echo 'SUCCESS';
} else {
  echo 'FAIL';
}
