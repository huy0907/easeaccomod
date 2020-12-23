@extends('layout.index')
@section('css')
<link rel="stylesheet" type="text/css" href="css/nguoidung.css"> 
@endsection

@section('content')
<div id="main-body">
            <div class="main-content">
                <div class="container">
                    <div class="module module-dashboard">
                        <div class="module-content">
                            <div class="box box-widget widget-user">
                                <div class="widget-user-header">
                                    <h3 class="">{{$us->name}}</h3>
                                    <h4 class="widget-user-desc">Email : {{$us->email}}</h4>
                                </div>
                                <div class="widget-user-image" style="background-image:url('https://id.ohi.vn/frontend/images/default-avatar.png');"></div>
                                <div class="box-footer">
                                      <div class="item">
                                        <div class="description-block">
                                          <h4 class="description-header">Tài khoản</h4>
                                          <span class="description-text">{{$us->role->roleName}}</span>
                                        </div>
                                      </div>
                                      <div class="item">
                                        <div class="description-block">
                                          <h4 class="description-header">Tổng số dư</h4>
                                          <span class="description-text">0 đ</span>
                                        </div>
                                      </div>
                                      <div class="item">
                                        <div class="description-block">
                                          <h4 class="description-header">Tin bài</h4>
                                          <span class="description-text">{{$us->post->count()}} tin</span>
                                        </div>
                                      </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @if($user->idRole != 2)
                    <div class="module module-hostel">
                        <div class="module-header">
                            Danh sách đã đăng
                        </div>
                        <div class="module-content">
                            <form action="" id="appForm" name="appForm" enctype="multipart/form-data" method="post">	
                                @foreach($us->post as $row)
                                <table border="0" cellspacing="0" cellpadding="0" class="manager">
                                    <tbody>
                                        <tr>
                                            <td>
                                                <a class="title" href="detail/{{$row}}" target="_blank">{{$row->name}}</a><br>
                                                <p class="block_action">
                                                    <a href="detail/{{$row}}" class="action edit"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Sửa tin</a>
                                                    <a href="javascript:void(0)" class="action trash"><i class="fa fa-trash-o" aria-hidden="true"></i> Xoá tin</a>
                                                <p class="detail">Mã tin: <span>{{$row->id}}</span></p>
                                                <p class="detail block_hits">Lượt xem tin: <span>{{$row->views}}</span></p>
                                                <p class="detail block_time"></p>
                                                <p class="detail created">Thời gian tạo: <span>{{$row->created_at}}</span></p>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                @endforeach
                            </form>
                            <script type="text/javascript">
                                function OnSubmitForm(url) { 
                                    var flag = confirm('Bạn có đồng ý xóa tin này không?');
                                    if(flag == true){
                                        document.appForm.action = url;
                                        document.appForm.submit();
                                        return true;
                                    }
                                }
                                Guest.OptionTin();
                            </script>
                        </div>
                    </div>
                    @endif
                    <div class="module module-hostel" style="top: 10px;/* bottom: 10px; */margin-bottom: 20px;">
                        <div class="module-header">
                            Danh sách tin đã lưu
                        </div>
                        <div class="module-content">
                            <ol>
                            @foreach($us->favorite as $row)
                            <li><a class="title" href="detail/{{$row->post->id}}" target="_blank">{{$row->post->name}}</a></li><br>			
                            @endforeach
                            <ol>
                            <script type="text/javascript">
                                function OnSubmitForm(url) { 
                                    var flag = confirm('Bạn có đồng ý xóa tin này không?');
                                    if(flag == true){
                                        document.appForm.action = url;
                                        document.appForm.submit();
                                        return true;
                                    }
                                }
                                Guest.OptionTin();
                            </script>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
@endsection