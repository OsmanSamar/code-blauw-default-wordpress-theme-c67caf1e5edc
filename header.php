<!DOCTYPE html>

<html>

<head>
    <?php wp_head(); ?>
    <title><?php wp_title() ?>Blauwijs</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <?php wp_head(); ?>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <!-- AOS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!-- AOS -->
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>

    <!-- AOS -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <script>
        AOS.init();
    </script>
    <!-- AOS -->

    <!-- <header class="header position-absolute "
        style="z-index:2;  width: 100vw;  display: flex; justify-content: center;top:4px; ">
        <nav>
            <div class="container">
                <div class="navbar navbar-expand-lg navbar-light sans-serif"
                    style="top: 26px;left: ;width: 1000px;height: 55px;border: 1px solid #FFFFFF;border-radius: 5px;opacity: 1;">
                    Logo
                    <a href="<?= esc_url(home_url('/')); ?>" class="navbar-brand">
                        <img src="<?= get_field("logo")['url'] ?>" alt="<?= get_field("logo")['title'] ?>"
                            style="width: 136px; height: 36px; top:30px" />
                    </a>

                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <?php
                        wp_nav_menu(array(
                            'menu' => 'header-menu',
                            'depth' => 2,
                            'container' => false,
                            'menu_class' => 'navbar-nav ms-auto',
                            'menu_class' => 'navbar-nav d-none d-lg-flex justify-content-end align-items-center flex-grow-1 gap-4 ',
                            'fallback_cb' => 'WP_Bootstrap_Navwalker::fallback',
                            'walker' => new WP_Bootstrap_Navwalker(),
                        ));
                        ?>
                    </div>
                </div>
            </div>
        </nav>
    </header> -->
    <header class="header position-absolute d-flex justify-content-center " style=" z-index:2; width: 100vw; top:4px; ">

        <nav class="navbar navbar-expand-lg navbar-light sans-serif"
            style="top: 26px;left: ;width: 1000px;height: 55px;border: 1px solid #FFFFFF;border-radius: 5px;opacity: 1;">
            <div class="container">
                <!-- Logo -->
                <a href="<?= esc_url(home_url('/')); ?>" class="navbar-brand">
                    <img src="<?= get_field("logo")['url'] ?>" alt="<?= get_field("logo")['title'] ?>"
                        style="width: 136px; height: 36px; top:30px" />
                </a>

                <!-- Hamburger button for mobile -->
                <div class="d-lg-none  " style="border-radius: 5px; 
                            height: 38px; width:38px;
                            border: 1px solid  #F29401;">
                    <button class="navbar-toggler collapsed " type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation" style=" 
                        width:38px; height:38px; border-radius:5px; padding:4px; margin:; opacity: 1;;  
                        background-color:transparant;">

                        <span class="toggler-icon top-bar"></span>
                        <span class="toggler-icon middle-bar"></span>
                        <span class="toggler-icon bottom-bar"></span>
                    </button>
                </div>

                <style>
                    .navbar-toggler {
                        border: 0;
                    }

                    .navbar-toggler:focus,
                    .navbar-toggler:active,
                    .navbar-toggler-icon:focus {
                        outline: none;
                        box-shadow: none;
                        border: 0;
                    }


                    /* X Icon */
                    .toggler-icon {
                        width: 28px;
                        height: 1px;
                        background-color: black;
                        display: block;
                        transition: all 0.2s;
                        opacity: 1;

                    }

                    .middle-bar {
                        margin: 5px auto;
                    }

                    .navbar-toggler .top-bar {
                        transform: rotate(34deg);
                        transform-origin: 10% 10%;
                    }

                    .navbar-toggler .middle-bar {
                        opacity: 0;
                        filter: alpha(opacity=0);
                    }

                    .navbar-toggler .bottom-bar {
                        transform: rotate(-40deg);
                        transform-origin: 10% 10%;
                    }

                    .navbar-toggler.collapsed .top-bar {
                        transform: rotate(0);
                    }

                    .navbar-toggler.collapsed .middle-bar {
                        opacity: 1;
                        filter: alpha(opacity=100);
                    }

                    .navbar-toggler.collapsed .bottom-bar {
                        transform: rotate(0);
                    }

                    .navbar-toggler.collapsed .toggler-icon {
                        background-color: #FFF;
                    }


                    @media (max-width: 991.98px) {
                        .ul-bg {
                            background-color: #F29401;
                            border-radius: 8px;
                            color: black;
                            text-align: center;
                        }
                    }



                    /* Navbar  content */

                    .header {
                        /* Ensure content is above the overlay */
                        position: relative;
                        /* Ensure the header is above other elements */
                        z-index: 2;
                    }

                    .navbar {
                        /* display: flex;
  align-items: center; */
                        /* justify-content: end; */
                        /* position: absolute;
  z-index: 10;
  top: 0;
  width: 100%;
  box-sizing: border-box; */
                        margin-top: 26px;
                    }

                    .navbar-nav .nav-link {
                        color: #fff;
                        /* text-align: right; */
                        letter-spacing: 0px;
                        opacity: 1;
                        font-size: 16px;
                        font-weight: 300;
                        padding: 10px;
                        margin: 0 10px;
                    }

                    .navbar-nav .dropdown-item {
                        color: #fff;
                        padding: 8px 20px;
                        border-bottom: 1px solid #fff;
                    }

                    .navbar-nav .dropdown-menu {
                        color: #fff;
                        text-align: center;
                        background-color: #f29401;
                    }

                    .btn-primary {
                        background-color: #f29401;
                        border-color: #f29401;
                    }

                    .btn-primary:hover,
                    .btn-primary:focus {
                        background-color: #d87a01;
                        /* Darker shade for hover and focus states */
                        border-color: #d87a01;
                    }

                    b,
                    strong:first-of-type {
                        color: #f29401;
                        font-family: inherit;
                        font-size: inherit;
                        font-style: inherit;
                        line-height: inherit;
                    }

                    b,
                    strong:nth-of-type(2) {
                        color: #1e73be;
                    }

                    .hero-section {
                        position: relative;
                        background: url("<?= get_field('heroimage')['url'] ?> ");
                        width: 100vw;
                        height: 676px;
                        background-size: cover;
                        background-position: center;
                        background-repeat: no-repeat;
                        object-fit: cover;
                        overflow: hidden;
                        display: flex;
                        align-items: center;
                        justify-content: center;
                        text-align: center;
                        color: white;
                    }

                    .hero-section::before {
                        content: "";
                        position: absolute;
                        top: 0;
                        left: 0;
                        width: 100%;
                        height: 100%;
                        /* Dark overlay */
                        background: transparent linear-gradient(90deg, var(--unnamed-color-132030) 0%, #13203000 100%) 0% 0% no-repeat padding-box;
                        background: transparent linear-gradient(90deg, #132030 0%, #13203000 100%) 0% 0% no-repeat padding-box;
                        z-index: 1;
                        opacity: 0.88;
                    }

                    .hero-section img {
                        display: none;
                    }

                    .hero-content {
                        position: relative;
                        /* z-index: 2; */
                        z-index: 1;
                        color: white;

                        letter-spacing: 0px;
                        color: #feffff;
                        text-align: center;
                        margin-left: auto;
                        margin-right: auto;
                    }

                    .hero-title {
                        font-size: 60px;
                        line-height: 65px;
                        font-weight: 500;
                        font-family: "Richmond Display", serif;
                        text-align: left;
                        letter-spacing: 0px;
                        opacity: 1;
                    }

                    .hero-title br {
                        display: none;
                    }

                    .button-group {
                        display: flex;
                        flex-direction: row;
                        align-items: center;
                    }

                    .circle-border {
                        display: inline-flex;
                        justify-content: center;
                        align-items: anchor-center;
                        border: 1px solid #f29401;
                        border-radius: 5px;
                        opacity: 1;
                        position: relative;
                        overflow: hidden;
                        margin: 8px;
                        padding: 6px 14px;
                        height: 50px;
                        color: #fff;
                    }

                    /* Style for the first button */
                    .btn-primary-custom {
                        background: #f29401;
                        width: 181px;
                    }

                    /* Style for the second button */
                    .btn-custom-container {
                        background: transparent;
                        width: 126px;
                    }

                    /* Button styles */
                    .btn-custom {
                        color: #fff;
                        background-color: transparent;
                        border: none;
                        font-family: "Scala Sans Pro", sans-serif;
                        font-size: 16px;
                        font-weight: 600;
                        line-height: 22px;
                    }

                    .btn-custom:hover,
                    .btn-custom:focus {
                        color: #fff;
                        background-color: transparent;
                    }

                    .btn-primary {
                        white-space: nowrap !important;
                        background-color: transparent !important;
                        border: none !important;
                    }
                </style>





                <!-- Navigation Menu -->
                <div class="collapse navbar-collapse  ul-bg " id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto justify-content-end flex-grow-1">
                        <li class="nav-item">

                            <a class="nav-link custom-nav-link"
                                href="<?= esc_url(home_url('/sample-page')); ?>">Home</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle custom-nav-link" href="#" id="navbarDropdown"
                                role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Diensten
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li>
                                    <a class=" dropdown-item" href="<?= esc_url(home_url('/')); ?>">X</a>
                                </li>
                                <li><a class="dropdown-item" href="<?= esc_url(home_url('/')); ?>">e</a>
                                </li>
                                <li><a class="dropdown-item" href="<?= esc_url(home_url('/')); ?>">g</a>
                                </li>
                                <li><a class="dropdown-item" href="<?= esc_url(home_url('/')); ?>">T</a>
                                </li>
                                <li><a class="dropdown-item" href="<?= esc_url(home_url('/')); ?>">A</a>
                                </li>

                            </ul>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link custom-nav-link" href="<?= esc_url(home_url('/cases')); ?>">Cases</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link custom-nav-link"
                                href="<?= esc_url(home_url('/over-ons')); ?>">Overons</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link custom-nav-link" href="<?= esc_url(home_url('/contact')); ?>">Contact</a>

                        </li>

                        <!-- The button here for smaller screens -->
                        <li>
                            <a class="d-block d-lg-none nav-link custom-nav-link"
                                href="<?= esc_url(home_url('/kennismaken')); ?>">Kennismaken</a>
                        </li>
                    </ul>


                </div>

                <!-- Button on the Right side (visible only on large screens) -->
                <div class="circle-border   d-none d-lg-inline-flex justify-content-center align-items-center ms-auto"
                    style="; background: #F29401;">
                    <div class="d-none d-lg-block ms-auto">
                        <a href="<?= esc_url(home_url('/kennismaken')); ?>" class="btn btn-primary">Kennismaken</a>
                    </div>
                </div>

            </div>
        </nav>



    </header>