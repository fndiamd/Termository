<!-- Footer Top Area -->
<!-- <section id="footer-top" class=" defalut-space">
    <div class="container">
        
    </div>
</section> -->
<!-- Footer Top Area -->

<!--  Footer Bottom Area -->
<footer id="footer-bottom">
    <div class="container">
        <!-- Start Row -->
        <div class="row">
            <!-- Start Col -->
            <div class=" col-lg-6 col-md-6">
            <div class="copy-text text-left">
                <p>© 2018 Copyright by Termository</p>
            </div>
            </div>
            <!-- End Col -->
        </div>
        <!-- End Row -->
    </div>
</footer>
<!--  Footer Bottom Area -->

<!-- Back to scroll  -->
        <div class="top-arrow">
            <span class="scroll-top-top">
            <i class="fas fa-arrow-up"></i>
            </span>
        </div>
        <!-- Back to scroll  -->
        <!--All Jquery Library Files -->
        <script src="{{ asset('vendor/sweetalert/sweetalert2.min.js') }}"></script>
        <script src="{{ asset('vendor/bootstrap/js/jquery.easing.min.js') }}"></script>
        <!-- Bootstrap js  -->
        <script src="{{ asset('vendor/bootstrap/js/bootstrap.min.js') }}"></script>
        <!-- Carousel js  -->
        <script src="{{ asset('vendor/owl-carousel/owl.carousel.min.js') }}"></script>
        <!-- aos Js -->
        <script src="{{ asset('vendor/bootstrap/js/aos.js') }}"></script>
        <!-- tab Js -->
        <script src="{{ asset('vendor/bootstrap/js/tab.js') }}"></script>
        <!-- main Js -->
        <script src="{{ asset('vendor/bootstrap/js/main.js') }}"></script>
        <script src="{{ asset('vendor/leaflet/leaflet.js') }}"></script>
        <script src="{{ asset('vendor/dropify/js/dropify.min.js') }}"></script>

        @if (session('notify'))
            <script type="text/javascript">
                $(document).ready(function() {
                    $.notify({
                        title: "<strong>{{ session('notify')['title'] }}</strong> ",
                        message: "{{ session('notify')['msg'] }}",
                    },{
                        type: "{{ session('notify')['type'] }}",
                        placement: {
                            from: "top",
                            align: "right",
                        },
                    });
                });
            </script>
        @endif
        @if(session('sweet-alert'))
            <script>
                swal({
                    type : "{{ session('sweet-alert')['type'] }}",
                    title : "{{ session('sweet-alert')['title'] }}",
                    text : "{{ session('sweet-alert')['text'] }}"
                });
            </script>
        @endif
    </body>
</html>