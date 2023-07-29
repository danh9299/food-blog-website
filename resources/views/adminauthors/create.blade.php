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
    <div class="card-header">Thêm tác giả</div>
    <div class="card-body">
        <form method="post" action="{{ route('adminauthors.store') }}" enctype="multipart/form-data">
            @csrf
        
            <div class="row mb-3">
                <label class="col-sm-2 col-label-form">Tên tác giả</label>
                <div class="col-sm-10">
                    <input type="text" name="username" class="form-control" />
                </div>
            </div>
            <div class="row mb-4">
                <label class="col-sm-2 col-label-form">Email</label>
                <div class="col-sm-10">
                <input type="text" name="email" class="form-control" />
                </div>
            </div>
            <div class="text-center">
                <input type="submit" class="btn btn-primary" value="Thêm" />
            </div>
        </form>
    </div>
</div>

@endsection('content')
