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
    <div class="card-header">Sửa nội dung Chính Sách Bảo Mật</div>
    <div class="card-body">
        <form method="post" action="{{route('policy.update',$policy->id)}}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="row mb-3">
                
                <div class="col-sm-10">
                    <input type="text" name="id" class="form-control" value="{{ $policy->id }}" hidden/>
                </div>
            </div>
            <div class="row mb-4">
                <label class="col-sm-2 col-label-form">Nội dung</label>
                <div class="col-sm-10">
                    <textarea class="form-control" name="policy" id="exampleFormControlTextarea2"
                        rows="8">{{ $policy->policy }}</textarea>
                </div>
            </div>
           
            <div class="text-center">
                <input type="hidden" name="hidden_id" value="{{ $policy->id }}" />
                <input type="submit" class="btn btn-primary" value="Cập nhật" />
            </div>
        </form>
    </div>
</div>

@endsection('content')