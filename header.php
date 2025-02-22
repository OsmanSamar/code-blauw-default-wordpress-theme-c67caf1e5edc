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

    <!-- Swiper -->
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css">
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script> -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css">
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <!-- Swiper -->
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
            style="top: 26px;width: 1000px;height: 55px;border: 1px solid #FFFFFF;border-radius: 5px;opacity: 1;">
            <div class="container-fluid p-0 m-0">
                <!-- Logo  -->
                <!-- <a href="<?= esc_url(home_url('/home')); ?>" class="navbar-brand">
                    <img src="<?= get_template_directory_uri() ?>/images/logo-blauw-ijs.png" alt="go onze expertises"
                        style="width: 136px; height: 36px; top:30px" alt="Blauw Ijs Logo" />
                </a> -->
                <a href="<?= esc_url(get_permalink(get_page_by_path('sample-page'))) ?>" class="navbar-brand ps-2">
                    <img src="<?= get_template_directory_uri() ?>/images/logo-blauw-ijs.png" alt="Blauw Ijs Logo"
                        style="width: 136px; height: 36px; top:30px"   />
                </a>

                <!-- Hamburger button for mobile -->
                <div class="d-lg-none  " style="border-radius: 5px; 
                            height: 38px; width:38px;
                            border: 1px solid  #F29401;">
                    <button class="navbar-toggler collapsed ms-auto" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation" style=" 
                        width:38px; height:38px; border-radius:5px; padding:4px; margin:; opacity: 1;;  
                        background-color:transparant;">

                        <span class="toggler-icon top-bar"></span>
                        <span class="toggler-icon middle-bar"></span>
                        <span class="toggler-icon bottom-bar"></span>
                    </button>
                </div>


                <!-- Navigation Menu -->
                <div class="collapse navbar-collapse  ul-bg " id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto justify-content-end flex-grow-1">
                        <li class="nav-item">

                            <a class="nav-link custom-nav-link text-white"
                                href="<?= esc_url(home_url('/home')); ?>">Home</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle custom-nav-link text-white" href="#" id="navbarDropdown"
                                role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Diensten
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li>
                                    <a class=" dropdown-item" href="<?= esc_url(home_url('/project')); ?>">Project-en
                                        programmamanagement</a>
                                </li>
                                <li><a class="dropdown-item"
                                        href="<?= esc_url(home_url('/strategie')); ?>">Strategie</a>
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
                            <a class="nav-link custom-nav-link text-white"
                                href="<?= esc_url(home_url('/cases')); ?>">Cases</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link custom-nav-link text-white"
                                href="<?= esc_url(home_url('/over-ons')); ?>">Overons</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link custom-nav-link text-white"
                                href="<?= esc_url(home_url('/werkwijze')); ?>">Werkwijze</a>

                        </li>

                        <!-- The button here for smaller screens -->
                        <li>
                            <a class="d-block d-lg-none nav-link custom-nav-link text-white"
                                href="<?= esc_url(home_url('/kennismaken')); ?>">Kennismaken</a>
                        </li>
                    </ul>


                </div>

                <!-- Button on the Right side (visible only on large screens) -->
                <div class="circle-border   d-none d-lg-inline-flex justify-content-center align-items-center me-auto"
                    style="; background: #F29401;">
                    <div class="d-none d-lg-block me-auto">
                        <a href="<?= esc_url(home_url('/kennismaken')); ?>" class="btn btn-primary">Kennismaken</a>
                    </div>
                </div>

            </div>
        </nav>



    </header>