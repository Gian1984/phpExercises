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

<form method="get" action="">
    <label for="name">Insert your fullname!</label>
	<input type="" name="name"><br><br>
    
    <label for="age">Insert your age</label>
	<input type="" name="age">
	
    
    <p>Please select your gender:</p>

    <input type="radio" id="male" name="gender" value="male">
    <label for="male">Male</label><br>

    <input type="radio" id="female" name="gender" value="female">
    <label for="female">Female</label><br><br>

    <input type="submit" name="submit" value="Submit">
    <br>  

    
    
</form>

<?php
    
//creare una variabile che cambia se la condizione e rispettata oppure no.
$message = "Sorry you don't fit the criteria"; 
    if (isset($_GET['submit'])){
        if (isset($_GET['age'])&& isset($_GET['gender']) && isset($_GET['name'])){
            $age = $_GET['age'];
            $gender = $_GET['gender'];
            $fullname = $_GET['name'];
        if ( $age > 21 && $age < 40 && $gender == "female" ){
            $message = "Welcome to the team !" . $fullname."!";            
          }
        
        echo $message;
        }
    }
?>

