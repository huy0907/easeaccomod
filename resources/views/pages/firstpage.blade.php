@extends('layout.index')
@section('css')
<link rel="stylesheet" type="text/css" href="css/style-index.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"> 
@endsection

@section('content')
<!--MAIN-->
<div class="wrapper">
		    <div class="row">
		    		<div class="col-xs-6 col-sm-3">
                        <select id="catID">
                            <option value="">Chọn danh mục</option>
                            @foreach($cat_list as $cList)
                            <option class="option" value="{{$cList->id}}">{{$cList->name}}</option>
                            @endforeach
                        </select>
				    </div>
                    <div class="col-xs-6 col-sm-3">
                        <select id="provID">
                            <option value="">Chọn tỉnh thành</option>
                            @foreach($prov_list as $row)
                            <option class="option" value="{{$row->id}}">{{$row->name}}</option>
                            @endforeach
                        </select>
				    </div>
                    <div class="col-xs-6 col-sm-3">
                    <select id="area">
						    <option value="">Chọn diện tích</option>
						    <option value="0-20">Dưới 20 m2</option>
						    <option value="20-30">20-30 m2</option>
						    <option value="30-50">30-50 m2</option>
						    <option value="50-100">50-100 m2</option>
						</select>
				    </div>
				    <div class="col-xs-6 col-sm-3">
						<select id="priceID">
						    <option value="">Chọn tầm giá</option>
						    <option value="0-1">0-1 triệu</option>
						    <option value="1-3">1-3 triệu</option>
						    <option value="3-5">3-5 triệu</option>
						    <option value="5-10">5-10 triệu</option>
						</select>
                    </div>

                    <div class="col-sm-6 hidden-xs">
                        <div class="row">

                            <div class="col-sm-4 pull-right">
                                <button id="findBtn" class="btn btn-success">Tìm kiếm</button>
                            </div>
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
                                            <div class="item" id = "cat-{{$row->category_id}}">{{$row->category->name}}<span>({{$row->total}})</span></div>
                                            @endforeach
                                        </div>
                                    </div>					
                                    <div class="py-10"></div>
                                    <div class="box box-province">
                                        <div class="box-header"><h2 class="box-title">Khu vực nổi bật</h2></div>
                                        <div class="box-body">
                                            @foreach($prov as $row)
                                            <div class="item" id = "prov-{{$row->province_id}}">
                                                {{$row->province->name}}<span>({{$row->total}})</span>
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
</div>
@endsection

@section('script')
<script>
$(document).ready(function(){
  $("#findBtn").click(function(){
    var cat = $("#catID").val();
    var price = $('#priceID').val();
    var area = $('#area').val();
    var province = $('#provID').val();
    $.ajax({
      type: 'get',
      dataType: 'html',
      url: '{{url('/getResult')}}',
      data: 'cat_id=' + cat + "&price=" + price + "&area=" + area + "&province=" + province, 
      success:function(response){
        console.log(response);
        $("#main-body").html(response);
      }
    });
  });
  @foreach($cat as $row)
  $("#cat-{{$row->category_id}}").click(function(){
    var cat = {{$row->category_id}};
    $("#catID option[value='{{$row->category_id}}']").attr("selected","selected");
    $.ajax({
      type: 'get',
      dataType: 'html',
      url: '{{url('/getResult')}}',
      data: 'cat_id=' + cat , 
      success:function(response){
        console.log(response);
        $("#main-body").html(response);
      }
    });
  });
  @endforeach
  @foreach($prov as $row)
  $("#prov-{{$row->province_id}}").click(function(){
    var province = {{$row->province_id}};
    $("#provID option[value='{{$row->province_id}}']").attr("selected","selected");
    $.ajax({
      type: 'get',
      dataType: 'html',
      url: '{{url('/getResult')}}',
      data: 'province=' + province , 
      success:function(response){
        console.log(response);
        $("#main-body").html(response);
      }
    });
  });
  @endforeach
  @for($i = 1; $i < 5; $i++)
  $("#{{$i}}-cat").click(function(){
    var cat = {{$i}};
    $("#catID option[value='{{$i}}']").attr("selected","selected");
    $.ajax({
      type: 'get',
      dataType: 'html',
      url: '{{url('/getResult')}}',
      data: 'cat_id=' + cat , 
      success:function(response){
        console.log(response);
        $("#main-body").html(response);
      }
    });
  });
  @endfor
});
</script>
@endsection