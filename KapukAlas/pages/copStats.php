<?php
    include 'config.php';

        
    $username = $_COOKIE['user'];
    $statsQuery = "SELECT * FROM inventory WHERE username = '" .$username . "'";
    

    if ($result = mysqli_query($myConnection, $statsQuery)) {
        $output = "<table><tr><th>Username</th><th>Money</th></tr>";
        
        
        while($row = mysqli_fetch_row($result)){
            
            $output = $output . "<tr><td>".$row[0]."</td><<td>".$row[3]."</td></tr>";
        }
        
        $output = $output . "</table>";
        echo $output;
            

    }
    
?>

    


