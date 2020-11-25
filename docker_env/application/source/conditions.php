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
/**
 * Series of exercises on PHP conditional structures.
*/  
// 1.1 Clean your room Exercise 

$room_is_filthy = false;

if($room_is_filthy){
	echo "<br>Yuk, Room is dirty : let's clean it up !";
	cleanup_room();
	echo "<br>Room is now clean!";
	$room_is_filthy = false;
} else {
	echo "<br>Nothing to do, room is neat.<br>";
}

// 1.2 Clean your room Exercise, improved

// Create the array of possible states
$possible_states = ["health hazard", "filthy", "dirty", "clean", "immaculate"];

// When testing, change the index value to navigate to the possible array values
$room_filthiness = $possible_states[5]; 

if( $room_filthiness == $possible_states[0] ){
    echo "<br>1.2 Yuk, Room is Disgusting! Let's clean it up !";
} else if( $room_filthiness == $possible_states[1]){
	echo "<br>1.2 Yuk, Room is filthy : let's clean it up !";   
} else if( $room_filthiness == $possible_states[2] ){
	echo "<br>1.2 Yuk, Room is dirty : let's clean it up !";
} else if( $room_filthiness == $possible_states[3] ){
	echo "<br>1.2 Nothing to do, room is neat."; 
} else {
	echo "<br>1.2 Good guy, room is immaculate!<br><br>";
}

// 2. "Different greetings according to time" Exercise

// $now = time();
// $hours = (date("h",$now)+1) ;
// $min = date("i",$now);
// echo "<br>".$hours.":".$min."<br>";
$time_zone = DateTimeZone::listIdentifiers(DateTimeZone::PER_COUNTRY, "IT"); 
$time_zone = new DateTimeZone(end($time_zone));
$datetime = new DateTime('now', $time_zone);
$now = date('H:i');
echo $now;
if (date("H") >= 5 && date("i") <= 9) {
    echo('<p><br>Good morning !</p>');
} else if (date("H") >= 9 && date("i")>= 1 && date("H") <= 12) {
    echo('<p><br>Good day!</p>');
}else if (date("H") >= 12 && date("i")>= 1 && date("H") <= 16) {
    echo('<p><br>Good afternoon !</p>');
} else if (date("H") >= 16 && date("i")>= 1 && date("H") <= 21) {
    echo('<p><br>Good evening !<br></p>');
}
else if (date("H") >= 21 && date("i")>= 1 && date("H") <= 4 && date("i")<=59) {
    echo('<p><br>Good night !<br></p>');
}


// 3. "Different greetings according to age" Exercise
?>

<form method="get" action="">
	<label for="age">Insert your age</label>
	<input type="" name="age">
	<input type="submit" name="submit" value="Greet me now">
    <p>Please select your gender:</p>
    <input type="radio" id="male" name="gender" value="male">
    <label for="male">Male</label><br>
    <input type="radio" id="female" name="gender" value="female">
    <label for="female">Female</label><br>

    <br>  

    <p>Do you speak English:</p>
    <input type="radio" id="language1" name="language" value="yes">
    <label for="language1">Yes</label><br>
    <input type="radio" id="language2" name="language" value="no">
    <label for="language2">No</label><br>  
    
</form>

<?php
    if (isset($_GET['age'])){
        $age = $_GET['age'];
        $language = $_GET['language'];
        $gender = $_GET['gender'];
        if ( strlen($age) == 0 ){
            echo "<br>Ahem. You forgot to enter your age.";       
          }else if ($age < 12){ 
              if ( $language == "yes" ) { 
                  if ( $gender == "male"){
                      echo "<br>Hello kiddo!"; 
              } else { echo "<br>Hello girl!";
            }
        }
            else {
                if ( $language == "no" ) { 
                    if ( $gender == "male"){
                        echo "<br>Aloha boy!"; 
                } else { echo "<br>Aloha girl";
              }
            }
        }
          }else if ($age >= 12 && $age <= 18){ 
            if ( $language == "yes" ) { 
                if ( $gender == "male"){
                    echo "<br>Hello mister teen!"; 
            } else { echo "<br>Hello miss teen!";
          }
      }
          else {
              if ( $language == "no" ) { 
                  if ( $gender == "male"){
                      echo "<br>Aloha mister teen!"; 
              } else { echo "<br>Aloha miss teen!";
            }
          }
      }
        }else if ($age >= 18 && $age <= 115){ 
            if ( $language == "yes" ) { 
                if ( $gender == "male"){
                    echo "<br>Hello mister!"; 
            } else { echo "<br>Hello madame!";
          }
      }
          else {
              if ( $language == "no" ) { 
                  if ( $gender == "male"){
                      echo "<br>Aloha mister!"; 
              } else { echo "<br>Aloha madame!";
            }
          }
      }
        }else{
            echo "<br>Wow! Still alive ? Are you a robot, like me ? Can I hug you ?";
        }
    };
    ?>
    
