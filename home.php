<?php
session_start();
$usermob = $_POST['mobile'];
$password =$_POST['password'];
$_SESSION['sender_mobile'] = $usermob;
$_SESSION['sender_password'] = $password;
?>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <style>
        form {
            text-align: center;
        }
    </style>
    <body>
        <form action="sendsms.php" method="POST">
            <h1 style="background-color: red">Welcome</h1>
                Target Number:    <input type="number" name="mob"><br>
            <br/>
            <textarea name="msg" rows="4" cols="50" maxlength="140">
</textarea>
            <br/>
            <br/>

            <input type="submit" value="SEND">
            <br/>
            <br/>
            <br/>
            <b> 
                * All the fields are mandatory. <br /> **ONLY 140 Character Allowed <br />  *** Please include "+91" without quotes<br /> **** Login will be successful even with wrong credentials, but message would not be delivered. 
            </b>

        </form>
    </body>
</html>

