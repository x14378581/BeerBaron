<?php
include "config.php";

$username = $_POST['Username'];
$buyer = $_POST['buyer'];
$item = $_POST['item'];
$amount = $_POST['amount'];
$price = $_POST['price'];

//echo $buyer;

//echo "this is the username " . $username . " this is the buyer ". $buyer . " this is the item " . $item . " this is the amount " . $amount . " this is the price " . $price;


if ($item=='Beer'){
    $queryBeer = mysqli_query($myConnection,"UPDATE inventory SET beer = beer + " . $amount . ",  dollars = dollars - ". $price . " WHERE username = '" . $buyer . "'");
    $queryBeer1 = mysqli_query($myConnection,"UPDATE inventory SET beer = beer - " . $amount . ",  dollars = dollars + ". $price . " WHERE username = '" . $username . "'");
    // insert into response Valuse ($username , $buyer , "accepted")
    $response = mysqli_query($myConnection, "INSERT INTO response VALUES ('$username', '$buyer', 'Accepted')");
    $delete = mysqli_query ($myConnection, "DELETE FROM transactions WHERE username = '".$username."'  && '".$buyer."' ");
    //echo "success";
}
           
else{
    echo "problems";
}

           
    


?>