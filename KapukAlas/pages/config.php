<?php
       $host = "127.0.0.1";
       $user = "x14378581";                     //Your Cloud 9 username
       $pass = "";                              //Remember, there is NO password by default!
       $db = "HaS";                             //Your database name you want to connect to
       $port = 3306;                            //The port #. It is always 3306

    $myConnection= mysqli_connect($host,$user,$pass) or die ("could not connect to mysql");  //add to a separate file, and call file **best practices**
    mysqli_select_db($myConnection, "HaS") or die ("no database");

?>