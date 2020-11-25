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
?>




<?php
// Using foreach, build a loop that displays each element of the array
// Then, modify your loop so as to conjugate the verb "to code" in the present tense. Use a <br> to go to the next line. The result should be :
// I code
// You code
// He/She codes
// We code
// You code
// They code
// $pronouns = array ('I', 'You', 'He/She','We', 'You', 'They');
$code = "code";
$codes = "codes";
$pronomi = array ('I', 'You', 'He/She','We', 'You', 'They');
foreach ($pronomi as $pronome ){
  if ($pronome == 'He/She'){
    echo "<br/> $pronome $codes";
  }else{
    echo "<br/> $pronome $code ";
}}
?>

<?php

echo "<h3>Write a script that prints the numbers from 1 to 120 using  while</h3>";
//Exercises
// Write a script that prints the numbers from 1 to 120 using  while
$amount_of_lines = 1;

while ($amount_of_lines <= 119)
{
    $amount_of_lines = $amount_of_lines +1;   
}
echo "<br/>$amount_of_lines";
// Write a script that prints the numbers from 1 to 120 using  for
// Create an array containing the firstname of everyone in your startup.
//  Display each firstname using a loop.
// Create an array containing at least 10 countries. Then, generate the html that will render 
// a select box inside an html form (see mockup below). Of course, a loop will be useful...
?>

<?php

echo "<h3>Write a script that prints the numbers from 1 to 120 using  for</h3>";
//Exercises
for ($amount_of_lines = 1; $amount_of_lines <= 120; $amount_of_lines ++)
{
    echo "<br/>$amount_of_lines";
}

// Create an array containing at least 10 countries. Then, generate the html that will render 
// a select box inside an html form (see mockup below). Of course, a loop will be useful...
echo "<h3>Create an array containing at least 10 countries. Then, generate the html that will render 
// a select box inside an html form (see mockup below). Of course, a loop will be useful...</h3>";
?>

<?php

echo "<h3>Create an array containing the firstname of everyone in your startup. Display each firstname using a loop.</h3>";
//Exercises
$atschool = array('Nicola', 'Ibrahim', 'Bryan', 'Nery', 'Eva', 'Soumaya', 'Abod', 'Celine', 'Djamal', 'Ryad', 'Assad', 'Juliette', 'Alexia');
for ($atschool = 1; $atschool <= 120; $atschool ++)
{
    echo "<br/>$atschool";
}

// Create an array containing at least 10 countries. Then, generate the html that will render 
// a select box inside an html form (see mockup below). Of course, a loop will be useful...
echo "<h3>Create an array containing at least 10 countries. Then, generate the html that will render 
// a select box inside an html form (see mockup below). Of course, a loop will be useful...</h3>";
?>

 

    
<select name="country">
<option value="">Select your country:</option>
<?php
$countries = array
(
    'AF' => 'Afghanistan',
    'AL' => 'Albania',
    'DZ' => 'Algeria',
    'AS' => 'American Samoa',
    'AD' => 'Andorra',
    'AO' => 'Angola',
    'AI' => 'Anguilla',
    'AQ' => 'Antarctica',
    'AG' => 'Antigua And Barbuda',
    'AR' => 'Argentina',
    'AM' => 'Armenia',
); 
foreach($countries as $key => $value):
echo '<br><br\><option value="'.$key.'">'.$value.'</option>'; //close your tags!!
endforeach;
?>
</select>





