<?php

function get_latex_url($latex) {
  $base_url = 'http://latex.codecogs.com/gif.latex?';
  return $base_url . rawurlencode($latex);
}

function get_latex_hash($latex) {
  return md5(file_get_contents(get_latex_url($latex)));
}

function check_latex($true_hash, $latex) {
  $test_hash = get_latex_hash($latex);
  return $true_hash == $test_hash;
}

$sample_latex = '2 \equiv \sum_{i=0}^{\infty} \frac{1}{2^i}';
$sample_md5 = get_latex_hash($sample_latex);

$test_latex = '2\equiv\sum_{i = 0}^{{}\infty}\frac{1}{2^i}{}';
$test_md5 = get_latex_hash($test_latex);

header('Content-type: text/javascript');
echo $sample_md5 . "\n\n" . $test_md5 . "\n\n";
echo check_latex($sample_md5, $test_latex) ? "True" : "False";
?>
