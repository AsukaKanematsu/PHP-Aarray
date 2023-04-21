<?php 
$countries = [
    "ブラジル" => 100,
    "日本" => 150,
    "スペイン" => 50000
];

foreach ($countries as $name => $people) {
  echo $name . ":" . $people . "人";
  echo "\n";
}