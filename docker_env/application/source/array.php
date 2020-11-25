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

$family = array( 'Gianluca', 'Iris' , 'Laura' ); 
print_r ($family);

$recipes = array('pizza','pasta','brasato');
print_r ($recipes);

$films = array('Armageddon','Star Trek','Die Hard');
print_r ($films);

// Print elements of an array trough the index
print_r($films[0]);

var_dump($family);

echo '<pre>';
print_r($family);
echo '</pre>';

// adding Nonnito an array
array_push($family, 'Nonni');

echo '<pre>';
print_r($family);
echo '</pre>';

// adding Grandparents to an array
$family[] = 'Grandparents';

echo '<pre>';
print_r($family);
echo '</pre>';


// How to add a key 
$person['function'] = 'Junior Web Developer';
echo $person['function'];
// returns 'Junior Web Developer'

$me = array (
    'firstname' => 'Gianluca',
    'lastname' => 'Tiengo',
    'age' => 36,
    'season'=> 'summer',
    'likefootball' => False,
    //Multidimensional arrays
    'favourite_movies'=> array('Armageddon','Star Trek','Die Hard'),
    'hobbies' => array('basket','cocking', 'walking'),
    );

$mother = array (
    'firstname' => 'Emanuela',
    'lastname' => 'Zaffaina',
    'age' => 57,
    'season'=> 'winter',
    'likefootball' => False,
    //Multidimensional arrays
    'favourite_movies'=> array('Via col vento','Dott Zivago','Green Mile'),
    'hobbies' => array('reading','cocking', 'walking'),
    );

$me['mother'] = $mother;   

echo '<pre>';
print_r($me);
echo '</pre>';

//Manipulating arrays exercises
echo '<p> Manipulating arrays exercises</p>';
echo count($me['hobbies']);
$me['hobbies'][]='reading';
echo '<pre>';
print_r($me);
echo '</pre>';

$me['lastname'] = 'Durant';
echo '<pre>';
print_r($me);
echo '</pre>';


//inserct or merge exo 
echo '<p> inserct or merge </p>';
$soulmate = array (
    'firstname' => 'Gianluca',
    'lastname' => 'Tiengo',
    'age' => 36,
    'season'=> 'summer',
    'likefootball' => False,
    //Multidimensional arrays
    'favourite_movies'=> array('Armageddon','Star Trek','Die Hard'),
    'hobbies' => array('basket','gaming', 'walking','football'),
    );
$result = array_merge($me, $soulmate);
echo '<pre>';
print_r($result);
echo '</pre>';
//var_dump($result);



echo '<p> More array exercises </p>';
// Create an array $web_development containing a 'frontend' and a 'backend' key. Assign an empty array to each key.
//method 1
$web_development = array('frontend' => [],'backend' => [],);
$web_development['frontend'][]='Xhtml';
$web_development['frontend'][]='CSS';
$web_development['frontend'][]='JavaScript';
$web_development['frontend'][]='Flash';
$web_development['frontend'][]='Ruby on Rails';
$web_development['backend'][]='Ruby on Rails';
// Then, add a line underneath that replace 'xhtml' by 'html'.
$web_development['frontend'][0]='Html';
// Then, add a line underneath that removes 'Flash' from the array.
unset($web_development['frontend'][3]);
echo '<pre>';
print_r($web_development);
echo '</pre>';


//method 2
$web_development= array(

    'frontend'=> array (''),
    'backend' => array (''),
);

array_push($web_development['frontend'],'xhtml', 'CSS', 'Flash', 'JavaScript');

array_push($web_development['backend'],'Ruby on Rails');

echo '<pre>';
print_r(str_replace('xhtml', 'html', $web_development['frontend'], $i));
echo '</pre>';

echo '<pre>';
print_r($web_development);
echo '</pre>';


?>
