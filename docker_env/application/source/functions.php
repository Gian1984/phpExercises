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
<h1>Function</h1>

<?php
//DRY " Don't Repeat Yourself ".

//First, you need to declare the function to make it available. It is stored in memory, not ran.
function say_hello($firstname){
	echo "<p>Hello $firstname!</p>";
	echo '<hr>';
}

//Function calls during "Runtime" :
say_hello("Maurice");
say_hello("Alice");
say_hello("Jésus");
say_hello("Judas");

$str = 'This is going to be shuffled !';
$str = str_shuffle($str);
 
echo $str;
?>
<h3>shuffle string</h3>
<?php
$str= "let's break the big chunk of text into an Array of words.";

$str= explode(" ", $str);

foreach ($str as $word){
	
	echo str_shuffle($word)." ";
}

//Custom functions
?>

<h3>Custom functions</h3>

<?php
// Use a function that capitalizes the first letter of the provided argument. Example: "émile"should return "Émile"
function capitalize($newname){
    echo ucfirst($newname);
   //echo mb_convert_case($newname);
	
}

$newname = capitalize("emile ");
echo $newname;

// Now display the date, time, minutes and seconds, using the same function, by playing with the arguments.
function getToday($format){
return date($format);
}
echo "<br><br> Actual time of Greenwitch =".getToday('H,i');

// Create a "Sum" function that takes 2 numbers and returns their sum.
// $a=array(5,15,25);
// echo array_sum($a);



function sum($a, $b){
    return $a +$b ;
}

echo "<br><br> sum =".sum(3, 5)."<br><br>";

//Improve that function so that it checks whether the argument is indeed a Number. If not, it should display :
// "Error: argument is not a number."

function numOrNotNum($c, $d) {
    if (is_numeric($c) && is_numeric($d)){
        echo "<br><br> sum =".($c+$d);
    }else{
        echo "Error: argument is not a number.";
    }
};
numOrNotNum(3,'trois');




//Create a function that takes as argument a string of characters and returns an acronym made of the initials of each word.
//Example: "In code we trust!" should return: ICWT).


//method1
$s = 'Stack-Overflow Questions Tags Users';

if(preg_match_all('/\b(\w)/',strtoupper($s),$m)) {
    $v = implode('',$m[1]); // $v is now SOQTU
};


//method2
function acronym($f){
		
    $words = explode(" ", $f);
    $acronym = "";
    
    foreach ($words as $w){
        $acronym .= strtoupper($w[0]);
    }
    
    return $acronym;

}
$f = $s;
echo "<br><br> acronym =".acronym($f);

echo "<br><br> $v";

//method3
function acronyme($str){
    $str= explode(" ", $str);
    foreach ($str as $mot){
        echo "<br><br> acronym =".ucfirst(substr($mot,0,1));
        
        }
    }
    
    acronyme('in code we trust');


//Create a function that replaces the letters 
echo str_replace("Hello","Hey","<br><br> Hello world!");

function remplaceW($word){
    $word=str_replace('ae', 'æ', $word);
    return $word;
};
$word ="caecotrophie";
echo remplaceW("<br> $word");

function remplaceL($letter){
    $letter=str_replace('æ','ae', $letter);
    return $letter;
};

$letter ="chænichthys";
echo remplaceL("<br> $letter");


// Create a function to return "notice", "warning" and "error" messages to a user,which takes 
// 2 arguments : the "message", and the "css class" (values: "info", "error", "warning"). 
// This function would allow us to write this :
// echo feedback("Incorrect email address", "error");
// which will produce this html :
// <div class="error">Error: Incorrect email address.</div>

function myErrorHandler($message, $cssclass="info"){
    return '<div class="'.$cssclass.'">'.ucfirst($cssclass).': '.$message.'.</div><br>';
}
echo myErrorHandler("incorrect email");
echo myErrorHandler("incorrect email","warning");
echo myErrorHandler("incorecct email","error");


//De-capitalize the string : "STOP YELLING I CAN'T HEAR MYSELF THINKING!!"

function decap($decapitalize){
    return strtolower("$decapitalize");
};
$decapitalize = "STOP YELLING I CAN'T HEAR MYSELF THINKING!!";
echo decap("<br> $decapitalize");


//In your new job, you have to maintain the code of a former developer. Make it DRY by creating a custom function calculate_cone_volume :
// Volume of a cone which ray is 5 and height is 2 
// $volume = 5 * 5 * 3.14 * 2 * (1/3);  
// echo 'The volume of a cone which ray is 5 and height is 2 = ' . $volume . ' cm<sup>3</sup><br />';  
// // Volume of a cone which ray is 3 and height is 4  
// $volume = 3 * 3 * 3.14 * 4 * (1/3);  
// echo 'The volume of a cone which ray is 3 and height is 4 = ' . $volume . ' cm<sup>3</sup><br />'; 

function volume($ray, $height){
    $pi = 3.14159;
    return (1 / 3) * $pi * $ray * $ray * $height;
}
echo "<br><br> Volume =".volume(5, 2)."<br><br>";

// Create a random words generator, that generates 2 words: one whose length is between 1 to 5 letters, 
// the other between 7 and 15 letters. The screen will display a title "Generate a new word", then the two
//  generated words, and underneath, a button with the text "Generate").
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post"> 
        <input type="submit" name="button1"
                class="button" value="Button1" /> 
<?php

if(array_key_exists('button1', $_POST)) { 
    button1(); 
} 

function button1($length=5){
    return substr(str_shuffle("qwertyuiopasdfghjklzxcvbnm"),0,$length);
};
echo "<br><br> random =".button1();


?>
    </form> 
</body>
</html>

