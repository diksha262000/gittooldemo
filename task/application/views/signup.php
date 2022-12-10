

<!doctype html>
<html lang="en">

<head>
    
    <title>Sign Up</title>
</head>

<body>
    <h1>Sign Up</h1>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>

    <body>
        <form class="signupForm" method="post" action="<?php echo base_url(); ?>userSignup">
            Name:<br>
            <input type="text" id="name" name="name"></input>
            <input type="hidden" name="userid" id="userid"> 
            <br>
            <!--E-mail-->
            E-Mail :<br>
            <input type="email" id=email name="email"><br>
            <!--PassWord-->
            PassWord: <br>
            <input type="password" id="password" name="password" ><br>
            <button type="submit" >Signup</button>

        </form>
        <a href="<?php echo base_url() ?>">Login </a>
     
    </body>

    </html>
    