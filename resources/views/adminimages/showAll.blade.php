@extends('dashboard')

@section('content')

<!--All Posts
@if($message = Session::get('success'))

<div class="alert alert-success">
    {{ $message }}
</div>

@endif-->

<div class="card mt-5">
    <div class="card-header">
        <div class="row">
            <div class="col col-md-11">Tất Cả Hình Ảnh</div>
            <div class="col col-md-1">
                <a href="{{ route('adminimages.uploadImage') }}" class="btn btn-success btn-sm float-end">Thêm Ảnh</a>
            </div>
        </div>
    </div>
    <div class="card-body">
        <table class="table table-bordered">
            <tr>
                <th>Mã ảnh</th>
                <th>Hình ảnh</th>
                <th>Tên file</th>
             
            </tr>
            @if(count($images) > 0)

            @foreach($images as $row)

            <tr>
                <td>{{ $row->id }}</td>
                <td><img src="{{asset('assets/images/'.$row->image_name)}}" width="80" height="80" class="img-cover"/></td>
                <td>{{ $row->image_name }}</td>
               

                <td>
                    <a href="{{ route('adminimages.confirmDeleteImage', $row->id) }}" class="btn btn-danger btn-sm">Xóa</a>
                    <a href="{{ route('adminimages.showImage', $row->id) }}" class="btn btn-primary btn-sm">Xem</a>
                    <a href="#" class="btn btn-warning btn-sm">Sửa</a>




                </td>
            </tr>

            @endforeach

            @else
            <tr>
                <td colspan="5" class="text-center">No Image Found</td>
            </tr>
            @endif
        </table>

    </div>
</div>

@endsection('content')