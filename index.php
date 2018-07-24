<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
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
        <form action="home.php" method="POST">
            <h1 style="background-color: red">Login</h1>
                Mobile Number:<input type="number" name="mobile"><br>
            <br/>
                Password: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="password" name="password"><br>
            <br/>
            <br/>

            <input type="submit" value="Submit">
            <br/>
            <br/>
            <br/>
            <b> 
                * All the fields are mandatory. <br /> **Mobile Number and Password should be same as registered in Way2SMS <br />*** Login will be successful even with wrong credentials, but message would not be delivered. 
            </b>

        </form>
    </body>
</html>
