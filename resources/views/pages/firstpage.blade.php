@extends('layout.index')
@section('content')
<!--MAIN-->
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
                                                <a href="#" style="background-image:url('image/{{$row->image}}')"></a>
                                            </div>
                                            <div class="info col">
                                                <span class="published">Hôm nay</span>
                                                <span class="local"><i class="fa fa-map-marker"></i><a href="#">{{$row->convince}}</a></span>
                                                <h4 class="title vip">
                                                    <a href="#" target="_blank"><i class="fa fa-check-circle" aria-hidden="true" title="Được xác nhận thông tin"></i>{{$row->name}}&nbsp;</a>
                                                </h4>
                                                <div class="price-area vip">
                                                    <div class="price">
                                                        <span>3 triệu</span><i>/tháng</i>
                                                    </div>
                                                    <dl class="area">
                                                        <dt><span><i class="fa fa-arrows-alt"></i></span> 20 m<sup>2</sup></dt>
                                                    </dl>
                                                </div>
                                                <dl class="address">
                                                    <dt><span><i class="fa fa-map-marker"></i></span> 1007/77/8 Lạc Long Quân, P.11, Q.Tân Bình&nbsp;, Tân Bình</dt>
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
                                            <div class="item hot column" title="Cho thuê phòng trọ Đường Dương Thiệu Tước giá sinh viên">
                                                <div class="border">
                                                    <div class="image">
                                                        <a href="https://tromoi.com/s/10351" style="background-image:url('https://tromoi.com/uploads/guest/o_1e9q2r6da1lqk1g7v10uh1oomc3uq.jpg')" target="_blank"></a>
                                                    </div>
                                                    <div class="info col">
                                                        <span class="local"><i class="fa fa-map-marker"></i> 
                                                            <a href="">Thừa Thiên Huế</a>											</span>
                                                        <h4 class="title hot">
                                                            <a href="https://tromoi.com/s/10351" target="_blank"><i class="fa fa-check-circle" aria-hidden="true" title="Được xác nhận thông tin"></i> Cho thuê phòng trọ Đường Dương Thiệu Tước giá sinh viên</a>
                                                        </h4>
                                                        <div class="price-area hot">
                                                            <div class="price">
                                                                <span>800 ngàn</span><i>/tháng</i>
                                                            </div>
                                                            <dl class="area">
                                                                <dt><span><i class="fa fa-arrows-alt"></i></span> 15 m<sup>2</sup></dt>
                                                            </dl>
                                                        </div>				
                                                        <dl class="address">
                                                            <dt><span><i class="fa fa-map-marker"></i></span>  27B kiệt 50 Dương Thiệu Tước, Thủy Dương, Hương Thủy, Hương Thủy</dt>
                                                        </dl>
                                                    </div>
                                                </div>										
                                            </div>
                                            <div class="item hot column" title="Cho thuê phòng trọ Đường Dương Thiệu Tước giá sinh viên">
                                                <div class="border">
                                                    <div class="image">
                                                        <a href="#" style="background-image:url('https://tromoi.com/uploads/guest/o_1e9q2r6da1lqk1g7v10uh1oomc3uq.jpg')" ></a>
                                                    </div>
                                                    <div class="info col">
                                                        <span class="local"><i class="fa fa-map-marker"></i> 
                                                            <a href="">Thừa Thiên Huế</a>											</span>
                                                        <h4 class="title hot">
                                                            <a href="#"><i class="fa fa-check-circle" aria-hidden="true" title="Được xác nhận thông tin"></i> Cho thuê phòng trọ Đường Dương Thiệu Tước giá sinh viên</a>
                                                        </h4>
                                                        <div class="price-area hot">
                                                            <div class="price">
                                                                <span>800 ngàn</span><i>/tháng</i>
                                                            </div>
                                                            <dl class="area">
                                                                <dt><span><i class="fa fa-arrows-alt"></i></span> 15 m<sup>2</sup></dt>
                                                            </dl>
                                                        </div>				
                                                        <dl class="address">
                                                            <dt><span><i class="fa fa-map-marker"></i></span>  27B kiệt 50 Dương Thiệu Tước, Thủy Dương, Hương Thủy, Hương Thủy</dt>
                                                        </dl>
                                                    </div>
                                                </div>										
                                            </div>
                                            <div class="item hot column" title="Cho thuê phòng trọ Đường Dương Thiệu Tước giá sinh viên">
                                                <div class="border">
                                                    <div class="image">
                                                        <a href="#" style="background-image:url('https://tromoi.com/uploads/guest/o_1e9q2r6da1lqk1g7v10uh1oomc3uq.jpg')"></a>
                                                    </div>
                                                    <div class="info col">
                                                        <span class="local"><i class="fa fa-map-marker"></i> 
                                                            <a href="">Thừa Thiên Huế</a>											</span>
                                                        <h4 class="title hot">
                                                            <a href="#"><i class="fa fa-check-circle" aria-hidden="true" title="Được xác nhận thông tin"></i> Cho thuê phòng trọ Đường Dương Thiệu Tước giá sinh viên</a>
                                                        </h4>
                                                        <div class="price-area hot">
                                                            <div class="price">
                                                                <span>800 ngàn</span><i>/tháng</i>
                                                            </div>
                                                            <dl class="area">
                                                                <dt><span><i class="fa fa-arrows-alt"></i></span> 15 m<sup>2</sup></dt>
                                                            </dl>
                                                        </div>				
                                                        <dl class="address">
                                                            <dt><span><i class="fa fa-map-marker"></i></span>  27B kiệt 50 Dương Thiệu Tước, Thủy Dương, Hương Thủy, Hương Thủy</dt>
                                                        </dl>
                                                    </div>
                                                </div>										
                                            </div>
                                            <div class="item hot column" title="Cho thuê phòng trọ Đường Dương Thiệu Tước giá sinh viên">
                                                <div class="border">
                                                    <div class="image">
                                                        <a href="#" style="background-image:url('https://tromoi.com/uploads/guest/o_1e9q2r6da1lqk1g7v10uh1oomc3uq.jpg')" ></a>
                                                    </div>
                                                    <div class="info col">
                                                        <span class="local"><i class="fa fa-map-marker"></i> 
                                                            <a href="">Thừa Thiên Huế</a>											</span>
                                                        <h4 class="title hot">
                                                            <a href="#"><i class="fa fa-check-circle" aria-hidden="true" title="Được xác nhận thông tin"></i> Cho thuê phòng trọ Đường Dương Thiệu Tước giá sinh viên</a>
                                                        </h4>
                                                        <div class="price-area hot">
                                                            <div class="price">
                                                                <span>800 ngàn</span><i>/tháng</i>
                                                            </div>
                                                            <dl class="area">
                                                                <dt><span><i class="fa fa-arrows-alt"></i></span> 15 m<sup>2</sup></dt>
                                                            </dl>
                                                        </div>				
                                                        <dl class="address">
                                                            <dt><span><i class="fa fa-map-marker"></i></span>  27B kiệt 50 Dương Thiệu Tước, Thủy Dương, Hương Thủy, Hương Thủy</dt>
                                                        </dl>
                                                    </div>
                                                </div>										
                                            </div>
                                            <div class="item hot column" title="Cho thuê phòng trọ Đường Dương Thiệu Tước giá sinh viên">
                                                <div class="border">
                                                    <div class="image">
                                                        <a href="#" style="background-image:url('https://tromoi.com/uploads/guest/o_1e9q2r6da1lqk1g7v10uh1oomc3uq.jpg')" ></a>
                                                    </div>
                                                    <div class="info col">
                                                        <span class="local"><i class="fa fa-map-marker"></i> 
                                                            <a href="">Thừa Thiên Huế</a>											</span>
                                                        <h4 class="title hot">
                                                            <a href="#"><i class="fa fa-check-circle" aria-hidden="true" title="Được xác nhận thông tin"></i> Cho thuê phòng trọ Đường Dương Thiệu Tước giá sinh viên</a>
                                                        </h4>
                                                        <div class="price-area hot">
                                                            <div class="price">
                                                                <span>800 ngàn</span><i>/tháng</i>
                                                            </div>
                                                            <dl class="area">
                                                                <dt><span><i class="fa fa-arrows-alt"></i></span> 15 m<sup>2</sup></dt>
                                                            </dl>
                                                        </div>				
                                                        <dl class="address">
                                                            <dt><span><i class="fa fa-map-marker"></i></span>  27B kiệt 50 Dương Thiệu Tước, Thủy Dương, Hương Thủy, Hương Thủy</dt>
                                                        </dl>
                                                    </div>
                                                </div>										
                                            </div>
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
                                            <div class="item">
                                                <a href="#">Hồ Chí Minh <span>(2196)</span></a>
                                            </div>
                                            <div class="item">
                                                <a href="#">Hà Nội <span>(522)</span></a>
                                            </div>
                                            <div class="item">
                                                <a href="#">Thừa Thiên Huế <span>(504)</span></a>
                                            </div>
                                            <div class="item">
                                                <a href="#">Đà Nẵng <span>(378)</span></a>
                                            </div>
                                            <div class="item">
                                                <a href="#">Cần Thơ <span>(31)</span></a>
                                            </div>
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