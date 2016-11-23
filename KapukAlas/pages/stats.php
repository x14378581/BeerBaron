<?php
    include 'config.php';
    
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

