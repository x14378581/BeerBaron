<?php
// grab the variables lattitude and longitude
// run the queries for lattitude and longitude

    $host = "127.0.0.1";
    $user = "x14378581";                     
    $pass = "";                              
    $db = "HaS";                             
    $port = 3306;    

    // Create connection
    $myConnection= mysqli_connect($host,$user,$pass) or die ("could not connect to mysql");
    mysqli_select_db($myConnection, "HaS") or die ("no database"); 
    
    // Check connection
    if ($myConnection->connect_error) {
        die("Connection failed: " . $myConnection->connect_error);
    } 


    $latitude = $_POST['latitude'];
    $longitude = $_POST['longitude'];
    
    echo "The latitude value that was sent is ".$latitude;
    echo "The longitude value that was sent is ".$longitude;
    
    
    $locationQuery = "UPDATE location set latitude='$latitude' , longitude='$longitude' WHERE username='BigPoppaSauce'";
    echo "Query :: ".$locationQuery;
    $result = $myConnection->query($locationQuery) or die (mysql_error());
    
     
    
    $myConnection->close();

?>