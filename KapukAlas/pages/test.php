<?php

    include 'config.php';


    $query = "SELECT * FROM inventory";
    

    if ($result = mysqli_query($myConnection, $query)) {
        $output = "<table><tr><th>Username</th><th>Sell</th></tr>"; // this creates a table and its headings in html
        

        
        while($row = mysqli_fetch_row($result)){
            
            $output = $output . "<tr><td>".$row[0]."</td><td><button onclick=\"myFunction2('".$row[0]."')\">Sell</button></td></tr>";// from the query it creates a the table rows and columns, in each loop we selct the section of the array and display it in the correct heading eg username = row[0]
        }
        
        $output = $output . "</table>";// this finishes the html table
        echo $output;// this displays the table
            
    }


?>