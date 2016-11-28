<?php

    include 'config.php';

    $query = mysqli_query($myConnection,"SELECT * FROM inventory");
    $result = ($query);
    
    echo ($result);


?>