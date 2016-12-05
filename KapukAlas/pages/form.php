<?php
       $host = "127.0.0.1";
       $user = "x14378581";                     //Your Cloud 9 username
       $pass = "";                              //Remember, there is NO password by default!
       $db = "HaS";                             //Your database name you want to connect to
       $port = 3306;                            //The port #. It is always 3306
 
   

      
       $myConnection= mysqli_connect($host,$user,$pass) or die ("could not connect to mysql"); 

       mysqli_select_db($myConnection, "HaS") or die ("no database");
       
           if($_POST['formSubmit'] == "Submit") 
           {
              $first_name = $_POST["Fname"];
              $last_name =  $_POST['Lname'];
              $email = $_POST['Email'];
              $username = $_POST['Uname'];
              $password = $_POST['Password'];
              $charater = $_POST['charater'];
              
           }
           
           $check = "SELECT * FROM users WHERE username = '$username'";
           $resultCheck = mysqli_query ($myConnection, $check);
           
           if ($resultCheck->num_rows != 0){
               echo "that name is already taken";
                /*$myfile = fopen("form.html", "r") or die("Unable to open file!");
                 echo fread($myfile,filesize("form.html"));
                fclose($myfile);*/
           }
           else{
              
           $query = "INSERT into users (`username`,`email`,`fname`,`sname`,`password`,`charType`) values ('$username','$email','$first_name','$last_name','$password','$charater')";
           $result = mysqli_query($myConnection, $query);
           
           $query1 = "INSERT INTO inventory VALUES ('$username', 10, 10, '500')";
           $result1 = mysqli_query($myConnection, $query1);
           
          /* if ($charater == 0){
              $myfile = fopen("form.html", "r") or die("Unable to open file!");
              echo fread($myfile,filesize("form.html"));
              fclose($myfile);
            }*/
          }
           
           
           
?>