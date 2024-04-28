@include('frontendpartials.head')
<div class="page-wrapper">
    
    <!-- Preloader -->

        <!-- @include('frontendpartials.topbar') -->
        
        <!--Header-Upper-->
         @include('frontendpartials.header')
        <!--End Header Upper-->
        
        <!-- Sticky Header  -->
        <!-- End Sticky Menu -->
    
        <!-- Mobile Menu  -->
       
    

    <!-- End Main Header -->
    
    <!-- Sidebar Cart Item -->
    @include('frontendpartials.smallAbout')
    <!-- END sidebar widget item -->
    @yield('section')

    @include('frontendpartials.footer')
    
    
</div>
<!--End pagewrapper-->

<!-- Color Palate / Color Switcher -->

    

    @include('frontendpartials.scripts')