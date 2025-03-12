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


    <header class="header position-absolute d-flex justify-content-center " style=" z-index:2; width: 100vw; top:4px; ">

        <div class="container">
            <!-- Bootstrap container -->
            <nav class="navbar navbar-expand-lg navbar-light sans-serif w-100"
                style=" height: 55px; border: 1px solid #FFFFFF; border-radius: 5px; opacity: 1; padding-bottom: 6px;">

                <div class="container p-lg-0 m-0">
                    <!-- Ensures navbar takes full width inside container -->
                    <a href="<?= esc_url(get_permalink(get_page_by_path('sample-page'))) ?>" class="navbar-brand">
                        <img src="<?= get_template_directory_uri() ?>/images/logo-blauwijs.svg" alt="Blauw Ijs Logo"
                            style="width: 136px; height: 36px; top:30px; object-fit: cover;" />
                    </a>

                    <!-- Hamburger button for mobile -->
                    <div class="d-lg-none"
                        style="border-radius: 5px; height: 38px; width:38px; border: 1px solid  #F29401;">
                        <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation"
                            style="width:38px; height:38px; border-radius:5px; padding:4px; background-color:transparent;">
                            <span class="toggler-icon top-bar"></span>
                            <span class="toggler-icon middle-bar"></span>
                            <span class="toggler-icon bottom-bar"></span>
                        </button>
                    </div>

                    <!-- Navigation Menu -->
                    <div class="collapse navbar-collapse ul-bg" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto justify-content-end flex-grow-1">
                            <li class="nav-item">
                                <a class="nav-link" href="<?= esc_url(home_url('/home')); ?>">Home</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Diensten
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href="<?= esc_url(home_url('/project')); ?>">Project-en
                                            programmamanagement</a></li>

                                    <li><a class="dropdown-item"
                                            href="<?= esc_url(home_url('/strategie')); ?>">Strategie</a></li>

                                    <li><a class="dropdown-item" href="<?= esc_url(home_url('/')); ?>">g</a></li>
                                    <li><a class="dropdown-item" href="<?= esc_url(home_url('/')); ?>">T</a></li>
                                    <li><a class="dropdown-item" href="<?= esc_url(home_url('/')); ?>">A</a></li>
                                </ul>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link " href="<?= esc_url(home_url('/cases')); ?>">Cases</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link  " href="<?= esc_url(home_url('/over-ons')); ?>">Over ons</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link " href="<?= esc_url(home_url('/werkwijze')); ?>">Werkwijze</a>
                            </li>

                            <!-- The button here for smaller screens -->
                            <li>
                                <a class="d-block d-lg-none nav-link "
                                    href="<?= esc_url(home_url('/kennismaken')); ?>">Kennismaken</a>
                            </li>
                        </ul>
                    </div>

                    <!-- Button on the Right side (visible only on large screens) -->
                    <div class=" btn-primary-custom d-none d-lg-inline-flex justify-content-center align-items-center "
                        style="width: 149px;height: 55px;    margin-right: -1px;     margin-bottom: 3px;">
                        <!-- me-auto -->
                        <a href="<?= esc_url(home_url('/kennismaken')); ?>" class="btn-custom">Kennismaken</a>
                        <img src="<?= get_template_directory_uri() ?>/images/white-arrow.svg" alt="go Contact page"
                            class="go-arrow" />
                    </div>
                </div>
            </nav>
        </div> <!-- End Bootstrap Container -->






    </header>