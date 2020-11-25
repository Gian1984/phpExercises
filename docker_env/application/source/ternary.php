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
    <p>Please select your gender:</p>

    <input type="radio" id="male" name="gender" value="male">
    <label for="male">Male</label><br>
    <input type="radio" id="female" name="gender" value="female">
    <label for="female">Female</label><br>

    <input type="submit" name="submit" value="Greet me now">
    <br>  

</form>

<?php
$hello = "Hey girl!";
if (isset($_GET['submit'])){
    if (isset($_GET['gender'])){
        $gender = $_GET['gender'];
        echo ($gender=="female") ? $hello : $hello = "Hey boy!";
    
}
}
?>