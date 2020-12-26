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
                        <input type="hidden" name = "_token" value = "{{csrf_token()}}"/>
                            <div class="frame" id="personal_edit">        
                                <div class="inforow">
                                    <label>Họ tên:</label>
                                    <div class="infotext">
                                        <input tabindex="1" type="text" value="{{$user->name}}" name="fullname" maxlength="40" class="subform_input updtinput">
                                    </div>
                                    <div class="clear"></div>
                                </div>      
                                <div class="inforow">
                                    <label>Số điện thoại:</label>
                                    <div class="infotext">
                                        <input tabindex="7" type="text" value="{{$user->phone}}" name="phone" maxlength="100" class="subform_input updtinput">
                                    </div>
                                </div>
                    
                                <div class="inforow">
                                    <label>Địa chỉ:</label>
                                    <div class="infotext">
                                        <input tabindex="7" type="text" value="{{$user->address}}" name="address" maxlength="100" class="subform_input updtinput">
                                    </div>
                                    <div class="clear"></div>
                                </div>

                                <div class="inforow">
                                    <label>Email:</label>
                                    <div class="infotext">
                                        <input tabindex="7" type="email" value="{{$user->email}}" name="email" maxlength="100" class="subform_input updtinput">
                                    </div>
                                    <div class="clear"></div>
                                </div>

                                <div class="inforow">
                                    <label>Mật khẩu cũ:</label>
                                    <div class="infotext">
                                        <input tabindex="1" type="password" value="123" name="password" maxlength="40" class="subform_input updtinput">
                                    </div>
                                    <div class="clear"></div>
                                </div>
                                <div class="inforow">
                                    <label>Mật khẩu mới:</label>
                                    <div class="infotext">
                                        <input tabindex="1" type="password" value="" name="newpassword" maxlength="40" class="subform_input updtinput">
                                    </div>
                                    <div class="clear"></div>
                                </div>
                                <div class="inforow">
                                    <label>Nhập lại mật khẩu mới:</label>
                                    <div class="infotext">
                                        <input tabindex="1" type="password" value="" name="newpassword" maxlength="40" class="subform_input updtinput">
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