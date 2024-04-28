 <!-- JQUERY LIBRARY -->
    <script src="{{asset('public/theme/ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js')}}"></script>

        <script type="text/javascript" src="{{asset('public/theme/js/jquery.min.js')}}"></script>
        <script src="{{asset('public/theme/js/jquery-ui.min.js')}}" type="text/javascript"></script>
        <script type="text/javascript" src="{{asset('public/theme/js/tether.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('public/theme/js/bootstrap.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('public/theme/js/owl.carousel.js')}}"></script>
        <!-- fancybox Js -->
        <script src="{{asset('public/theme/js/jquery.mousewheel-3.0.6.pack.js')}}" type="text/javascript"></script>
        <script src="{{asset('public/theme/js/jquery.fancybox.pack.js')}}" type="text/javascript"></script>
        <!-- masonry,isotope Effect Js -->
        <script src="{{asset('public/theme/js/imagesloaded.pkgd.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('public/theme/js/isotope.pkgd.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('public/theme/js/masonry.pkgd.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('public/theme/js/jquery.appear.js')}}" type="text/javascript"></script>
        <!-- revolution Js -->
        <script type="text/javascript" src="{{asset('public/theme/js/jquery.themepunch.tools.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('public/theme/js/jquery.themepunch.revolution.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('public/theme/extensions/revolution.extension.slideanims.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('public/theme/extensions/revolution.extension.layeranimation.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('public/theme/extensions/revolution.extension.navigation.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('public/theme/extensions/revolution.extension.parallax.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('public/theme/js/jquery.revolution.js')}}"></script>
        <!-- Mail Function Js -->
        <script src="{{asset('public/theme/js/validation.js')}}" type="text/javascript"></script>
        <!-- Compiled and minified JavaScript -->
        <script src="{{asset('public/theme/js/jquery.appear.js')}}" type="text/javascript"></script>
        <script src="{{asset('public/theme/js/custom.js')}}" type="text/javascript"></script>
        <script src="{{asset('public/theme/js/hots_popup.js')}}" type="text/javascript"></script>

        <!-- <script src="../../../hosting_popup/js/hots_popup.js"></script> -->
<script>
    $(document).ready(function() {
    // Wait for the document to be ready

    // Select the alert box by its ID
    var successAlert = $('#successAlert');

    // Check if the alert box exists
    if (successAlert.length > 0) {
        // Set a timeout to hide the alert after 5 seconds (5000 milliseconds)
        setTimeout(function() {
            // Use the fadeOut method to hide the alert with a fade effect
            successAlert.fadeOut(500);
        }, 5000);
    }
});

</script>
</body>
</html>