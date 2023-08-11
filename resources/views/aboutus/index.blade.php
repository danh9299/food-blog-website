@extends('master')
@section('content')
<br>
<!--About Us-->
<div class="nda-center" style="padding:50px">
    <h2>Thông tin về <strong>Food Blogger By Duy Anh</strong></h2>
</div>

<!--Content-->
@foreach ($aboutus_infos as $row)
<div  style="padding:50px">
    <p3> {{$row->content}}</p3>
</div>
@endforeach
@endsection('content')