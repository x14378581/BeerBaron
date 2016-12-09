<?php


        include 'config.php';
        $username = $_COOKIE['user'];
        
        $query = "SELECT * FROM transactions WHERE buyer = '$username' && active = TRUE";
        $result = mysqli_query($myConnection, $query);
    
       while ($row = mysqli_fetch_row($result)){
         $Username = $row[0];
         $buyer = $row[1];
         $item = $row[2];
         $amount = $row[3];
         $price = $row[4];
         //echo $Username;
         
          echo "The user: " . $Username . " wants to sell you " . $item . " the amount is ". $amount . " the price is ". $price ." <br/> <button onclick= \"myNick('$Username', '$buyer', '$item', '$amount', '$price')\">Nick Them</button> <br/><br/>";
       
       }
       

?>