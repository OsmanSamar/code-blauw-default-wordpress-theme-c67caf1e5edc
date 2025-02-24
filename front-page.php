<?php get_header()  //Template Name: frontpage  ?>

<main class="front-page">

    <style>
        /* .first-blue-block {
        height: 512px;
    } */


        /*  */

        .hero-section {
            background: url("<?= get_field('heroimage')['url'] ?>");
            width: 100%;
            max-width: 1700px;
            margin: 0 auto;
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            object-fit: cover;
        }

        .container-img {
            width: 100%;
            max-width: 1700px;
            height: 819px;
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
            padding: 19px;
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
            /* position: relative; */
            width: 100%;
            margin: 0 auto;
            overflow: clip;
            overflow-y: visible;

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
            justify-content: space-between;
            position: absolute;
            top: -70px;
            right: 0;
            width: 100%;
        }

        .swiper-text {
            font-size: 26px;
            font-weight: 300;
            white-space: nowrap;
            text-align: left;
            line-height: 50px;
            font-family: 'Richmond Display', serif;
            letter-spacing: 0px;
            color: #132030;
            opacity: 1;
            position: relative !important;
            top: -13px;
            left: 8px;
        }

        .swiper-button-prev,
        .swiper-button-next {
            position: relative !important;
            width: 41px;
            height: 41px;
            border: 1px solid #132030;
            color: #132030;
            border-radius: 5px;
            display: flex;
            align-items: center;
            justify-content: center;
            z-index: 10;

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
            /* left: 82% !important;
        top: -70px !important; */
            left: -8% !important;
            top: -13px !important;
        }

        .swiper-container .swiper-button-next {
            position: absolute;
            right: 9px !important;
            top: -12px !important;
        }


        @media (min-width: 768px) {
            .swiper-container .swiper-button-prev {
                position: absolute;
                left: -8% !important;
                top: -13px !important;
            }

        }


        @media (min-width: 992px) {

            .swiper-container .swiper-button-prev {
                position: absolute;
                left: -12% !important;
                top: -12px !important;
            }

            .swiper-text {
                font-size: 36px;
                top: -12px !important;
            }

            .pe-lg-5 {
                padding-right: 30rem !important;
            }

        }
    </style>
    <div>

        <!-- Hero Section -->
        <div class="hero-section">
            <div class="hero-content">
                <div class="col-12   col-lg-12  pe-0 pe-lg-5">
                    <h1 class="hero-title" data-aos="fade-up" data-aos-offset="100" data-aos-delay="50"
                        data-aos-duration="1000" data-aos-easing="ease-in-out">
                        <span class="d-block">
                            <?= get_field("herotitlegekleuredtext") ?>
                        </span>

                    </h1>
                    <h4 class="hero-text">
                        <span class="d-block"> <?= get_field("herotext") ?></span>
                    </h4>
                    <div class="button-group mt-4">
                        <div class="circle-border btn-primary-custom">
                            <a href="<?= get_field("meerwetenbtn")['url'] ?>" class="btn btn-primary">
                                <?= get_field("meerwetenbtn")['title'] ?>
                            </a>
                        </div>
                        <div class="circle-border btn-custom-container">
                            <a href="<?= get_field("overonsbtn")['url'] ?>" class="btn-custom">
                                <?= get_field("overonsbtn")['title'] ?>
                            </a>
                            <img src="<?= get_template_directory_uri() ?>/images/nextarrow.svg" alt="go onze expertises"
                                class="testimonial-arrow"
                                style="  width: 12px; height: 10.26px; flex-shrink: 0; object-fit: cover;" />
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--2 Flexible Content Field -->
        <div>
            <?php if (have_rows('flexiblecontentfield')): ?>
                <div class="container mt-4">
                    <?php while (have_rows('flexiblecontentfield')):
                        the_row(); ?>
                        <?php if (get_row_layout() == 'text'): ?>
                            <div class="row">

                                <div class="col-12   h-100 p-3 px-4 mt-5 " data-aos="fade-up" data-aos-offset="100"
                                    data-aos-delay="50" data-aos-duration="1000" data-aos-easing="ease-in-out">
                                    <h1 class="flexible-title"><?php the_sub_field('title'); ?></h1>
                                </div>
                            </div>

                            <div class="row g-5 mt-1">
                                <div class="col-lg-6 text-start mt-5 flexible-left-text" data-aos="fade-right" data-aos-offset="100"
                                    data-aos-delay="50" data-aos-duration="1000" data-aos-easing="ease-in-out">

                                    <span class="left-text"><?php the_sub_field('lefttext'); ?></span>
                                </div>

                                <div class="col-lg-6 text-start mt-5 flexible-right-text" data-aos="fade-left" data-aos-offset="100"
                                    data-aos-delay="50" data-aos-duration="1000" data-aos-easing="ease-in-out">

                                    <span class="right-text"><?php the_sub_field('righttext'); ?></span>
                                </div>
                            </div>

                        <?php endif; ?>
                    <?php endwhile; ?>
                </div>
            <?php endif; ?>
        </div>
        <!-- End of Flexible Content Field -->




        <!-- Onze_Expertises -->
        <div class="container p-3 px-1 mt-5 position-relative" id="testimonials" style=" z-index: 2;">
            <div class="row mb-4">
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
                            <!-- <div class=" testimonial-container h-100 d-flex align-items-center justify-content-between">
                                <div class="testimonial-content">
                                    <span class="test-post-title">
                                        <?= $post->post_title ?>
                                    </span>
                                    <span class="test-img-border">
                                        <img src="<?= get_template_directory_uri() ?>/images/nextarrow.svg"
                                            alt="go onze expertises" class="testimonial-arrow" />
                                    </span>
                                </div>
                            </div> -->
                            <div class="testimonial-container  h-100 ">
                                <div class=" d-flex flex-row align-items-center justify-content-between p-4">
                                    <span class="test-post-title">
                                        <?= $post->post_title ?>
                                    </span>
                                    <span class="test-img-border">
                                        <img src="<?= get_template_directory_uri() ?>/images/nextarrow.svg"
                                            alt="go onze expertises" class="testimonial-arrow" />
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
            <div class="container blue-container">
                <div class="swiper-container swiper position-relative ">

                    <div class="swiper-header">
                        <div class="swiper-text">
                            <?= get_field("werkentitle") ?>
                        </div>
                        <div class="d-flex align-items-center gap-2">
                            <div class="swiper-button-prev"></div>
                            <div class="swiper-button-next"></div>
                        </div>
                    </div>

                    <div class="swiperwerken werk-swiper">
                        <div class="swiper-wrapper">
                            <?php
                            $delay = 0;
                            $posts = get_posts([
                                'post_type' => 'werken_voor',
                                'numberposts' => -1,
                                "order" => 'asc'
                            ]);

                            foreach ($posts as $post) {
                                $fields = get_fields($post->ID);
                                $testimonial = get_field("testimonialwerkvoor");
                                ?>
                                <div class="swiper-slide d-flex flex-column h-100  ">
                                    <a href="<?= get_permalink($post) ?>" class="d-flex flex-column h-100">
                                        <div class="testimonial-slide d-flex flex-column h-100">
                                            <img src="<?= $testimonial["logo"]['url'] ?>"
                                                alt="<?= $testimonial['logog']['alt'] ?>" class="card-img-top"
                                                style="height: 101px; border-radius: 5px; background: #F7F6F4; object-fit: scale-down;" />
                                            <div class="card-body d-flex flex-column  mt-1 mb-0 pb-4 pt-2  h-100">
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <span class="card-text">
                                                        <?= $post->post_title ?></span>
                                                    <span class="d-flex justify-content-center align-items-center arrow">
                                                        <img src="<?= $testimonial["white_arrow"]['url'] ?>"
                                                            alt=" <?= $testimonial['white_arrow']['alt'] ?>"
                                                            class="card-img-top"
                                                            style="width: 9px; height: 7.69px; object-fit: cover; display: block; " />
                                                    </span>
                                                </div>
                                                <span class="card-title mt-auto">
                                                    <span><?= $testimonial["text"] ?></span>
                                                </span>
                                            </div>


                                        </div>

                                    </a>
                                </div>
                                <?php
                                $delay += 300;
                            }
                            ?>
                        </div>
                    </div>

                    <!-- <div class="swiper-pagination"></div> -->

                </div>
            </div>

        </div>


        <div class="container-img position-relative">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-12">
                        <div class="verhaal-container col-12 col-lg-12">

                            <div class="row g-0 ">
                                <div class="col-12  col-lg-6">
                                    <img src="<?= get_template_directory_uri() ?>/images/manager-leading.png"
                                        alt="manager-leading" />
                                </div>
                                <div class="col-12 col-lg-6 d-flex align-items-center" style=" text-wrap: balance;">
                                    <div class="d-flex justify-content-left flex-column text-left left-container"
                                        style="">
                                        <span class="verhaal-title">
                                            Ons verhaal
                                            <?= get_field("onsverhaaltitle") ?>

                                        </span>
                                        <span class="verhaal-text">
                                            Met onze veelzijdige aanpak helpen we organisaties met veranderprocessen en
                                            ontwikkeling, om ze mooier, wendbaarder, toekomstbestendiger én krachtiger
                                            te maken.
                                            <?= get_field("verhaaltext") ?>
                                        </span>

                                        <!-- BTN -->
                                        <div class="d-flex justify-content-flex-start align-items-center gap-1 mt-4">

                                            <div class="circle-border btn-custom-container">
                                                <a href="<?= get_field("overonsbtn")['url'] ?>" class="btn-custom">
                                                    <img src="<?= get_template_directory_uri() ?>/images/nextarrow.svg"
                                                        alt="go onze expertises" class="testimonial-arrow"
                                                        style="  width: 12px; height: 10.26px; flex-shrink: 0; object-fit: cover;" />
                                                    <?= get_field("overonsbtn")['title'] ?>
                                                </a>

                                            </div>

                                            <a href="<?= get_field("werkwijzebtn")['url'] ?>" class="btn-s"
                                                style="color:#132030">
                                                <img src="<?= get_template_directory_uri() ?>/images/nextarrow.svg"
                                                    alt="go onze expertises" class="testimonial-arrow"
                                                    style="  width: 12px; height: 10.26px; flex-shrink: 0; object-fit: cover;" />
                                                <?= get_field("werkwijzebtn")['title'] ?>
                                                Werkwijze
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <!-- End of -->
    </div>

    <script>
        let swiperwerken = new Swiper('.werk-swiper', {
            slidesPerView: 2.5,
            grabCursor: true,
            spaceBetween: 20,

            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            loop: true,
            //  autoplay: {
            //       delay: 2000,
            //  },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },


            breakpoints: {
                360: {
                    slidesPerView: 1.3
                },
                540: {
                    slidesPerView: 2
                },
                768: {
                    slidesPerView: 2.5
                },
                992: {
                    slidesPerView: 3.2
                },
                1025: {
                    slidesPerView: 4
                },
            },

            // R ein itia li ze A O S after Swiper initialization
            on: {
                init: function () {
                    AOS.refresh();
                },
                slideChangeTransitionEnd: function () {
                    AOS.refresh();
                }

            }


        });

        // I nitialize AOS
        AOS.init({
            duration: 800, // Animation duration
            once: true, // Only animate once
        });
    </script>







</main>

<?php get_footer() ?>