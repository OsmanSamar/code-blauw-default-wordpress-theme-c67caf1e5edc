<!DOCTYPE html>

<html>

<head>
    <?php wp_head(); ?>
    <title><?php wp_title() ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>

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
    <header class="header position-absolute "
        style="z-index:2;  width: 100vw;  display: flex; justify-content: center;top:4px; ">

        <nav class="navbar navbar-expand-lg navbar-light sans-serif"
            style="top: 26px;left: ;width: 1000px;height: 55px;border: 1px solid #FFFFFF;border-radius: 5px;opacity: 1;">
            <div class="container  ">
                <!-- Logo -->
                <a href="<?= esc_url(home_url('/')); ?>" class="navbar-brand">
                    <img src="<?= get_field("logo")['url'] ?>" alt="<?= get_field("logo")['title'] ?>"
                        style="width: 136px; height: 36px; top:30px" />
                </a>

                <!-- Hamburger button for mobile -->
                <div class="d-lg-none  " style="border-radius: 9999px; 
                            height: 52px;
                            border: 1px solid #ffffff;">
                    <button class="navbar-toggler collapsed " type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation"
                        style=" width:40px; height:40px; border-radius:50%; padding:5px; margin:5px; color:#5b7d6c;  background-color:#f5a287;">

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
                    height: 2px;
                    /* background-color: #5b7d6c; */
                    background-color: black;
                    display: block;
                    transition: all 0.2s;

                }

                .middle-bar {
                    margin: 5px auto;
                }

                .navbar-toggler .top-bar {
                    /* transform: rotate(45deg); */
                    transform: rotate(34deg);
                    transform-origin: 10% 10%;
                }

                .navbar-toggler .middle-bar {
                    opacity: 0;
                    filter: alpha(opacity=0);
                }

                .navbar-toggler .bottom-bar {
                    /* transform: rotate(-45deg); */
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

                    background-color: #5b7d6c;
                }


                @media (max-width: 991.98px) {

                    .ul-bg {
                        background-color: #f5a287;
                        border-radius: 8px;
                    }
                }
                </style>





                <!-- Navigation Menu -->

                <div class="collapse navbar-collapse  ul-bg " id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto justify-content-center flex-grow-1">
                        <li class="nav-item">

                            <a class="nav-link" href="<?= esc_url(home_url('/sample-page')); ?>">Home</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Diensten
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li>
                                    <a class=" dropdown-item" href="<?= esc_url(home_url('/dit-doen-wij')); ?>">Dit
                                        doen
                                        wij</a>
                                </li>
                                <li><a class="dropdown-item"
                                        href="<?= esc_url(home_url('/tuinontwerp')); ?>">Tuinontwerp</a>
                                </li>
                                <li><a class="dropdown-item"
                                        href="<?= esc_url(home_url('/tuinaanleg')); ?>">Tuinaanleg</a>
                                </li>
                                <li><a class="dropdown-item"
                                        href="<?= esc_url(home_url('/tuinderhoud')); ?>">Tuinderhoud</a>
                                </li>
                                <li><a class="dropdown-item" href="<?= esc_url(home_url('/advies')); ?>">Advies</a>
                                </li>

                            </ul>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link " href="<?= esc_url(home_url('/over-ons')); ?>">Cases</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="<?= esc_url(home_url('/tuinsoorten')); ?>">Overons</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="<?= esc_url(home_url('/projecten')); ?>">Contact</a>
                            <!--  id="navlinkactive" -->
                        </li>

                        <!-- The button here for smaller screens -->
                        <li><a class="d-block d-lg-none nav-link"
                                href="<?= esc_url(home_url('/contact')); ?>">Kennismaken</a>
                        </li>
                    </ul>

                    <!-- Instagram icon for mobile -->
                    <div class="instagram d-flex d-lg-none text-center">
                        <a href="https://www.instagram.com" target="_blank" class=" ">
                            <i class=" fab fa-instagram"></i>
                        </a>
                    </div>
                </div>

                <!-- Button on the Right side (visible only on large screens) -->
                <div class="circle-border d-none d-lg-block ms-auto ">
                    <div class="d-none d-lg-block ms-auto  ">
                        <a href="<?= esc_url(home_url('/contact')); ?>" class="btn btn-primary">Kennismaken</a>
                    </div>

                </div>
            </div>
        </nav>



    </header>