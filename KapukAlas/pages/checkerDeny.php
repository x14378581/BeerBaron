<?php

include "config.php";

$username = $_POST['Username'];
$buyer = $_POST['buyer'];

    $response = mysqli_query($myConnection, "INSERT INTO response VALUES ('$username', '$buyer', 'Denied')");

?>