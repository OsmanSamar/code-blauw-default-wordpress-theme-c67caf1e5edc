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



<?php
$menu_id = get_nav_menu_locations()['header-menu'];
$items = wp_get_nav_menu_items($menu_id);
$menu_items = array();
foreach ((array) $items as $key => $menu_item) {
    $menu_items[$menu_item->menu_item_parent][] = $menu_item;
}
$menu = [];
foreach ($items as $item) {
    if ($item->menu_item_parent == 0) {
        $menu[] = $item;
    }
    if (isset($menu_items[$item->ID])) {
        $item->children = $menu_items[$item->ID];
    }
}
unset($menu_items);
?>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>

    <!-- AOS -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <script>
        AOS.init();
    </script>
    <!-- AOS -->


    <header class="header position-fixed d-flex justify-content-center">
        <nav class="w-100">
            <div class="container">
                <div class="navbar navbar-expand-xl navbar-light sans-serif w-100 ">
                    <div class="container p-xl-0 m-0">

                        <a href="<?= site_url() ?>" class="navbar-brand">
                            <img src="<?= get_template_directory_uri() ?>/images/logo-blauwijs.svg"
                                data-default-logo="<?= get_template_directory_uri() ?>/images/logo-blauwijs.svg"
                                data-scrolled-logo="<?= get_template_directory_uri() ?>/images/blauwIjs-blauwlogo.svg"
                                alt="Blauw Ijs Logo" class="logo" />
                        </a>

                        <!-- Hamburger button for mobile -->
                        <div class="d-xl-none wrapper">
                            <button id="box" class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                aria-expanded="false" aria-label="Toggle navigation">
                                <div class="hamburger">
                                    <span class="one"></span>
                                    <span class="two"></span>
                                    <span class="three"></span>
                                </div>
                            </button>
                        </div>

                        <!-- Navigation Menu -->
                        <div class="collapse navbar-collapse ul-bg " id="navbarSupportedContent">
                            <ul class="navbar-nav ms-auto justify-content-center  flex-grow-1">
                                <?php foreach ($menu as $item):
                                    $active = get_permalink() == $item->url;
                                    if (is_archive()) {
                                        $post_type = get_post_type();
                                        $active = $item->url == get_post_type_archive_link($post_type);
                                    }
                                    if($item->children){
                                        foreach ($item->children as $child):
                                            if ($active) {
                                                break;
                                            }
    
                                            $post_type = get_post_type();
                                            $active = get_permalink() == $child->url;
    
                                            $active = $active ?: $child->url == get_post_type_archive_link($post_type);
    
                                        endforeach;
                                    }
                                    
                                ?>
                                    <li class="nav-item dropdown">

                                        <?php if ($item->children): ?>
                                            <a class="nav-link nav-link-ltr dropdown-toggle d-flex align-items-center <?= $active ? "active" : "" ?>"
                                                role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                <?= $item->title ?>
                                                <img src="<?= get_template_directory_uri(); ?>/images/downarrow.svg"
                                                    alt="Dropdown Icon" style="" class="dropdownarrow">
                                            </a>
                                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">

                                                <?php foreach ($item->children as $child): ?>
                                                    <li>
                                                        <a class="dropdown-item  d-flex " href="<?= $child->url; ?>">
                                                            <?= $child->title ?>

                                                        </a>
                                                    </li>
                                                <?php endforeach; ?>
                                            </ul>
                                        <?php
                                        else:
                                        ?>
                                            <a class="nav-link  nav-link-ltr  d-flex align-items-center <?= $active ? "active" : "" ?>"
                                                href="<?= $item->url; ?>" role="button">
                                                <?= $item->title ?> </a>
                                        <?php
                                        endif; ?>
                                    </li>
                                <?php endforeach; ?>
                            </ul>

                            <!-- Button on the Right side (visible only on large screens) -->
                            <a href="<?= get_field("btn", 'option')['url'] ?>"
                                class="button btn-primary d-none d-xl-inline-flex justify-content-center align-items-center nav-bar-btn">
                                <?= get_field("btn", 'option')['title'] ?>
                                <img src="<?= get_template_directory_uri() ?>/images/white-arrow.svg" alt="go Contact page"
                                    class="go-arrow" />
                            </a>

                        </div>


                    </div>
                </div>
            </div>
        </nav>
    </header>