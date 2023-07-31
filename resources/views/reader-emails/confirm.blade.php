@extends('dashboard')

@section('content')

<div class="card">
    <div class="card-header">Xóa Emails</div>
    <div class="card-body">
        <form method="post" action="{{ route('reader-emails.destroy',$email->id) }}" enctype="multipart/form-data">
            @csrf
            @method('DELETE')
            <div class="row mb-3">
                <label class="col-sm-2 col-label-form">Mã đăng ký</label>
                <div class="col-sm-10">
                    <input type="text" name="id" class="form-control" value="{{ $email->id }}" readonly/>
                </div>
            </div>
        
            <div class="row mb-4">
                <label class="col-sm-2 col-label-form">Email</label>
                <div class="col-sm-10">
                    <input type="text" name="email" class="form-control" value="{{ $email->email }}" readonly/>
                </div>
            </div>
           

            <p>Bạn muốn xóa Email này chứ?</p>
            <button type="submit" class="btn btn-danger">Có</button>
            <a href="{{ route('reader-emails.index') }}" class="btn btn-secondary">Không</a>
        </form>
    </div>
</div>

@endsection('content')
