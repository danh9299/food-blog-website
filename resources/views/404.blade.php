@extends('master') <!-- Assuming you have a master layout that includes your CSS -->

@section('content')


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6 text-center error-page">
            <div class="error-page">
                <h1 class="error-code">404</h1>
                <h2 class="error-message">Có Lỗi Gì Đó Xảy Ra</h2>
                <p class="error-description">Để được hỗ trợ, vui lòng thông báo admin qua email: <a href="mailto:nguyenduyanh.tit@gmail.com" style="text-decoration:underline">nguyenduyanh.tit@gmail.com</a></p>
                
            </div>
        </div>
    </div>
</div>
@endsection
