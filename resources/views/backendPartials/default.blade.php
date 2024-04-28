@include('backendPartials.head')
<!--start wrapper-->
<div class="wrapper">
    <!--start sidebar -->
    @include('backendPartials.aside')
    <!--end sidebar -->
    <!--start top header-->
    @include('backendPartials.header')
    <!--end top header-->
    <!-- start page content wrapper-->
    <div class="page-content-wrapper">
        <!-- start page content-->
        <div class="page-content">
            <!--start breadcrumb-->
            @include('backendPartials.breadcrumps')
            <!--end breadcrumb-->
            <!-- <div class="row row-cols-1 row-cols-lg-2 row-cols-xl-4">
                
            </div> -->
            @yield('section')
            
        </div>
        <!-- end page content-->
    </div>
    <!--end page content wrapper-->
    <!--start footer-->
    <footer class="footer">
        <div class="footer-text">
            Copyright © 2023. All right reserved.
        </div>
    </footer>
    <!--end footer-->
    <!--Start Back To Top Button-->
    <a href="javaScript:;" class="back-to-top">
        <ion-icon name="arrow-up-outline"></ion-icon>
    </a>
    <!--End Back To Top Button-->
    <!--start switcher-->
    
    <!--end switcher-->
    <!--start overlay-->
    <div class="overlay nav-toggle-icon"></div>
    <!--end overlay-->
</div>
<!--end wrapper-->
@include('backendPartials.footer')
@yield('jsOutside')
</body>
</html>