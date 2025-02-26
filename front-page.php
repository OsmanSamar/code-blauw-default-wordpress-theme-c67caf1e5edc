<?php get_header();
$fields = get_fields();
//Template Name: frontpage  ?>

<main class="front-page">

    <style>
        .hero-section {
            background: url("<?= get_field('heroimage')['url'] ?>");
            width: 100%;
            margin: 0 auto;
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            object-fit: cover;
        }

        .container-img {
            width: 100%;
            height: 819px;
            object-fit: cover;
            margin: 0 auto;
            background: linear-gradient(90deg, rgba(6, 48, 101, 0.9) 0%, rgba(0, 85, 179, 0.1) 100%),
                url("<?= get_template_directory_uri() ?>/images/mask-group.png") 50%/cover no-repeat;

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
            top: -109px;
            right: 0;
            width: 100%;
        }

        .swiper-title-btn {
            display: flex;
            align-items: baseline;
            justify-content: space-between;
            position: absolute;
            top: -109px;
            right: 0;
            width: 100%;

        }

        .swiper-text {
            font-size: 21px;
            font-weight: 300;
            white-space: nowrap;
            text-align: left;
            line-height: 50px;
            font-family: 'Richmond Display', serif;
            letter-spacing: 0px;
            color: #132030;
            opacity: 1;

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


        .swiper-button-prev2,
        .swiper-button-next2 {
            position: relative !important;
            width: 41px;
            height: 41px;
            border: 1px solid #FFFFFF;
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




        .swiper-button-next2::after,
        .swiper-rtl .swiper-button-prev2::after {
            font-size: 16px;
            font-weight: 900;
        }


        .swiper-button-prev2:after,
        .swiper-rtl .swiper-button-next2:after,
        .swiper-button-next2::after,
        .swiper-rtl .swiper-button-prev2::after {
            font-size: 16px;
            font-weight: 900;
            color: red;

        }

        .swiper-container .swiper-button-prev {

            left: -8% !important;
            top: 2px !important;
        }

        .swiper-container-2 .swiper-button-prev2 {

            left: -8% !important;
            top: 2px !important;
        }

        .swiper-container .swiper-button-next {

            right: 9px !important;
            top: 2px !important;
        }

        .swiper-container-2 .swiper-button-next2 {

            right: 9px !important;
            top: 2px !important;
        }



        .onz-eexpertises-title {
            text-align: center;
            font-size: 36px;
            font-weight: 300;
            line-height: 50px;
            font-family: 'Richmond Display', serif;
            letter-spacing: 0px;
            color: #132030;
            opacity: 1;
        }



        .sample-slider1 {
            width: 96%;
            /* width: 100%; */
            margin: 0 auto;
            overflow: clip;
            overflow-y: visible;

        }

        .logo-container {
            background: #FFFFFF 0% 0% no-repeat padding-box;
            border-radius: 5px;
            width: 150px;
            height: 93px;
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: #FFFFFF;
        }

        .title-container {
            width: 100%;
            text-align: left;
            padding-left: 15px;
            color: #FFFFFF;
            font-size: 22px;
            line-height: 50px;
            font-weight: 300;
            font-family: "Richmond Display", serif;
            letter-spacing: 1px;

        }


        .swiper-title {
            display: flex;
            align-items: baseline;
            justify-content: space-between;
            position: absolute;
            top: -70px;
            width: 100%;

        }


        @media (min-width: 768px) {

            .swiper-text {
                font-size: 26px;
            }

        }


        @media (min-width: 992px) {

            .swiper-container .swiper-button-prev {
                left: -12% !important;
                top: 3px !important;
            }

            .swiper-container-2 .swiper-button-prev-2 {

                left: -12% !important;
                top: 3px !important;
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
                            <a href="<?= get_field("meerwetenbtn")['url'] ?>" class=" btn-custom">
                                <?= get_field("meerwetenbtn")['title'] ?>
                            </a>
                            <img src="<?= get_template_directory_uri() ?>/images/white-arrow.svg" alt="go contact page"
                                class="go-arrow" style="pointer-events: auto ;z-index: 1000 " />
                        </div>
                        <div class="circle-border btn-custom-container">
                            <a href="<?= get_field("overonsbtn")['url'] ?>" class="btn-custom">
                                <?= get_field("overonsbtn")['title'] ?>
                            </a>
                            <img src="<?= get_template_directory_uri() ?>/images/white-arrow.svg" alt="go over ons page"
                                class="go-arrow" style="  pointer-events: auto ;z-index: 1000" />
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

            <div class="row">
                <div class="col-12 d-flex justify-content-center mb-4">
                    <div class="section-header ">
                        <div class="onz-eexpertises-title">

                            <?= get_field("onzeexpertisestitle") ?>
                        </div>
                    </div>
                </div>
            </div>



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
                            <div class="testimonial-container  h-100 ">
                                <div class=" d-flex flex-row align-items-center justify-content-between p-4">
                                    <span class="test-post-title">
                                        <?= $post->post_title ?>
                                    </span>
                                    <span class="test-img-border">
                                        <img src="<?= get_template_directory_uri() ?>/images/nextarrow.svg"
                                            alt="go onze expertises" class="go-arrow" />
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
                            wp_reset_postdata();
                            ?>
                        </div>
                    </div>


                </div>
            </div>

        </div>



        <div class="container-img position-relative">
            <div class="container">
                <div class="row g-0  pt-5">

                    <div class="col-12 col-md-6 col-lg-6" style="">
                        <img src="<?= get_template_directory_uri() ?>/images/manager-leading.png" alt="manager-leading"
                            class="w-100" style="object-fit: cover; border-radius: 5px; height: 387px; ">
                    </div>

                    <div class="col-12 col-md-6 col-lg-6 d-flex align-items-center p-4"
                        style="background: #FFFFFF 0% 0% no-repeat padding-box; box-shadow: 10px 10px 60px rgba(32, 114, 190, 0.1); border-radius: 5px; height: 387px;">
                        <div class="w-100">
                            <h2 class="verhaal-title"><?= get_field("onsverhaaltitle") ?></h2>
                            <p class="verhaal-text"><?= get_field("verhaaltext") ?>
                            </p>

                            <div class="d-flex gap-2 mt-4">
                                <div class="circle-border btn-custom-container">
                                    <a href="<?= get_field("overonsbtn")['url'] ?>" class="btn-custom"
                                        style="color: #132030;">

                                        <?= get_field("overonsbtn")['title'] ?>
                                        <img src="<?= get_template_directory_uri() ?>/images/nextarrow.svg"
                                            alt="go onze expertises" class="go-arrow"
                                            style="  width: 12px; height: 10.26px; flex-shrink: 0; object-fit: cover;" />
                                    </a>

                                </div>
                                <div class="circle-border btn-custom-container">
                                    <a href="<?= get_field("werkwijzebtn")['url'] ?>" class="btn-custom"
                                        style="color: #132030;">

                                        <?= get_field("werkwijzebtn")['title'] ?>
                                        <img src="<?= get_template_directory_uri() ?>/images/nextarrow.svg"
                                            alt="go onze expertises" class="go-arrow"
                                            style="  width: 12px; height: 10.26px; flex-shrink: 0; object-fit: cover;" />
                                    </a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container  position-relative" style="margin-top: 190px;">
                <div class="swiper-container-2">
                    <div class="">
                        <!-- swiper-title-btn -->
                        <div class="swiper-title ">
                            <div class="title-container" data-aos="fade-right" data-aos-offset="100" data-aos-delay="50"
                                data-aos-duration="1000" data-aos-easing="ease-in-out">
                                <?= get_field("titleoflogos") ?>
                            </div>
                            <div class="d-flex align-items-center gap-2">
                                <!-- <div class="swiper-button-prev2"></div>
                                <div class="swiper-button-next2"></div> -->
                            </div>
                        </div>
                    </div>


                    <div class="container  position-relative">
                        <div class=" logoswiper sample-slider1  ">
                            <div class="swiper-wrapper">
                                <?php
                                $testemonials = get_field("partnerslogotestemonials");
                                if ($testemonials) {
                                    foreach ($testemonials as $testemonial) { ?>
                                        <div class="swiper-slide ">
                                            <div class="logo-container "
                                                style="background-color: #f0f0f0; border-radius:5px; padding: 20px;">
                                                <a href="<?= esc_url($testemonial['partnerslogolink']['url']) ?>">
                                                    <img src="<?= esc_url($testemonial['partnerslogoimg']['url']) ?>"
                                                        alt="<?= esc_attr($testemonial['grotnerslogoimg']['alt']) ?>"
                                                        style="width: 72px; height: 64px; border-radius: 5px; object-fit: contain;" />
                                                </a>
                                            </div>
                                        </div>
                                    <?php }
                                } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>














        </div>

        <!--End of wshite-containe-->

















        <!-- End of Page -->
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
            // a utoplay: {
            // d elay: 2000,
            // } ,
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


    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const logoswiper = new Swiper('.sample-slider1', {

                slidesPerView: 2,
                centeredSlides: true,
                spaceBetween: 24,

                pagination: {
                    el: '.swiper-pagination',
                },
                navigation: {
                    nextEl: ".swiper-button-next2",
                    prevEl: ".swiper-button-prev2",
                },

                breakpoints: {

                    360: {
                        slidesPerView: 2,
                        spaceBetween: 1,

                    },

                    540: {
                        slidesPerView: 3.2,
                        spaceBetween: 1,

                    },

                    556: {
                        slidesPerView: 3.2,
                        spaceBetween: 1,
                    },
                    992: {

                        slidesPerView: 5,
                        spaceBetween: 2,
                    },
                    1025: {
                        slidesPerView: 6,
                        spaceBetween: 1,

                    }


                }
            });
        });
    </script>







</main>

<?php get_footer() ?>