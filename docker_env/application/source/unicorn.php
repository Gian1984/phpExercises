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
    <p>Are you a human, a cat or a unicorn ?</p>

    <input type="radio" id="human" name="gender" value="human">
    <label for="human">human</label><br>

    <input type="radio" id="cat" name="gender" value="cat">
    <label for="cat">cat</label><br>

    <input type="radio" id="unicorn" name="gender" value="unicorn">
    <label for="unicorn">unicorn</label><br><br>

    <input type="submit" name="submit" value="Submit">
    <br>  

</form>

<?php

if (isset($_GET['submit'])){
    if (isset($_GET['gender'])){
        $gender = $_GET['gender'];
        echo ($gender=="unicorn" ? '<img src="https://media.giphy.com/media/26AHG5KGFxSkUWw1i/giphy.gif">' : ($gender=="cat" ? '<img src="https://media.giphy.com/media/jpbnoe3UIa8TU8LM13/giphy.gif">' : '<img src="https://media.giphy.com/media/xT1R9XIOLQzGsNRnbi/giphy.gif">'));
    
}
}

?>