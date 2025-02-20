<?php get_header()  //Template Name: frontpage  ?>

<main class="front-page">

    <style>
    .hero-section {
        background: url("<?= get_field('heroimage')['url'] ?>");

    }

    .container-img {
        width: 100%;
        max-width: 1700px;
        height: 449px;
        object-fit: cover;
        background-repeat: no-repeat;
        margin: 0 auto;
        background-image: url("<?= get_template_directory_uri() ?>/images/mask-group.png");
        background: transparent linear-gradient(90deg, #132030 0%, #13203000 100%) 0% 0% no-repeat padding-box;
        background: linear-gradient(90deg, rgba(6, 48, 101, 0.9) 0%, rgba(0, 85, 179, 0.1) 100%),
            url("<?= get_template_directory_uri() ?>/images/mask-group.png") 50%/cover no-repeat
    }


    .testimonial-slide {
        background: #FFFFFF 0% 0% no-repeat padding-box;
        border-radius: 5px;
        padding: 30px;
        box-shadow: 10px 10px 60px #2072BE1A;
        text-align: left;
        max-width: 400px;
        margin: auto;
        position: relative;
        z-index: 3;
    }

    .testimonial-text {
        font-size: 16px;
        font-weight: 300;
        margin-bottom: 8px;
        font-family: 'Scala Sans Pro', sans-serif;
        letter-spacing: 0px;
        color: #132030;
        opacity: 1;
    }

    .testimonial-naam {
        font-family: 'Scala Sans Pro', sans-serif;
        font-size: 16px;
        font-weight: 600;
        color: #1e73be;
        opacity: 1;
        letter-spacing: 0px;
    }

    .swiper-container {
        position: relative;
        width: 90%;
        margin: 0 auto;
    }

    .swiper-container .swiper-pagination {
        bottom: -50px !important;
    }

    .swiper-container .swiper-pagination-bullet {
        width: 10px;
        height: 10px;
        background-color: #FFFFFF;
    }

    .swiper-header {
        display: flex;
        align-items: baseline;
        justify-content: space-evenly;
        position: absolute;
        top: -70px;
        right: 0;
        width: 100%;
    }

    .swiper-text {
        font-size: 16px;
        font-weight: 300;
        white-space: nowrap;
        text-align: left;
        line-height: 50px;
        font-family: 'Richmond Display', serif;
        letter-spacing: 0px;
        color: #FFFFFF;
        opacity: 1;
    }

    .swiper-button-prev,
    .swiper-button-next {
        position: static !important;
        width: 41px;
        height: 41px;
        border: 1px solid #FFFFFF;
        color: #FFFFFF;
        border-radius: 5px;
        display: flex;
        align-items: center;
        justify-content: center;
        z-index: 10;
        cursor: pointer;
    }


    .swiper-button-next::after,
    .swiper-rtl .swiper-button-prev::after {
        font-size: 16px;
        font-weight: 900;
    }

    .swiper-button-prev:after,
    .swiper-rtl .swiper-button-next:after,
    .swiper-button-next::after,
    .swiper-rtl .swiper-button-prev::after {
        font-size: 16px;
        font-weight: 900;
    }


    .swiper-container .swiper-button-prev {
        position: absolute;
        left: 82% !important;
        top: -70px !important;
    }

    .swiper-container .swiper-button-next {
        position: absolute;
        right: -40px !important;
        top: -70px !important;
    }



    .card-title {
        text-align: left;
        font-size: 16px;
        font-weight: 300;
        font-family: "Scala Sans Pro", sans-serif;
        line-height: 20px;
        letter-spacing: 0px;
        color: #132030;
        opacity: 1;
        padding-left: 17px;
    }

    .card-text {
        text-align: left;
        font-size: 18px;
        font-weight: 300;
        font-family: "Scala Sans Pro", sans-serif;
        line-height: 24px;
        letter-spacing: 0px;
        color: #132030;
        opacity: 1;
    }

    .arrow {
        background-color: #1E73BE;
        border-radius: 50px;
        height: 28px;
        width: 28px;
    }



    @media (max-width: 768px) {
        .swiper-container .swiper-button-prev {
            position: absolute;
            left: 90% !important;
            top: -70px !important;
        }
    }


    @media (min-width: 992px) {
        .swiper-container .swiper-button-prev {
            position: absolute;
            left: 95% !important;
            top: -70px !important;
        }

        .swiper-text {
            font-size: 36px;
        }



        .pe-lg-5 {
            padding-right: 14rem !important;
        }

    }
    </style>
    <div>

        <!-- Hero Section -->
        <div class="hero-section">
            <div class="hero-content">
                <div class="col-12  col-lg-12  pe-0 pe-lg-5">
                    <h1 class="hero-title fadeIn " data-side="right" style="transition-delay: .25s;">
                        <span class="d-block">
                            <?= get_field("herotitlegekleuredtext") ?>
                        </span>

                    </h1>
                    <span class="hero-text">
                        <?= get_field("herotext") ?>
                    </span>
                    <div class="button-group">
                        <div class="circle-border btn-primary-custom">
                            <a href="<?= get_field("meerwetenbtn")['url'] ?>" class="btn btn-primary">
                                <?= get_field("meerwetenbtn")['title'] ?>
                            </a>
                        </div>
                        <div class="circle-border btn-custom-container">
                            <a href="<?= get_field("overobtnns")['url'] ?>" class="btn-custom">
                                <?= get_field("overobtnns")['title'] ?>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>





        <!-- Flexible Content Field -->
        <div>
            <?php if (have_rows('flexiblecontentfield')): ?>
            <div class="container mt-4">
                <?php while (have_rows('flexiblecontentfield')):
                        the_row(); ?>
                <?php if (get_row_layout() == 'text'): ?>
                <div class="row">

                    <div class="col-12  h-100 p-3 px-4 mt-5 flexible-title" data-aos="fade-up" data-aos-offset="100"
                        data-aos-delay="50" data-aos-duration="1000" data-aos-easing="ease-in-out">
                        <span><?php the_sub_field('title'); ?></span>
                    </div>
                </div>

                <div class="row g-5 mt-1">
                    <div class="col-lg-6 text-start mt-5 flexible-left-text" data-aos="fade-right" data-aos-offset="100"
                        data-aos-delay="50" data-aos-duration="1000" data-aos-easing="ease-in-out">

                        <p><?php the_sub_field('lefttext'); ?></p>
                    </div>

                    <div class="col-lg-6 text-start mt-5 flexible-right-text" data-aos="fade-left" data-aos-offset="100"
                        data-aos-delay="50" data-aos-duration="1000" data-aos-easing="ease-in-out">

                        <p><?php the_sub_field('righttext'); ?></p>
                    </div>
                </div>

                <?php endif; ?>
                <?php endwhile; ?>
            </div>
            <?php endif; ?>
        </div>
        <!-- End of Flexible Content Field -->




        <!-- Onze_Expertises -->
        <div class="container p-3 px-4 mt-5" id="testimonials">
            <div class="row g-0  mb-4">
                <?php
                $delay = 0;
                $posts = get_posts([
                    'post_type' => 'onze_expertises',
                    'numberposts' => -1,
                    "order" => 'asc'
                ]);

                foreach ($posts as $post) {
                    $fields = get_fields($post->ID);
                    $testimonial = get_field("expertisestestimonials");
                    // Debugging: Check the values of $fields['nextarrow']
                    // var_dump($fields['nextarrow']);
                
                    ?>

                <div class="col-lg-4 col-md-4 col-12 mb-4">

                    <a href="<?= get_permalink($post) ?>">
                        <div class=" testimonial-container">
                            <div class="testimonial-content">
                                <span class="test-post-title">
                                    <?= $post->post_title ?>
                                </span>
                                <span
                                    style="border: 1px solid #F29401;border-radius: 5px;opacity: 1; background:#FFFFFF;width:  38px;;height: 38px; display:flex; align-items: center; justify-content: center;">
                                    <img src="<?= get_template_directory_uri() ?>/images/nextarrow.svg"
                                        alt="go onze expertises" class="testimonial-arrow"
                                        style="  width: 12px; height: 10.26px; flex-shrink: 0;" />
                                </span>
                            </div>
                        </div>
                    </a>
                </div>
                <?php

                }
                wp_reset_postdata();
                ?>
            </div>
        </div>


        <!--first-blue-block  -->
        <div class="first-blue-block position-relative">


            <div class="container">
                <div class="flex align-items-center justify-content-between">
                    <span> <?= get_field("herotitlegekleuredtext") ?></span>
                </div>
            </div>





            <div class="container mt-5" id="testimonials" data-aos="fade-up" data-aos-offset="100" data-aos-delay="50"
                data-aos-duration="1000" data-aos-easing="ease-in-out">
                <div class="row  d-flex container2  ">
                    <?php
                    $delay = 0;
                    $posts = get_posts([
                        'post_type' => 'werken_voor',
                        'numberposts' => -1,
                        "order" => 'asc'
                    ]);

                    foreach ($posts as $post) {
                        $fields = get_fields($post->ID);
                        ?>
                    <div class="col-lg-3 col-md-4 col-12" data-aos="fade-up" data-aos-delay="<?= $delay ?>"
                        data-aos-duration="800">
                        <a href="<?= get_permalink($post) ?>">

                            <div class="card h-100"
                                style="border-radius:5px;width: ;background: #FFFFFF 0% 0% no-repeat padding-box;box-shadow: 10px 10px 60px #2072BE1A; ">
                                <img src="<?= $fields["backimg"]['url'] ?>" alt="<?= $fields['backimg']['alt'] ?>"
                                    class="card-img-top"
                                    style="height: 101px; border-radius: 5px; background: #F7F6F4 0% 0% no-repeat padding-box; object-fit: scale-down;" />
                                <!-- CARD BODY -->
                                <div class="card-body mt-1 mb-0 pb-4 px-1 h-100 position-relative" style="overflow: ;">
                                    <div class="card-body d-flex justify-content-between align-items-normal">
                                        <span class="card-text"><?= $post->post_title ?></span>
                                        <div class="d-flex justify-content-center align-items-center arrow">
                                            <img src="<?= get_template_directory_uri() ?>/images/whitenextarrow.svg"
                                                alt="go to article" style="width: 13px; height: 13px; " class="icon" />
                                        </div>
                                    </div>

                                    <div class="card-title ">
                                        <span><?= $fields["text"] ?></span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <?php
                        $delay += 300;
                    }
                    wp_reset_postdata();
                    ?>
                </div>
            </div>

        </div>








        <div class="container-img position-relative">
            <div class="container">
                <div class="verhaal-container">
                    <div class="row g-0 ">
                        <div class="col-12  col-lg-6">
                            <img src="<?= get_template_directory_uri() ?>/images/manager-leading.png"
                                alt="manager-leading" />
                        </div>
                        <div class="col-12 col-lg-6">
                            <div class="d-flex justify-content-left flex-column text-left left-container" style="">
                                <span class="verhaal-title">Ons verhaal</span>
                                <span class="verhaal-text">Wij helpen organisaties om zich aan te passen aan
                                    verandering
                                    en
                                    te
                                    groeien. Ons doel?
                                    Organisaties wendbaarder, efficiënter en toekomstbestendig maken.
                                </span>
                                <!-- Talk to an export btn -->
                                <div
                                    class="d-flex justify-content-flex-start align-items-center gap-2 mt-4 letstalk-btn">
                                    <a href="<?= get_field("naaroverons")['url'] ?>"
                                        style="color: #132030; font-family: Manrope;font-size: 16px;  font-family: 'Scala Sans Pro', sans-serif;font-weight: 700;line-height: 22px; display: flex; 
                                                        align-items: center; gap:8px; text-decoration: none;  text-align: left; ">
                                        <?= get_field("naaroverons")['title'] ?>
                                        <img src="<?= get_template_directory_uri() ?>/images/nextarrow.svg"
                                            alt="go onze expertises" class="testimonial-arrow"
                                            style="  width: 12px; height: 10.26px; flex-shrink: 0; object-fit: cover;" />
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>










    </div>






</main>

<?php get_footer() ?>