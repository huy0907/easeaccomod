@extends('layout.index')
@section('css')
<link rel="stylesheet" type="text/css" href="css/nguoidung.css"> 
@endsection

@section('content')
<div id="main-body">
    <div class="main-content">
        <div class="container">
            <div class="module module-hostel" style="top: 10px;/* bottom: 10px; */margin-bottom: 20px;">
                                    <div class="module-header">
                                        Danh sách tin đã lưu
                                    </div>
                                    <div class="module-content">
                                        <ol>
                                        @foreach($user->favorite as $row)
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