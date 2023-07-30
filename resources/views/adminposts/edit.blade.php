@extends('dashboard')

@section('content')

<div class="card">
    <div class="card-header">Sửa bài viết</div>
    <div class="card-body">
        <form method="post" action="{{ route('posts.update', $post->post_id) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="row mb-3">
                <label class="col-sm-2 col-label-form">Mã bài viết</label>
                <div class="col-sm-10">
                    <input type="text" name="post_id" class="form-control" value="{{ $post->post_id }}" readonly />
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-2 col-label-form">Tên bài viết</label>
                <div class="col-sm-10">
                    <input type="text" name="title" class="form-control" value="{{ $post->title }}" />
                </div>
            </div>
            <div class="row mb-4">
                <label class="col-sm-2 col-label-form">Mô tả ngắn</label>
                <div class="col-sm-10">
                    <textarea class="form-control" name="meta" id="exampleFormControlTextarea1"
                        rows="2">{{ $post->meta }}</textarea>
                </div>
            </div>
            <div class="row mb-4">
                <label class="col-sm-2 col-label-form">Nội dung</label>
                <div class="col-sm-10">
                    <textarea class="form-control" name="content" id="exampleFormControlTextarea2"
                        rows="8">{{ $post->content }}</textarea>
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-2 col-label-form">Ngày đăng</label>
                <div class="col-sm-10">
                    <input type="date" name="date_posted" value="{{ $post->date_posted }}" class="form-control" />
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-2 col-label-form">Tên tác giả</label>
                <div class="col-sm-10">
                    <select class="form-control" name="author_id" id="exampleFormControlSelect1">
                        @foreach($authors as $author)
                        @if($author->author_id == $post->author_id)
                        <option value="{{ $post->author_id }}" selected>{{$post->author->username}}</option>
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
                        @if($image->id == $post->image_id)
                        <option value="{{ $post->image_id }}" selected>
                            {{$post->image->image_name}}
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
                <input type="hidden" name="hidden_id" value="{{ $post->post_id }}" />
                <input type="submit" class="btn btn-primary" value="Edit" />
            </div>
        </form>
    </div>
</div>


@endsection('content')