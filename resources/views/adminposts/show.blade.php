@extends('dashboard')

@section('content')

<div class="card">
    <div class="card-header">
        <div class="row">
            <div class="col col-md-6"><b>Thông tin bài viết</b></div>
            <div class="col col-md-6">
                <a href="{{ route('adminposts.index') }}" class="btn btn-primary btn-sm float-end">Hiển thị danh sách
                    tất cả bài viết</a>
            </div>
        </div>
    </div>
    <div class="card-body">
        <!--Title-->
        <div class="nda-center">
            <h1> {{$post->title}}</h1>
        </div>
        <!--Meta-->
        <div class="nda-center">
            <p3> {{$post->meta}}</p3>
        </div>
        <br>
        <!--Image-->
        <div class="nda-center ">
            <img src="{{asset('assets/images/'.$post->image->image_name)}}" loading="lazy" class="nda-image" alt="{{$post->image}}" />
        </div>
        <!--Content-->
        <div class="nda-center" style="padding:50px">
            <p3> {{$post->content}}</p3>
        </div>
        <!--Author-->
        <div class="inline-elements">
            <h3 style="color:black;display: inline-block">Tác giả bài viết: </h3>
            <strong><a href="#" class="underline-on-hover"
                    style="color:grey;display: inline-block">{{$post->author->username}}</a></strong>

        </div>
    </div>

    @endsection('content')