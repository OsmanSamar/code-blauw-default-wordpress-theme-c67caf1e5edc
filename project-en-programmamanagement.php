<?php get_header()  //Template Name: project-en-programmamanagement  ?>

<main class="project-en-programmamanagement">
    <style>
    .hero-section {
        background: url("<?= get_field('heroimage')['url'] ?> ");
        width: 100%;
        max-width: 1700px;
        margin: 0 auto;
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        object-fit: cover;
    }

    .pro-hero-title {
        font-size: 25px;
        line-height: 76px;
        font-weight: 500;
        font-family: "Richmond Display", serif;
        text-align: center;
        letter-spacing: 0px;
        color: #feffff;
    }

    .pro-hero-text {
        text-align: center;
        font-size: 16px;
        line-height: 24px;
        font-weight: 300;
        font-family: "Libre Franklin", sans-serif;
        letter-spacing: 0px;
        color: #ffffff;
        opacity: 1;
        width: 505px;
        display: block;
        margin-bottom: 10px;
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
        max-width: 1700px;
        margin: 0 auto;
        background: #F7F6F4 0% 0% no-repeat padding-box;
        opacity: 1;

    }

    .testi-title {
        font-size: 18px;
        line-height: 30px;
        font-family: 300;
        letter-spacing: 0px;
        color: #000000;
        opacity: 1;
        font-family: 'Scala Sans Pro', sans-serif;
    }

    .testi-text {
        font-size: 16px;
        line-height: 30px;
        font-family: 300;
        font-family: 'Scala Sans Pro', sans-serif;
        letter-spacing: 0px;
        color: #132030;
        opacity: 1;
    }

    .white-contianer {

        width: 100%;
        max-width: 1700px;
        margin: 0 auto;
        background: #FFFFFF 0% 0% no-repeat padding-box;
        opacity: 1;
    }

    .left-text {
        text-align: left;
        font-size: 38px;
        line-height: 46px;
        font-weight: 300;
        font-family: "Richmond Display", serif;
        letter-spacing: 0px;
        color: #1E73BE;
        opacity: 1;
    }

    .right-text {
        font-family: 'Scala Sans Pro', sans-serif;
        font-size: 16px;
        line-height: 26px;
        font-weight: 300;
        text-align: left;
        letter-spacing: 0px;
        color: #132030;
        opacity: 1;
    }


    b,
    strong {
        color: #132030;
        font-family: inherit;
        font-size: inherit;
        font-style: inherit;
        line-height: inherit;
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
        font-size: 16px;
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
        left: -2% !important;
        top: -13px !important;
    }

    .swiper-container .swiper-button-next {
        position: absolute;
        right: 5px !important;
        top: -12px !important;
    }

    .arrow {
        background-color: #1E73BE;
        border-radius: 50px;
        height: 28px;
        width: 28px;
    }

    @media (min-width: 768px) {
        .swiper-container .swiper-button-prev {
            position: absolute;
            left: -3% !important;
            top: -13px !important;
        }
    }



    @media (min-width: 992px) {
        .pro-hero-title {
            font-size: 50px;
            text-align: left;
            line-height: 80px;
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
        <div class="hero-section flex-column">
            <div class="hero-content">
                <div class="col-12  col-lg-12  pe-0 pe-lg-5">
                    <span class="pro-hero-title fadeIn  " data-side="right" style="transition-delay: .25s;">
                        <span class="d-block">
                            <?= get_field("herotitle") ?>
                        </span>
                    </span>
                </div>
            </div>
            <span class="pro-hero-text">
                <span class="d-block">
                    <?= get_field("herotext") ?>
                </span>
            </span>

            <div class=" "
                style="display: inline-flex; justify-content: center; align-items: center; border: 1px solid #f29401; border-radius: 5px; width: 176px; height: 51px;background-color: #f29401;">
                <a href="<?= get_field("meerwetenbtn")['url'] ?>" class="text-white">
                    <?= get_field("meerwetenbtn")['title'] ?>
                    <img src="<?= get_field("arrow")['url'] ?>" alt="<?= get_field("arrow")['alt'] ?>" />
                </a>
            </div>

        </div>



        <!--Testimonials Section on All Screens -->
        <div class="testi-container">
            <div class="container pt-5 pb-5 ">
                <div class="row gy-2">
                    <?php
                    foreach (get_field("testimonials") as $testimonial) { ?>
                    <div class="col-12 col-md-6 col-lg-4">

                        <div class="d-flex flex-column text-left gap-3">
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="d-flex justify-content-center align-items-center "
                                    style="background-color: blue;width: 30px; height: 30px; border-radius: 50px;">
                                    <!-- <img src="<?= get_template_directory_uri() ?>/images/whitenextarrow.svg"
                                    alt="go to article" class="icon" /> -->
                                    <img src="<?= get_field("arrow")['url'] ?>" alt=" <?= get_field("arrow")['url'] ?>"
                                        class="icon" style="width: 14px;height: 18px;" />
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
                    <?php } ?>
                </div>
            </div>
        </div>



        <div class="white-contianer">
            <div class="container pt-5 pb-5">
                <div class="row">
                    <div class="col-12 col-lg-5 left-text">
                        <?= get_field("lefttext") ?>
                    </div>

                    <div class="col-12 col-lg-5  offset-md-1 right-text">
                        <div class="d-flex flex-column">
                            <?= get_field("righttext") ?>

                            <div class="d-flex flex-row gap-2 mt-3">
                                <div class=" "
                                    style="display: inline-flex; justify-content: center; align-items: center; border: 1px solid #f29401; border-radius: 5px; width: 176px; height: 51px;background-color: #f29401;">
                                    <a href="<?= get_field("contactlink")['url'] ?>" class="text-white">
                                        <?= get_field("contactlink")['title'] ?>
                                        <img src="<?= get_field("arrow")['url'] ?>"
                                            alt="<?= get_field("arrow")['alt'] ?>" style="width:14px; height: 18px;;" />
                                    </a>
                                </div>
                                <div class=" "
                                    style="display: inline-flex; justify-content: center; align-items: center; border: 1px solid #f29401; border-radius: 5px; width: 190px; height: 51px;background-color:#f29401 ; ">
                                    <a href="<?= get_field("veelvragenlink")['url'] ?>" class="color: #132030;">
                                        <?= get_field("veelvragenlink")['title'] ?>
                                        <img src="<?= get_template_directory_uri() ?>/images/nextarrow.svg"
                                            alt="go onze expertises" class="testimonial-arrow"
                                            style="  width: 12px; height: 10.26px; flex-shrink: 0;" />
                                    </a>
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
                                ?>
                            <div class="swiper-slide d-flex flex-column h-100">
                                <a href="<?= get_permalink($post) ?>" class="d-flex flex-column h-100">
                                    <div class="testimonial-slide d-flex flex-column h-100">
                                        <img src="<?= $fields["backimg"]['url'] ?>"
                                            alt="<?= $fields['backimg']['alt'] ?>" class="card-img-top"
                                            style="height: 101px; border-radius: 5px; background: #F7F6F4; object-fit: scale-down;" />

                                        <div class="card-body d-flex flex-column  mt-1 mb-0 pb-4 pt-2  h-100">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <span class="card-text"><?= $post->post_title ?></span>
                                                <span class="d-flex justify-content-center align-items-center arrow">
                                                    <img src="<?= get_template_directory_uri() ?>/images/whitenextarrow.svg"
                                                        alt="go to article" class="icon" />
                                                </span>
                                            </div>
                                            <span class="card-title mt-auto">
                                                <span><?= $fields["text"] ?></span>
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

                    <div class="swiper-pagination"></div>

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

        // R ein itia li ze A O S after Swiper initialization
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
</main>



<?php get_footer() ?>