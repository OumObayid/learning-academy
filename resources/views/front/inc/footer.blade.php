
    <!-- footer part start-->
    <footer class="footer-area" style="padding: 30px 0px 20px;">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-sm-6 col-md-4 col-xl-3">
                    <div class="single-footer-widget footer_1">
                        <a  href="{{ route('front.homepage') }}"> <img src="{{ asset('uploads/setting/'.$sett->logo) }}" alt="logo"> </a>
                        <p>But when shot real her. Chamber her one visite removal six
                            sending himself boys scot exquisite existend an </p>
                        <p>But when shot real her hamber her </p>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-xl-4">
                    <div class="single-footer-widget footer_2">
                        <h4>Newsletter</h4>
                        <p>Stay updated with our latest trends Seed heaven so said place winged over given forth fruit.
                        </p>
                        <form action="#">
                            <div class="form-group">
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" placeholder='Enter email address'
                                        onfocus="this.placeholder = ''"
                                        onblur="this.placeholder = 'Enter email address'">
                                    <div class="input-group-append">
                                        <button class="btn btn_1" type="button"><i class="ti-angle-right"></i></button>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <div class="social_icon">
                            <a href="{{ $sett->fb }}"> <i class="ti-facebook"></i> </a>
                            <a href="{{ $sett->twiter }}"> <i class="ti-twitter-alt"></i> </a>
                            <a href="{{ $sett->insta }}"> <i class="ti-instagram"></i> </a>
                            
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 col-md-4">
                    <div class="single-footer-widget footer_2">
                        <h4>Contact us</h4>
                        <div class="contact_info">
                            <p><span> Address :</span> {{ $sett->adresse }} </p>
                            <p><span> Phone :</span>{{ $sett->phone }}</p>
                            <p><span> Email : </span> {{ $sett->email }} </p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="copyright_part_text text-center">
                        <div class="row">
                            <div class="col-lg-12">
                                <p class="footer-text m-0"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Edited <i class="ti-heart" aria-hidden="true"></i> by <a href="{{ $sett->site }}" target="_blank">Learning Academy</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer part end-->

    <!-- jquery plugins here-->
    <!-- jquery -->
    <script src="{{ asset('front/js') }}/jquery-1.12.1.min.js"></script>
    <!-- popper js -->
    <script src="{{ asset('front/js') }}/popper.min.js"></script>
    <!-- bootstrap js -->
    <script src="{{ asset('front/js') }}/bootstrap.min.js"></script>
    <!-- easing js -->
    <script src="{{ asset('front/js') }}/jquery.magnific-popup.js"></script>
    <!-- swiper js -->
    <script src="{{ asset('front/js') }}/swiper.min.js"></script>
    <!-- swiper js -->
    <script src="{{ asset('front/js') }}/masonry.pkgd.js"></script>
    <!-- particles js -->
    <script src="{{ asset('front/js') }}/owl.carousel.min.js"></script>
    <script src="{{ asset('front/js') }}/jquery.nice-select.min.js"></script>
    <!-- swiper js -->
    <script src="{{ asset('front/js') }}/slick.min.js"></script>
    <script src="{{ asset('front/js') }}/jquery.counterup.min.js"></script>
    <script src="{{ asset('front/js') }}/waypoints.min.js"></script>
    <!-- custom js -->
    <script src="{{ asset('front/js') }}/custom.js"></script>

    @yield('scripts')

</body>

</html>
