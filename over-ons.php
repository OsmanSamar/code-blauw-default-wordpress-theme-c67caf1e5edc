<?php get_header();
$fields = get_fields();
//Template Name: overons  ?>

<main class="overons">
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

    .hero-section {
        height: 500px;
    }


    /*  */
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
        width: 310px;

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

        left: -2% !important;
        top: -2px !important;
    }

    .swiper-container .swiper-button-next {
        position: absolute;
        right: 0px !important;
        top: -2px !important;
    }

    /* End of Swiper */



    .container-block {

        width: 100%;
        max-width: 1700px;
        margin: 0 auto;
    }

    .whi-container {
        margin-top: 5rem;
    }


    @media (min-width: 768px) {


        .swiper-text {
            font-size: 26px;
        }

    }


    @media (min-width: 992px) {



        .swiper-text {
            font-size: 36px;
            top: -12px !important;
        }

        .content-wrapper {
            padding: 20px;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }


        .first-blue-block {
            height: 683px;
            margin-top: unset;
        }



    }
    </style>
    <div>

        <!-- Hero Section -->
        <div class="hero-section  ">
            <div class="container">
                <!-- BreadCrumb Section -->
                <?php get_template_part('components/breadcrumb') ?>
                <div class="hero-content text-center">
                    <div
                        class="col-12  col-lg-4 offset-lg-4 col-md-8 offset-md-2    align-self-center d-flex flex-column justify-content-center align-items-center">
                        <h1 class="case-hero-title text-center" data-aos="fade-up" data-aos-offset="100"
                            data-aos-delay="50" data-aos-duration="1000" data-aos-easing="ease-in-out">
                            <span class="d-block">
                                <?= get_field("herotitle") ?>
                            </span>
                        </h1>

                        <div class="case-hero-text ">
                            <span class="d-block">
                                <?= get_field("herotext") ?>
                            </span>
                        </div>
                        <div class="circle-border btn-primary-custom mt-4">
                            <a href="<?= get_field("kennismakenbtn")['url'] ?>" class="btn-custom">
                                <?= get_field("kennismakenbtn")['title'] ?>
                                <img src="<?= get_template_directory_uri() ?>/images/white-arrow.svg"
                                    alt="go to contact" class="go-arrow" />
                            </a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- End of Hero Section -->

        <!-- Onze Visie -->
        <div class="container">
            <div class="row mt-5">
                <div class="d-flex my-4" data-aos="fade-right" data-aos-offset="100" data-aos-delay="50"
                    data-aos-duration="1000" data-aos-easing="ease-in-out">
                    <span class="onzevisie-title"><?= get_field("onzevisietitle") ?></span>
                </div>

                <div class="col-12 col-lg-6" data-aos="fade-right" data-aos-offset="100" data-aos-delay="50"
                    data-aos-duration="1000" data-aos-easing="ease-in-out">
                    <span class="left-text"> <?= get_field("lefttext") ?></span>
                </div>
                <div class="col-12 col-lg-6" data-aos="fade-left" data-aos-offset="100" data-aos-delay="50"
                    data-aos-duration="1000" data-aos-easing="ease-in-out">
                    <span class="right-text pt-2"> <?= get_field("righttext") ?></span>
                </div>
            </div>

            <div class="baluwtext">
                <div class="col-12  col-lg-8 offset-lg-2  d-flex flex-column align-items-center justify-content-center "
                    data-aos="fade-up" data-aos-offset="100" data-aos-delay="50" data-aos-duration="1000"
                    data-aos-easing="ease-in-out" style="margin:0 auto">
                    <div class="center-title fadeIn  " data-side="right" style="transition-delay: .25s;">
                        <span class="d-block">
                            <?= get_field("blauwijscentertext") ?>
                        </span>
                    </div>

                    <div class="button-groupd d-flex gap-2">
                        <div class="circle-border  ">
                            <!--  style="width: 182px;" -->
                            <a href="<?= get_field("neemcontactopbtn")['url'] ?>" class="btn-custom"
                                style="color: #132030;">
                                <?= get_field("neemcontactopbtn")['title'] ?>
                                <img src="<?= get_template_directory_uri() ?>/images/nextarrow.svg"
                                    alt="go onze expertises" class="go-arrow" />
                            </a>

                        </div>
                        <div class="circle-border">

                            <a href="<?= get_field("onzewerkwijzebtn")['url'] ?>" class="btn-custom"
                                style="color: #132030;">
                                <?= get_field("onzewerkwijzebtn")['title'] ?>
                                <img src="<?= get_template_directory_uri() ?>/images/nextarrow.svg"
                                    alt="go onze expertises" class="go-arrow" />
                            </a>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--End of  Onze Visie -->

        <!--3New Section -->
        <div class="white-medium-container">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-6 " data-aos="fade-right" data-aos-offset="100" data-aos-delay="50"
                        data-aos-duration="1000" data-aos-easing="ease-in-out">
                        <div class="d-flex flex-column  text-left gap-4 mb-4">
                            <span class="fleft-text">
                                <?= get_field("flefttext") ?>
                            </span>
                            <span class="secleft-text">
                                <?= get_field("seclefttext") ?>
                            </span>
                            <div class="button-group mt-3 d-flex gap-2">
                                <div class="circle-border btn-primary-custom ">
                                    <a href="<?= get_field("contactbtn")['url'] ?>" class="btn-custom">
                                        <?= get_field("contactbtn")['title'] ?>
                                        <img src="<?= get_template_directory_uri() ?>/images/white-arrow.svg"
                                            alt="go onze contact" class="go-arrow" />
                                    </a>
                                </div>
                                <div class="circle-border  btn-custom-container ">
                                    <a href="<?= get_field("veelgesteldevragenbtn")['url'] ?>" class="btn-custom"
                                        style="color: #132030;">
                                        <?= get_field("veelgesteldevragenbtn")['title'] ?>
                                        <img src="<?= get_template_directory_uri() ?>/images/nextarrow.svg"
                                            alt="go onze contact" class="go-arrow" />
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-lg-5 offset-lg-1" data-aos="fade-left" data-aos-offset="100"
                        data-aos-delay="50" data-aos-duration="1000" data-aos-easing="ease-in-out">
                        <img src="<?= get_field("mediumimg")['url'] ?>" alt="<?= get_field("")['alt'] ?>"
                            class="medium-img" />
                    </div>
                </div>
            </div>
        </div>
        <!--End of new Section -->



        <!--first-blue-block  -->
        <div class="first-blue-block position-relative">
            <div class="container blue-container">
                <div class="swiper-container swiper position-relative  mb-5 ">

                    <div class="swiper-header ">
                        <div class="swiper-text">
                            <?= get_field("organisatiesvoortitle") ?>
                        </div>
                        <div class="d-flex align-items-center gap-2">
                            <div class="swiper-button-prev"></div>
                            <div class="swiper-button-next"></div>
                        </div>
                    </div>

                    <div class="newswiper werk-swiper2">
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
                                <a href="<?= get_permalink($post) ?>" class=" d-flex flex-column h-100">
                                    <div class="testimonial-slide d-flex flex-column h-100">
                                        <img src="<?= $testimonial["logo"]['url'] ?>"
                                            alt=" <?= $testimonial['logo']['alt'] ?>" class="card-img-top"
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


                <!--White-containe-->
                <div class="whi-container" data-aos="fade-up" data-aos-offset="100" data-aos-delay="50"
                    data-aos-duration="1000" data-aos-easing="ease-in-out">
                    <div class="d-flex align-items-center gap-3 py-3 justify-content-between flex-column flex-lg-row">
                        <span class="organ-title">
                            <?= get_field("organisatietext") ?>
                        </span>
                        <div class="circle-border btn-primary-custom" style="margin-right: 27px;">
                            <a href="<?= get_field("vragenaanbtn")['url'] ?>" class="btn-custom">
                                <?= get_field("vragenaanbtn")['title'] ?>
                                <img src="<?= get_template_directory_uri() ?>/images/white-arrow.svg"
                                    alt="go Contact page" class="go-arrow" />
                            </a>

                        </div>
                    </div>
                </div>

                <!--End of wshite-containe-->
            </div>
        </div>
        <!--first-blue-block  -->













    </div>





    <script>
    let newswiper = new Swiper('.werk-swiper2', {
        slidesPerView: 2.5,
        grabCursor: true,
        spaceBetween: 20,

        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        loop: true,
        //  autoplay: { //added
        //      delay: 2000, //added
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