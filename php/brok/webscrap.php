<?php

$html = file_get_contents('https://br.investing.com/webmaster-tools/rss', true);


// preg_match_all("|<[^>]+>(.*)</[^>]+>|U", $html, $out, PREG_PATTERN_ORDER);

// echo $out[0][0] . ", " . $out[0][1] . "\n";
// echo $out[1][0] . ", " . $out[1][1] . "\n";

// $title_out = $out;

// print_r($out);
var_dump($html);
