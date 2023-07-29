<!-- Sidebar -->
<div class="sidebar">
    <ul class="nav flex-column">
        <li class=" nav-item">
            <div class="container-fluid mt-3">
                <a class="mt-2 navbar-brand fs-4 text-dark " href="#"><img class="d-inline-block align-text-top"
                        src="{{asset('assets/images/logo.jpg')}}" alt="Bootstrap" width="30" height="30"> Food Blog</a>
            </div>
            <hr>
        </li>
        <li class="nav-item">
            <ul class="list-group list-group-flush">
                <li class="list-group-item bg-light h4">Quản Lý Bài Viết</li>
                <li class="list-group-item bg-light"><a style="text-decoration:none; color:black"href="{{ route('adminposts.index') }}">Xem danh sách bài viết</a></li>
                <li class="list-group-item bg-light">Thêm bài viết mới</li>
            </ul>
            <hr>
            
        </li>
        <li class="nav-item">
            <ul class="list-group list-group-flush">
                <li class="list-group-item bg-light h4">Quản Lý Tác Giả</li>
                <li class="list-group-item bg-light">Xem danh sách tác giả</li>
                <li class="list-group-item bg-light">Thêm tác giả mới</li>
            </ul>
            <hr>
        </li>
        <li class="nav-item">
            <ul class="list-group list-group-flush">
                <li class="list-group-item bg-light h4">Quản Lý Hình Ảnh</li>
                <li class="list-group-item bg-light"><a style="text-decoration:none; color:black" href="{{ route('adminimages.showAll') }}">Thư viện hình ảnh</a></li>
                <li class="list-group-item bg-light"><a style="text-decoration:none; color:black" href="{{ route('adminimages.uploadImage') }}">Thêm hình ảnh mới</a></li>
            </ul>
            <hr>
        </li>
        <!-- Add more sidebar links as needed -->
    </ul>
</div>