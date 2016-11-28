<!DOCTYPE html>
<html>

<head>
    <title> BEER BARON PAGE </title>
    <link href="../css/bootstrap.css" rel="stylesheet">
    <link href="../css/style.css" rel="stylesheet">
    <script>
        var beer = 0;
        var spirit = 0;
        var cider = 0;
        var wine = 0;


        function makeSpirits() {
            spirit = 3;
            //alert("You have made "+spirit+" spirits");
            window.location.href = "beerbaron.php?spirit=" + spirit; // this sends the variable to the php file.
        }

/*        function makeBeer() {
            var d = new Date();
            var clickTime = d.getTime();
            var finishTime = clickTime + 10000;
            alert(clickTime+", "+finishTime);
            
            beer = 10;
            window.location.href = "beerbaron.php?beer=" + beer; // this sends the variable to the php file.
        }*/


        function makeCider() {
            cider = 10;
            //alert("You have made "+cider+" ciders");
            window.location.href = "beerbaron.php?cider=" + cider; // this sends the variable to the php file.
        }

        function makeWine() {
            wine = 10;
            //alert("You have made "+wine+" wines");
            window.location.href = "beerbaron.php?wine=" + wine; // this sends the variable to the php file.
        }
    </script>
    
    <script>
        function checkStats() {
            alert("the function checkstats has been called");
            var statsData = "<table><tr><th> Player Statistics </th><th> Player Statistics </th></tr>"
            
            for(var i=0;i < statsData.length;i++){
                    
                var tmpData = statsData[i];
                    statsData = statsData + "<table><tr><td>"+tmpData[0]+"</td></tr>"+"<tr><td>"+tmpData[1]+"</td></tr>"+"<tr><td>"+tmpData[2]+"</td></tr>"+"<tr><td>"+tmpData[3]+"</td></tr>";
                    statsData = statsData + "</table>";
            
                    document.getElementById("statsInfo").innerHTML = statsData;
                    document.getElementById("statsInfo").style.display = "inline";
                    
                              } 
            /*
                This file is were we need to change a html element with the contents of the query after being executed...
                
                first we create an empty element in html and we make it invisible..
                
                    --> <div id="statsInfo" style="display:none"></div> ---> This piece of the puzzel goes into your HTML part of the page where you would like to display it...remember its invisible at the moment.
                    
                Next we get the data using ajax, see below. This should return a multidimensional array but this depends on 
                what query is being run in the PHP side of things.
                
                If we wanted to create a table we could do the following:
                
                Everything else goes into the Javascript function...
                
                
                var statsData = "<table><tr><th>heading1</th><th>heading2</th></tr>";   // this is just a string at the moment.
                
                if we have a loop for multiple entries in the table defined above it would look like this....
                
                each time the loop executes below another row is added to the table string that we are creating....
                
                for(var i=0;i < data.length;i++){
                    
                    var tmpData = data[i];
                    statsData = statsData + "<tr><td>"+tmpData[0]+"</td>"....continue with the elements from the appropriate indexes...</tr>";
    
                    
                }
                
                Once we have exited the loop we need to finish the table element.
                
                statsData = statsData + "</table>";
                
                Now this string when executed as a innerHTML will be evaluated by a browser as html. We already have our empty element5 defined and just need to stick this inside it.
                
                document.getElementById("statsInfo").innerHTML = statsData.
                document.getElementById("statsInfo").style.display= "inline";
            */
            /* $.ajax({
                    url: "stats.php",
                    type: "POST",
                    data: {beer: beer,
                           spirit: spirit},
                     .done (function(data)) {
                        alert("the data coming back is : "+data);
                        var stats = JSON.parse(data);
                        $('#statsInfo').html(data);
                     });
                        
                  
                    }
                });
            }
            */
             $.ajax({
                    url: "stats.php",
                    type: "POST",
                    data: {beer: beer,
                           spirit: spirit},
                    success: function(data) {
                        alert("the data coming back is : "+data);
                        var stats = JSON.parse(data);
                        
                    
                        
               
                    }
                });
            }
            
    </script>
    </script>
</head>



<body>
    <!-- Progress bar holder -->
<div id="progress" style="width:500px;border:1px solid #ccc;"></div>
<!-- Progress information -->
<div id="information" style="width"></div>

