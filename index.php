<?php

include_once('database/arm.db.php');

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
    <link rel="stylesheet" href="css/arm.css">
    <link rel="stylesheet" href="css/base.css">

    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
</head>

<body>


    <main>

        <div class="header">
            <h1>Robot Control System</h1>
        </div>

        <div class="main">

            <?php
            include("php/base.php");
            include("php/arm.php");
            ?>

        </div>

    </main>

    <script src="main.js"></script>

</body>

</html>