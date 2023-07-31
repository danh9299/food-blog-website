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
            <div class="col col-md-10"><b>Danh sách Đăng Ký Emails của bạn đọc</b></div>
           
        </div>
    </div>
    <div class="card-body">
        <table class="table table-bordered">
            <tr>
                <th>Mã Đăng Ký</th>
                <th>Email</th>
                <th>Hành động</th>
         
            </tr>
            @if(count($emails) > 0)
            @foreach($emails as $row)
            <tr>
                <td>{{ $row->id }}</td>
               
                <td>{{ $row->email }}</td>
                <td>
                    <a href="{{route('reader-emails.confirm',$row->id)}}" class="btn btn-danger btn-sm">Xóa</a>
                    
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