<?php

//echo " good job, Sport!";
        include 'config.php';
        $username = $_COOKIE['user'];
        
        $query = "SELECT * FROM transactions WHERE buyer = '$username'";
        $result = mysqli_query($myConnection, $query);
    
        //$blah = []; //instantiate array
        //$x = 0;  // start counter
       while ($row = mysqli_fetch_row($result)){
         $Username = $row[0];
         $buyer = $row[1];
         $item = $row[2];
         $amount = $row[3];
         $price = $row[4];
         //echo $Username;
         
          echo "The user: " . $Username . " wants to sell you " . $item . " the amount is ". $amount . " the price is ". $price ."you are the buyer ".$buyer."<button onclick= \"myAccept('$Username', '$buyer', '$item', '$amount', '$price')\">Accept Offer</button> <button onclick= \"myDeny('$Username', '$buyer')\">Deny Offer</button>";
       
       }
       

?>

        
        
