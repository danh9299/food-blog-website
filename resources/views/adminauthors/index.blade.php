@extends('dashboard')
@section('content')

<!--All Posts-->
@if($message = Session::get('success'))

<div class="alert alert-success">
    {{ $message }}
</div>

@endif

<div class="card mt-5">
    <div class="card-header">
        <div class="row">
            <div class="col col-md-10"><b>Danh sách tác giả</b></div>
            <div class="col col-md-2">
                <a href="{{ route('adminauthors.create')}}" class="btn btn-success float-end">Thêm Tác Giả</a>
            </div>
        </div>
    </div>
    <div class="card-body">
        <table class="table table-bordered">
            <tr>
                <th>Mã Tác Giả</th>
                <th>Tên Tác Giả</th>
                <th>Email</th>
                <th>Hành Động</th>
            </tr>
            @if(count($authors) > 0)
            @foreach($authors as $row)
            <tr>
                <td>{{ $row->author_id }}</td>
                <td>{{ $row->username }}</td>
                <td>{{ $row->email }}</td>
                <td>
                    <a href="{{ route('adminauthors.confirm', $row->author_id) }}" class="btn btn-danger btn-sm">Xóa</a>
                    <a href="{{ route('adminauthors.check', $row->author_id) }}" class="btn btn-warning btn-sm">Sửa</a>
                </td>
            </tr>

            @endforeach

            @else
            <tr>
                <td colspan="5" class="text-center">No Data Found</td>
            </tr>
            @endif
        </table>

    </div>
</div>

@endsection('content')