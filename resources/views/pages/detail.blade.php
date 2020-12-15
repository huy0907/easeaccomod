@extends('layout.index')
@section('css')
<link rel="stylesheet" type="text/css" href="css/chitiettin.css">
@endsection
@section('content')
<div id="main-body">
                <div class="container">
                    <div id="main-content" class="main" style="position: relative;">
                        <div id="center">
                            <div class="hostel hostel-detail">
                                <div class="module">
                                    <div class="moduletitle">
                                        <div class="blog-title">
                                        <div class="title">
                                                <span class="type">{{$post->category->name}}</span>
                                                <h3>{{$post->name}}</h3>
                                                <a href="#" class="province">{{$post->province_id}}</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modulecontent">
                                        <div class="box-content">
                                            <div class="line"></div>
                                            <h2>Hình ảnh</h2>
                                            <div class="images-room">
                                                <ul>
                                                    <li><img src="image/{{$post->image}}"></li>
                                                </ul>
                                            </div>
                                            <div class="line"></div>
                                            <div class="info-wrapper">
                                                <dl><dt>Địa chỉ:</dt><dd> {{$post->address}}</dd></dl>
                                                <dl><dt>Giá:</dt><dd>Khoảng {{$post->price}} đồng/tháng</dd></dl>
                                                <div class="info">
                                                    <div class="i-left">
                                                        <dl><dt>Hình thức:</dt><dd>{{$post->category->name}}</dd></dl>
                                                        <dl><dt>Diện tích:</dt><dd>Khoảng {{$post->area}} m2</dd></dl>
                                                        <dl><dt>Số phòng:</dt><dd>{{$post->bedRoom}}</dd></dl>
                                                        <dl><dt>Ở tối đa:</dt><dd></dd></dl>
                                                        
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
                                                            <dt>Ngày cập nhật:</dt>
                                                            <dd class="published">{{$post->updated_at}}</dd>
                                                        </dl>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="line"></div>
                                            <h2>Thông tin</h2>
                                            <div class="content-detail">
                                                <div class="content"><p>{{$post->description}}</p>
                                                </div>
                                            </div>
                                            <div class="line"></div>
                                            <h2>Tiện nghi</h2>
                                            <div class="box-check">
                                                <ul>
                                                    <li><i class="ico icon"></i><span title="Wifi">Wifi</span></li>
                                                    <li><i class="ico icon"></i><span title="Vệ sinh trong">Vệ sinh trong</span></li>
                                                    <li><i class="ico icon"></i><span title="Bình nóng lạnh">Bình nóng lạnh</span></li>
                                                    <li><i class="ico icon"></i><span title="Kệ bếp">Kệ bếp</span></li>
                                                    <li><i class="ico icon"></i><span title="Máy giặt">Máy giặt</span></li>
                                                    <li><i class="ico icon"></i><span title="Điều hòa">Điều hòa</span></li>
                                                    <li><i class="ico icon"></i><span title="Tủ lạnh">Tủ lạnh</span></li>
                                                    <li><i class="ico icon"></i><span title="Giường nệm">Giường nệm</span></li>
                                                    <li><i class="ico icon"></i><span title="Tủ quần áo">Tủ quần áo</span></li>
                                                    <li><i class="ico icon"></i><span title="Ban công/sân thượng">Ban công/sân thượng</span></li>
                                                    <li><i class="ico icon"></i><span title="Bãi để xe riêng">Bãi để xe riêng</span></li>
                                                    <li><i class="ico icon"></i><span title="Camera an ninh">Camera an ninh</span></li>
                                                </ul>
                                            </div>
                                            <div class="line"></div>
                                            <div class="line"></div>
                                            <h2>Liên hệ Chính chủ</h2>
                                            <div class="box-info-bottom">
                                                <dl>
                                                    <dt><i class="fa fa-user"></i></dt>
                                                    <dd><h3>Đức Khôi</h3></dd>
                                                </dl>
                                                <dl>
                                                <dt><i class="fa fa-phone"></i></dt>
                                                <dd><h3>0962462692</h3></dd>
                                                </dl>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <section class="comment-wrapper clearfix kcblist-inited">
                                @if(isset($user))
                                <form action = "comment/{{$post->id}}" role = "form">
                                <div class = "formcomment"> 
                                    <div class = "form-group">
                                        <textarea class = "textarea" rows = "3" name = "content" method = "post"></textarea>
                                        <input type="hidden" name = "_token" value = "{{csrf_token()}}"/>
                                    </div>
                                    <button type = "submit" class = "btn btn-primary">Bình luận</button>
                                    @endif
                                </div>
                                <div class="comment_list">
                                    <span class="box-head">Bình luận ({{$count}})</span>
                                    <div class = "commentlist">
                                        <div class="list-comment" id="listComment">
                                            <ul data-view="listcm"></ul>
                                        </div>
                                        <ul>
                                        @foreach($post->comment as $row)
                                        <l1>{{$row->user->name}}({{$row->updated_at}}) : {{$row->content}}</li></br>
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
                                            <dd><h3>Đức Khôi</h3></dd>
                                        </dl>
                                        <dl>
                                            <dt><i class="fa fa-mobile"></i></dt>
                                            <dd><h3>0962462692</h3></dd>
                                        </dl>
                                    </div>
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
                                    <div class="item">
                                        <span class="local"><i class="fa fa-map-marker"></i><a href="#">Hồ Chí Minh</a></span>
                                        <a href="#" target="_blank">Phòng Trọ Quận 4 2tr5</a>
                                        <div class="price">
                                            <span>2.5 triệu</span><i>/tháng</i>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <span class="local"><i class="fa fa-map-marker"></i><a href="#">Hồ Chí Minh</a></span>
                                        <a href="#" target="_blank">Phòng Trọ Quận 4 2tr5</a>
                                        <div class="price">
                                            <span>2.5 triệu</span><i>/tháng</i>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <span class="local"><i class="fa fa-map-marker"></i><a href="#">Hồ Chí Minh</a></span>
                                        <a href="#" target="_blank">Phòng Trọ Quận 4 2tr5</a>
                                        <div class="price">
                                            <span>2.5 triệu</span><i>/tháng</i>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <span class="local"><i class="fa fa-map-marker"></i><a href="#">Hồ Chí Minh</a></span>
                                        <a href="#" target="_blank">Phòng Trọ Quận 4 2tr5</a>
                                        <div class="price">
                                            <span>2.5 triệu</span><i>/tháng</i>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <span class="local"><i class="fa fa-map-marker"></i><a href="#">Hồ Chí Minh</a></span>
                                        <a href="#" target="_blank">Phòng Trọ Quận 4 2tr5</a>
                                        <div class="price">
                                            <span>2.5 triệu</span><i>/tháng</i>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <span class="local"><i class="fa fa-map-marker"></i><a href="#">Hồ Chí Minh</a></span>
                                        <a href="#" target="_blank">Phòng Trọ Quận 4 2tr5</a>
                                        <div class="price">
                                            <span>2.5 triệu</span><i>/tháng</i>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <span class="local"><i class="fa fa-map-marker"></i><a href="#">Hồ Chí Minh</a></span>
                                        <a href="#" target="_blank">Phòng Trọ Quận 4 2tr5</a>
                                        <div class="price">
                                            <span>2.5 triệu</span><i>/tháng</i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
@endsection