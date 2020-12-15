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
                                    <h3 class="widget-user-username">khoinguyen2000</h3>
                                    <h4 class="widget-user-desc">Tài khoản : khoinguyen2000</h4>
                                </div>
                                <div class="widget-user-image" style="background-image:url('https://id.ohi.vn/frontend/images/default-avatar.png');"></div>
                                <div class="box-footer">
                                      <div class="item">
                                        <div class="description-block">
                                          <h4 class="description-header">Tài khoản</h4>
                                          <span class="description-text">Thành viên</span>
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
                                          <span class="description-text">1 tin</span>
                                        </div>
                                      </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="module module-hostel">
                        <div class="module-header">
                            Danh sách Tin
                        </div>
                        <div class="module-content">
                            <form action="" id="appForm" name="appForm" enctype="multipart/form-data" method="post">	
                                <table border="0" cellspacing="0" cellpadding="0" class="manager">
                                    <tbody>
                                        <tr>
                                            <td>
                                                <a class="title" href="https://tromoi.com/s/12533" target="_blank">Phòng trọ 1tr6 Trần Quốc Vượng</a><br>
                                                <p class="block_action">
                                                    <a href="https://tromoi.com/user/sua-tin/12533" class="action edit"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Sửa tin</a>
                                                    <a href="https://tromoi.com/user/het-phong/12533" class="action empty_room"><i class="fa fa-ban" aria-hidden="true"></i> Hết phòng</a>
                                                    <a href="javascript:void(0)" onclick="OnSubmitForm('https://tromoi.com/user/xoa-tin/12533')" class="action trash"><i class="fa fa-trash-o" aria-hidden="true"></i> Xoá tin</a>
                                                </p>			
                                                <p class="detail">Mã tin: <span>12533</span></p>
                                                <p class="detail block_type">Trạng thái: <span class="type">Tin thường</span>, <span class="status">đang hiển thị</span></p>
                                                <p class="detail block_position">Thứ tự hiển thị tin: <strong>8</strong></p>
                                                <p class="detail block_hits">Lượt xem tin: <span>2</span></p>
                                                <p class="detail block_time"></p>
                                                <p class="detail published">Thời gian đăng: <span>15-12-2020 12:52:42</span></p>
                                                <p class="detail created">Thời gian tạo: <span>15-12-2020 12:52:42</span></p>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <table border="0" cellspacing="0" cellpadding="0" class="manager">
                                    <tbody>
                                        <tr>
                                            <td>
                                                <a class="title" href="https://tromoi.com/s/12533" target="_blank">Phòng trọ 1tr6 Trần Quốc Vượng</a><br>
                                                <p class="block_action">
                                                    <a href="https://tromoi.com/user/sua-tin/12533" class="action edit"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Sửa tin</a>
                                                    <a href="https://tromoi.com/user/het-phong/12533" class="action empty_room"><i class="fa fa-ban" aria-hidden="true"></i> Hết phòng</a>
                                                    <a href="javascript:void(0)" onclick="OnSubmitForm('https://tromoi.com/user/xoa-tin/12533')" class="action trash"><i class="fa fa-trash-o" aria-hidden="true"></i> Xoá tin</a>
                                                </p>			
                                                <p class="detail">Mã tin: <span>12533</span></p>
                                                <p class="detail block_type">Trạng thái: <span class="type">Tin thường</span>, <span class="status">đang hiển thị</span></p>
                                                <p class="detail block_position">Thứ tự hiển thị tin: <strong>8</strong></p>
                                                <p class="detail block_hits">Lượt xem tin: <span>2</span></p>
                                                <p class="detail block_time"></p>
                                                <p class="detail published">Thời gian đăng: <span>15-12-2020 12:52:42</span></p>
                                                <p class="detail created">Thời gian tạo: <span>15-12-2020 12:52:42</span></p>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
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
                </div>
            </div>
        </div>
@endsection