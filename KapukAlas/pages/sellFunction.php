<?php
    
        include 'config.php';
        
        $username = $_COOKIE['user']; // pass this value through a parameter called in test.php
        $buyer = $_POST['elem']; //username you want to sell to
        $item = $_POST['item']; // beer or spirits
        $quantity = $_POST['amount']; // how much do you want to sell
        $selling_price = $_POST['price'];
        
        //echo($buyer." ".$item." ".$quantity." ".$selling_price);
        
        
        $query = "INSERT into transactions (`username`,`buyer`,`item`,`quantity`,`price`) values ('$username','$buyer','$item','$quantity','$selling_price')";
        $result = mysqli_query($myConnection, $query);
        
        
    
        echo ($buyer.' '.$item.' '.$quantity.' '.$selling_price);
?>