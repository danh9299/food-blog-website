@extends('dashboard')

@section('content')

<div class="card mt-5">
    <div class="card-header row">
        <div class="col-10">
            <div class="col col-md-11">Hình Ảnh: {{$image->image_name}}</div>
        </div>
        <div class="col-2">
            <a class="btn btn-primary" href="{{route('adminimages.showAll')}}">Xem tất cả hình ảnh</a>
        </div>
    </div>
    <div class="card-body">

        <img src="{{asset('assets/images/'.$image->image_name)}}" />






    </div>
</div>

@endsection('content')