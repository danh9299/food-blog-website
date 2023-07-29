<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- 
    - primary meta tags
  -->
    <title>Home</title>
    <meta name="title" content="Home.">
    <meta name="description" content="This is a blog for sharing food">

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


    <main>
        <article>

            <!-- 
        - #HERO
      -->

            <section class="section hero" aria-label="home">
                <div class="container">

                    <h1 class="h1 hero-title">
                        <strong class="strong">Xin chào!</strong> Chúng tớ chia sẻ công thức nấu ăn ở đây.
                    </h1>

                    <div class="wrapper">

                        <form action="" class="newsletter-form">
                            <input type="email" name="email_address" placeholder="Email của cậu" class="email-field">

                            <button type="submit" class="btn">Subscribe</button>
                        </form>

                        <p class="newsletter-text">
                            Subsribe để nhận những thông báo về bài viết mới nhất của chúng tớ.
                        </p>

                    </div>

                </div>
            </section>





            <!-- 
        - #ALL POSTS
          
      -->
            @yield('content')













            <!-- 
        - #NEWSLETTER
      -->

            <section class="section newsletter">

                <h2 class="h2 section-title">
                    Nhập email để <strong class="strong">nhận được các bài viết mới nhất</strong>
                </h2>

                <form action="" class="newsletter-form">
                    <input type="email" name="email_address" placeholder="Email của cậu" required class="email-field">

                    <button type="submit" class="btn">Subscribe</button>
                </form>

            </section>

        </article>
    </main>


    <!--Footer-->
    @include('partials.footer')








    <!-- 
    - custom js link
  -->
    <script src=" {{ asset('assets/js/script.css') }}" defer></script>

    <!-- 
    - ionicon link
  -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
   
</body>

</html>