<?php
        include 'config.php';
        $username = $_COOKIE['user'];
        
        $query = "SELECT * FROM response WHERE username = '$username' && response = TRUE";
        $result = mysqli_query($myConnection, $query);
        
       while ($row = mysqli_fetch_row($result)){
         $Username = $row[0];
         $buyer = $row[1];
         $message = $row[2];
         
         echo $Username." you tried to sell to " .$buyer. " and you have being " .$message. "<button onclick= \"myOkay('$Username', '$buyer')\">Okay</button>"; 
         
       }
?>