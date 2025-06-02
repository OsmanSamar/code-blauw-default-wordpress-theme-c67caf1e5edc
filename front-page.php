<?php get_header();
$fields = get_fields();
//Template Name: frontpage  ?>

<main class="front-page">

    <style>
    .container-img {
        width: 100%;
        height: 819px;
        object-fit: cover;
        margin: 0 auto;
        height: fit-content;
        padding: 16px;
        background-position: center;
        background-repeat: no-repeat;

    }


    .testimonial-slide {
        background: #FFFFFF 0% 0% no-repeat padding-box;
        border-radius: 5px;
        padding: 19px;
        box-shadow: 10px 10px 60px #2072BE1A;
        text-align: left;
        position: relative;
        z-index: 3;
        height: 100% !important;
        width: 100%;
        max-width: 400px;
        min-width: 250px;
        margin: auto;

    }

    .testimonial-text {
        font-size: 16px;
        font-weight: 300;
        margin-bottom: 8px;
        font-family: 'ff-scala-sans-pro', sans-serif;
        letter-spacing: 0px;
        color: #132030;
        opacity: 1;
    }

    .testimonial-naam {
        font-family: 'ff-scala-sans-pro', sans-serif;
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
        padding-top: 189px;
        padding-bottom: 80px;
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
        top: 109px;
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
        font-family: 'richmond-display', serif;
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
        color: #FFFFFF;
        border-radius: 5px;
        display: flex;
        align-items: center;
        justify-content: center;
        z-index: 10;
    }

    .swiper-button-next::after,
    .swiper-rtl .swiper-button-prev::after {
        font-size: 11px;
        font-weight: 900;
    }

    .swiper-button-prev:after,
    .swiper-rtl .swiper-button-next:after,
    .swiper-button-next::after,
    .swiper-rtl .swiper-button-prev::after {
        font-size: 11px;
        font-weight: 900;
    }

    .swiper-container .swiper-button-prev {

        left: -8% !important;
        top: 2px !important;
    }

    /* .swiper-container-2 .swiper-button-prev2 {
        left: -17% !important;
        top: 11px !important;
    } */

    .swiper-container .swiper-button-next {
        right: 0px !important;
        top: 2px !important;
    }

    /* .swiper-container-2 .swiper-button-next2 {
        right: 36px !important;
        top: 11px !important;

    } */

    .onz-eexpertises-title {
        text-align: center;
        font-size: 36px;
        font-weight: 100;
        line-height: 50px;
        font-family: 'richmond-display', serif;
        letter-spacing: 0px;
        color: #132030;
        opacity: 1;
        margin-bottom: 3rem;
    }

    .sample-slider1 {
        width: 100%;
        margin: 0 auto;
        overflow: clip;
        overflow-y: visible;
    }

    .logo-container {
        background: #FFFFFF 0% 0% no-repeat padding-box;
        border-radius: 5px;
        height: 93px;
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 20px;
    }



    .title-container {
        width: 100%;
        text-align: left;
        color: #FFFFFF;
        font-size: 17px;
        line-height: 32px;
        font-weight: 300;
        font-family: "richmond-display", serif;
        letter-spacing: 1px;
    }


    .swiper-title {
        display: flex;
        align-items: center;
        justify-content: space-between;
        position: absolute;
        top: -84px;
        width: 100%;

    }


    @media (min-width: 768px) {

        .swiper-text {
            font-size: 26px;
        }

        .title-container {
            font-size: 22px;
        }

    }


    @media (min-width: 992px) {
        .first-blue-block {
            height: 625px;
        }

        .swiper-container .swiper-button-prev {
            left: 4% !important;
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

        .pe-lg {
            padding-right: 30rem !important;
        }

        .title-container {
            font-size: 36px;
            line-height: 50px;
        }


    }
    </style>
    <div>

        <!-- Hero Section -->
        <div class="container">
            <div class="hero-section bg-holder">
                <div class="bg" style="background-image:url('<?= get_field('heroimage')['url'] ?>')">
                </div>
                <div class="hero-content w-100" style="top: -7px;">
                    <div class="col-12 col-lg-8  offset-lg-1 pe-0 ">
                        <h1 class="hero-title" data-aos="fade-up" data-aos-offset="100" data-aos-delay="50"
                            data-aos-duration="1000" data-aos-easing="ease-in-out">
                            <span class="d-block">
                                <?= get_field("herotitlegekleuredtext") ?>
                            </span>
                        </h1>
                        <h4 class="hero-text" data-aos="fade-up" data-aos-offset="100" data-aos-delay="50"
                            data-aos-duration="1000" data-aos-easing="ease-in-out">
                            <span class="d-block"> <?= get_field("herotext") ?></span>
                        </h4>
                        <!-- d-lg-flex -->
                        <div class="button-group d-flex justify-content-center justify-content-lg-start mt-4 gap-2">
                            <div class="button btn-primary">
                                <a href="<?= get_field("meerwetenbtn")['url'] ?>" class=" ">
                                    <?= get_field("meerwetenbtn")['title'] ?>
                                </a>
                                <img src="<?= get_template_directory_uri() ?>/images/white-arrow.svg"
                                    alt="go contact page" class="go-arrow"
                                    style="pointer-events: auto ;z-index: 1000 " />
                            </div>

                            <div class="button btn-custom-container">
                                <a href="<?= get_field("overonsbtn")['url'] ?>" class="">
                                    <?= get_field("overonsbtn")['title'] ?>
                                </a>
                                <img src="<?= get_template_directory_uri() ?>/images/white-arrow.svg"
                                    alt="go over ons page" class="go-arrow"
                                    style="  pointer-events: auto ;z-index: 1000" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <!--2 Flexible Content Field must change the code -->
        <?php
        $flexible_content = get_field('flexiblecontentfield'); ?>
        <div class="container mt-4">
            <?php foreach ($flexible_content as $content): ?>
            <div class="row">
                <div class="col-12  col-lg-8 offset-lg-2 d-flex justify-content-center align-items-center h-100 p-3 px-4 mt-5"
                    data-aos="fade-up" data-aos-offset="100" data-aos-delay="50" data-aos-duration="1000"
                    data-aos-easing="ease-in-out">
                    <h1 class="flexible-title">
                        <?= $content['title']; ?>
                    </h1>
                </div>
            </div>
            <div class="row g-5 mt-1">
                <div class="col-lg-6 text-start mt-5 flexible-left-text" data-aos="fade-right" data-aos-offset="100"
                    data-aos-delay="50" data-aos-duration="1000" data-aos-easing="ease-in-out">
                    <span class="left-text">
                        <span style="font-weight: 700;">
                            <?= $content['lefttextbold']; ?>
                        </span>
                        <?= $content['lefttext']; ?>
                    </span>
                </div>

                <div class="col-lg-6 text-start mt-5 flexible-right-text" data-aos="fade-left" data-aos-offset="100"
                    data-aos-delay="50" data-aos-duration="1000" data-aos-easing="ease-in-out">
                    <span class="right-text"><?= $content['righttext']; ?></span>
                </div>
            </div>

            <?php endforeach; ?>
        </div>
        <?php ?>
        <!-- End of Flexible Content Field -->


        <!-- Onze_Expertises -->
        <div class="container p-3 px-1  position-relative" id="testimonials" style=" z-index: 2; margin-top: 6rem;">
            <div class="row">
                <div class="col-12 d-flex justify-content-center ">
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

                <div class="col-lg-4 col-md-6 col-12 mb-4">
                    <a href="<?= get_permalink($post) ?>">
                        <div
                            class="testimonial-container d-flex flex-row align-items-center justify-content-between p-4  h-100 ">
                            <span class="test-post-title">
                                <?= $post->post_title ?>
                            </span>
                            <span class="test-img-border">
                                <img src="<?= get_template_directory_uri() ?>/images/nextarrow.svg"
                                    alt="go onze expertises" class="go-arrow" />
                            </span>
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
        <div class="container ">
            <div class=" bg-holder " style=" margin-top: -105px;">
                <div class="bg first-blue-block ">
                </div>
                <div class=" blue-container werk-slider " style="position: relative;z-index: 1;">
                    <div class="swiper-container swiper position-relative" style="position: relative;z-index: 1;">

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
                                <div class="swiper-slide d-flex flex-column h-auto  ">
                                    <a href="<?= get_permalink($post) ?>" class="d-flex flex-column">
                                        <div class="testimonial-slide d-flex flex-column ">
                                            <img src="<?= $testimonial["logo"]['url'] ?>"
                                                alt="<?= $testimonial['logog']['alt'] ?>" class="card-img-top"
                                                style="height: 101px; border-radius: 5px; background: #F7F6F4; object-fit: scale-down;" />
                                            <div class="card-body  mt-1 mb-0 pb-4 pt-2">


                                                <div class="d-flex justify-content-between align-items-center">
                                                    <div class="card-text">
                                                        <?= $post->post_title ?>
                                                    </div>
                                                    <span
                                                        class="d-flex justify-content-center align-items-center arrow">
                                                        <img src="<?= $testimonial["white_arrow"]['url'] ?>"
                                                            alt=" <?= $testimonial['white_arrow']['alt'] ?>"
                                                            class="go-arrow" />
                                                    </span>
                                                </div>
                                                <span class="card-title mt-auto" style=" color: #132030;">
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
        </div>


        <div class="container ">
            <div class="container-img position-relative bg-holder">
                <div class="bg"
                    style="background-image:url('<?= get_template_directory_uri() ?>/images/mask-group.png') ">
                </div>

                <div class="row  g-0 " style="padding-top: 5rem; position: relative;z-index: 1;">


                    <div class="col-12 col-md-6 col-lg-6">
                        <img src="<?= get_template_directory_uri() ?>/images/senior-leadership.png"
                            alt="manager-leading" class="w-100"
                            style="object-fit: cover; border-radius: 5px 0px 0px 5px; height: 387px; ">
                    </div>
                    <div class="col-12 col-md-6 col-lg-6 d-flex align-items-center "
                        style="background: #FFFFFF 0% 0% no-repeat padding-box; box-shadow: 10px 10px 60px rgba(32, 114, 190, 0.1); border-radius: 0px 5px 5px 0px; height: 387px;padding: 43px 26px; ">

                        <div>
                            <h2 class="verhaal-title"><?= get_field("onsverhaaltitle") ?></h2>
                            <span class="verhaal-text"><?= get_field("verhaaltext") ?> </span>

                            <div class="d-flex  mt-4 gap-2">
                                <div class="button btn-custom-container">
                                    <a href="<?= get_field("overonsbtn")['url'] ?>" class="" style="color: #132030;">
                                        <?= get_field("overonsbtn")['title'] ?>
                                        <img src="<?= get_template_directory_uri() ?>/images/nextarrow.svg"
                                            alt="go onze expertises" class="go-arrow" />
                                    </a>
                                </div>

                                <div class="button btn-custom-container">
                                    <a href="<?= get_field("werkwijzebtn")['url'] ?>" style="color: #132030;">
                                        <?= get_field("werkwijzebtn")['title'] ?>
                                        <img src="<?= get_template_directory_uri() ?>/images/nextarrow.svg"
                                            alt="go onze expertises" class="go-arrow" />
                                    </a>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>

                <div class="container  position-relative" style="margin-top: 160px; margin-bottom: 80px;">
                    <div class="swiper-container-2">
                        <div class="">
                            <!-- swiper-title-btn -->
                            <div class="swiper-title ">
                                <div class="title-container" data-aos="fade-right" data-aos-offset="100"
                                    data-aos-delay="50" data-aos-duration="1000" data-aos-easing="ease-in-out">
                                    <?= get_field("titleoflogos") ?>
                                </div>
                                <div class="d-flex align-items-center gap-4">
                                    <div class="swiper-button-prev2 swiper-button-prev"></div>
                                    <div class="swiper-button-next2 swiper-button-next"></div>
                                </div>
                            </div>
                        </div>

                        <div class="container position-relative">
                            <div class="row">
                                <div class="col-12 col-lg-12">

                                    <div class="logoswiper sample-slider1">
                                        <div class="swiper-wrapper">
                                            <?php
                                            $testemonials = get_field("partnerslogotestemonials");
                                            if ($testemonials) {
                                                foreach ($testemonials as $testemonial) { ?>
                                            <div class="swiper-slide">
                                                <div class="logo-container" style="">
                                                    <a href="<?= esc_url($testemonial['partnerslogolink']['url']) ?>"
                                                        target="_blank">
                                                        <img src="<?= esc_url($testemonial['partnerslogoimg']['url']) ?>"
                                                            alt="<?= esc_attr($testemonial['partnerslogoimg']['alt']) ?>"
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
        spaceBetween: 24,

        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        loop: true,
        // a      utoplay: {
        // d    elay: 2000,
        // } ,
        navigation: {
            nextEl: ".werk-slider .swiper-button-next",
            prevEl: ".werk-slider .swiper-button-prev",
        },


        breakpoints: {
            360: {
                slidesPerView: 1

            },
            410: {
                slidesPerView: 1.2

            },
            540: {
                slidesPerView: 2
            },
            768: {
                slidesPerView: 2.1
            },
            992: {
                slidesPerView: 3.2
            },
            1025: {
                slidesPerView: 4
            },
        },

        // R       ein itia li ze A O S after Swiper initialization
        on: {
            init: function() {
                AOS.refresh();
            },
            slideChangeTransitionEnd: function() {
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
    document.addEventListener('DOMContentLoaded', function() {
        const logoswiper = new Swiper('.sample-slider1', {

            slidesPerView: 2,
            // centeredSlides: true,
            spaceBetween: 24,

            pagination: {
                el: '.swiper-pagination',
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },

            breakpoints: {

                360: {
                    slidesPerView: 1.7,

                },

                540: {
                    slidesPerView: 2.8,


                },

                556: {
                    slidesPerView: 3.2,

                },
                992: {

                    slidesPerView: 5,

                },
                1025: {
                    slidesPerView: 6,


                }


            }
        });
    });
    </script>







</main>

<?php get_footer() ?>