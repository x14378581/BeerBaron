<?php
    include 'config.php';
    /*
    $myConnection= mysqli_connect($host,$user,$pass) or die ("could not connect to mysql"); 

       mysqli_select_db($myConnection, "HaS") or die ("no database");
       
        $username = $_COOKIE['user'];
       
       
        $statQuery = mysqli_query($myConnection, "SELECT * FROM inventory WHERE username = '" .$username . "'");
                //$statResult = mysqli_query($myConnection, $statQuery);
            while ($row = mysqli_fetch_assoc($statQuery)) { 
            }
     
        echo ($row);
        
        
        $currBeerQuery = mysqli_query($myConnection, "SELECT beer FROM inventory WHERE username = '" . $username . "'");
        $currBeerResult = $_POST {'currBeerQuery'};
        
        $currSpiritsQuery = mysqli_query($myConnection, "SELECT spirits FROM inventory WHERE username = '" . $username . "'");
        $currSpiritsResult = $_POST {'currSpiritsQuery'};
        
        $currCiderQuery = mysqli_query($myConnection, "SELECT cider FROM inventory WHERE username = '" . $username . "'");
        $currCiderResult = $_POST {'currCiderQuery'};
    
        $currDollarsQuery = mysqli_query($myConnection, "SELECT dollars FROM inventory WHERE username = '" . $username . "'");
        $currDollarsResult = $_POST {'currDollarsQuery'};
       
       
        
        
        $array = mysqli_fetch_all($currBeerResult, $currSpiritsResult, $currDollarsResult );
        
        echo json_encode($array);
        
        */
        
    $username = $_COOKIE['user'];

    //$query = mysqli_query($myConnection,"SELECT * FROM inventory");
    $statsQuery = "SELECT * FROM inventory WHERE username = '" .$username . "'";
    

    if ($result = mysqli_query($myConnection, $statsQuery)) {
        $output = "<table><tr><th>Username</th><th>Beer</th><th>Spirits</th><th>Money</th><th></th></tr>";
        
        //echo "<div id ='display'>";
        
    //    echo "<div class = 'tcol'> Username  </div> <div class = 'tcol'> Beer  </div> <div class = 'tcol'> Spirits </div> <div class = 'tcol'> Dollars  </div> "; 
        //while ($obj = mysqli_fetch_object($result)) {
        
        while($row = mysqli_fetch_row($result)){
            
            $output = $output . "<tr><td>".$row[0]."</td><td>".$row[1]."</td><td>".$row[2]."</td><td>".$row[3]."</td></tr>";
        }
        
        $output = $output . "</table>";
        echo $output;
            
            //printf ("<div class='trow'>  <div class = 'tcol'>  %s  </div>  <div class = 'tcol'>  %s  </div>  <div class = 'tcol'>  %s  </div>  <div class = 'tcol'>  %s </div><div class = 'tcol'>'<input type='submit'  name = 'sell' value='Sell'  onclick='myFunction2('".$obj->username."')'/>' </div>  </div> </br>", $obj->username, $obj->beer, $obj->spirits, $obj->dollars);
        //}
    //    echo"</div>";
    }
    
    /*$types = array();
    while ($result = mysqli_fetch_object($query)){
         $types = $result[$type];
    }
    
    ?>
        
     
     
     // $statResult = mysqli_query($myConnection, "SELECT * FROM inventory WHERE  username='".$username."'");
     //   while ($row = mysqli_fetch_assoc($statResult)) {
     //   //print_r ($row);
  //      }
         //echo ($statResult);
        
   // $statResult = mysqli_query($myConnection, "SELECT beer, spirits, dollars FROM inventory WHERE  username='".$username."'");
  //      while ($row = mysqli_fetch_assoc($statResult)) {
        //print_r ($row);
   //     }
    //     echo ($statResult);
               
?>
*/
    
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
    


