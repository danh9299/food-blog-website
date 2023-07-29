@extends('dashboard')

@section('content')

<div class="card">
    <div class="card-header">Xóa tác giả</div>
    <div class="card-body">
        <form method="post" action="{{ route('adminauthors.destroy', $author->author_id) }}" enctype="multipart/form-data">
            @csrf
            @method('DELETE')
            <div class="row mb-3">
                <label class="col-sm-2 col-label-form">Mã tác giả</label>
                <div class="col-sm-10">
                    <input type="text" name="author_id" class="form-control" value="{{ $author->author_id }}" readonly/>
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-2 col-label-form">Tên tác giả</label>
                <div class="col-sm-10">
                    <input type="text" name="username" class="form-control" value="{{ $author->username }}" readonly/>
                </div>
            </div>
            <div class="row mb-4">
                <label class="col-sm-2 col-label-form">Email</label>
                <div class="col-sm-10">
                    <input type="text" name="email" class="form-control" value="{{ $author->email }}" readonly/>
                </div>
            </div>
           

            <p>Bạn muốn xóa tác giả này chứ?</p>
            <button type="submit" class="btn btn-danger">Có</button>
            <a href="{{ route('adminauthors.index') }}" class="btn btn-secondary">Không</a>
        </form>
    </div>
</div>

@endsection('content')
