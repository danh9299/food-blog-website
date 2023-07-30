@extends('dashboard')

@section('content')

@if($errors->any())

<div class="alert alert-danger">
    <ul>
        @foreach($errors->all() as $error)

        <li>{{ $error }}</li>

        @endforeach
    </ul>
</div>

@endif

<div class="card mt-3">
    <div class="card-header">Thêm bài viết</div>
    <div class="card-body">
        <form method="post" action="{{ route('posts.store')}}" enctype="multipart/form-data">
            @csrf

            <div class="row mb-3">
                <label class="col-sm-2 col-label-form">Tên bài viết</label>
                <div class="col-sm-10">
                    <input type="text" name="title" class="form-control" />
                </div>
            </div>

            <div class="row mb-4">
                <label class="col-sm-2 col-label-form">Mô tả ngắn</label>
                <div class="col-sm-10">
                    <textarea class="form-control" name="meta" id="exampleFormControlTextarea1" rows="2"></textarea>
                </div>
            </div>
            <div class="row mb-4">
                <label class="col-sm-2 col-label-form">Nội dung</label>
                <div class="col-sm-10">
                    <textarea class="form-control" name="content" id="exampleFormControlTextarea2" rows="8"></textarea>
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-2 col-label-form">Ngày đăng</label>
                <div class="col-sm-10">
                    <input type="date" name="date_posted" class="form-control" />
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-2 col-label-form">Tên tác giả</label>
                <div class="col-sm-10">
                    <select class="form-control" name="author_id" id="exampleFormControlSelect1">
                        @foreach($authors as $author)
                        @if($author->author_id == 0)
                        <option value="0" selected>{{$author->username}}</option>
                        @else
                        <option value="{{$author->author_id}}">{{$author->username}}</option>
                        @endif
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-2 col-label-form">Hình ảnh cho bài viết</label>
                <div class="col-sm-10">
                    <select class="form-control" name="image_id" id="exampleFormControlSelect2">
                        @foreach($images as $image)
                        @if($image->id == 0)
                        <option value="0" selected>
                            {{$image->image_name}}
                        </option>
                        @else
                        <option value="{{$image->id}}">
                            {{$image->image_name}}
                        </option>
                        @endif
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="text-center">
                <input type="submit" class="btn btn-primary" value="Thêm" />
            </div>
        </form>
    </div>
</div>

@endsection('content')