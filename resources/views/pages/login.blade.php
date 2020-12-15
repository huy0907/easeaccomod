<!DOCTYPE html>
<html>
    <head>
        <title>Đăng nhập</title>
        <link rel="stylesheet" type="text/css" href="css/style-login.css">
    </head>
    <body>
        <div class="loginbox">
        <img src="images/avatar-login.png" class="avatar">
            <h1>Đăng nhập</h1>
            @if(count($errors) > 0)
                <div class = "alert alert-danger">
                    @foreach($errors->all() as $err)
                        {{$err}}<br>
                    @endforeach
                </div>
            @endif

            @if(session('notify'))
                <div class = "alert alert-danger">  
                    {{session('notify')}}
                </div>
            @endif
            <form action = "login" method = "post">
            <input type="hidden" name = "_token" value = "{{csrf_token()}}"/>
                <p>Tài khoản</p>
                <input type="email" name="email" placeholder="">
                <p>Mật khẩu</p>
                <input type="password" name="password" placeholder="">
                <input type="submit" name="" value="Đăng nhập">
                <a href="#">Quên mật khẩu?</a><br>
                <a href="register.html">Chưa có tài khoản? Đăng ký?</a>
            </form>
        </div>
    </body>
</html>