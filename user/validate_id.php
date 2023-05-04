<?php
include '../connection.php';

$userID = $_POST['user_id'];

$sqlQuery = "SELECT * FROM user WHERE user_id = '$userID'";

$resultQuery = $connectNow -> query($sqlQuery);

if($resultQuery->num_rows > 0){
    echo json_encode(array('idFound' => true));
}else{
    echo json_encode(array('idFound' => false));
}
