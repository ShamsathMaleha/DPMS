 <!-- Header -->
 <header class="header">
    <nav class="navbar navbar-expand-lg header-nav">
        <div class="navbar-header">
            <a id="mobile_btn" href="javascript:void(0);">
                <span class="bar-icon">
                    <span></span>
                    <span></span>
                    <span></span>
                </span>
            </a>
            <a href=" {{route('home')}} " class="navbar-brand logo">
                <h4 class="text-primary">MEDI<span class="text-success">C_BD</span> </h4>

            </a>
        </div>
        <div class="main-menu-wrapper">
            <div class="menu-header">
                {{-- <a href="index-2.html" class="menu-logo">
                    <img src="assets/img/logo.png" class="img-fluid" alt="Logo">
                </a> --}}
                <a id="menu_close" class="menu-close" href="javascript:void(0);">
                    <i class="fas fa-times"></i>
                </a>
            </div>
            <ul class="main-nav">
                <li class="active">
                    <a href="{{route('home')}}">Home</a>
                </li>
                <li class="active">
                    <a href="{{route('user.doctor')}} ">Appointment Doctor</a>
                </li>
                <li class="active">
                    <a href="{{route('checkout')}} " >Appointment Checkout</a>
                </li>

                <li class="active">
                    <a href="{{route('edit.profile')}}">Profile</a>
                </li>




            </ul>
        </div>
        <ul class="nav header-navbar-rht">
            <li class="nav-item contact-item">
                <div class="header-contact-img">
                    <i class="far fa-hospital"></i>
                </div>
                <div class="header-contact-detail">
                    <p class="contact-header">Contact</p>
                    <p class="contact-info-header"> 333</p>
                </div>
            </li>
            @guest
            <li class="nav-item">
                <a class="nav-link header-login" href="{{route('user.login')}}">login / Signup </a>
            </li>
            @endguest
            @auth
            <li class="nav-item">
                <a class="nav-link header-login" href="{{route('user.logout')}}">Logout </a>
            </li>
            @endauth

        </ul>
    </nav>
</header>
<!-- /Header -->
