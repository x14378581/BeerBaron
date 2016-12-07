<?php
include "config.php";

$username = $_POST['Username'];
$buyer = $_POST['buyer'];

//echo $username;
    $query = mysqli_query($myConnection,"UPDATE response SET response = FALSE WHERE username = '" . $username . "'");
?>