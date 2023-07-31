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
                     <a href="{{route('posts.index')}}" class="navbar-link hover:underline" data-nav-link>Trang chủ</a>
                 </li>

                 <li class="navbar-item">
                     <a href="{{route('posts.list-recent-posts')}}" class="navbar-link hover:underline" data-nav-link>Bài viết gần đây</a>
                 </li>

                

             </ul>
         </nav>

       

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