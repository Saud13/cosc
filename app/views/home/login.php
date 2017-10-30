<!DOCTYPE html>
<?php require_once '../app/views/templates/headerPublic.php' ?>
<html>
    <body>

        <h1 style="color:black;">


            <body style="background-color:darkorange;">


                <form method="post" action="/login/index">
                    Username:<br/>
                    <input type="text" name="username"><br/>
                    Password<br/>
                    <input type="password" name="password"><br/>
                    <br/>		
                    <input type="submit" value="Login">
                    <br/>
                    <br/>
                    <a href="/Reports/attempts"> Report </a>
                    <br/>
                    <br/>

                    <a href="/login/register"> Create Account </a>
        </h1>

    </body>
</html>



<?php require_once '../app/views/templates/footer.php' ?>
