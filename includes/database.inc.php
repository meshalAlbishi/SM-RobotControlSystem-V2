<?php

// $dbServerName = "localhost";
// $dbUsername = "root";
// $dbPassword = "mysql";
// $dbName = "arm_control";

$dbServerName = "sql6.freemysqlhosting.net";
$dbUsername = "sql6420423";
$dbPassword = "NTwtA7WXGe";
$dbName = "sql6420423";

$conn = mysqli_connect($dbServerName, $dbUsername, $dbPassword, $dbName);


// motors functions
function getMotorsValue()
{
    $sql = "SELECT motor_id, degree FROM motors;";
    $result = mysqli_query($GLOBALS['conn'], $sql);

    $resultCheck = mysqli_num_rows($result);

    if ($resultCheck > 0) {

        return mysqli_fetch_all($result);
    }
}


function updateMotors()
{
    for ($i = 1; $i <= 6; $i++) {

        $degree =  $_POST['engine' . $i];
        $sql = "update motors set degree = {$degree} where motor_id={$i};";

        mysqli_query($GLOBALS['conn'], $sql);

        // insert to the log
        insertMotorsLog($i, $degree);
    }
}

function insertMotorsLog($motor_id, $degree)
{
    $sql = "insert into motors_log(motor_id, degree, log_date) values({$motor_id}, {$degree}, now());";
    mysqli_query($GLOBALS['conn'], $sql);
}

// arm power functions
function getArmPower()
{

    $sql = "SELECT power FROM arm where arm_id=1;";
    $result = mysqli_query($GLOBALS['conn'], $sql);

    return mysqli_fetch_all($result)[0][0];
}

function updatePower()
{
    echo 'hi';
    $data = $_POST['power'];
    echo $data;
    $sql = "update arm set power = ($data) where arm_id=1;";

    mysqli_query($GLOBALS['conn'], $sql);

    // insert to the log
    insertArmLog($data);
}

function insertArmLog($data)
{
    $sql = "insert into arm_log(arm_id, power, log_date) values(1, {$data}, now());";
    mysqli_query($GLOBALS['conn'], $sql);
}
