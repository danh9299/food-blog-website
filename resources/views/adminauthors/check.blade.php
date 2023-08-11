@extends('dashboard')

@section('content')

<div class="card">
    <div class="card-header">Sửa tác giả</div>
    <div class="card-body">
        <form method="post" action="{{ route('adminauthors.update', $author->author_id) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="row mb-3">
                <label class="col-sm-2 col-label-form">Mã tác giả</label>
                <div class="col-sm-10">
                    <input type="text" name="author_id" class="form-control" value="{{ $author->author_id }}" readonly/>
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-2 col-label-form">Tên</label>
                <div class="col-sm-10">
                    <input type="text" name="username" class="form-control" value="{{ $author->username }}" />
                </div>
            </div>
            <div class="row mb-4">
                <label class="col-sm-2 col-label-form">Email</label>
                <div class="col-sm-10">
                <input type="email" name="email" class="form-control" value="{{ $author->email }}" />
                </div>
            </div>
            
            
            <div class="text-center">
                <input type="hidden" name="hidden_id" value="{{ $author->author_id }}" />
                <input type="submit" class="btn btn-primary" value="Cập Nhật" />
            </div>
        </form>
    </div>
</div>


@endsection('content')
