<?php

$query  = "SELECT * FROM users WHERE username='".$username."'";
$query .= "SELECT * FROM users WHERE password='".$password."'";

/* execute multi query */
if (mysqli_multi_query($myConnection, $query)) {
    if ($result->num_rows != 0){
         echo "you are activated !!";
      }else{
         echo "losers, why can't you program?";
      }
}else{
    echo "There is an issue with the query";
   }



?>