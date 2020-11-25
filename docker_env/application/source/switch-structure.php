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
    <label for="note">Insert note:</label>
	<input type="" name="note"><br><br>

    <input type="submit" name="submit" value="Submit">
    <br>  

</form>
<?php

if (isset($_GET['submit'])){
    if (isset($_GET['note'])){
        $note = $_GET['note'];
    switch ($note):
        case 0:
        case 1:
        case 2:
        case 4:    
            echo "This work is really bad. What a dumb kid! ";
            break;
        case 5:
        case 6:
        case 7:
        case 9:    
            echo "This is not sufficient. More studying is required.";
            break;
        case 10:
            echo "barely enough!";
            break;
        case 11:
        case 12:
        case 13:
        case 14: 
            echo "Not bad!";
            break;
        case 15:
        case 16:
        case 17:
        case 18: 
            echo "Bravo, bravissimo!";
            break;
        case 19:
        case 20: 
            echo "Too good to be true : confront the cheater!";
            break;
        default:
            echo "i is equal 0";
            break;
    endswitch;
    }

}
// note below 4 : "This work is really bad. What a dumb kid! "
// note between 5 and 9 : "This is not sufficient. More studying is required."
// note equals 10 : "barely enough!"
// note is 11, 12, 13 or 14 : "Not bad!"
// note is 15, 16, 17 or 18 : "Bravo, bravissimo!"
// note is 19 or 20 : "Too good to be true : confront the cheater!"
?>





