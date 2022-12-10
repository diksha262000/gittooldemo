
<!doctype html>
<html lang="en">

<head>
    
    <title>Log in</title>
</head>

<body>
    <h1>Log in</h1>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>

    <body>
        <form class="loginForm" method="post" action="<?php echo base_url() ?>">
            <!--E-mail-->
            E-Mail :<br>
            <input type="email" id=email name="email"><br>
            <!--PassWord-->
            PASSWORD: <br>
            <input type="password" id="password" name="password"><br>
            <br><button type="submit" name="submit">login</button>
        </form>
        <a href="<?php echo base_url('signup') ?>">signup</a>
    </body>
    </html>