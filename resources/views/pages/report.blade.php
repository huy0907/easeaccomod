@extends('layout.index')
@section('css')
<link rel="stylesheet" href="css/report.css">
@endsection
@section('content')
<div class="container">
<h1 id="title">Báo Cáo</h1>
<p id="description">Đề nghị các bạn cung cấp các nội dung chính xác, việc báo cáo chính xác giúp cho công động phát triển tốt hơn  </p>
<p></p>

<div id="body">

<form id="survey-form" action = "report/{{$post_id}}" method="POST" value="Hình ảnh sai">
<input type="hidden" name = "_token" value = "{{csrf_token()}}"/>
 <div class="loaiphong">
  <p style="font-size: 30px; text-align: center;"> Nội Dung Báo Cáo</p>
  
  <input type="checkbox" class="choose" name="movie" value="Hình ảnh sai"> Hình ảnh sai</input>
  <br>
  <input type="checkbox" class="choose" name="movie" value="Giá quá cao"> Giá quá cao</input>
  <br>
  <input type="checkbox" class="choose" name="movie" value="Nhà ở chất lượng kém"> Nhà ở chất lượng kém</input>
  <br>
  <input type="checkbox" class="choose" name="movie" value="Hàng xóm ý thức kém"> Hàng xóm ý thức kém</input>
  <br>
  <input type="checkbox" class="choose" name="movie" value="Hay mất nước,mất điện"> Hay mất nước,mất điện</input>
  <br>
  <input type="checkbox" class="choose" name="movie" value="Tin không đúng sự thật"> Khu vực nhiều tệ nạn</input>
  <br>
  <input type="checkbox" class="choose" name="movie" value=" Khác"> Khác</input>
  <br><br>

  <div style="text-align: center; font-size:30px">Chi tiết</div>
  <br><br>
<textarea name="descrition" rows="4" cols="75" required placeholder="Nhập chi tiết về vần đề cần báo cáo tại đây"></textarea>
<br>
<button class='submit' type="submit" >Submit</button>
            
</form>

</div>
</div>
@endsection
@section('script')
<script src="https://cdn.freecodecamp.org/testable-projects-fcc/v1/bundle.js"></script>

@endsection
  
