<?php
 
 echo '<a href="index.php">Index</a>'. ' ';
 echo '<a href="cats.php">Cat</a>'. ' ';
 echo '<a href="variable_types.php">Variables</a>'. ' ';
 echo '<a href="conditions.php">Conditions</a>'. ' ';
 echo '<a href="football.php">6 Football</a>'. ' ';
 echo '<a href="school.php">7 School</a>'. ' ';
 echo '<a href="switch-structure.php">8 Switch</a>'. ' ';
 echo '<a href="ternary.php">10 Ternary</a>'. ' ';
 echo '<a href="unicorn.php">10.2 Unicorn</a>'. ' ';
 echo '<a href="array.php">Array</a>'. ' ';
 echo '<a href="phploops.php">Loops</a>'. ' ';
 echo '<a href="functions.php">Functions</a><br><br>'. ' ';

$firstName = "Gianluca"; 
$age = 35;
$eyes = "brown";
$family = array("Edoardo", "Emanuela", "Gianluca");
$hungry = false;
$yes = "YES";
$no = "NO";
if ($hungry) {
    $hungry = $yes;
}

else  {
    $hungry = $no;
};


  

?>


<!DOCTYPE html>
<html>
  <head>
    <title>HTML-PHP Short Tag Demo</title>
  </head>
  <body>
    <p>Hi! My name is <?=$firstName?>.</p>
    <p>I am <?=$age?> years old.</p>
    <p>My eyes are <?=$eyes?>.</p>
    <p>The first person in my family is <?=$family[0]?> .</p>
    <p>Are you hungry? <?=$hungry?> .</p>
  </body>
</html>