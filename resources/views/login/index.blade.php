<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="{{url('login/login')}}" method="post"></form>
<h2>登录</h2>
    账号 : <input type="text" name="login_name">
    密码 : <input type="password" name="login_pwd"> 
    <input type="submit" value="登录">
</body>
</html>