<?php get_header();
$fields = get_fields();
//Template Name: werkwijze  ?>

<main class="werkwijze">

    <style>
        .hero-section {
            background: url("<?= get_field('heroimage')['url'] ?> ");
            width: 100%;
            margin: 0 auto;
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            object-fit: cover;
        }

        .container-img {
            width: 100%;
            object-fit: cover;
            background-repeat: no-repeat;
            background: linear-gradient(90deg, rgba(6, 48, 101, 0.9) 0%, rgba(0, 85, 179, 0.1) 100%),
                url("<?= get_template_directory_uri() ?>/images/img-container.png") 50%/cover no-repeat;
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            height: 326px;
        }



        .title-container {
            width: 100%;
            text-align: left;
            padding-left: 15px;
            color: #FFFFFF;
            font-size: 22px;
            line-height: 50px;
            font-weight: 300;
            font-family: "richmond-display", serif;
            letter-spacing: 1px;
        }

        .swiper-title {
            display: flex;
            align-items: baseline;
            justify-content: space-between;
            position: absolute;
            top: -70px;
            /* right: -98px; */
            width: 100%;

        }

        /* Swiper in blauw block */
        .swiper-container {
            width: 100%;
            margin: 0 auto;
            overflow: clip;
            overflow-y: visible;
            margin-top: 5rem;
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
            top: -80px;
            right: 0;
            width: 100%;
        }

        .swiper-text {
            font-size: 26px;
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
            position: absolute;
            left: -8% !important;
            top: -2px !important;
        }

        .swiper-container .swiper-button-next {
            position: absolute;
            right: 9px !important;
            top: -2px !important;
        }


        .testimonial-slide {
            background: #FFFFFF 0% 0% no-repeat padding-box;
            border-radius: 5px;
            padding: 18px;
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


        .small-whit-container {
            width: 100%;
            max-width: 1700px;
            margin: 0 auto;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 192px;
            text-align: center;
            gap: 4px;
            flex-direction: row;
        }

        .whi-container {
            margin-top: 58px;
        }

        @media (min-width: 768px) {
            .swiper-title {
                top: -70px;
            }

            .swiper-container .swiper-button-prev {
                position: absolute;
                left: -8% !important;
                top: -3px !important;
            }

            .werk-right-text,
            .werk-right-text-bold {
                text-align: left;
            }

            .button-group {
                justify-content: flex-start;
            }
        }

        @media (min-width: 992px) {
            .title-container {
                font-size: 36px;
            }

            .swiper-title {
                display: flex;
                align-items: baseline;
                justify-content: space-between;
                left: 12px;
            }

            .first-blue-block {
                height: 683px;
                margin-top: unset;
            }

            .whi-container {
                margin-top: 80px;
            }

            .swiper-container .swiper-button-prev {
                position: absolute;
                left: -12% !important;
                top: -2px !important;
            }

            .swiper-text {
                font-size: 36px;
            }
        }
    </style>
    <div>

        <!-- Hero Section -->
        <div class="hero-section ">
            <div class="container">
                <div class="hero-content text-center">
                    <div
                        class="col-12  col-lg-6 offset-lg-3 col-md-8 offset-md-2 align-self-center d-flex flex-column justify-content-center align-items-center">
                        <h1 class="werkwijze-hero-title text-center  " data-aos="fade-up" data-aos-offset="100"
                            data-aos-delay="50" data-aos-duration="1000" data-aos-easing="ease-in-out">
                            <span class="d-block">
                                <?= get_field("herotitle") ?>
                            </span>
                        </h1>

                        <div class="werkwijze-hero-text ">
                            <span class="d-block">
                                <?= get_field("herotext") ?>
                            </span>
                        </div>
                    </div>


                </div>
            </div>

        </div>
        <!-- End of Hero Section -->


        <!-- Hoe werkt Blauw IJs? Block -->
        <div class="container">
            <div class="row" style="margin-top:5rem; margin-bottom: 5rem;">
                <div class="col-12 col-lg-6" data-aos="fade-right" data-aos-offset="100" data-aos-delay="50"
                    data-aos-duration="1000" data-aos-easing="ease-in-out">
                    <span class="werk-blauwijs-title"><?= get_field("hoewerktblauwijstitle") ?></span>
                </div>
                <div class="col-12 col-lg-6" data-aos="fade-left" data-aos-offset="100" data-aos-delay="50"
                    data-aos-duration="1000" data-aos-easing="ease-in-out">
                    <div class="werk-right-text-bold pt-2"> <?= get_field("righttext") ?></div>
                    <div class="werk-right-text pt-2 mt-3"> <?= get_field("secrighttext") ?></div>

                    <div class="button-group mt-5 d-flex gap-2">
                        <div class="circle-border btn-primary-custom ">
                            <a href="<?= get_field("wetenbtn")['url'] ?>" class="btn-custom">
                                <?= get_field("wetenbtn")['title'] ?>
                                <img src="<?= get_template_directory_uri() ?>/images/white-arrow.svg"
                                    alt="go to article" class="go-arrow" />
                            </a>
                        </div>
                        <div class="circle-border ">
                            <a href="<?= get_field("veelgesteldevragenbtn")['url'] ?>" class="btn-custom"
                                style="color: #132030;">
                                <?= get_field("veelgesteldevragenbtn")['title'] ?>
                                <img src="<?= get_template_directory_uri() ?>/images/nextarrow.svg"
                                    alt="go onze expertises" class="go-arrow" />
                            </a>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--End of Hoe werkt Blauw IJs? Block -->


        <!--Onze werkwijze Block  -->
        <div class="werkwijze-block">
            <div class="container" data-aos="fade-up" data-aos-offset="100" data-aos-delay="50" data-aos-duration="1000"
                data-aos-easing="ease-in-out">
                <div class="row">
                    <div
                        class="col-12   col-lg-4 offset-lg-4  d-flex flex-column align-items-center justify-content-center">
                        <span class="werk-center-title   ">
                            <span>
                                <?= get_field("onzewerkwijzetitle") ?>

                            </span>
                        </span>
                    </div>
                </div>
                <div class="row mt-5 ">
                    <?php
                    $delay = 0;
                    foreach (get_field("onzewerkwijzetestemonials") as $testimonails) {
                        ?>
                            <div class="col-12 col-md-4 col-lg-3 d-flex  justify-content-center" style="margin-bottom: 80px;"
                                data-aos="fade-up" data-aos-delay="<?= $delay ?>" data-aos-duration=" 800">
                                <div>

                                    <div class="d-flex flex-column ">
                                        <span
                                            style="color: #F29401;;font-family Manrope; font-size:15px;font-style:normal;font-weight:600;line-height:27px;">
                                            <?= $testimonails["stap"] ?>
                                        </span>
                                        <span
                                            style="color: #F29401;;font-family Manrope; font-size:15px;font-style:normal;font-weight:600;line-height:27px;">
                                            <?= $testimonails["staptitle"] ?>
                                        </span>
                                    </div>
                                    <div class="werkwijze-text">
                                        <?= $testimonails["text"] ?>
                                    </div>
                                </div>
                            </div>
                            <?php
                            $delay += 300;
                    }
                    ?>
                </div>
            </div>
        </div>
        <!--End of -Onze werkwijze Block -->


        <div class="container-img ">
            <div class="container position-relative" style="margin-top: 120px;">
                <div class="swiper-title ">
                    <div class="title-container" data-aos="fade-right" data-aos-offset="100" data-aos-delay="50"
                        data-aos-duration="1000" data-aos-easing="ease-in-out">
                        <?= get_field("titleoflogos") ?>
                    </div>
                </div>
            </div>
            <div class="container  position-relative" style="padding-top: 63px;">
                <div class="swiper sample-slider  ">
                    <div class="swiper-wrapper">
                        <?php
                        $testemonials = get_field("partnerslogotestemonials");
                        if ($testemonials) {
                            foreach ($testemonials as $testemonial) { ?>
                                        <div class="swiper-slide">
                                            <div class="werk-logo-container"
                                                style="background-color: #f0f0f0; border-radius:5px; padding: 20px;">
                                                <a href="<?= esc_url($testemonial['partnerslogolink']['url']) ?>">
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


        <!--first-blue-block  -->
        <div class="first-blue-block position-relative">
            <div class="container blue-container">
                <div class="swiper-container werk-swiper3 position-relative mb-5">
                    <div class="swiper-header ">
                        <div class="swiper-text">
                            <?= get_field("werkentitle") ?>
                        </div>
                        <div class="d-flex align-items-center gap-2">
                            <div class="swiper-button-prev"></div>
                            <div class="swiper-button-next"></div>
                        </div>
                    </div>


                    <div class="newswiper1 werk-swiper3">
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
                                                            <!-- <img src="<?= $testimonial["white_arrow"]['url'] ?>"
                                                        alt=" <?= $testimonial['white_arrow']['alt'] ?>"
                                                        class="card-img-top"
                                                        style="width: 9px; height: 7.69px; object-fit: cover; display: block; " /> -->
                                                            <img src="<?= get_template_directory_uri() ?>/images/white-arrow.svg"
                                                                alt="go Contact page" class="go-arrow" />
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

                <!--White-containe-->


                <div class="whi-container " data-aos="fade-up" data-aos-offset="100" data-aos-delay="50"
                    data-aos-duration="1000" data-aos-easing="ease-in-out">
                    <span class="d-flex align-items-center gap-3 py-3 justify-content-between flex-column flex-lg-row">
                        <span class="organ-title">
                            <?= get_field("organisatietext") ?>
                        </span>
                        <div class="circle-border   btn-primary-custom ">
                            <a href="<?= get_field("vraagaanbtn")['url'] ?>" class="btn-custom">
                                <?= get_field("vraagaanbtn")['title'] ?>
                                <img src="<?= get_template_directory_uri() ?>/images/white-arrow.svg"
                                    alt="go Contact page" class="go-arrow" />
                            </a>
                        </div>
                    </span>
                </div>


                <!--End of wshite-containe-->
            </div>
        </div>
        <!--End of first-blue-block  -->










    </div>

















































    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const swiper = new Swiper('.sample-slider', {

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



    <script>
        let newswiper1 = new Swiper('.werk-swiper3', {
            slidesPerView: 2.5,
            grabCursor: true,
            spaceBetween: 20,

            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },

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