<?php

/* Define the pattern argument */
$pattern = '()';

/* DO NOT CHANGE */
$result = preg_match_all(
  $pattern, "ab.cd.ef.gh\na\n.b\n.d\n.e\n\nabcdefghiklm", $matches
);
if ($result && \count($matches[0]) === 1) {
  echo 'SUCCESS';
} else {
  echo 'FAIL';
}
