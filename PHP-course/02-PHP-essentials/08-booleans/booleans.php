<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./simple.css" />
    <title>Document</title>
</head>
<body>
    <pre><?php

var_dump(!true);
var_dump(!false);

$number = 5;
var_dump($number !== 5);
var_dump(!($number === 5));

echo "-----\n";
var_dump(true && true);
var_dump(false && true);
var_dump(true && false);
var_dump(false && false);
/*
$views = 50000;
if ($views >= 10000 && $views <= 100000) {
    echo 'This is a medium performing video'; 
}
*/
echo "-----\n";
var_dump(true || true);
var_dump(false || true);
var_dump(true || false);
var_dump(false || false);

echo "-----\n";
var_dump(true xor true);
var_dump(false xor true);
var_dump(true xor false);
var_dump(false xor false);

echo "-----\n";

$isPlayerAlive = true;
$isBossDefeated = false;
$hasExtraLife = true;

echo "Expression 1: " . (((!$isPlayerAlive) && ($isBossDefeated XOR $hasExtraLife)) ? "true" : "false") . "\n";
echo "Expression 2: " . (($isPlayerAlive && (!$isBossDefeated XOR !$hasExtraLife)) ? "true" : "false") . "\n";
echo "Expression 3: " . (($isPlayerAlive XOR ($isBossDefeated && $hasExtraLife)) ? "true" : "false") . "\n";
echo "Expression 4: " . (((!$isPlayerAlive) && $isBossDefeated) || $hasExtraLife ? "true" : "false") . "\n";

?></pre>




</body>
</html>


