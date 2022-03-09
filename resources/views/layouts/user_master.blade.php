<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!---- Style Sheet --->

    <link rel="stylesheet" href="{{asset('public/user_assets/')}}/css/lightbox.min.css">
    <link rel="stylesheet" href="{{asset('public/user_assets/')}}/css/animate.min.css">
    <link rel="stylesheet" href="{{asset('public/user_assets/')}}/css/owl.carousel.css">
    <link rel="stylesheet" href="{{asset('public/user_assets/')}}/css/owl.theme.green.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('public/user_assets/')}}/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('public/user_assets/')}}/css/all.min.css">
    <link rel="stylesheet" href="{{asset('public/user_assets/')}}/css/responsive.css">
    <link rel="stylesheet" href="{{asset('public/user_assets/')}}/css/style.css">
     
    
    
    <!---- Javascript --->
    
    <script src="{{asset('public/user_assets/')}}/js/masonry.pkgd.min.js"></script>
    <script src="{{asset('public/user_assets/')}}/js/lightbox-plus-jquery.min.js"></script>  
    <script src="{{asset('public/user_assets/')}}/js/typed.js"></script>
    <script src="{{asset('public/user_assets/')}}/js/jquery-3.6.0.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="{{asset('public/user_assets/')}}/js/owl.carousel.min.js"></script>
    <script src="{{asset('public/user_assets/')}}/js/bootstrap.min.js"></script>


     <title>Reizen | @yield('title')</title>

</head>
<body>
    <!--top area-->
    <!--header area-->

    @include('include.user.header')

    <!-- end header area & top area -->

    <!---- start content--->

    @yield('content')
    
    <!---- end content--->
     <a href="#" class="to-top">
        <i class="fas fa-hand-point-up"></i>
     </a>
    <!-- footer area start here -->

    @include('include.user.footer')   

    <!-- end footer area here -->  

    <!-- Start To Top Javascript -->
     <script type="text/javascript">
        const toTop = document.querySelector(".to-top");
        window.addEventListener("scroll", () => {
            if (window.pageYOffset > 100) {
                toTop.classList.add("active");
            }
            else{
                toTop.classList.remove("active");
            }
        });
     </script>

    <script>
        AOS.init();
    </script>
    <!-- end To Top Javascript --> 
</body>
</html>