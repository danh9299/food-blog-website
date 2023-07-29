@extends('dashboard')
@section('content')

<div class="mt-5 mb-5 container col-lg-4 col-lg-offset-4">
<form method="POST"  action="{{route('adminimages.saveImage')}}" enctype="multipart/form-data">
    
    <p>Chọn ảnh để tải lên</p>
    <div class="input-group mb-3">
   
        <div class="custom-file">
        @csrf
        <input type="file" name="image" id="image">
        </div>
    </div>

    <button class="btn btn-primary submit" type="submit">Tải lên ảnh</button>
</form>

</div>
<!-- resources/views/upload_form.blade.php -->
@if(session('success'))
    <p class="text-center" style="color:green">{{ session('success') }}</p>
@endif

@if(session('error'))
    <p class="text-center"  style="color:red">{{ session('error') }}</p>
@endif
@endsection('content')