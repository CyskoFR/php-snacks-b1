<!-- Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” -->

<?php

$name = $_GET['name'];
$mail = $_GET['mail'];
$age = $_GET['age'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>snack2</title>
</head>
<body>
    <form>
        <label for="name">Name:</label><br>
        <input type="text" id="name" name="name" required><br>
        <label for="mail">Email:</label><br>
        <input type="text" id="mail" name="mail" required><br>
        <label for="age">Age:</label><br>
        <input type="number" id="age" name="age" min="18" max="200" required><br><br>
        <input type="submit" value="Submit">

        <?php 
            if (strlen($name) > 3 && strpos($mail, "@") && strpos($mail, ".") && is_numeric($age)) {
                echo "<h2>Access granted</h2>";
                echo "Welcome, ".ucfirst($name);
            } else if (strlen($name) <= 3) {
                echo "<h2>Access denied</h2>";
                echo "<p>Name must contains at least 3 characters</p>";
            } else if (strpos($mail, "@") === false && strpos($mail, ".") === false) {
                echo "<h2>Access denied</h2>";
                echo "<p>Email must contains ' @ ' and ' . '</p>";
            } else {
                echo "<h2>Access denied</h2>";
            };
        ?>

    </form>
</body>
</html>