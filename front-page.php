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
    <div class="">

        <div class="container">

            <!-- Hero Section -->

            <div class="hero-section bg-holder">
                <div class="bg-content"
                    style="background: url('<?= get_the_post_thumbnail_url() ?>') lightgray 50% / cover no-repeat;">
                </div>
                <div class="hero-content ">
                    <div class="row">
                        <div class="col-12 col-lg-8  offset-lg-1 pe-0 text-start ">
                            <h1 data-aos="fade-up" data-aos-offset="100" data-aos-delay="50" data-aos-duration="1000"
                                data-aos-easing="ease-in-out">
                                <?= get_field("herotitlegekleuredtext") ?>
                            </h1>
                            <span class="lead" data-aos="fade-up" data-aos-offset="100" data-aos-delay="50"
                                data-aos-duration="1000" data-aos-easing="ease-in-out">
                                <?= get_field("herotext") ?>
                            </span>

                            <div class="button-group d-flex justify-content-start flex-wrap  mt-4 gap-2">
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


            <?php
            $content = get_field('content');

            if (!empty($content) && is_array($content)) {
                foreach ($content as $block) {
                    get_template_part('components/' . $block['acf_fc_layout'], null, ['fields' => $block]);
                }
            }
            ?>


            <!-- Onze_Expertises -->
            <div class="" data-type="onze_expertises">
                <?php
                $i = 0;
                foreach ($posts as $post) {
                    // Fetch the "General" tab fields directly
                    get_template_part('components/onze-expertises', null, ['post' => $post, 'index' => $i]);
                    $i++;
                }
                wp_reset_postdata();
                ?>
            </div>







            <!--werken-swiper block  -->
            <div class="" data-type="onze_expertises">
                <?php
                $i = 0;
                foreach ($posts as $post) {
                    // Fetch the "General" tab fields directly
                    get_template_part('components/werken-swiper', null, ['post' => $post, 'index' => $i]);
                    $i++;
                }
                wp_reset_postdata();
                ?>
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
                                        <a href="<?= get_field("overonsbtn")['url'] ?>" class=""
                                            style="color: #132030;">
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