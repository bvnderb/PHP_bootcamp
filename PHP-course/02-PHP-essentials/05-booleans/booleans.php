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
       
var_dump(true);
var_dump(false);

$value = true;
var_dump($value);

echo "----\n";

$meaning = 42;
var_dump($meaning > 13);
// var_dump(42 > 13);
// var_dump((40 + 2) > 13);
var_dump($meaning < 13);
var_dump($meaning >= 13);
var_dump($meaning <= 13);

var_dump(13 <= 13);
var_dump(13 < 13);

echo "----\n";

$name = 'Jannis';
var_dump($name === 'Jannis');
var_dump($name !== 'Jannis');

$age = 30;
var_dump($age === 30);
var_dump($age === '30');

var_dump($age == '30');
var_dump($age != '30');

echo "----\n";

$unitsSold = 10;
$maxLimit = "5";

echo $unitsSold + $maxLimit; // 15
echo "----\n";
echo $unitsSold * $maxLimit; // 50
echo "----\n";
echo $unitsSold > $maxLimit; // 1
echo "----\n";
echo $unitsSold . $maxLimit; // 105

echo "----\n";

$amount = -10;

$conversionRate = 0.3;

var_dump(($amount * $conversionRate) === -3);

echo "----\n";

$name = 'Chris';
var_dump($name);

echo "----\n";

$age = 23;
var_dump($age);

echo "----\n";

$flag = false;
var_dump($flag != true);

echo "----\n";

$enteredPIN = 4567;
$storedPIN = '4567';

echo "----\n";

var_dump($enteredPIN != $storedPIN);
var_dump($enteredPIN !== $storedPIN);

var_dump($enteredPIN != $storedPIN);
var_dump($enteredPIN !== $storedPIN);



    ?></pre>
</body>
</html>