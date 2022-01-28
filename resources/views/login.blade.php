<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rol
</head>
<body>
<div class="login-box">
    <img src="img/avatar.png" class="avatar" alt="avatar">
    <h1>Toldopamba</h1>
    <form>
        <!-- Username!-->
        <label for="username">Username</label>
        <input type="text" placeholder="Username">

        <!-- Password!-->
          <label for="password">Password</label>
        <input type="password" placeholder="Password">

        <!-- submit!-->
        <input type="submit" value="Login" >

        <a href="#">¿Ha perdido su contraseña?</a>
        <a href="#">Crear cuenta</a>
    </form>
</div>
<style>
    body{
        margin:0;
        padding:0;
        background:url(../img/cafeto.jpg) no-repeat center-top;
        background-size:cover;
        font-family: sans-serif;
        height: 100vh;
    }

    .login-box{
        width: 320px;
        height: 420px;
        background: #F6F8FF;
        color:#23CE6B;
        top:50%;
        left:50%;
        position:absolute;
        transform: translate(-50%,-50%);
        box-sizing: border-box;
        padding: 70px 30px;
    }
    .login-box .avatar{
        width: 100px;
        height: 100px;
        border-radius:50%;
        position:absolute;
        top:-50px;
        left:calc(50%-50px);
    }
    .login-box h1{
        margin:0;
        padding:0;
        text-align: center

    }




    .login-box Label{
        margin:0;
        padding:0;
        font-weight: bold;
        display:block;
    }



</style>



</body>
</html>
