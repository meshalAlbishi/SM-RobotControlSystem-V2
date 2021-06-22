<?php
include_once('includes/database.inc.php');

$engineValues = getMotorsValue();
$isPower = getArmPower();

if (isset($_POST['submit'])) {

    updateMotors();

    $engineValues = getMotorsValue();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Robot Control System</title>

    <link rel="stylesheet" href="style.css">

    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous">
    </script>
</head>

<body>

    <?php
    // include("php/arm.php");
    // include("php/arm.php");
    ?>



    <script src="main.js"></script>

</body>

</html>