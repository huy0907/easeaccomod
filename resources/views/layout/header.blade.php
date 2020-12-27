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
                                <a href = "cat/4"><li class="" id = "4-cat">Chung cư </li></a>
                                <li class="li_news"><a href="news">Tin tức</a></li>
                            </ul>
                        </div>
                        <div class="box-user">
                                <ul class="nav_user">
                                    @if(!isset($user))
                                    <li class="li_add-new"><a class="btn red add-new t frm-login" href="post">Đăng tin</a></li>
                                    <li class="li_register"><a class="register frm-login" href="register"> Đăng ký</a></li>
                                    <li class="li_login"><a class="login frm-login" href="login">Đăng nhập</a></li>
                                    @else
                                    @if($user->idRole !=2 )
                                    <li class="li_add-new"><a class="btn red add-new t frm-login" href="post">Đăng tin</a></li>
                                    @endif
                                    <li  class="li_admin"><a class="login frm-login" href=""> {{$user->name}}</a>
                                        <ul class="drop_menu">
                                        <li class="drop_menu_child"><a href="#" >Tài Khoản:<b>{{$user->name}}</b></a></li>
                                            <li><button><a href="profile/{{$user->id}}">Trang cá nhân</a></button></li>
                                            <hr>
                                            <li> 
                                            <li class="drop_menu_child"><a href="notify">Thông báo</a></li>
                                            @if($user->idRole !=2 )
                                            <li class="drop_menu_child"><a href="postlist">Quản lý tin</a></li>
                                            <li class="drop_menu_child"><a href="post">Đăng tin</a></li>
                                            @endif
                                            <li class="drop_menu_child"><a href="savepost">Tin đã lưu</a></li>
                                            <hr>
                                            <li class="drop_menu_child"><a href="#">Hướng dẫn sử dụng</a></li>     
                                        </ul>
                                    </li>
                                    <li> 
                                    <style>
                                                .dropbtn {
                                                background-color: #3498DB;
                                                color: white;
                                                    padding: 10px;
                                                    font-size: 10px;
                                                border: none;
                                                cursor: pointer;
                                                border-radius: 10px;
                                                }

                                                .dropbtn:hover, .dropbtn:focus {
                                                background-color: #2980B9;
                                                }

                                                .thongbao {
                                                position: relative;
                                                display: inline-block;
                                                }

                                                .dropdown-content {
                                                display: none;
                                                position: absolute;
                                                background-color: #f1f1f1;
                                                min-width: 350px;
                                                overflow: auto;
                                                box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
                                                z-index: 1;
                                                }

                                                .dropdown-content a {
                                                color: black;
                                                padding: 12px 10px;
                                                text-decoration: none;
                                                display: block;
                                                }

                                                .thongbao a:hover {background-color: #ddd;}

                                                .show {display: block;}
                                                </style>


                                                <div class="thongbao">
                                                <button onclick="myFunction()" class="dropbtn"><i class="far fa-bell " style="color:white"></i></button>
                                                <div id="myDropdown" class="dropdown-content">
                                                    @foreach($user->notify as $row)
                                                    @if($row->state == 1)
                                                        <a> Tài khoản của bạn đã được phê duyệt. </a>
                                                    @endif
                                                    @if($row->state == 2)
                                                       <a>Bài đăng của bạn của bạn đã được phê duyệt. </a>
                                                    @endif
                                                    @endforeach
                                                </div>
                                                </div>

                                                <script>

                                                function myFunction() {
                                                    document.getElementById("myDropdown").classList.toggle("show");
                                                    }


                                                    window.onclick = function(event) {
                                                    if (!event.target.matches('.dropbtn')) {
                                                        var dropdowns = document.getElementsByClassName("dropdown-content");
                                                        var i;
                                                        for (i = 0; i < dropdowns.length; i++) {
                                                        var openDropdown = dropdowns[i];
                                                        if (openDropdown.classList.contains('show')) {
                                                            openDropdown.classList.remove('show');
                                                        }
                                                        }
                                                    }
                                                }
                                                </script>
                                    </li>
                                    <li class="li_login"><a class="login frm-login" href="logout">Đăng xuất</a></li>
                                    @endif
                                </ul>			
                            <div class="clear"></div>
                    </div>
                </div>
            </header>
            <!--HEADER-->