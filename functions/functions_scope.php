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
    
    $bar = "outside";   // global scope
    
    function foo() {
      global $bar;
      if (isset($bar)) {
        echo "foo: " . $bar . "<br />";
      }
      $bar = "inside";  // local scope
    }
  
    echo "1: " . $bar . "<br />";
    foo();
    echo "2: " . $bar . "<br />";
    
  
  ?>
</body>
</html>