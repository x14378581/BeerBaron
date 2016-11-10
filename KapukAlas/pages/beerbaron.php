<?php

       
       
       //here we connect the varible to the database and query it out and print on the beerbarron.html page#
           //Connect to the database
       $host = "127.0.0.1";
       $user = "x14378581";                     //Your Cloud 9 username
       $pass = "";                              //Remember, there is NO password by default!
       $db = "HaS";                             //Your database name you want to connect to
       $port = 3306;                            //The port #. It is always 3306
 
    

      
       $myConnection= mysqli_connect($host,$user,$pass) or die ("could not connect to mysql"); 

       mysqli_select_db($myConnection, "HaS") or die ("no database"); 
       
       $beer = $_GET['beer'];
       
       $query = "UPDATE inventory SET beer = beer + " . $beer . " WHERE username = 'BigPoppaSauce'";
       
       $result = mysqli_query($myConnection, $query);
       
       $myfile = fopen("beerbarron.html", "r") or die("Unable to open file!");
       echo fread($myfile,filesize("beerbarron.html"));
       fclose($myfile);
       
       /*$query = "SELECT * FROM credentials";
       $result = mysqli_query($myConnection, $query);

       while ($row = mysqli_fetch_assoc($result)) {
        echo "The ID is: " . $row['id'] . " and the Username is: " . $row['username'];
       }*/
?>