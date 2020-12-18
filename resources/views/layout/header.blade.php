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
                            <li class=""><a href="#">Phòng trọ</a></li>
                            <li class=""><a href="#">Nhà, căn hộ cho thuê</a></li>
                            <li class=""><a href="#">Tìm ở ghép</a></li>
                            <li class="li_news"><a href="#">Blog</a></li>
                            <li class="li_guide"><a href="#">Help</a></li>
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
                                            <li class="drop_menu_child"><a href="#">Số Dư:<b>0VNĐ</b></a></li>
                                            <li><button><a href="profile/{{$user->id}}">Trang cá nhân</a></button></li>
                                            <hr>
                                            <li class="drop_menu_child"><a href="#">Nạp Tiền</a></li>
                                            <li class="drop_menu_child"><a href="#">Quản lý tin</a></li>
                                            <li class="drop_menu_child"><a href="#">Đăng tin</a></li>
                                            <li class="drop_menu_child"><a href="#">Tin đã lưu</a></li>
                                            <li class="drop_menu_child"><a href="#">Lịch sử xem tin</a></li>
                                            <hr>
                                            <li class="drop_menu_child"><a href="#">Lịch sử giao dịch</a></li>
                                            <hr>
                                            <li class="drop_menu_child"><a href="#">Quản lý tài khoản</a></li>
                                            <li class="drop_menu_child"><a href="#">Thay mật khẩu</a></li>
                                            <hr>
                                            <li class="drop_menu_child"><a href="#">Hướng dẫn sử dụng</a></li>
                                            <li class="drop_menu_child"><a href="#">Báo giá</a></li>

                                           
                                            
                                            
                                        </ul>
                                    </li>
                                    <li class="li_login"><a class="login frm-login" href="logout">Đăng xuất</a></li>
                                    @endif
                                </ul>			
                            <div class="clear"></div>
                    </div>
                </div>
                <div class="block-search">
                    <div class="block-inner">
                        <div class="container">
                            <div class="box-search">
                                <form id="top-search" name="top-search" method="get">
                                    <label class="search-form-label">
                                        <input type="search" id="search" placeholder="Tìm kiếm..." />
                                        <button class="icon"><i class="fa fa-search"></i></button>  	
                                    </label>
                                </form>
                            </div>
                            <div class="box-search-menu">
                            </div>
                        </div>
                    </div>    
                </div>
                
            </header>
            <!--HEADER-->