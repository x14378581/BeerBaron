<?php

    include 'config.php';

    $query = mysql_query("SELECT * FROM inventory SORT BY dollars");
    $result = ($myConnection, $query);
    
    while($row = mysql_fetch_assoc($result)){
        foreach($row){
            print "$row";
        }
        print "\r\n";
    }

?>