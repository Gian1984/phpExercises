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
            if ( $note <= 4){
                echo "This work is really bad. What a dumb kid!";
        }else if ($note >= 5 && $note <=9 ){
            echo "This is not sufficient. More studying is required.";
        }else if ($note > 9 && $note <= 10 ){
            echo "barely enough!";
        }else if ($note > 10 && $note <= 14 ){
            echo "Not bad!";
        }else if ($note > 14 && $note <= 18 ){
            echo "Bravo, bravissimo!";
        }else if ($note >= 19 && $note <= 20 ){
            echo "Too good to be true confront the cheater!";
        }
        }
    }
?>
