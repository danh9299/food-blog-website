 <!-- 
    - #HEADER
  -->

 <header class="header section" data-header>
     <div class="container">

         <a href="/home" class="logo">
             <img src="{{asset('assets/images/logo.jpg')}}" width="250" height="250" alt="logo">

         </a>

         <nav class="navbar" data-navbar>
             <ul class="navbar-list">

                 <li class="navbar-item">
                     <a href="#" class="navbar-link hover:underline" data-nav-link>Trang chủ</a>
                 </li>

                 <li class="navbar-item">
                     <a href="#" class="navbar-link hover:underline" data-nav-link>Bài viết gần đây</a>
                 </li>

                 <li class="navbar-item">
                     <a href="#" class="navbar-link hover:underline" data-nav-link>Thành viên</a>
                 </li>

             </ul>
         </nav>

         <div class="wrapper">

             <button class="search-btn" aria-label="search" data-search-toggler>
                 <ion-icon name="search-outline" aria-hidden="true"></ion-icon>

                 <span class="span">Tìm kiếm</span>
             </button>

             <button class="nav-toggle-btn" aria-label="toggle menu" data-nav-toggler>
                 <span class="span one"></span>
                 <span class="span two"></span>
                 <span class="span three"></span>
             </button>

             <a href="#" class="btn">Tham gia</a>

         </div>

     </div>
 </header>

 <!-- 
    - #SEARCH BAR
  -->

 <div class="search-bar" data-search-bar>

     <div class="input-wrapper">
         <input type="search" name="search" placeholder="Search" class="input-field">

         <button class="search-close-btn" aria-label="close search bar" data-search-toggler>
             <ion-icon name="close-outline" aria-hidden="true"></ion-icon>
         </button>

     </div>

     <p class="search-bar-text">Vui lòng nhập ít nhất 3 kí tự.</p>

 </div>

 <div class="overlay" data-overlay data-search-toggler></div>