@extends('layout.index')
@section('css')
<link rel="stylesheet" type="text/css" href="css/style-index.css">
@endsection

@section('content')
<!--MAIN-->
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
<div id="main-body">
                <div class="block block-vip">
                    
                    <div class="hostel hostel-list vip">
                        <div class="container main">
                            <div class="header vip">Trọ mới</div>
                                <div class="modulecontent">						
                                    @foreach($top_post as $row)
                                    <div class="item vip" title="{{$row->name}}&nbsp;">
                                        <div class="border">
                                            <div class="image">
                                                <a href="detail/{{$row->id}}" style="background-image:url('image/{{$row->image}}')"></a>
                                            </div>
                                            <div class="info col">
                                                <span class="published">Hôm nay</span>
                                                <span class="local"><i class="fa fa-map-marker"></i><a href="#">{{$row->province->name}}</a></span>
                                                <h4 class="title vip">
                                                    <a href="#" target="_blank"><i class="fa fa-check-circle" aria-hidden="true" title="Được xác nhận thông tin"></i>{{$row->name}}&nbsp;</a>
                                                </h4>
                                                <div class="price-area vip">
                                                    <div class="price">
                                                        <span>{{$row->price/1000000}} triệu</span><i>/tháng</i>
                                                    </div>
                                                    <dl class="area">
                                                        <dt><span><i class="fa fa-arrows-alt"></i></span> {{$row->area}} m<sup>2</sup></dt>
                                                    </dl>
                                                </div>
                                                <dl class="address">
                                                    <dt><span><i class="fa fa-map-marker"></i></span> {{$row->address}}</dt>
                                                </dl>
                                            </div>							
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            <div class="viewmore"><a href="#">Xem tất cả <i class="fa fa-angle-right"></i></a></div>
                        </div>
                    </div>
                </div>
                <div class="ads"></div>
                <div class="container main">
                    <div id="bottom">
                        <div class="box-block-group">      
                            <div class="block block-hot">
                                <div class="hostel hostel-list hot">
                                    <div class="main">
                                        <div class="header hot">Lựa chọn HOT</div>
                                        <div class="modulecontent">							
                                            @foreach($most_view as $row)
                                            <div class="item hot column" title="Cho thuê phòng trọ Đường Dương Thiệu Tước giá sinh viên">
                                                <div class="border">
                                                    <div class="image">
                                                        <a href="detail/{{$row->id}}" style="background-image:url('image/{{$row->image}}')" target="_blank"></a>
                                                    </div>
                                                    <div class="info col">
                                                        <span class="local"><i class="fa fa-map-marker"></i> 
                                                            <a href="">{{$row->province->name}}</a>											</span>
                                                        <h4 class="title hot">
                                                            <a href="detail/{{$row->id}}" target="_blank"><i class="fa fa-check-circle" aria-hidden="true" title="Được xác nhận thông tin"></i> {{$row->name}}</a>
                                                        </h4>
                                                        <div class="price-area hot">
                                                            <div class="price">
                                                                <span>{{$row->price/1000000}} triệu</span><i>/tháng</i>
                                                            </div>
                                                            <dl class="area">
                                                                <dt><span><i class="fa fa-arrows-alt"></i></span> {{$row->area}} m<sup>2</sup></dt>
                                                            </dl>
                                                        </div>				
                                                        <dl class="address">
                                                            <dt><span><i class="fa fa-map-marker"></i></span>  {{$row->address}}</dt>
                                                            <dt><span><i class="fa fa-eye"></i></span>  {{$row->views}}</dt>
                                                        </dl>
                                                    </div>
                                                </div>										
                                            </div>
                                            @endforeach
                                        </div>
                                        <div class="viewmore"><a href="#">Xem tất cả <i class="fa fa-angle-right"></i></a></div>
                                    </div>
                                </div>		
                            </div>
                        </div>
                        <div id="sidebar" class="sidebar">
                            <div class="sidebar__inner">
                                <div class="inner">
                                    <div class="py-15"></div>
                                    <div class="py-15"></div>
                                    <div class="py-5"></div>
                                    <div class="box box-form_type">
                                        <div class="box-header"><h2 class="box-title">Loại hình</h2></div>
                                        <div class="box-body">
                                            @foreach($cat as $row)
                                            <div class="item"><a href="#">{{$row->category->name}}<span>({{$row->total}})</span></a></div>
                                            @endforeach
                                        </div>
                                    </div>					
                                    <div class="py-10"></div>
                                    <div class="box box-province">
                                        <div class="box-header"><h2 class="box-title">Khu vực nổi bật</h2></div>
                                        <div class="box-body">
                                            @foreach($prov as $row)
                                            <div class="item">
                                                <a href="#">{{$row->province->name}}<span>({{$row->total}})</span></a>
                                            </div>
                                            @endforeach
                                        </div>
                                    </div>					
                                    <div class="py-10"></div>
                                </div>
                            </div>
                        </div>     
                    </div>           
                </div>
            </div>
            <!--MAIN-->
            <div class="ads"></div>
            <!--NEWS-->
            <div class="news">
                <div class="container">
                <div class="news-header">
                    <h2 class="header-title">Tin mới nhất</h2>
                </div>
                <div class="news-content">
                    <div class="item">
                        <div class="image">
                            <a href="#"><img src="https://tromoi.com/uploads/members/hiephoang/thang%208/27_08/PHONG%20TH%E1%BB%A6Y%20PHONG%20TR%E1%BB%8C%20(2).png"></a>
                        </div>
                        <div class="content">
                            <h4 class="title"><a href="#">Thuê nhà trọ: Bạn cần lưu ý những điều gì?</a></h4>
                            <span class="published">22-10-2020 15:31:33</span>
                            <div class="description">Thuê nhà  trọ tại các thành phố lớn là hoạt động vẫn luôn giữ được sự sôi động nhờ số lượng người dân sinh sống và làm việc đông đúc. Thời gian gần đây, dù ảnh hưởng của dịch bệnh Covid-19 nhưng nhu cầu tìm thuê nhà tại các tỉnh thành lớn vẫn tăng cao. Tuy nhiên, nếu là người đi thuê nhà trong thời điểm này, bạn cần phải lưu ý để tránh “tiền mất tật mang”. Cùng tromoi.com tìm hiểu về những lưu ý khi tìm thuê nhà nhé!
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="image">
                            <a href="#"><img src="https://tromoi.com/uploads/members/hiephoang/Thang%209/PHONG%20TH%E1%BB%A6Y%20PHONG%20TR%E1%BB%8C(1).png"></a>
                        </div>
                        <div class="content">
                            <h4 class="title"><a href="#">Thuê phòng trọ với 5 bí kíp đơn giản nhất!</a></h4>
                            <span class="published">22-10-2020 15:31:33</span>
                            <div class="description">Phòng trọ tại các thành phố lớn luôn được rất nhiều khách hàng tìm kiếm. Tuy nhiên, để tìm thuê phòng trọ tại các thành phố lớn thì bạn cần lưu ý những gì? Hãy tham khảo ngay 5 bí kíp đơn giản nhất được chia sẻ dưới đây để tìm phòng nhanh nhất!
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="image">
                            <a href="#"><img src="https://tromoi.com/uploads/members/hiephoang/thang%208/27_08/PHONG%20TH%E1%BB%A6Y%20PHONG%20TR%E1%BB%8C%20(2).png"></a>
                        </div>
                        <div class="content">
                            <h4 class="title"><a href="#">Thuê nhà trọ: Bạn cần lưu ý những điều gì?</a></h4>
                            <span class="published">22-10-2020 15:31:33</span>
                            <div class="description">Thuê nhà  trọ tại các thành phố lớn là hoạt động vẫn luôn giữ được sự sôi động nhờ số lượng người dân sinh sống và làm việc đông đúc. Thời gian gần đây, dù ảnh hưởng của dịch bệnh Covid-19 nhưng nhu cầu tìm thuê nhà tại các tỉnh thành lớn vẫn tăng cao. Tuy nhiên, nếu là người đi thuê nhà trong thời điểm này, bạn cần phải lưu ý để tránh “tiền mất tật mang”. Cùng tromoi.com tìm hiểu về những lưu ý khi tìm thuê nhà nhé!
                            </div>
                        </div>
                    </div>
                    <div class="viewmore"><a href="https://tromoi.com/danh-sach">Xem thêm <i class="fa fa-angle-right"></i></a></div>
                </div>
                </div>
            </div>
            <!--NEWS-->
            <!--CONTACT-->
            <div class="box-contact">
                <div class="container">
                    <div class="box-header"><div class="box-title">Hỗ trợ khách hàng</div></div>
                    <div class="description">
                        <p>Bạn cần hỗ trợ ngay? Liên hệ với chúng tôi qua các hình thức</p>
                    </div>
                    <div class="box-body">
                        <div class="inner">
                            <div class="item" data-aos="fade-up">
                                <div class="image"><img src="https://tromoi.com/frontend/home/images/icon/house-searcher.svg"></div>
                                <div class="content">
                                    <div class="title">Hỗ trợ đăng tin/tìm kiếm trọ</div>
                                    <div class="description">
                                        <p>0962 462 692</p>
                                        <p>086 9988 279</p>
                                    </div>
                                </div>
                            </div>
                            <div class="item" data-aos="fade-up">
                                <div class="image"><img src="https://tromoi.com/frontend/home/images/icon/credit-card.svg"></div>
                                <div class="content">
                                    <div class="title">Hỗ trợ thanh toán</div>
                                    <div class="description">
                                        <p>0962 462 692</p>
                                        <p>086 9988 279</p>
                                    </div>
                                </div>
                            </div>
                            <div class="item" data-aos="fade-up">
                                <div class="image"><img src="https://tromoi.com/frontend/home/images/icon/customer-service.svg"></div>
                                <div class="content">
                                    <div class="title">Hotline</div>
                                    <div class="description">
                                        <p>0962 462 692</p>
                                        <p>086 9988 279</p>
                                    </div>
                                </div>
                            </div>
                            <div class="item" data-aos="fade-up">
                                <div class="image"><img src="https://tromoi.com/frontend/home/images/icon/zalo.png"></div>
                                <div class="content">
                                    <div class="title">Zalo</div>
                                    <div class="description"><p>0962 462 692</p></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--CONTACT-->
@endsection