<?php
       include 'config.php';
       
       $myConnection= mysqli_connect($host,$user,$pass) or die ("could not connect to mysql");  //add to a separate file, and call file **best practices**
       mysqli_select_db($myConnection, "HaS") or die ("no database");
       
       //varlaibles
       sleep(5);
       
       $username = $_COOKIE['user'];
       $beerCost = 50;
       $spiritCost = 70;
       
      // echo ($username);

       $moneyQuery = "SELECT dollars FROM inventory WHERE username = '$username'";
       $moneyResult = mysqli_query($myConnection, $moneyQuery);
       $row = mysqli_fetch_row($moneyResult);
       $money = $row[0];
       
       $beer = $_POST['beer']; // this gets the variable that was sent.
       $spirit = $_POST['spirit'];
       $wine = $_GET['wine'];
       $cider = $_GET['cider'];// this gets the variable that was sent
       
       if($money >= $beerCost){
              $addBeerQuery = "UPDATE inventory SET beer = beer + " . $beer . ", dollars = dollars - $beerCost WHERE username = '" .$username . "'"; // this is updating the beer of the user that has made the beer.
              $result = mysqli_query($myConnection, $addBeerQuery);
       }
       
       elseif ($money < $beerCost) {
              echo "you dont have enough money chief";
       }
       
       if($money >= $spiritCost){
              $addSpiritQuery = "UPDATE inventory SET spirits = spirits + " . $spirit . ", dollars = dollars - $spiritCost WHERE username = '" .$username . "'"; // this is updating the spirit value of the user that has made the beer.
              $result = mysqli_query($myConnection, $addSpiritQuery);
       }
       
       elseif ($money < $spiritCost) {
              echo "you dont have enough money chief";
       }
?>