@extends('layout.index')
@section('css')
<link rel="stylesheet" type="text/css" href="css/nguoidung.css"> 
@endsection

@section('content')
<div id="main-body">
            <div class="main-content">
                <div class="container">
                    <div class="module module-hostel">
                        <div class="module-header">
                            Danh sách đã đăng
                        </div>
                        <div class="module-content">
                            <form action="" id="appForm" name="appForm" enctype="multipart/form-data" method="post">	
                                @foreach($user->post as $row)
                                <table border="0" cellspacing="0" cellpadding="0" class="manager" id = "table_{{$row->id}}">
                                    <tbody>
                                        <tr>
                                            <td>
                                                <a class="title" href="detail/{{$row->id}}" target="_blank">{{$row->name}}</a><br>
                                                <p class="block_action">
                                                <a href="editpost/{{$row->id}}"><i class="fas fa-edit"></i> Sửa tin</i></a>
                                                <i id = "{{$row->id}}_post_edit"><i class="fas fa-trash-alt"></i>Xoá tin</i>
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
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection

@section('script')
<script>
$(document).ready(function(){
  @foreach($user->post as $row)
  $("#{{$row->id}}_post_edit").click(function(){
    var id = {{$row->id}};
    var flag = confirm("Bạn có chắc chắn xóa tin này???");
    if(flag == true)
    {
    $.ajax({
      type: 'get',
      dataType: 'html',
      url: '{{url('/deletepost')}}',
      data: 'id=' + id,
      success:function(response){
        console.log(response);
        alert("Đã xóa");
        $("#table_{{$row->id}}").html("");
      }
    });
    }
  });
  @endforeach
});
</script>
@endsection