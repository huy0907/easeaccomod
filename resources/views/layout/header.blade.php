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
                <div class="container">
    <div id="searchbar">
        <div class="container">
            <form role="search" method="POST" id="searchformTop" class="searchform js-form-submit-data" data-action-url="https://phongtro123.com/api/search">
                <div class="search_field">
                    <div class="clearfix">
                        <div class="search_field_item search_field_item_tinhthanh">
                            <label class="search_field_item_label">Tỉnh thành</label>
                            <select id="search_city" class="form-control tinh-tp js_select2_tinhthanh js-select-tinhthanhpho" name="tinh">
                                <option value="0">Tất cả</option>
                                <option value="90" selected="">Hồ Chí Minh</option>
                                <option value="41">Hà Nội</option>
                                <option value="72">Đà Nẵng</option>
                                <option value="87">Bình Dương</option>
                                <option value="88">Đồng Nai</option>
                                <option value="89">Bà Rịa - Vũng Tàu</option>
                                <option value="99">Cần Thơ</option>
                                <option value="77">Khánh Hòa</option>
                                <option value="60">Hải Phòng</option>
                                <option value="97">An Giang</option>
                                <option value="55">Bắc Giang</option>
                                <option value="44">Bắc Kạn</option>
                                <option value="102">Bạc Liêu</option>
                                <option value="58">Bắc Ninh</option>
                                <option value="93">Bến Tre</option>
                                <option value="85">Bình Phước</option>
                                <option value="79">Bình Thuận</option>
                                <option value="75">Bình Định</option>
                                <option value="103">Cà Mau</option>
                                <option value="43">Cao Bằng</option>
                                <option value="81">Gia Lai</option>
                                <option value="42">Hà Giang</option>
                                <option value="63">Hà Nam</option>
                                <option value="68">Hà Tĩnh</option>
                                <option value="59">Hải Dương</option>
                                <option value="100">Hậu Giang</option>
                                <option value="51">Hòa Bình</option>
                                <option value="61">Hưng Yên</option>
                                <option value="98">Kiên Giang</option>
                                <option value="80">Kon Tum</option>
                                <option value="48">Lai Châu</option>
                                <option value="84">Lâm Đồng</option>
                                <option value="53">Lạng Sơn</option>
                                <option value="46">Lào Cai</option>
                                <option value="91">Long An</option>
                                <option value="64">Nam Định</option>
                                <option value="67">Nghệ An</option>
                                <option value="65">Ninh Bình</option>
                                <option value="78">Ninh Thuận</option>
                                <option value="56">Phú Thọ</option>
                                <option value="76">Phú Yên</option>
                                <option value="69">Quảng Bình</option>
                                <option value="73">Quảng Nam</option>
                                <option value="74">Quảng Ngãi</option>
                                <option value="54">Quảng Ninh</option>
                                <option value="70">Quảng Trị</option>
                                <option value="101">Sóc Trăng</option>
                                <option value="49">Sơn La</option>
                                <option value="86">Tây Ninh</option>
                                <option value="62">Thái Bình</option>
                                <option value="52">Thái Nguyên</option>
                                <option value="66">Thanh Hóa</option>
                                <option value="71">Thừa Thiên Huế</option>
                                <option value="92">Tiền Giang</option>
                                <option value="94">Trà Vinh</option>
                                <option value="45">Tuyên Quang</option>
                                <option value="95">Vĩnh Long</option>
                                <option value="57">Vĩnh Phúc</option>
                                <option value="50">Yên Bái</option>
                                <option value="82">Đắk Lắk</option>
                                <option value="83">Đắk Nông</option>
                                <option value="47">Điện Biên</option>
                                <option value="96">Đồng Tháp</option>
                            </select>
                            
                        </div>
                        <div class="search_field_item search_field_item_mucgia">
                            <label class="search_field_item_label">Khoảng giá</label>
                            <select class="form-control price js_select2_price" name="gia">
                                <option value="0" selected="">Chọn mức giá</option>
                                <option value="1">Dưới 1 triệu</option>
                                <option value="2">1 triệu - 2 triệu</option>
                                <option value="3">2 triệu - 3 triệu</option>
                                <option value="4">3 triệu - 5 triệu</option>
                                <option value="5">5 triệu - 7 triệu</option>
                                <option value="6">7 triệu - 10 triệu</option>
                                <option value="7">10 triệu - 15 triệu</option>
                                <option value="8">Trên 15 triệu</option>
                            </select>
                            
                        </div>
                        <div class="search_field_item search_field_item_dientich">
                            <label class="search_field_item_label">Diện tích</label>
                            <select id="search_dientich" name="dt" class="form-control js_select2_acreage">
                                <option value="0" selected="">Chọn diện tích</option>
                                <option value="1">Dưới 20 m2</option>
                                <option value="2">20 m2 - 30 m2</option>
                                <option value="3">30 m2 - 50 m2</option>
                                <option value="4"> 50 - 60 m2</option>
                                <option value="5"> 60 - 70 m2</option>
                                <option value="6"> 70 - 80 m2</option>
                                <option value="7"> 80 - 90 m2</option>
                                <option value="8"> 90 - 100 m2</option>
                                <option value="9"> Trên 100 m2</option>
                            </select>
                            
                        </div>
                        <div class="search_field_item search_field_item_submit">
                            <label class="search_field_item_label">&nbsp;</label>
                            <button type="submit" class="btn btn-default btn_search_box"> Lọc tin </button>
                        </div>
                    </div>
                </div>
            <form>
        </div>   
    </div>
</div>
            </header>
            <!--HEADER-->