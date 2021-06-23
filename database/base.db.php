<?php

include_once("../includes/dbConnection.inc.php");

if (isset($_POST['btnSubmit'])) {

    insertDirection();

    header("Location: ../includes/direction.php?direction={$_POST['btnSubmit']}");
    die();
}

function insertDirection()
{
    echo $_POST['btnSubmit'];

    $sql = "INSERT INTO robot_base (direction, arm_id) VALUES ('{$_POST['btnSubmit']}', 1);";
    mysqli_query($GLOBALS['conn'], $sql);
}
