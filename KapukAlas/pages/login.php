<?php

    include 'config.php';
    
    /* if($_POST['formSubmit'] == "Submit") 
    {
        $username = $_POST['Uname'];
        $password = $_POST['Password'];
    }
    
    echo ($username." ".$password);
    
    $query1 = "INSERT INTO inventory (username,dollars) values ('$username', '500')";
    
    /*
    
    $query = mysqli_query("SELECT `username` FROM users WHERE username='$username'");
    $result = mysqli_query($myConnection, $query);
      if (mysql_num_rows($query) != 0)
      {
          echo "Username already exists";
      }
      else
      {
        echo "Does not exist";
      }
       */
       
     if($_POST['formSubmit'] == "Submit") 
    {
        $username = $_POST['Uname'];
        $password = $_POST['Password'];
    }
    
/*$query  = "SELECT * FROM users WHERE username='".$username."'";
$query  = "SELECT * FROM users WHERE password='".$password."'";


/* execute multi query */
/*
if (mysqli_multi_query($myConnection, $query)) {
    if ($result->num_rows != 0){
         echo "you are activated !!";
      }else{
         echo "losers, why can't you program?";
      }
}
else{
    echo "There is an issue with the query";
   }*/
    
    //echo($username);
    
     /* $result = mysqli_query($myConnection, "SELECT * FROM users WHERE username='".$username."'(SELECT * FROM users WHERE password='".$password."'"));
      //while ($row = mysqli_fetch_assoc($result)) {
        //print_r ($row);
    
      
      if ($result->num_rows != 0){
         echo "you are activated !!";
      }
      
      else{
          echo "losers, why can't you program?";
      }*/
      
    $result1 = mysqli_query($myConnection, "SELECT * FROM users WHERE  username='".$username."' && password='".$password."'");
      //while ($row = mysqli_fetch_assoc($result)) {
        //print_r ($row);
    
      
     /* if ($result1->num_rows != 0){
         echo "you are activated !!";
      }
      
      else{
          echo "losers, why can't you program?";
      }*/
      
      $result = mysqli_query($myConnection, "SELECT charType FROM users WHERE  username='".$username."'");
        while ($row = mysqli_fetch_assoc($result)) {
        //print_r ($row);
        }
      //echo ($result);
      
      $cookie_name = "user";
      $cookie_value = $username;
      setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
      
   /* if(!isset($_COOKIE[$cookie_name])) {
        echo "Cookie named '" . $cookie_name . "' is not set!";
    } 
    else {
         echo "Cookie '" . $cookie_name . "' is set!<br>";
         echo "Value is: " . $_COOKIE[$cookie_name];
    }*/
      
     //if ($row == 0){
       $myfile = fopen("transaction.html", "r") or die("Unable to open file!");
       echo fread($myfile,filesize("transaction.html"));
       fclose($myfile);
      //}
      
      

      
     
    
    
    
    
    
    
    
    


?>