

<style>
    /* Set a maximum height for the sidebar */
.sidebar {
    max-height: 700px; /* Adjust this height as per your requirements */
    overflow-y: auto;
}
/* Customize scrollbar For WebKit (Chrome, Safari, Edge) */
.sidebar::-webkit-scrollbar {
    width: 10px;
}

.sidebar::-webkit-scrollbar-thumb {
    background-color: #888;
    border-radius: 5px;
}

.sidebar::-webkit-scrollbar-thumb:hover {
    background-color: #555;
}

    </style>
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
                <li class="list-group-item bg-light"><a style="text-decoration:none; color:black"href="{{ route('posts.create') }}">Thêm bài viết mới</a></li>
            </ul>
            <hr>
            
        </li>
        <li class="nav-item">
            <ul class="list-group list-group-flush">
                <li class="list-group-item bg-light h4">Quản Lý Tác Giả</li>
                <li class="list-group-item bg-light"><a style="text-decoration:none; color:black" href="{{ route('adminauthors.index') }}">Xem danh sách tác giả</a></li>
                <li class="list-group-item bg-light"><a style="text-decoration:none; color:black" href="{{ route('adminauthors.create') }}">Thêm tác giả mới</a></li>
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
        <li class="nav-item">
            <ul class="list-group list-group-flush">
                <li class="list-group-item bg-light h4">Quản Lý Đăng Ký</li>
                <li class="list-group-item bg-light"><a style="text-decoration:none; color:black" href="{{ route('reader-emails.index') }}">Emails của độc giả</a></li>
    
            </ul>
            <hr>
        </li>
        <li class="nav-item">
            <ul class="list-group list-group-flush">
                <li class="list-group-item bg-light h4">Thiết lập Footer</li>
                <li class="list-group-item bg-light"><a style="text-decoration:none; color:black" href="{{ route('socialnetwork.index') }}">Mạng xã hội</a></li>
                <li class="list-group-item bg-light"><a style="text-decoration:none; color:black" href="#">About us</a></li>
                <li class="list-group-item bg-light"><a style="text-decoration:none; color:black" href="#">Liên hệ</a></li>
                <li class="list-group-item bg-light"><a style="text-decoration:none; color:black" href="#">404</a></li>
                <li class="list-group-item bg-light"><a style="text-decoration:none; color:black" href="#">Chính sách bảo mật</a></li>
            </ul>
            <hr>
        </li>
        <!-- Add more sidebar links as needed -->
    </ul>
</div>