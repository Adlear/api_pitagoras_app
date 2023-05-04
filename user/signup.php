<?php
include '../connection.php';

//POST = send/save data to mysql
//GWT = retrieve/read data from db

$userID = $_POST['user_id'];
$userName = $_POST['user_name'];
$userLastName = $_POST['user_last_name'];
$userPassword = md5($_POST['user_password']);

$sqlQuery = "INSERT INTO user (user_id, user_name, user_last_name, user_password) VALUES ('$userID', '$userName', '$userLastName', '$userPassword')";

$resultQuery = $connectNow->query($sqlQuery);

if($resultQuery){
    echo json_encode(array('success' => true));
}else{
    echo json_encode(array('success' => false));
}

?>