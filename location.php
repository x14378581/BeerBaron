<?php
    $host = "127.0.0.1";
    $user = "x14378581";                     
    $pass = "";                              
    $db = "HaS";                             
    $port = 3306;    

    // Create connection
    $myConnection= new mysqli_connect($host,$user,$pass) or die ("could not connect to mysql");
    mysqli_select_db($myConnection, "HaS") or die ("no database"); 
    
    // Check connection
    if ($myConnection->connect_error) {
        die("Connection failed: " . $myConnection->connect_error);
    } 
    
    $locationQuery = "SELECT * FROM location WHERE longitude, latitude = ";
    $result = $MyConnection->query($locationquery);
    
    $location = $_GET['location']; // this gets the variable that was sent.
       $addlocationQuery = "UPDATE location " . $location;
       

       
       
       
       
       
       
       
       
       
       
       
       
       
       
       
       
       
       
       
       
       
       
       
       
       
       
       
       
       
    $lastUpdate = Current_timestamp// this is updating the location of the user and the time of the last location update.
   
   
   
   
   
   
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
            }
        } else {
            echo "0 results";
        }
        
    $location = fopen("", "r") or die("Unable to open file");
        echo fread($myfile,filesize("chat.html"));
        fclose($chat)
       
        $myConnection->close();
       
?>