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

<h1 style="color:red;"> <a href="/logout"> Logout </a> </h1>


<html>
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
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        html,body,h1,h2,h3,h4,h5,h6 {font-family: "Roboto", sans-serif}
    </style>
    <body class="w3-light-grey">

        <!-- Page Container -->
        <div class="w3-content w3-margin-top" style="max-width:1400px;">

            <!-- The Grid -->
            <div class="w3-row-padding">

                <!-- Left Column -->
                <div class="w3-third">

                    <div class="w3-white w3-text-grey w3-card-4">
                        <div class="w3-display-container">
                            <img src= style="width:100%" alt="">
                            <div class="w3-display-bottomleft w3-container w3-text-black">
                                <h2>        </h2>
                            </div>
                        </div>
                        <div class="w3-container">
                            <p><i class="fa fa-briefcase fa-fw w3-margin-right w3-large w3-text-teal"></i>4th year student</p>
                            <p><i class="fa fa-home fa-fw w3-margin-right w3-large w3-text-teal"></i>Sault Ste. Marie, Canada</p>
                            <p><i class="fa fa-envelope fa-fw w3-margin-right w3-large w3-text-teal"></i>Salhosan@myalgomau.ca</p>
                            <p><i class="fa fa-phone fa-fw w3-margin-right w3-large w3-text-teal"></i>+1(705)123-4444</p>
                            <hr>

                            <p class="w3-large"><b><i class="fa fa-asterisk fa-fw w3-margin-right w3-text-teal"></i>Skills</b></p>
                            <p>Adobe Photoshop</p>
                            <div class="w3-light-grey w3-round-xlarge w3-small">
                                <div class="w3-container w3-center w3-round-xlarge w3-teal" style="width:90%">90%</div>
                            </div>
                            <p>Photography</p>
                            <div class="w3-light-grey w3-round-xlarge w3-small">
                                <div class="w3-container w3-center w3-round-xlarge w3-teal" style="width:80%">
                                    <div class="w3-center w3-text-white">80%</div>
                                </div>
                            </div>
                            <p>Video editing</p>
                            <div class="w3-light-grey w3-round-xlarge w3-small">
                                <div class="w3-container w3-center w3-round-xlarge w3-teal" style="width:75%">75%</div>
                            </div>
                            <p>Media</p>
                            <div class="w3-light-grey w3-round-xlarge w3-small">
                                <div class="w3-container w3-center w3-round-xlarge w3-teal" style="width:50%">50%</div>
                            </div>
                            <br>

                            <p class="w3-large w3-text-theme"><b><i class="fa fa-globe fa-fw w3-margin-right w3-text-teal"></i>Languages</b></p>
                            <p>Arabic</p>
                            <div class="w3-light-grey w3-round-xlarge">
                                <div class="w3-round-xlarge w3-teal" style="height:20px;width:100%"></div>
                            </div>
                            <p>English</p>
                            <div class="w3-light-grey w3-round-xlarge">
                                <div class="w3-round-xlarge w3-teal" style="height:20px;width:85%"></div>
                            </div>
                            
                            <br>
                        </div>
                    </div><br>

                    <!-- End Left Column -->
                </div>

                <!-- Right Column -->
                <div class="w3-twothird">

                    <div class="w3-container w3-card w3-white w3-margin-bottom">
                        <h2 class="w3-text-grey w3-padding-16"><i class="fa fa-suitcase fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>Work Experience</h2>
                        <div class="w3-container">
                            <h5 class="w3-opacity"><b>Front End Developer </b></h5>
                            <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>Jan 2015 - <span class="w3-tag w3-teal w3-round">Current</span></h6>
                            <p>details here </p>
                            <hr>
                        </div>
                        <div class="w3-container">
                            <h5 class="w3-opacity"><b>Web Developer / something.com</b></h5>
                            <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>Mar 2012 - Dec 2014</h6>
                            <p>details here</p>
                            <hr>
                        </div>
                        <div class="w3-container">
                            <h5 class="w3-opacity"><b>Graphic Designer / designsomething.com</b></h5>
                            <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>Jun 2010 - Mar 2012</h6>
                            <p> details here </p><br>
                        </div>
                    </div>

                    <div class="w3-container w3-card w3-white">
                        <h2 class="w3-text-grey w3-padding-16"><i class="fa fa-certificate fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>Education</h2>
                        <div class="w3-container">
                            <h5 class="w3-opacity"><b>        </b></h5>
                            <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>     </h6>
                            <p> details here</p>
                            <hr>
                        </div>
                        <div class="w3-container">
                            <h5 class="w3-opacity"><b> </b></h5>
                            <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>2013 - 2015</h6>
                            <p>Cyber Hacker Certified</p>
                            <hr>
                        </div>
                        <div class="w3-container">
                            <h5 class="w3-opacity"><b>Algoma University</b></h5>
                            <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>2013 - 2017</h6>
                            <p>Bachelor Degree</p><br>
                        </div>
                    </div>

                    <!-- End Right Column -->
                </div>

                <!-- End Grid -->
            </div>

            <!-- End Page Container -->
        </div>

        <footer class="w3-container w3-teal w3-center w3-margin-top">
            <p>Find me on social media.</p>
            <i class="fa fa-facebook-official w3-hover-opacity"></i>
            <i class="fa fa-instagram w3-hover-opacity"></i>
            <i class="fa fa-snapchat w3-hover-opacity"></i>
            <i class="fa fa-pinterest-p w3-hover-opacity"></i>
            <i class="fa fa-twitter w3-hover-opacity"></i>
            <i class="fa fa-linkedin w3-hover-opacity"></i>
            <p> <a href="https://www.w3schools.com/w3css/default.asp" target="_blank"></a></p>
        </footer>

    </body>
</html>






<?php require_once '../app/views/templates/footer.php' ?>