<?php
// Total processes
$total = 10;

// Loop through process
for($i=1; $i<=$total; $i++){
  // Calculate the percentation
  $percent = intval($i/$total * 100)."%";

  // Javascript for updating the progress bar and information
  echo '<script language="javascript">
  document.getElementById("progress").innerHTML="<div style=\"width:'.$percent.';background-color:#ddd;\">&nbsp;</div>";
  document.getElementById("information").innerHTML="'.$i.' row(s) processed.";
  </script>';

  // This is for the buffer achieve the minimum size in order to flush data
  echo str_repeat(' ',1024*64);

  // Send output to browser immediately
  flush();

  // Sleep one second so we can see the delay
  sleep(1);
}

// Tell user that the process is completed
echo '<script language="javascript">document.getElementById("information").innerHTML="Process completed"</script>';
?>
<!-- The Modal -->

    <div id="nav">
    <nav class="navbar navbar-default navbar-static affix-top" role="navigation">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="container">


      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="fourbyfour" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
        </ul>
        <ul class="nav navbar-nav navbar-right1" style= width:100%;>
          <li id="b"><a href="#" onclick="setTimeout(makeBeer, 1000)"><center>Make Beer</center></a></li>
          <li id="a"><a href="#" onclick="setTimeout(makeSpirits, 1000)"><center>Make Spirits</center></a></li>
          <li id="b"><a href="#" onclick="setTimeout(makeWine, 1000)"><center>Make Wine</center></a></li>
          <li id="a"><a href="#" onclick="setTimeout(makeCider, 1000)"><center>Make Cider</center></a></li>
            </ul>
          </li>
        </ul>
      </div><!-- /.navbar-collapse -->
    </div>
    </nav>
  </div>
  


<div id="id01" class="modal">
  
  <form class="modal-content animate" action="action_page.php">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="img_avatar2.png" alt="Avatar" class="avatar">
    </div>

    <div class="container">
      <label><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="uname" required>

      <label><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required>
        
      <button type="submit">Login</button>
      <input type="checkbox" checked="checked"> Remember me
    </div>

    <div class="end" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
      <span class="psw">Forgot <a href="#">password?</a></span>
    </div>
  </form>
</div>


<div id="chatBox" class="modal">
  
  <form class="modal-content animate">
    <div class="imgcontainer" id='chatSpan'>
      <span onclick="document.getElementById('chatBox').style.display='none'" class="close" title="Close Modal">&times;</span>
      
    </div>

    <div class="container">
      <label><b>Message</b></label>
      <input type="textarea" placeholder="Enter your message" name="message"/>

      <label ></label>
        
        <button type="button">Send</button>
      &nbsp;&nbsp;&nbsp;&nbsp;
        <button type="button">Sell Beer</button>
      </div>
    
      <div id="statsInfo" style="display:none"> 
        <button type = button> Check Beer Baron Player Stats</button>
      </div>
      
    
  </form>
</div>



  <div id="wrapper">
  <div id="left">
    <section id="about" class="container">
      <div class="row">
        <div class="col-md-3">
         
          <h3>PO PO</h3>
          <p></p>
        </div>
      </div>
    </section>
</div>

<div id="right">
      <section id="about9" class="container"> 
      <div class="row">
        <div class="col-md-3">
         
          <h3>Beer Baron</h3>
          <p></p>
        </div>
      </div>
    </section>
  </div>
