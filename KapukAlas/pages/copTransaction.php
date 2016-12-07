<?php

include "config.php";

$username = $_POST['Username'];
$buyer = $_POST['buyer'];
$item = $_POST['item'];
$amount = $_POST['amount'];
$price = $_POST['price'];

    $queryBeer = mysqli_query($myConnection,"UPDATE inventory SET dollars = dollars + \" 100 \" WHERE username = '" . $buyer . "'");
    $queryBeer1 = mysqli_query($myConnection,"UPDATE inventory SET dollars = dollars - \" 100  \" WHERE username = '" . $username . "'");
    
    $query = mysqli_query($myConnection,"UPDATE transactions SET active = FALSE WHERE username = '" . $username . "'");
    
    
    
    $response = mysqli_query($myConnection, "INSERT INTO response VALUES ('$username', '$buyer', 'Nicked', TRUE)");

?>