<?php
    $host = "127.0.0.1";
    $user = "x14435248";                     
    $pass = "";                              
    $db = "HaS";                             
    $port = 3306;    

    // Create connection
    $myConnection = mysqli_connect($host,$user,$pass) or die ("could not connect to mysql"); 
    mysqli_select_db($myConnection, "HaS") or die ("no database");
    
    // Check connection
    if ($myConnection->connect_error) {
        die("Connection failed: " . $myConnection->connect_error);
    } 

    $userLocation = $_GET['location'];
    $userLocationQuery = "SELECT latitude, longitude FROM location";
    
    $result = $myConnection->query($sql);

 