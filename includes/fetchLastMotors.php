<?php

include_once('../database/arm.db.php');

$engineValues = getMotorsValue();
$isPower = getArmPower();


if (isset($_POST['power'])) {
    updatePower();
}

$isPower;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>

<body style="background-color: #8aaae5; margin: 10% 40%;">
    <h1>Arm Info</h1>

    <h2>Power: <?php echo ($isPower == 0 ? "off" : "on") ?></h2>

    <div id="sliders">
        <h2>Motor Degree</h2>

        <?php

        for ($i = 0; $i < count($engineValues); $i++) {
        ?>

            <div class="slider-box">

                <h2>Engine <?php echo $engineValues[$i][0] ?> : <?php echo $engineValues[$i][1] ?></h2>
            </div>

        <?php } ?>

    </div>
</body>

</html>