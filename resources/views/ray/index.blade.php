<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h2>注册</h2>
    <form action="{{url('ray.ray')}}" method="post">
    账号 : <input type="text" name="login_name">
    密码 : <input type="password" name="login_pwd">
    <input type="submit" value="注册">
    </form> 
</body>
</html>