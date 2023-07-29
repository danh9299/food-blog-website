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
            <div class="col col-md-11"><b>Danh sách bài viết</b></div>
            <div class="col col-md-1">
                <a href="#" class="btn btn-success btn-sm float-end">Thêm</a>
            </div>
        </div>
    </div>
    <div class="card-body">
        <table class="table table-bordered">
            <tr>
                <th>Mã Bài Viết</th>
                <th>Tên Bài Viết</th>
                <th>Ngày Đăng</th>
                <th>Tác giả</th>
                <th>Hành Động</th>
            </tr>
            @if(count($posts) > 0)

            @foreach($posts as $row)

            <tr>
                <td>{{ $row->post_id }}</td>
                <td>{{ $row->title }}</td>
                <td>{{ $row->date_posted }}</td>
                <td>{{ $row->author->username }}</td>

                <td>
                    <a href="{{ route('posts.confirm', $row->post_id) }}" class="btn btn-danger btn-sm">Xóa</a>
                    <a href="{{ route('posts.showData', $row->post_id) }}" class="btn btn-primary btn-sm">Xem</a>
                    <a href="#" class="btn btn-warning btn-sm">Sửa</a>




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