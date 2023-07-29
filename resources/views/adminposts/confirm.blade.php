@extends('dashboard')

@section('content')

<div class="card">
    <div class="card-header">Xóa bài viết</div>
    <div class="card-body">
        <form method="post" action="{{ route('posts.destroy', $post->post_id) }}" enctype="multipart/form-data">
            @csrf
            @method('DELETE')
            <div class="row mb-3">
                <label class="col-sm-2 col-label-form">Mã bài viết</label>
                <div class="col-sm-10">
                    <input type="text" name="post_id" class="form-control" value="{{ $post->post_id }}" readonly/>
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-2 col-label-form">Tên Bài Viết</label>
                <div class="col-sm-10">
                    <input type="text" name="title" class="form-control" value="{{ $post->title }}" readonly/>
                </div>
            </div>
            <div class="row mb-4">
                <label class="col-sm-2 col-label-form">Ngày Đăng</label>
                <div class="col-sm-10">
                    <input type="text" name="date_posted" class="form-control" value="{{ $post->date_posted }}" readonly/>
                </div>
            </div>
            <div class="row mb-4">
                <label class="col-sm-2 col-label-form">Tác Giả</label>
                <div class="col-sm-10">
                    <input type="text" name="author" class="form-control" value="{{ $post->author->username }}" readonly/>
                </div>
            </div>

            <p>Bạn muốn xóa bài viết này chứ?</p>
            <button type="submit" class="btn btn-danger">Có</button>
            <a href="{{ route('adminposts.index') }}" class="btn btn-secondary">Không</a>
        </form>
    </div>
</div>

@endsection('content')
