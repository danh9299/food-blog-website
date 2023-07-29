<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page Title</title>
    <!-- You can include CSS stylesheets or other meta tags here -->
     <!-- 
    - favicon
  -->
  <link rel="shortcut icon" href="./favicon.svg" type="image/svg+xml">

<!-- 
- custom css link
-->
<link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

<!-- 
- google font link
-->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;700&display=swap" rel="stylesheet">

</head>

<body>
    
    <!--Header-->
    @include('partials.header')
    <!-- Your content goes here -->
    <h1 style="display: flex; justify-content: center">Trang dành cho ADMIN!</h1>

    @if (Route::has('login'))
    <div  class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
        @auth
       <p style="display: flex; justify-content: center"> Bạn đã đăng nhập vào trang admin rồi. </p>
        <a style="color:blue; display: flex; justify-content: center" href="{{ url('admin/dashboard') }}"
            class="font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500"> Nhấn vào đây để chuyển tới Dashboard</a>
        @else
        
        <a style="display: flex; justify-content: center" href="{{ route('login') }}"
            class="font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Đăng
            nhập</a> 

        @if (Route::has('register'))
        <a style="display: flex; justify-content: center" href="{{ route('register') }}"
            class="ml-4 font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Đăng
            ký</a>
        @endif
        @endauth
    </div>
    @endif

    <!-- You can include JavaScript files or other scripts here -->

</body>

</html>