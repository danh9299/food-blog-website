@extends('dashboard')

@section('content')
<!--message here-->
@if($message = Session::get('success'))

<div class="mt-5 alert alert-success">
    {{ $message }}
</div>

@endif
<!--main content-->
<div class="mt-5 card">
    <div class="card-header">Sửa nội dung Liên hệ</div>
    <div class="card-body">
        <form method="post" action="{{route('contact.update',$contact->id)}}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="row mb-3">
           
                <div class="col-sm-10">
                    <input type="text" name="id" class="form-control" value="{{ $contact->id }}" hidden/>
                </div>
            </div>
            <div class="row mb-3">
            <label class="col-sm-2 col-label-form">Địa chỉ</label>
                <div class="col-sm-10">
                    <input type="text" name="address" class="form-control" value="{{ $contact->address }}"/>
                </div>
            </div>
            <div class="row mb-3">
            <label class="col-sm-2 col-label-form">Email</label>
                <div class="col-sm-10">
                    <input type="email" name="email" class="form-control" value="{{ $contact->email }}" />
                </div>
            </div>
            <div class="row mb-3">
            <label class="col-sm-2 col-label-form">Số điện thoại</label>
                <div class="col-sm-10">
                    <input type="text" name="telephone" class="form-control" value="{{ $contact->telephone }}" />
                </div>
            </div>
           
            <div class="text-center">
                <input type="hidden" name="hidden_id" value="{{ $contact->id }}" />
                <input type="submit" class="btn btn-primary" value="Cập nhật" />
            </div>
        </form>
    </div>
</div>

@endsection('content')