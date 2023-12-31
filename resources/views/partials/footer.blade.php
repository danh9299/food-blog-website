<!-- 
    - #FOOTER
  -->

<footer class="footer">
    <div class="container">

        <div class="footer-top section">

            <div class="footer-brand">

                <a href="{{route('posts.index')}}" class="logo">
                    <img src="{{asset('assets/images/logo.jpg')}}" width="150" height="150" alt="Blog logo">
                </a>

                <p class="footer-text">
                    Một chiếc blog nhỏ để chia sẻ các công thức nấu ăn.
                </p>

            </div>

            <ul class="footer-list">
                
                <li>
                    <p class="h5">Mạng xã hội</p>
                </li>

                <li class="footer-list-item">
                    <ion-icon name="logo-facebook"></ion-icon>

                    <a href="{{$socialnetwork->Facebook}}" target="_blank" class="footer-link hover:underline">Facebook</a>
                </li>


                <li class="footer-list-item">
                    <ion-icon name="logo-github"></ion-icon>

                    <a href="{{$socialnetwork->Github}}" target="_blank" class="footer-link hover:underline">Github</a>
                </li>

                <li class="footer-list-item">
                    <ion-icon name="logo-instagram"></ion-icon>

                    <a href="{{$socialnetwork->Instagram}}" target="_blank" class="footer-link hover:underline">Instagram</a>
                </li>

            </ul>

            <ul class="footer-list">

                <li>
                    <p class="h5">Về chúng tớ</p>
                </li>

                <li>
                    <a href="{{route('aboutus.index')}}" class="footer-link hover:underline">Blog</a>
                </li>

                <li>
                    <a href="{{route('contact.index')}}" class="footer-link hover:underline">Liên hệ</a>
                </li>

               

                <li>
                    <a href="{{route('policy.index')}}" class="footer-link hover:underline">Chính sách bảo mật</a>
                </li>

            </ul>



        </div>

        <div class="section footer-bottom">

            <p class="copyright">
                &copy;
                <a href="mailto:nguyenduyanh.tit@gmail.com" class="copyright-link hover:underline">Developed by: nguyenduyanh.tit@gmail.com</a>
            </p>

        </div>

    </div>
</footer>