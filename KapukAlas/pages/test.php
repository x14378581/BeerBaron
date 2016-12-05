<?php

    include 'config.php';


    $query = "SELECT * FROM inventory";
    

    if ($result = mysqli_query($myConnection, $query)) {
        $output = "<table><tr><th>Username</th><th>Beer</th><th>Spirits</th><th>Money</th><th></th></tr>"; // this creates a table and its headings in html
        
        //echo "<div id ='display'>";
        
    //    echo "<div class = 'tcol'> Username  </div> <div class = 'tcol'> Beer  </div> <div class = 'tcol'> Spirits </div> <div class = 'tcol'> Dollars  </div> "; 
        //while ($obj = mysqli_fetch_object($result)) {
        
        while($row = mysqli_fetch_row($result)){
            
            $output = $output . "<tr><td>".$row[0]."</td><td>".$row[1]."</td><td>".$row[2]."</td><td>".$row[3]."</td><td><button onclick=\"myFunction2('".$row[0]."')\">Click Me</button></td></tr>";// from the query it creates a the table rows and columns, in each loop we selct the section of the array and display it in the correct heading eg username = row[0]
        }
        
        $output = $output . "</table>";// this finishes the html table
        echo $output;// this displays the table
            
            //printf ("<div class='trow'>  <div class = 'tcol'>  %s  </div>  <div class = 'tcol'>  %s  </div>  <div class = 'tcol'>  %s  </div>  <div class = 'tcol'>  %s </div><div class = 'tcol'>'<input type='submit'  name = 'sell' value='Sell'  onclick='myFunction2('".$obj->username."')'/>' </div>  </div> </br>", $obj->username, $obj->beer, $obj->spirits, $obj->dollars);
        //}
    //    echo"</div>";
    }
    
    /*$types = array();
    while ($result = mysqli_fetch_object($query)){
         $types = $result[$type];
    }*/
    
    /*while ($obj = $query->fetch_object()) {
        printf ("%s (%s)\n", $obj->Username, $obj->Beer, $obj->Spirits, $obj->Dollars);
    }*/
    
       /* //echo json_encode($result);
        $json = json_encode($result, true);
        foreach ($json['username']['beer']['spirits']['dollars'] as $item){
            echo $item['username'];
            echo "-";
            echo $item['beer'];
            echo "-";
            echo $item['spirits'];
            echo "-";
            echo $item['dollars'];
            
            
        }
        */
    

?>