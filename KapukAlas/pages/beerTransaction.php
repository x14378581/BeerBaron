<?php
include "config.php";

$username = $_POST['Username'];
$buyer = $_POST['buyer'];
$item = $_POST['item'];
$amount = $_POST['amount'];
$price = $_POST['price'];

       $moneyQuery = "SELECT dollars FROM inventory WHERE username = '$username'";
       $moneyResult = mysqli_query($myConnection, $moneyQuery);
       $row = mysqli_fetch_row($moneyResult);
       $money = $row[0];

//echo "this is the username " . $username . " this is the buyer ". $buyer . " this is the item " . $item . " this is the amount " . $amount . " this is the price " . $price;


if ($money < $price){
    echo "you dont have enough money for that head";
}

else if ($item=='Beer'){
    $queryBeer = mysqli_query($myConnection,"UPDATE inventory SET beer = beer + " . $amount . ",  dollars = dollars - ". $price . " WHERE username = '" . $buyer . "'");
    $queryBeer1 = mysqli_query($myConnection,"UPDATE inventory SET beer = beer - " . $amount . ",  dollars = dollars + ". $price . " WHERE username = '" . $username . "'");
    // insert into response Valuse ($username , $buyer , "accepted")
    $query = mysqli_query($myConnection,"UPDATE transactions SET active = FALSE WHERE username = '" . $username . "'");
    
}

else if ($item=='Spirits'){
    $querySpirit = mysqli_query($myConnection,"UPDATE inventory SET beer = spirits + " . $amount . ",  dollars = dollars - ". $price . " WHERE username = '" . $buyer . "'");
    $querySpirit1 = mysqli_query($myConnection,"UPDATE inventory SET beer = spirits - " . $amount . ",  dollars = dollars + ". $price . " WHERE username = '" . $username . "'");
    // insert into response Valuse ($username , $buyer , "accepted")
    $query1 = mysqli_query($myConnection,"UPDATE transactions SET active = FALSE WHERE username = '" . $username . "'");
    
}
           
else{
    echo "problems";
}

           
    


?>