</div>

  <footer>
    <div class="container">
      <div class="row">
        <div class="col-md-3">
          <h4>KapukAlas</h4>
          <p>Duis viverra suscipit vehicula. Aenean eu massa leo. Sed ullamcorper pretium risus eu scelerisque. Mauris venenatis consequat ultrices. Quisque fringilla sed lacus eu volutpat.</p>
        </div>
        <div class="col-md-3">
          <h4>Our location</h4>
          <div class="row">
            <div class="col-md-1"><span class="glyphicon glyphicon-map-marker"></span></div>
            <div class="col-md-10">Vestibulum placerat, enim sit amet congue aliquet.</div>
          </div><br>
          <div class="row">
            <div class="col-md-1"><span class="glyphicon glyphicon-envelope"></span></div>
            <div class="col-md-10">varius@nibh.lectus.com</div>
          </div><br>
          <div class="row">
            <div class="col-md-1"><span class="glyphicon glyphicon-earphone"></span></div>
            <div class="col-md-10">08888-72738-23</div>
          </div>
        </div>
        <div class="col-md-3">
          <h4>Latest blogs</h4>
          <div class="row">
            <div class="col-md-1"><span class="glyphicon glyphicon-pencil"></span></div>
            <div class="col-md-10">Maecenas suscipit in est a placerat. Curabitur semper sed nibh sed egestas. </div>
          </div><br>
          <div class="row">
            <div class="col-md-1"><span class="glyphicon glyphicon-pencil"></span></div>
            <div class="col-md-10">Maecenas suscipit in est a placerat. Curabitur semper sed nibh sed egestas. </div>
          </div>
        </div>
        <div class="col-md-3">
          <h4>Subscribe</h4>
          <input type="text" class="form-control" placeholder="your email address">
        </div>
      </div>
    </div>
  </footer>  

  <footer id="copyright">
    <p>Copright by @andreyyann 2014, All right reserved.</p>
  </footer>

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script>
      $(function() {
  $('a[href*=#]:not([href=#])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html,body').animate({
          scrollTop: target.offset().top
        }, 1000);
        return false;
      }
    }
  });
});

      $(function() {
  //navbar affix
  $('#nav').affix({
    offset: {
      top: $('header').height()
    }
  });
});

      $('#nav .navbar-nav li>a').click(function(){
  var link = $(this).attr('href');
  var posi = $(link).offset().top+20;
  $('body,html').animate({scrollTop:posi},700);
})


      $( document ).ready(function() {
    $("[rel='tooltip']").tooltip();    
 
    $('.thumbnail').hover(
        function(){
            $(this).find('.caption').fadeIn(250);
        },
        function(){
            $(this).find('.caption').fadeOut(205);
        }
    ); 
});
    </script>
    <script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}

var chatBox = document.getElementById('chatBox');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == chatBox) {
        chatBox.style.display = "none";
    }
}

</script>

<script>
// Script for geolocation. HTML5 GeoLocation API
function getUserLocation(){
  
  if(navigator.geolocation){
    navigator.geolocation.getCurrentPosition(showPosition);
  } else {
    alert("Cannot find location");
  }
}
function showPosition(position){
  var latitude = position.coords.latitude;
  var longitude = position.coords.longitude;
  
  
  
  alert("Latitude: "+latitude+"  Longitude: "+longitude);
  $('.dropdown-menu').children().empty();
 /* var chatList = [
    {"username":"John", "lastSeen":"2 mins ago"}, 
    {"username":"Alan", "lastSeen":"5 mins ago"}, 
    {"username":"Smith", "lastSeen":"7 mins ago"}
];*/
/*for(var i=0; i<chatList.length; i++){
        var element = "<li><a id='userDetails"+i+"' onclick='startChat(this);'>"+chatList[i].username+"&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"+chatList[i].lastSeen+"</a></li>";
        $('.dropdown-menu').append(element);
}*/


  

//$('.dropdown-menu').children().empty();

$.ajax({
  url: "./pages/Location.php",
  type: "POST",
  data: {latitude: latitude, longitude: longitude},
    success: function parseData(chatList){
      for(var i=0; i<chatList.length; i++){
        var element = "<li><a id='userDetails"+i+"' onclick='startChat(this);'>"+chatList[i].username+"&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"+chatList[i].lastSeen+"</a></li>";
        $('.dropdown-menu').append(element);
      }
    }
});
  
}
function startChat(element){
  $('#chatBox').show();
  //$('#chatSpan').empty();
  $('#chatSpan').append("<span>"+$(element).text()+"</span>");
  
}
</script>
    <!--  <form>
         <input type="button"  value = "Display Message" onclick="getData('testData.txt','targetDiv')">
         
         </form>-->
    <button name="beer" onclick="setTimeout(makeBeer, 1000)">Make Beer</button>
    <button onclick="setTimeout(makeSpirits, 1000)">Make Spirits</button>
    <button onclick="setTimeout(makeSpirits, 1000)">Make Wine</button>
    <button onclick="checkStats()">Check stats</button>
    
    <div id="targetDiv">
        <p>hello</p>
    </div>
    
    <div id="statsInfo" style="display:none"></div>
    
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

</html>


