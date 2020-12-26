<!-- HEADER -->
<header class>
                <div class="container">
                    <div class="container-inner full">
                        <div class="block-left">
                            <div class="logo">
                                <a href="index"><img src="images/logomain.jpg"></a>
                            </div>
                        </div>
                        <div class="menu">
                            <ul class="nav_top">
                                <a href = "cat/1"><li class="" id = "1-cat">Phòng trọ</li></a>
                                <a href = "cat/2"><li class="" id = "2-cat">Chung cư mini</li></a>
                                <a href = "cat/3"><li class="" id = "3-cat">Nhà nguyên căn</li></a>
                                <a href = "cat/4"><li class="" id = "4-cat">Chung cư nguyên căn</li></a>
                                <li class="li_news"><a href="#">Tin tức</a></li>
                            </ul>
                        </div>
                        <div class="box-user">
                                <ul class="nav_user">
                                    @if(!isset($user))
                                    <li class="li_add-new"><a class="btn red add-new t frm-login" href="post">Đăng tin</a></li>
                                    <li class="li_register"><a class="register frm-login" href="register">Đăng ký</a></li>
                                    <li class="li_login"><a class="login frm-login" href="login">Đăng nhập</a></li>
                                    @else
                                    @if($user->idRole !=2 )
                                    <li class="li_add-new"><a class="btn red add-new t frm-login" href="post">Đăng tin</a></li>
                                    @endif
                                    <li  class="li_admin"><a class="login frm-login" href="">{{$user->name}}</a>
                                        <ul class="drop_menu">
                                        <li class="drop_menu_child"><a href="#" >Tài Khoản:<b>{{$user->name}}</b></a></li>
                                            <li><button><a href="profile/{{$user->id}}">Trang cá nhân</a></button></li>
                                            <hr>
                                            <li> 
                                            <li class="drop_menu_child"><a href="notify">Thông báo</a></li>
                                            <li class="drop_menu_child"><a href="#">Quản lý tin</a></li>
                                            <li class="drop_menu_child"><a href="post">Đăng tin</a></li>
                                            <li class="drop_menu_child"><a href="savepost">Tin đã lưu</a></li>
                                            <li class="drop_menu_child"><a href="#">Quản lý tài khoản</a></li>
                                            <hr>
                                            <li class="drop_menu_child"><a href="#">Hướng dẫn sử dụng</a></li>     
                                        </ul>
                                    </li>
                                    <li class="li_login"><a class="login frm-login" href="logout">Đăng xuất</a></li>
                                    @endif
                                </ul>			
                            <div class="clear"></div>
                    </div>
                </div>
            </header>
            <!--HEADER-->