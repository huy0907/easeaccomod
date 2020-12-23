<!DOCTYPE html>
<html>
    <head>
        <title>Đăng ký</title>
        <link rel="stylesheet" type="text/css" href="css/style-login.css">
    </head>
    <body>
        <div class="loginbox">
        <img src="images/avatar-login.png" class="avatar">
            <h1>Đăng Ký</h1>
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
            <form action = "register" method = "POST">
            <input type="hidden" name = "_token" value = "{{csrf_token()}}"/>
                <p>Tên</p>
                <input type = "name" name="name" placeholder="Nhập tên của bạn">
                <p>Email</p>
                <input type="email" name="email" placeholder="Nhập email của bạn">
                <p>Mật khẩu</p>
                <input type="password" name="password" placeholder="Nhập mật khẩu">
                <p>Nhập lại mật khẩu</p>
                <input type="password" name="password_again" placeholder="Nhập lại mật khẩu">
                <label class="">
                    <input name="role" value="2" type="radio">Người tìm nhà
                    <input name="role" value="1" type="radio">Người đăng bài
                </label>
                <input type="submit" name="" value="Đăng ký">
                <a href="login">Đã có tài khoản? Đăng nhập?</a>
            </form>
        </div>
    </body>
</html>