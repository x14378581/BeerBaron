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
       
       $beer = $_GET['beer']; // this gets the variable that was sent.
       $spirit = $_GET['spirit'];
       $wine = $_GET['wine'];
       $cider = $_GET['cider'];// this gets the variable that was sent
       
       if($money >= $beerCost){
              $addBeerQuery = "UPDATE inventory SET beer = beer + " . $beer . ", dollars = dollars - $beerCost WHERE username = '" .$username . "'"; // this is updating the beer of the user that has made the beer.
              $result = mysqli_query($myConnection, $addBeerQuery);
       }
       
       if($money >= $spiritCost){
              $addSpiritQuery = "UPDATE inventory SET spirits = spirits + " . $spirit . ", dollars = dollars - $spiritCost WHERE username = '" .$username . "'"; // this is updating the spirit value of the user that has made the beer.
              $result = mysqli_query($myConnection, $addSpiritQuery);
       }
       
       

       
       
     
       //$currentBeer = mysqli_query($myConnection, "SELECT beer FROM inventory WHERE username = '" . $username . "'");
       //$currentSpirits = mysqli_query($myConnection, "SELECT spirits FROM inventory WHERE username = '" . $username . "'");
       
       //$currentBeer = (int)$currentBeer;
       //$currentSpirits = (int)$currentSpirits;
       
       //echo("Beer = " .$currentBeer);
       //echo("Spirits = " .$currentSpirits);
       
       
       $myfile = fopen("beerbarron.html", "r") or die("Unable to open file!");
       echo fread($myfile,filesize("beerbarron.html"));
       fclose($myfile)
       
       /*$query = "SELECT * FROM credentials";
       $result = mysqli_query($myConnection, $query);

       while ($row = mysqli_fetch_assoc($result)) {
        echo "The ID is: " . $row['id'] . " and the Username is: " . $row['username'];
       }*/
?>