@extends('dashboard')

@section('content')

<div class="card">
    <div class="card-header">Sửa hình ảnh</div>
    <div class="card-body">
        <form method="post" action="{{route('adminimages.updateImage', $image->id)}}" enctype="multipart/form-data">
            @csrf
            @method('POST')
            <div class="row mb-3">
                <label class="col-sm-2 col-label-form">Mã hình ảnh</label>
                <div class="col-sm-10">
                    <input type="text" name="id" class="form-control" value="{{ $image->id }}" readonly />
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-2 col-label-form">Tên Ảnh</label>
                <div class="col-sm-10">
                    <input type="text" name="image_name" class="form-control" value="{{ $image->image_name }}"
                     />
                </div>
            </div>
            <div class="row mb-3">
                <img src="{{asset('assets/images/'.$image->image_name)}}" style=" width:300px; height:300px"/>
            </div>
            <p>Xác nhận sửa ảnh?</p>
            <button type="submit" class="btn btn-danger">Có</button>
            <a href="{{ route('adminimages.showAll') }}" class="btn btn-secondary">Không</a>
        </form>
    </div>
</div>

@endsection('content')