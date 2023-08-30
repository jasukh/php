<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> EXERCISE 6 </h1>
    <?php
 
    function convertToQuestion(&$str)
     {
        $str = "Do you think " . $str . "?\n";
      }
      
      $str_one = "no";
      $str_two = "maybe";
      $str_three = "yes";
      
      convertToQuestion($str_one);
      convertToQuestion($str_two);
      convertToQuestion($str_three);
    echo"<br>";
      echo $str_one . "\n";
      echo"<br>";
      echo $str_two . "\n";
      echo "<br>";
      echo $str_three . "\n";
      ?>
</body>
</html>