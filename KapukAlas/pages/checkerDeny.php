<?php

include "config.php";

$username = $_POST['Username'];
$buyer = $_POST['buyer'];

$query = mysqli_query($myConnection,"UPDATE transactions SET active = FALSE WHERE username = '" . $username . "'");
$response = mysqli_query($myConnection, "INSERT INTO response VALUES ('$username', '$buyer', 'Denied', TRUE)");

//echo $Username." you tried to sell to " .$buyer. " and they " .$message. "<br/><button onclick= \"myOkay('$Username', '$buyer')\">Okay</button><br/><br/>";

?>