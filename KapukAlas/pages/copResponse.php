<?php
        include 'config.php';
        $username = $_COOKIE['user'];
        
        $query = "SELECT * FROM transactions WHERE buyer = '$username' && active = TRUE";
        $result = mysqli_query($myConnection, $query);
        
       while ($row = mysqli_fetch_row($result)){
         $Username = $row[0];
         $buyer = $row[1];
         $message = $row[2];
         
         //echo $Username." you tried to sell to " .$buyer. " they were a cop and you have been " .$message. " pal <br/> <button onclick= \"myOkay('$Username', '$buyer')\">Okay</button><br/><br/>"; 
         
       }

?>