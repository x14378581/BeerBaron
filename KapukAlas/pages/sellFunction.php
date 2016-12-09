<?php
    
        include 'config.php';
        
        $username = $_COOKIE['user']; // pass this value through a parameter called in test.php
        $buyer = $_POST['elem']; //username you want to sell to
        $item = $_POST['item']; // beer or spirits
        $quantity = (int)$_POST['amount']; // how much do you want to sell
        $selling_price = $_POST['price'];
   
        
        $query1 = "SELECT * FROM inventory WHERE username = '$username'";
        $result = mysqli_query($myConnection, $query1);
        
       while ($row = mysqli_fetch_row($result)){
         $ItemQuantB = (int)$row[1]; //beer
         $ItemQuantS = (int)$row[2]; //spirits
       }
       
        
        
        if ($ItemQuantB < $quantity){
                echo "you dont have the stock fella";
                
        }else if ($ItemQuantB > $quantity){
                //echo "user can afford to buy";
                $query = "INSERT into transactions (`username`,`buyer`,`item`,`quantity`,`price`, `active`) values ('$username','$buyer','$item','$quantity','$selling_price', TRUE)";
                $result = mysqli_query($myConnection, $query);

                
        }else {
                echo "Fuck sake";
        }

                //$query = "INSERT into transactions (`username`,`buyer`,`item`,`quantity`,`price`, `active`) values ('$username','$buyer','$item','$quantity','$selling_price', TRUE)";
                //$result = mysqli_query($myConnection, $query);

       
?>