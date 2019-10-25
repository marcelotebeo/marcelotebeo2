<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
<?php

function add_subt($val1, $val2) {
  $add = $val1 + $val2;
  $subt = $val1 - $val2;
  return array($add, $subt);
}

$result_array = add_subt(10,5);
echo "Add: " . $result_array[0] . "<br />";
echo "Subt: " . $result_array[1] . "<br />";

list($add_result, $subt_result) = add_subt(20,7);
echo "Add: " . $add_result . "<br />";
echo "Subt: " . $subt_result . "<br />";


function trans($prodname,$price,$quantity,$cash){
$total = $price * $quantity;
$change = $cash - $total;
return array($prodname,$total,$change);
}

$result = trans("tv stand", 2500, 1, 3000);
echo "Product: {$result[0]}" . "<br>";
echo "Total: {$result[1]}" . "<br>";
echo "Change: {$result[2]}";
?>
</body>
</html>