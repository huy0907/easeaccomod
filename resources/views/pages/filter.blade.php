@extends('layout.index')
@section('css')
<link rel="stylesheet" type="text/css" href="css/style-index.css"> 
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"> 
@endsection

@section('content')
<div class="greyBg">
    <div class="container">
		<div class="wrapper">
		    <div class="row">
		    		<div class="col-xs-6 col-sm-3">
                        <select id="catID">
                            <option value="">Chọn danh mục</option>
                            @foreach($cat as $cList)
                            <option class="option" value="{{$cList->id}}">{{$cList->name}}</option>
                            @endforeach
                        </select>
				    </div>
                    <div class="col-xs-6 col-sm-3">
                        <select id="province">
                            <option value="">Chọn tỉnh thành</option>
                            @foreach($prov as $row)
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

        <div class="container main" id = "productData" >
                    <div id="bottom">
                        <div class="box-block-group">      
                            <div class="block block-hot">
                                <div class="hostel hostel-list hot">
                                    <div class="main">
                                       
                                        <div class="modulecontent">							
                                            @foreach($data as $row)
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
                    </div>           
                </div>
	</div>
</div>

@endsection

@section('script')
<script>
$(document).ready(function(){
  $("#findBtn").click(function(){
    var cat = $("#catID").val();
    var price = $('#priceID').val();
    var area = $('#area').val();
    var province = $('#province').val();
    $.ajax({
      type: 'get',
      dataType: 'html',
      url: '{{url('/getResult')}}',
      data: 'cat_id=' + cat + "&price=" + price + "&area=" + area + "&province=" + province, 
      success:function(response){
        console.log(response);
        $("#productData").html(response);
      }
    });
  });
});
</script>
@endsection