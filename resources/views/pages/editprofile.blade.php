@extends('layout.index')
@section('css')
<link rel="stylesheet" type="text/css" href="css/style-tt.css"> 
@endsection

@section('content')
<div class="main">
    <div class="container">
        <div class="col-sm-8">
            <div class="panel">
                <div class="panel-content">

                    <div class="content">
                        <h1>Thay đổi cá nhân</h1>
                        <form action="" onsubmit="return updatePersonal();" method="post">
                            <div class="frame" id="personal_edit">        
                                <div class="inforow">
                                    <label>Họ tên:</label>
                                    <div class="infotext">
                                        <input tabindex="1" type="text" value="" name="fullname" maxlength="40" class="subform_input updtinput">
                                    </div>
                                    <div class="clear"></div>
                                </div>
                                <div class="inforow">
                                    <label>Giới tính:</label>
                                    <div class="infotext">
                                        <label class="sexradio"><input tabindex="2" name="gender" type="radio" value="1"> Nam</label>
                                        <label class="sexradio"><input tabindex="3" name="gender" type="radio" value="0"> Nữ</label>
                                        <div class="clr"></div>
                                    </div> 
                                    <div class="clear"></div>
                                </div>      
                                <div class="inforow">
                                    <label>Số điện thoại:</label>
                                    <div class="infotext">
                                        <input tabindex="7" type="text" value="" name="phone" maxlength="100" class="subform_input updtinput">
                                    </div>
                                </div>
                    
                                <div class="inforow">
                                    <label>Địa chỉ:</label>
                                    <div class="infotext">
                                        <input tabindex="7" type="text" value="" name="address" maxlength="100" class="subform_input updtinput">
                                    </div>
                                    <div class="clear"></div>
                                </div>
                                <div class="inforow">
                                    <label>Mật khẩu cũ:</label>
                                    <div class="infotext">
                                        <input tabindex="1" type="text" value="" name="fullname" maxlength="40" class="subform_input updtinput">
                                    </div>
                                    <div class="clear"></div>
                                </div>
                                <div class="inforow">
                                    <label>Mật khẩu mới:</label>
                                    <div class="infotext">
                                        <input tabindex="1" type="text" value="" name="fullname" maxlength="40" class="subform_input updtinput">
                                    </div>
                                    <div class="clear"></div>
                                </div>
                                <div class="inforow">
                                    <label>Nhập lại mật khẩu mới:</label>
                                    <div class="infotext">
                                        <input tabindex="1" type="text" value="" name="fullname" maxlength="40" class="subform_input updtinput">
                                    </div>
                                    <div class="clear"></div>
                                </div>
                                <div class="inforow right">
                                    <button class="btn">Cập nhật</button>          
                                    <div class="clear"></div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <script type="text/javascript">
                    function updatePersonal(){
                        var fullname = $('input[name="fullname"]').val();
                        if(fullname == ''){
                            alert('Vui lòng nhập tên');
                            return false;
                        }
                    }
                </script>									
            </div>
        </div>
    </div>
</div>

@endsection