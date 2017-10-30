<!DOCTYPE html>
<html>
   
    
    
<?php
echo "Hello, " . $_SESSION['username'] . " You're logged in!";
if ($_SESSION['report'] > 0) {
    if ($_SESSION['report'] == 1) {

        echo "<br>"; //new line
        echo "Failed attempt is: " . $_SESSION['report'];
    } elseif ($_SESSION['report'] > 1) {

        echo "<br>"; //new line
        echo "Failed attempts are: " . $_SESSION['report'];
    }
}
echo "<br>"; //new line
echo " Date is " . date("Y/m/d");
echo "<br>"; //new line
echo "Time is " . date("h/i/s");

if (!empty($_SESSION['authenticated '])) {
    header("Location: /logout");
} else {
    $_SESSION['authenticated '] = true;
}
?>
<br/>

<h1 style="color:whitesmoke;"> <a href="/logout"> Logout </a> </h1>



    <body style="background-color:darkorange;"> </body>
    <h1 style="color:black;">Welcome to COSC4806</h1>
    <h1 style="color:black;">WEB DATA MANAGEMENT</h1>
</body>
</html>



    <!DOCTYPE html>
<html>
<title>WEB DATA MANAGEMENT</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<style>
body,h1 {font-family: "Raleway", sans-serif}
body, html {height: 100%}
.bgimg {
    background-image: url('/w3images/forestbridge.jpg');
    min-height: 100%;
    background-position: center;
    background-size: cover;
}
</style>
<body>

<div class="bgimg w3-display-container w3-animate-opacity w3-text-white">
  <div class="w3-display-topleft w3-padding-large w3-xlarge">
    WDM
  </div>
  <div class="w3-display-middle">
    <h1 class="w3-jumbo w3-animate-top"> Coming Soon </h1>
    <hr class="w3-border-grey" style="margin:auto;width:40%">
    <p class="w3-large w3-center">Dec 2017</p>
  </div>
  <div class="w3-display-bottomleft w3-padding-large">
   </div>
</div>

</body>
</html>






<?php require_once '../app/views/templates/footer.php' ?>
