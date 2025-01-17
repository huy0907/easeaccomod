@extends('layout.index')
@section('css')
<link rel="stylesheet" type="text/css" href="css/dangtin.css">  -->
@endsection

@section('content')
<div class = "main-body">
    <div class = "container">
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Chỉnh sửa tin đăng</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <div class="col-lg-7" style="padding-bottom:20px">
                        @if(count($errors) > 0)
                            <div class = "alert alert-danger">
                                @foreach($errors->all() as $err)
                                    {{$err}}<br>
                                @endforeach
                            </div>
                        @endif

                        @if(session('notify'))
                                <div class = 'alert alert-success'>
                                    {{session('notify')}}
                                </div>
                        @endif
                        <form action="editpost/{{$post->id}}" method="POST" enctype = "multipart/form-data">
                        <input type="hidden" name = "_token" value = "{{csrf_token()}}"/>
                            <div class="form-group">
                                <label>Thể loại</label>
                                <select class="form-control" name = "category">
                                    @foreach($cat as $row)
                                    <option value="{{$row->id}}"
                                    @if($row->id == $post->category_id)
                                    {{"selected"}}
                                    @endif>{{$row->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Tỉnh/thành phố</label>
                                <select class="form-control" name = "province">
                                    @foreach($province as $row)
                                    <option value="{{$row->id}}">{{$row->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Tiêu đề</label>
                                <input class="form-control" name="name" value = "{{$post->name}}" />
                            </div>
                            <div class="form-group">
                                <label>Địa chỉ</label>
                                <input class="form-control" name="address" value = "{{$post->address}}" placeholder="Please Enter address" />
                            </div>
                            <div class="form-group">
                                <label>Ảnh</label>
                                <p><img width = "400px" src = "image/{{explode('?',$post->image)[0]}}"></p>
                                <input class="form-control" name="image" type = "file" />
                            </div>
                            <div class="form-group">
                                <label>Mô tả</label>
                                <textarea id='demo' class="form-control ckeditor" rows="3" name = "description" style="height:220px; width:100%">{{$post->description}}</textarea>
                            </div>
                            <div class="form-group">
                                <label>Giá</label>
                                <input class="form-control" name="price" placeholder="Please Enter price"  value = "{{$post->price}}"/>
                            </div>
                            <div class="form-group">
                                <label>Tiện nghi</label>
                                <ul class = "box">
                                    <li><input type = "checkbox" value = 1 name = "wash_machine" @if($post->wash_machine == 1){{"checked"}} @endif  >  Máy giặt</li>
                                    <li><input type = "checkbox" value = 1 name = "wifi" @if($post->wifi == 1){{"checked"}} @endif >  Wifi</li>
                                    <li><input type = "checkbox" value = 1 name = "tv" @if($post->tv == 1){{"checked"}} @endif >  Tivi</li>
                                    <li><input type = "checkbox" value = 1 name = "air_con" @if($post->air_con == 1){{"checked"}} @endif >  Điều hòa</li>
                                    <li><input type = "checkbox" value = 1 name = "camera" @if($post->camera == 1){{"checked"}} @endif >  Camera</li>
                                    <li><input type = "checkbox" value = 1 name = "garden" @if($post->garden == 1){{"checked"}} @endif >  Sân vườn</li>
                                    <li><input type = "checkbox" value = 1 name = "heater" @if($post->heater == 1){{"checked"}} @endif >  Bình nóng lạnh</li>
                                    <li><input type = "checkbox" value = 1 name = "pool" @if($post->pool == 1){{"checked"}} @endif >  Bể bơi</li>
                                </ul>
                            </div>
                            <div class="form-group">
                                <label>Xung quanh</label>
                                <ul class = "box">
                                    <li><input type = "checkbox" name = "market"  value = 1 @if($post->market == 1){{"checked"}} @endif>  Siêu thị</li>
                                    <li><input type = "checkbox" name = "hospital" value = 1 @if($post->hospital == 1){{"checked"}} @endif>  Bệnh viện</li>
                                    <li><input type = "checkbox" name = "park"  value = 1 @if($post->park == 1){{"checked"}} @endif>  Công viên</li>
                                    <li><input type = "checkbox" name = "stadium"  value = 1 @if($post->stadium == 1){{"checked"}} @endif>  Sân vận động</li>
                                    <li><input type = "checkbox" name = "school"  value = 1 @if($post->school == 1){{"checked"}} @endif>  Trường học</li>
                                    <li><input type = "checkbox" name = "bus"  value = 1 @if($post->bus == 1){{"checked"}} @endif>  Trạm xe bus</li>
                                </ul>
                            </div>
                            <button type="submit" class="btn btn-default" >Chỉnh sửa</button>
                            <button type="reset" class="btn btn-default">Làm mới</button>
                        <form>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
    </div>
</div>
@endsection