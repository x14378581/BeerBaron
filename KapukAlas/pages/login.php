<?php

    include 'config.php';
 
       
     if($_POST['formSubmit'] == "Submit") 
   {
        $username = $_POST['Uname'];
        $password = $_POST['Password'];
    }
    

      
    $query = "SELECT * FROM users WHERE  username='$username' && password='$password'";
    $result = mysqli_query($myConnection, $query);

        while ($row = mysqli_fetch_row($result)) {
            $char = $row[5];
        }
  
      //echo "The value of the char is ".$char;
      
      $cookie_name = "user";
      $cookie_value = $username;
      setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
      
      
     if ($char == '0'){
         //echo "The person is beer";
        header('Location:beerbarron.html');
        $myfile = fopen("beerbarron.html", "r") or die("Unable to open file!");
        echo fread($myfile,filesize("beerbarron.html"));
        fclose($myfile);
      }
      
     else if ($char == '1'){
      //echo "The person is cop";
      $myfile = fopen("cop.html", "r") or die("Unable to open file!");
      echo fread($myfile,filesize("cop.html"));
      fclose($myfile);
     }
     
     else{
         echo "problems ".$char;
     }
     /* $myfile = fopen("transaction.html", "r") or die("Unable to open file!");
       echo fread($myfile,filesize("transaction.html"));
       fclose($myfile);*/
      


?>