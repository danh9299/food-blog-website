@extends('dashboard')
@section('content')

<!--All Posts-->
@if($message = Session::get('success'))

<div class="mt-5 alert alert-success">
    {{ $message }}
</div>

@endif

<div class="card mt-5">
    <div class="card-header">
        <div class="row">
            <div class="col col-md-10"><b>Thông tin mạng xã hội</b></div>
           
        </div>
    </div>
    <div class="card-body">
        <table class="table table-bordered">
            <tr>
                
                <th>Facebook</th>
                <th>Github</th>
                <th>Instagram</th>
                <th>Hành Động</th>
         
            </tr>
            @if(count($socialnetwork) > 0)
            @foreach($socialnetwork as $row)
            <tr>
                <td>{{ $row->Facebook }}</td>
               
                <td>{{ $row->Github }}</td>
                <td>{{ $row->Instagram}}</td>
                <td>
                    <a href="{{route('socialnetwork.edit',$row->id)}}" class="btn btn-warning btn-sm">Sửa</a>
                    
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