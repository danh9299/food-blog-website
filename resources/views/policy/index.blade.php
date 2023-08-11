@extends('master')
@section('content')
<br>
<!--Policy-->
<div class="nda-center" style="padding:50px">
    <h2>Chính sách về <strong style="padding-right: 5px"> bảo mật quyền riêng tư trên</strong>Food Blogger By Duy Anh</h2>
</div>

<!--Policy content-->
@foreach ($policies as $row)
<div  style="padding-right:30%; padding-left:30%">
    <p3> {{$row->policy}}</p3>
</div>
@endforeach
@endsection('content')