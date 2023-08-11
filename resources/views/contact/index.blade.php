@extends('master')
@section('content')
<br>
<!--About Us-->
<div class="nda-center" style="padding:50px">
    <h2>Liên hệ với <strong>Food Blogger By Duy Anh</strong></h2>
</div>

<!--Content-->
@foreach ($contacts as $row)

<div>
    <p class="nda-center"><strong style="padding-right:10px">Địa chỉ:</strong>  {{$row->address}}</p>
</div>
<div>
    <p class="nda-center"><strong style="padding-right:10px">Email:</strong> {{$row->email}}</p>
</div>
<div>
    <p class="nda-center"><strong style="padding-right:10px">Số điện thoại:</strong>   {{$row->telephone}}</p>
</div>
@endforeach
@endsection('content')