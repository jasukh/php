<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<h1>Exercise1 Jasleen </h1>
    <?php
    function ArrayWithDuplicateNumbers()
     {
    $array = array();
    while (count($array) < 7) 
    {
    $number = rand(1, 9);
  array_push($array, $number);
    }
        $DuplicateNum = rand(0, 6);
        $DuplicateResult = $array[$DuplicateNum];
        array_push($array, $DuplicateResult);
        return $array;
    }
      function findDuplicate($array) {
        $a = count($array);
    for ($x= 0; $x< $a; $x++) {
     for ($y = $x + 1; $y < $a; $y++) {
     if ($array[$x] == $array[$y]) {
              return $array[$x];
     }
     }
     }
  return -1;
    }

    $array = ArrayWithDuplicateNumbers();
    echo "The array containing duplicated numbers " . join(", ", $array) ;
    echo "<br>";
    $duplicatedValue = findDuplicate($array);
    echo "The duplicate number in the array is " . $duplicatedValue;
    echo "<br>";
?>
<h1> Exercise2 Jasleen </h1>
<?php

 for ($x=5; $x <= 100; $x = $x+5) {
 echo $x."&nbsp&nbsp"; 
 }

 ?>   
<h1> Exercise3 Jasleen </h1>
<?php
$seq = array(10,25,30,35,60,65,70,75);
$sum = 0;
foreach ($seq as $x) {
 if ($x % 5 == 0 && $x % 10 == 0) {
 continue; 
  }
$sum += $x;
}
echo "The sum of all the numbers in the sequence that are not divisible by both 5 and 10 is  " . $sum;
?>
<h1> Exercise4 Jasleen </h1>
<?php
$firstName = "Jasleen";
$lastName = "Kaur";
$NumNotIncluded = 10;

for ($x = 1; $x<=4; $x++) {
 
  echo "My name is $firstName $lastName and this program is not considering $NumNotIncluded numbers when calculating the sum.". "<br>" ;
  $NumNotIncluded += 10;

 
}
?>
</body>
</html>