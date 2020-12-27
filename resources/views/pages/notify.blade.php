@extends('layout.index')

@section('content')

</h1> Thông báo </h1>

@foreach($user->notify as $row)
<li class="drop_menu_child">
@if($row->state == 1)
    "Tài khoản của bạn đã được phê duyệt."
@endif
@if($row->state == 2)
    "Bài đăng của bạn của bạn đã được phê duyệt."
@endif
</li>
@endforeach 

@endsection