@extends('layout.index')
@section('css')
<link rel="stylesheet" type="text/css" href="css/chitiettin.css">
@endsection
@section('content')
<div id="main-body">
    <div class="container">
        <div id="main-content" class="main" style="position: relative;">
            @if(session('notify'))
                <div class = "alert alert-danger">  
                    {{session('notify')}}
                </div>
            @endif
            <div id="center">
                <div class="hostel hostel-detail">
                    <div class="module">
                        <div class="moduletitle">
                            <div class="blog-title">
                                <div class="title">
                                    <span class="type">{{$post->category->name}}</span>
                                    <h3>{{$post->name}}</h3>
                                    <a href="#" class="province">{{$post->province->name}}</a>
                                </div>
                            </div>
                            <div class = "social-date" style = "padding-left:10px;">
                                @if(isset($user))
                                @if($user->favorite->where('post_id', $post->id)->count() > 0)
                                <span style="color: #0062C4;cursor:pointer"><i class="far fa-bookmark"></i> Đã lưu tin </span>
                                @else <span style="color: #0062C4;cursor:pointer"><i id = "favor"><i class="far fa-bookmark" id="favor"></i>Lưu tin </span></i>
                                @endif
                                @endif
                                <a href="report/{{$post->id}}"><i class="fas fa-flag" style="" >
	                            </i> Report
                                  
                                 </a>
                            </div>
                        </div>
                        <div class="modulecontent">
                            <div class="box-content">
                                <div class="line"></div>
                                <h2>Hình ảnh</h2>
                                <div class="slideshow-container">
                                    @foreach (explode('?',$post->image) as $row)
                                    <div class="mySlides fade">
                                        <img src="image/{{explode('?',$row)[0]}}" style="width:400px height:200px" >
                                    </div>
                                    @endforeach
                                    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                                    <a class="next" onclick="plusSlides(1)">&#10095;</a>
                                </div>
                                <br>
                                <div style="text-align:center">
                                    @for($i = 1; $i <= count(explode('?',$post->image)); $i++)
                                    <span class="dot" onclick="currentSlide(i)"></span>
                                    @endfor
                                </div>
                                <script>
                                    var slideIndex = 1;
                                    showSlides(slideIndex);
                                    
                                    function plusSlides(n) {
                                        showSlides(slideIndex += n);
                                    }
                                    
                                    function currentSlide(n) {
                                        showSlides(slideIndex = n);
                                    }
                                    
                                    function showSlides(n) {
                                        var i;
                                        var slides = document.getElementsByClassName("mySlides");
                                        var dots = document.getElementsByClassName("dot");
                                        if (n > slides.length) {slideIndex = 1}    
                                        if (n < 1) {slideIndex = slides.length}
                                        for (i = 0; i < slides.length; i++) {
                                            slides[i].style.display = "none";  
                                        }
                                        for (i = 0; i < dots.length; i++) {
                                            dots[i].className = dots[i].className.replace(" active", "");
                                        }
                                        slides[slideIndex-1].style.display = "block";  
                                        dots[slideIndex-1].className += " active";
                                    }
                                </script>
                                    
                            </div>
                                <div class="line"></div>
                                <div class="info-wrapper">
                                    <dl><dt>Địa chỉ:</dt><dd> {{$post->address}}</dd></dl>
                                    <dl><dt>Giá:</dt><dd>Khoảng {{$post->price/1000000}} triệu đồng/tháng</dd></dl>
                                    <div class="info">
                                        <div class="i-left">
                                            <dl><dt>Hình thức:</dt><dd>{{$post->category->name}}</dd></dl>
                                            <dl><dt>Diện tích:</dt><dd>Khoảng {{$post->area}} m2</dd></dl>
                                            <dl><dt>Ngày đăng:</dt><dd>{{$post->created_at}}</dd></dl>  
                                        </div>
                                        <div class="i-right">
                                            <dl>
                                                <dt>Người đăng:</dt>
                                                <dd><span>{{$post->user->name}}</span></dd>
                                            </dl>
                                            <dl>
                                                <dt>Điện thoại:</dt>
                                                <dd><span>{{$post->user->phone}}</span></dd>
                                            </dl>
                                            <dl>
                                                <dt>Email:</dt>
                                                <dd>{{$post->user->email}}</dd>
                                            </dl>
                                            <dl>
                                                <dt>Trạng thái:</dt>
                                                <dd>
                                                @if($post->state == 1)
                                                {{"Còn phòng"}}
                                                @else {{"Hết phòng"}}
                                                @endif
                                                </dd>
                                            </dl>
                                        </div>
                                    </div>
                                </div>
                                <div class="line"></div>
                                <h2>Thông tin</h2>
                                <div class="content-detail">
                                    <div class="content">{!!$post->description!!}
                                    </div>
                                </div>
                                <div class="line"></div>
                                <div class = "vips">
                                    
                                    <div class="box-check">
                                        <h2>Tiện nghi</h2>
                                        <ul>
                                            @if($post->wash_machine == 1)
                                            <li><i class="fas fa-dumpster-fire"></i><span title="Máy giặt">Máy giặt</span></li>
                                            @endif

                                            @if($post->wifi == 1)
                                            <li><i class="fas fa-wifi"></i><span title="Wifi">Wifi</span></li>
                                            @endif
                                            
                                            @if($post->tv == 1)
                                            <li><i class="fas fa-tv"></i><span title="Tivi">Tivi</span></li>
                                            @endif
                                            
                                            @if($post->air_con == 1)
                                            <li><i class="fas fa-fan"></i><span title="Điều hòa">Điều hòa</span></li>
                                            @endif
                                            
                                            @if($post->camera == 1)
                                            <li><i class="fas fa-video"></i><span title="Camera">Camera</span></li>
                                            @endif
                                        
                                            @if($post->garden == 1)
                                            <li><i class="fas fa-mountain"></i><span title="Sân vườn">Sân vườn</span></li>
                                            @endif
                                            @if($post->heater == 1)
                                            <li><i class="fas fa-hot-tub"></i><span title="Bình nóng lạnh">Bình nóng lạnh</span></li>
                                            @endif
                                            
                                            @if($post->pool == 1)
                                            <li><i class="fas fa-swimmer"></i><span title="Bể bơi">Bể bơi</span></li>
                                            @endif
                                            
                                        </ul>
                                    </div>
                                    
                                    <div class="box-check">
                                        <h2>Tiện ích xung quanh</h2>
                                        <ul>
                                        @if($post->market == 1)
                                            <li><i class="fas fa-hotel"></i><span title="Siêu thị">Siêu thị</span></li>
                                            @endif
                                            @if($post->hospital == 1)
                                            <li><i class="fas fa-hospital"></i><span title="Bệnh viện">Wifi</span></li>
                                            @endif
                                            @if($post->park == 1)
                                            <li><i class="fas fa-tree"></i><span title="Công viên">Công viên</span></li>
                                            @endif
                                            @if($post->school == 1)
                                            <li><i class="fas fa-school"></i><span title="Trường học">Trường học</span></li>
                                            @endif
                                            @if($post->bus == 1)
                                            <li><i class="fas fa-bus-alt"></i><span title="Điểm chờ xe buýt">Điểm chờ xe buýt</span></li>
                                            @endif
                                            @if($post->stadium == 1)
                                            <li><i class="fas fa-running"></i><span title="Sân vân động">Sân vận động</span></li>
                                            @endif
                                        </ul>
                                    </div>
                                </div>
                                <div class="line"></div>
                            </div>
                        </div>
                    </div>
                    <section class="comment-wrapper clearfix kcblist-inited">
                    @if(isset($user))
                    <div class = "formcomment"> 
                        <div class = "form-group">
                            <textarea class = "textarea" rows = "3" cols = "60"  id = "cmt" name = "content"></textarea>
                        </div>
                        <button class = "btn btn-primary" id = "post_cmt">Bình luận</button>
                    </div>
                    @endif
                    <div class="comment_list">
                        <span class="box-head" id = "count_cmt">Bình luận ({{$count}})</span>
                        <div class = "commentlist">
                            <div class="list-comment" id="listComment">
                                <ul data-view="listcm"></ul>
                            </div>
                            <ul id = "comment_list">
                            @foreach($post->comment as $row)
                            <li>{{$row->user->name}}({{$row->created_at}}): {{$row->content}}</li></br>
                            @endforeach
                            </ul>
                        </div>
                    </div>
                    </section>
                </div>
                <div id="sidebar" class="sidebar" style="">
                    <div class="py-10"></div>
                    <div class="py-10"></div>
                    <div class="sidebar__inner" style="position: relative;">

                        <div class="box-contact right">
                            <div class="box-header">
                                <h2 class="box-title">Liên hệ</h2>
                            </div>
                            <div class="contacts">
                                <dl>
                                    <dt><i class="fa fa-user"></i></dt>
                                    <dd><h3>{{$post->user->name}}</h3></dd>
                                </dl>
                                <dl>
                                    <dt><i class="fa fa-mobile"></i></dt>
                                    <dd><h3>{{$post->user->phone}}</h3></dd>
                                </dl>
                            </div>
                        </div>
                        <div class="py-10"></div>
                        <div class="py-10"></div>
                        <div class="py-10"></div>
                        <div class="box box-province">
                        <div class="box-header">
                            <h2 class="box-title">Liên quan</h2>
                        </div>
                        <div class="box-body">
                            @foreach($post_relate as $row)
                            <div class="item">
                                <span class="local"><i class="fa fa-map-marker"></i><a href="#">{{$row->province->name}}</a></span>
                                <a href="detail/{{$row->id}}" target="_blank">{{$row->name}}</a>
                                <div class="price">
                                    <span>{{$row->price/1000000}} triệu</span><i>/tháng</i>
                                </div>
                            </div>
                            @endforeach
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
    $("#favor").click(function(){
    @if(isset($user))
    var user_id = {{$user->id}};
    var post_id = {{$post->id}};
    $.ajax({
      type: 'get',
      dataType: 'html',
      url: '{{url('/addFavor')}}',
      data: 'user_id=' + user_id + "&post_id=" + post_id , 
      success:function(response){
        alert("Đã thêm vào danh sách đã lưu");
        $("#favor").html("Đã lưu");
      }
    });
    @endif
  });
  $("#post_cmt").click(function(){
    @if(isset($user))
    var comment_content = $('#cmt').val();
    var count_cmt = {{$count}};
    if(comment_content =="")
    {
        alert("Bạn chưa nhập nội dung comment");
    }
    else
    {
        $.ajax({
      type: 'get',
      dataType: 'html',
      url: '{{url('/comment')}}',
      data: 'post_id=' + {{$post->id}} + "&content=" + comment_content, 
      success:function(response){
        $("#cmt").val("");
        $("#comment_list").append("<li>{{$user->name}}(Vừa xong)" + " : " + comment_content+"</li>");
        count_cmt =  count_cmt + 1;
        $("#count_cmt").html("Bình luận (" + count_cmt + ")");
      }
    });
    }
    
    @endif
  });
});
</script>
@endsection     
