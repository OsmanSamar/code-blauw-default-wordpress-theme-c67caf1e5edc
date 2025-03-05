<?php get_header();
$fields = get_fields();
//Template Name: project  ?>

<main class="project-en-programmamanagement">
    <style>
        .hero-section {
            background: url("<?= get_field('heroimage')['url'] ?> ");
            width: 100%;
            /* max-width: 1700px; */
            margin: 0 auto;
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            object-fit: cover;
        }




        .img-container {
            background-color: blue;
            /* Your desired background color */
            border-radius: 50px;
            padding: 10px;
            /* Optional padding to add some space around the image */
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .arrow-image {
            width: 12px;
            height: 12px;
            object-fit: contain;
            /* Ensures the image maintains its aspect ratio */
        }

        .testi-container {
            width: 100%;
            /* max-width: 1700px; */
            margin: 0 auto;
            background: #F7F6F4 0% 0% no-repeat padding-box;
            opacity: 1;
            padding-top: 80px;
            padding-bottom: 50px;

        }

        .testi-title {
            font-size: 18px;
            line-height: 30px;
            font-weight: 300;
            letter-spacing: 0px;
            color: #000000;
            opacity: 1;
            font-family: 'ff-scala-sans-pro', sans-serif;
        }

        .testi-text {
            font-size: 16px;
            line-height: 30px;
            font-weight: 300;
            font-family: 'ff-scala-sans-pro', sans-serif;
            letter-spacing: 0px;
            color: #132030;
            opacity: 1;
        }

        .white-contianer {
            height: fit-content;
            width: 100%;
            margin: 0 auto;
            background: #FFFFFF 0% 0% no-repeat padding-box;
            opacity: 1;
            padding: 80px 0px;
        }




        b,
        strong {
            color: #132030;
            font-family: inherit;
            font-size: inherit;
            font-style: inherit;
            line-height: inherit;
            font-weight: 800;
        }

        .right-text-bold {
            font-size: 16px;
            line-height: 26px;
            letter-spacing: 0px;
            font-family: 'ff-scala-sans-pro', sans-serif;
            color: #132030;
            font-weight: 700;

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
            font-family: 'richmond-display', serif;
            letter-spacing: 0px;
            color: #132030;
            opacity: 1;
            position: relative !important;
            top: -13px;
            left: 8px;
        }

        .swiper-button-prev,
        .swiper-button-next {
            /* position: static !important; */
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
            top: -13px !important;
        }

        .swiper-container .swiper-button-next {
            position: absolute;
            right: 9px !important;
            top: -12px !important;
        }

        .arrow {
            background-color: #1E73BE;
            border-radius: 50px;
            height: 28px;
            width: 28px;
        }

        .first-blue-block {

            height: 500px;
        }

        @media (min-width: 768px) {
            .swiper-container .swiper-button-prev {
                position: absolute;
                left: -8% !important;
                top: -13px !important;
            }
        }



        @media (min-width: 992px) {


            .first-blue-block {
                height: 662px;
                margin-top: -26px;
            }




            b,
            strong {
                font-size: inherit;
            }

            .swiper-container .swiper-button-prev {
                position: absolute;
                left: -12% !important;
                top: -12px !important;
            }



            .swiper-text {
                font-size: 36px;
            }


        }
    </style>


    <div>
        <!-- Hero Section -->
        <div class="hero-section">

            <!-- BreadCrumb Section -->
            <?php get_template_part('components/breadcrumb') ?>



            <div class="container">
                <div class="hero-content text-center">
                    <div class="col-12 col-lg-12   d-flex flex-column justify-content-center align-items-center">
                        <h1 class="pro-hero-title text-center" data-aos="fade-up" data-aos-offset="100"
                            data-aos-delay="50" data-aos-duration="1000" data-aos-easing="ease-in-out">
                            <span class="d-block">
                                <?= get_field("herotitle") ?>
                            </span>
                        </h1>

                        <div class="pro-hero-text">
                            <span class="d-block">
                                <?= get_field("herotext") ?>
                            </span>
                        </div>

                        <div class="circle-border  btn-primary-custom mt-4">
                            <a href="<?= get_field("meerwetenbtn")['url'] ?>" class="btn-custom">
                                <?= get_field("meerwetenbtn")['title'] ?>
                                <img src="<?= get_template_directory_uri() ?>/images/white-arrow.svg"
                                    alt="go kennismaken" class="go-arrow" />
                            </a>

                        </div>
                    </div>
                </div>
            </div>
        </div>



        <!--Testimonials Section on All Screens -->
        <div class="testi-container">
            <div class="container  pb-5 " data-aos="fade-up" data-aos-offset="100" data-aos-delay="50"
                data-aos-duration="1000" data-aos-easing="ease-in-out">
                <div class="row gy-2">
                    <?php
                    $delay = 0;
                    foreach (get_field("testimonials") as $testimonial) { ?>
                            <div class="col-12 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="<?= $delay ?>"
                                data-aos-duration=" 800">

                                <div class="d-flex flex-column text-left gap-3">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <span class="d-flex justify-content-center align-items-center ">
                                            <img src="<?= get_template_directory_uri() ?>/images/check.svg"
                                                alt="go to article" />


                                        </span>
                                    </div>

                                    <span class="testi-title">
                                        <?= $testimonial["title"] ?>
                                    </span>
                                    <span class="testi-text">
                                        <?= $testimonial["text"] ?>
                                    </span>
                                </div>
                            </div>
                            <?php
                            $delay += 300;
                    } ?>
                </div>
            </div>
        </div>



        <div class="white-contianer">
            <div class="container  ">
                <div class="row pt-5 pb-5  ">
                    <div class="col-12 col-lg-6 col-md-6 blauw-left-text mb-3" data-aos="fade-right"
                        data-aos-offset="100" data-aos-delay="50" data-aos-duration="1000"
                        data-aos-easing="ease-in-out">
                        <?= get_field("lefttext") ?>
                    </div>

                    <div class="col-12 col-lg-6 col-md-6   blauw-right-text" data-aos="fade-left" data-aos-offset="100"
                        data-aos-delay="50" data-aos-duration="1000" data-aos-easing="ease-in-out">
                        <div class="d-flex flex-column">
                            <span>
                                <?= get_field("righttextbold") ?>
                            </span>




                            <div
                                class="button-group  d-flex justify-content-center justify-content-lg-start mt-4 gap-2">
                                <div class="circle-border  btn-primary-custom ">
                                    <a href="<?= get_field("contactlink")['url'] ?>" class="btn-custom">
                                        <?= get_field("contactlink")['title'] ?>
                                        <img src="<?= get_template_directory_uri() ?>/images/white-arrow.svg"
                                            alt="go onze expertises" class="go-arrow" />
                                    </a>
                                </div>
                                <div class="circle-border  btn-custom-container ">
                                    <a href="<?= get_field("veelvragenlink")['url'] ?>" class="btn-custom color-w">
                                        <?= get_field("veelvragenlink")['title'] ?>
                                    </a>
                                    <img src="<?= get_template_directory_uri() ?>/images/nextarrow.svg"
                                        alt="go onze expertises" class="testimonial-arrow"
                                        style="  width: 9px; height: 7.69px; object-fit: cover; display: block;" />
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>




        <!--first-blue-block  -->
        <div class="first-blue-block position-relative">
            <div class="container blue-container">
                <div class="swiper-container swiper position-relative ">

                    <div class="swiper-header">
                        <div class="swiper-text">
                            <?= get_field("onzesuccesverhalen") ?>
                        </div>
                        <div class="d-flex align-items-center gap-2">
                            <div class="swiper-button-prev"></div>
                            <div class="swiper-button-next"></div>
                        </div>
                    </div>

                    <div class="swiperwerken werk-swiper ">
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
                                    <div class="swiper-slide d-flex flex-column h-100">
                                        <a href="<?= get_permalink($post) ?>" class="d-flex flex-column h-100">
                                            <div class="testimonial-slide d-flex flex-column h-100">
                                                <img src="<?= $testimonial["logo"]['url'] ?>"
                                                    alt="<?= $testimonial['logo']['alt'] ?>" class="card-img-top"
                                                    style="height: 101px; border-radius: 5px; background: #F7F6F4; object-fit: scale-down;" />

                                                <div class="card-body d-flex flex-column  mt-1 mb-0 pb-4 pt-2  h-100">
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <span class="card-text"><?= $post->post_title ?></span>
                                                        <span class="d-flex justify-content-center align-items-center arrow">
                                                            <img src="<?= $testimonial["white_arrow"]['url'] ?>"
                                                                alt="<?= $testimonial['white_arrow']['alt'] ?>"
                                                                class="card-img-top"
                                                                style="width: 9px; height: 7.69px; object-fit: cover; display: block;" />
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
                </div>
            </div>

        </div>











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

            // R ein itia li z e A O S after Swiper initialization
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