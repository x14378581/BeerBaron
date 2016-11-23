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
       
           //echo ($first_name." ".$charter);
    

    
           //$connection = mysqli_connect($host, $user, $pass, $db, $port)or die(mysql_error());
           // check for excistance of database and table 
           
           //$query("INSERT INTO  'cri' ('fname', 'sname', 'email', 'username', 'password', 'charType') VALUES('". $first_name . "', '" .$last_name . "', '" .NULL . "','".NULL. "',' " .NULL ."','".NULL."')");
           //$query ("INSERT INTO 'credentials' ('username', 'email', 'fname', 'sname', 'charType') VALUES('".$username."', '".$email."', '".$first_name."', '".$last_name."','".$charater."')");
           $query = "INSERT into users (`username`,`email`,`fname`,`sname`,`password`,`charType`) values ('$username','$email','$first_name','$last_name','$password','$charater')";
           $result = mysqli_query($myConnection, $query);
           
           $query1 = "INSERT INTO inventory VALUES ('$username', 0, 0, '500')";
           $result1 = mysqli_query($myConnection, $query1);
           
           if ($charater == 0){
              $myfile = fopen("beerbaron.html", "r") or die("Unable to open file!");
              echo fread($myfile,filesize("beerbaron.html"));
              fclose($myfile);
       }
           
           
           //echo ($result);
       
           //$res = mysqli_fetch_row($result);
           //echo "The value that is in the first location is ".$row[0];
           
?>