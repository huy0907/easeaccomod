@extends('admin.layout.index')
@section('content')
<div id="page-wrapper">
    <h2>Province</h2>
    <div>
    @foreach ($prov as $row)
        <li>{{$row->province->name}} : {{$row->total}}
    @endforeach 
    </div>

    <h2>Category</h2>
    <div>
    @foreach ($cat as $row)
        <li>{{$row->category->name}} : {{$row->total}}
    @endforeach 
    </div>

    <h2>Total views: {{$view_count}}</h2>

    <h2> Top post </h2>
    @foreach($most_view as $row)
        <li>{{$row->name}} : {{$row->views}}</li>
    @endforeach

    <h2>Total user : {{$user_count}}</h2>
    <h2>Total post :{{$post_count}}</h2>

</div>
@endsection