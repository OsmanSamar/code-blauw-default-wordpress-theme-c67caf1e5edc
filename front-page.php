<?php get_header()  //Template Name: frontpage  ?>

<main class="front-page">

    <style>
    b,
    strong:first-of-type {
        color: #F29401;
        font-family: inherit;
        font-size: inherit;
        font-style: inherit;
        line-height: inherit;
    }

    b,
    strong:nth-of-type(2) {
        color: #1E73BE;
    }

    .hero-section {
        position: relative;
        background: url("<?= get_field('heroimage')['url'] ?>");
        /* width: 100vw; */
        width: 100%;
        max-width: 1700px;
        margin: 0 auto;
        height: 676px;
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        object-fit: cover;
        overflow: hidden;
        display: flex;
        align-items: center;
        justify-content: center;
        text-align: center;
        color: white;
    }




    .hero-section::before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        /* Dark overlay */
        background: transparent linear-gradient(90deg, var(--unnamed-color-132030) 0%, #13203000 100%) 0% 0% no-repeat padding-box;
        background: transparent linear-gradient(90deg, #132030 0%, #13203000 100%) 0% 0% no-repeat padding-box;
        z-index: 1;
        opacity: 0.88;
    }

    .hero-section img {
        display: none;

    }

    .hero-content {
        position: relative;
        /* z-index: 2; */
        z-index: 1;
        color: white;

        letter-spacing: 0px;
        color: #FEFFFF;
        text-align: center;
        margin-left: auto;
        margin-right: auto;

    }

    .hero-title {
        font-size: 60px;
        line-height: 65px;
        font-weight: 500;
        font-family: 'Richmond Display', serif;
        text-align: left;
        letter-spacing: 0px;
        opacity: 1;
    }

    .hero-title br {
        display: none;
    }

    .button-group {
        display: flex;
        flex-direction: row;
        align-items: center;
    }

    .circle-border {
        display: inline-flex;
        justify-content: center;
        align-items: anchor-center;
        border: 1px solid #F29401;
        border-radius: 5px;
        opacity: 1;
        position: relative;
        overflow: hidden;
        margin: 8px;
        padding: 6px 14px;
        height: 50px;
        color: #FFF;
    }

    /* Style for the first button */
    .btn-primary-custom {
        background: #F29401;
        width: 181px;
    }

    /* Style for the second button */
    .btn-custom-container {
        background: transparent;
        width: 126px;

    }

    /* Button styles */
    .btn-custom {
        color: #FFF;
        background-color: transparent;
        border: none;
        font-family: 'Scala Sans Pro', sans-serif;
        font-size: 16px;
        font-weight: 600;
        line-height: 22px;
    }

    .btn-custom:hover,
    .btn-custom:focus {
        color: #FFF;
        background-color: transparent;
    }

    .btn-primary {
        white-space: nowrap !important;
        background-color: transparent !important;
        border: none !important;
    }

    .flexible-title {
        color: #1e73be;
        font-size: 36px;
        font-weight: 300;
        line-height: 1.3;
        font-family: 'Richmond Display', serif;
        letter-spacing: 0px;
        opacity: 1;
        text-wrap: balance;
        display: flex;
        justify-content: left;
        align-items: flex-start;
        text-align: left;
        word-break: break-word;
        white-space: normal;
        max-width: 80%;
        margin: 0 auto;
    }

    .flexible-left-text p,
    .flexible-right-text p {
        max-width: 90%;
        font-size: 16px;
        text-align: justify;
        font-weight: 300;
        line-height: 26px;
        font-family: 'Scala Sans Pro', sans-serif;
        letter-spacing: 0px;
        color: #132030;
        opacity: 1;
    }

    .logos-container {
        flex-wrap: wrap !important;
        gap: 17px;
    }

    .logos-container .col-auto {
        flex: 1 1 calc(20% - 20px);
        display: flex;
        justify-content: center;
    }

    .testimonial-container {
        padding: 10px;
        max-width: 100%;
        background-color: #FFFFFF;
        border-radius: 5px;
        box-shadow: 10px 10px 60px #2072BE1A;
        width: 350px;
        height: 80px;

    }


    .testimonial-content {
        display: flex;
        align-items: center;
        justify-content: space-between;
        width: 100%;
        gap: 5px;
    }

    .test-post-title {
        font-size: 16px;
        line-height: 24px;
    }


    .first-blue-block {
        background: #CCE1F4;
        /* height: 662px; */
        height: 961px;
        width: 100%;
        max-width: 1700px;
        /* margin-top: -322px; */
        display: flex;
        align-items: center;
        justify-content: center;
        text-align: center;
        position: absolute;
        z-index: -1;
        margin-top: -96px;
        margin: 0 auto;
    }


    .verhaal-container {
        height: 628px;
        background-color: #FFFFFF;
        /* background-color: #F29401; */
        box-shadow: 10px 10px 60px #2072BE1A;
        border-radius: 5px;
        opacity: 1;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        /* width: 92%; */
    }

    .first-blue-block img {
        width: 100%;
        height: 312px;
        object-fit: cover;
    }

    .verhaal-title {
        color: #132030;
        text-align: left;
        letter-spacing: 0px;
        font-size: 36px;
        font-weight: 300;
        line-height: 50px;
        /* padding: 0 17px; */
        font-family: 'Richmond Display', serif;
        display: block;
        white-space: nowrap;
        overflow: hidden;
    }

    .verhaal-text {
        color: #132030;
        text-align: left;
        letter-spacing: 0px;
        font-size: 16px;
        font-weight: 300;
        line-height: 30px;
        /* padding: 0 17px; */
        font-family: 'Richmond Display', serif;
        display: block;
        white-space: wrap;
        overflow: hidden;

    }

    .left-container {
        padding: 27px;
    }

    .letstalk-btn {
        height: 50px;
        width: 121px;
        padding: 12px 15px;
        border-radius: 8px;
        border: 1px solid #F29401
    }

    .container-img {
        margin: 0 auto;
        width: 100%;
        max-width: 1700px;
        height: 449px;
        background-image: url("<?= get_template_directory_uri() ?>/images/mask-group.png");
        object-fit: cover;
        background: transparent linear-gradient(90deg, #132030 0%, #13203000 100%) 0% 0% no-repeat padding-box;
        background-repeat: no-repeat;
        background: linear-gradient(90deg, rgba(6, 48, 101, 0.9) 0%, rgba(0, 85, 179, 0.1) 100%),
            url("<?= get_template_directory_uri() ?>/images/mask-group.png") 50%/cover no-repeat
    }


    /* .werken-title {
        text-align: left;
        font-size: 36px;
        font-weight: 300;
        line-height: 50px;
        font-family: 'Richmond Display', serif;
        letter-spacing: 0px;
        color: #FFFFFF;
        opacity: 1;
    } */



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
        /* gap: 10px; */
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





    /* .swiper-container .swiper-button-prev,
    .swiper-container .swiper-button-next {
        width: 41px;
        height: 41px;
        border: 1px solid #FFFFFF;
        border-radius: 5px;
        display: flex;
        align-items: center;
        justify-content: center;
        color: #FFFFFF;
        z-index: 10;
        cursor: pointer;
    } */

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







    @media (max-width: 768px) {
        .flexible-title {
            max-width: 100%;
        }

        .swiper-container .swiper-button-prev {
            position: absolute;
            left: 90% !important;
            top: -70px !important;
        }


    }


    @media (min-width: 992px) {

        b,
        strong {
            font-size: inherit;
        }

        .hero-content {
            text-align: left;
            /* left: 227px; */
            max-width: 80%;
        }

        .hero-title {
            font-size: 80px;
            line-height: 85px;
            font-weight: 500;
            font-family: 'Richmond Display', serif;
        }

        .hero-title br {
            display: inline;
        }

        .hero-text {
            font-size: 14px;
            line-height: 24px;
            font-weight: 300;
            font-family: 'Libre Franklin', sans-serif;
        }

        .flexible-title {
            font-size: 46px;
            max-width: 94%;
            text-align: center;
            justify-content: center;
            align-items: center;
            text-align: center;
        }

        .flexible-left-text,
        .flexible-right-text {
            min-height: 5em;

        }

        .logos-container {
            flex-wrap: nowrap !important;
            justify-content: center;
            gap: 40px;
        }

        .logos-container .col-auto {
            flex: 0 0 auto;

        }

        .testimonial-container {
            box-shadow: 10px 10px 60px #2072BE1A;
            width: 100%;
            max-width: 305px;
            height: auto;
            padding: 15px;
            border-radius: 5px;
            background-color: white;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 10px;

        }

        .test-post-title {
            font-size: 18px;
            font-style: normal;
            font-weight: 700;
            line-height: 30px;
            color: #000000;
            font-family: 'Scala Sans Pro', sans-serif;
            flex: 1;
            /* text to take available space */
            white-space: nowrap;
            overflow: hidden;

        }


        .testimonial-arrow {
            width: 12px;
            height: 10.26px;
            flex-shrink: 0;
            object-fit: cover;
        }


        .first-blue-block {
            height: 662px;
            margin-top: -96px;
        }

        .verhaal-container {

            width: 1000px;
            height: 378px;
        }

        .first-blue-block .container {
            width: 100%;
            max-width: 1000px;

        }

        .first-blue-block .row {
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: row;
        }

        .first-blue-block .col-lg-6 {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }


        .first-blue-block img {
            /* width: 500px; */
            width: 100%;
            height: 378px;
            object-fit: cover;
        }


        .left-container {
            padding: 0 70px;
        }

        .swiper-container .swiper-button-prev {
            position: absolute;
            left: 95% !important;
            top: -70px !important;
        }

        .swiper-text {
            font-size: 36px;



        }
    </style>
    <div>

        <div class="hero-section">
            <div class="hero-content">
                <span class="hero-title">
                    <!-- <?= get_field("herotitle") ?> -->
                    <?= get_field("herotitlegekleuredtext") ?>

                </span>
                <p class="hero-text">
                    <?= get_field("herotext") ?>
                </p>
                <div class="button-group d-flex flex-row align-items-center">
                    <div class="circle-border btn-primary-custom">
                        <a href="<?= get_field("tuin_op_maat_btn")['url'] ?>" class="btn btn-primary">
                            <!-- <?= get_field("tuin_op_maat_btn")['title'] ?> -->
                            Ik wil meer weten
                        </a>
                    </div>
                    <div class="circle-border btn-custom-container">
                        <a href="<?= get_field("projecten_btn")['url'] ?>" class="btn btn-custom">
                            <!-- <?= get_field("projecten_btn")['title'] ?> -->
                            Over Ons
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- End of hero Section -->

        <!-- logostestimonials Repeater -->
        <div class="container-xl px-lg-5">
            <div class="row g-0 d-inline-flex align-items-anchor-center justify-content-center logos-container"
                style="margin-top:40px; margin-bottom:14px; flex-wrap:nowrap; width: 100%; opacity: 1;">
                <?php foreach (get_field("logostestimonials") as $sue) { ?>
                <div class="col-auto">
                    <a href="<?= $sue['logosteslinks']['url'] ?>" target=" _blank">
                        <div class="d-flex flex-row align-items-center justify-content-center">
                            <img src="<?= $sue['logosimg']['url'] ?>" alt=" <?= $sue['logosimg']['alt'] ?>"
                                class="logos-img" style="max-width: 100%; height: auto; flex-shrink: 0;" />
                        </div>
                    </a>
                </div>
                <?php } ?>
            </div>
        </div>


        <!-- Flexible Content Field -->
        <div>
            <?php if (have_rows('flexiblecontentfield')): ?>
            <div class="container mt-5">
                <?php while (have_rows('flexiblecontentfield')):
                        the_row(); ?>
                <?php if (get_row_layout() == 'text'): ?>
                <div class="row">

                    <div class="col-12  h-100 p-3 px-4 mt-5 flexible-title" data-aos="fade-up" data-aos-offset="100"
                        data-aos-delay="50" data-aos-duration="1000" data-aos-easing="ease-in-out">
                        <span><?php the_sub_field('title'); ?></span>
                    </div>
                </div>

                <div class="row g-5">
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
            <!--  data-aos="fade-up" data-aos-offset="100"
            data-aos-delay="50" data-aos-duration="1000" data-aos-easing="ease-in-out" -->
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
                    <!-- data-aos="fade-up" data-aos-delay="<?= $delay ?>"
                data-aos-duration="800" -->
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
                    // $delay += 300;
                }
                wp_reset_postdata();
                ?>
            </div>
        </div>
        <!--  -->

        <div class="first-blue-block position-relative" data-aos="fade-up" data-aos-offset="100" data-aos-delay="50"
            data-aos-duration="1000" data-aos-easing="ease-in-out">
            <div class="container">
                <div class=" verhaal-container">
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



        <div class="container-img">
            <div class="container">


                <div class="container" style="padding-top:140px;">

                    <div class="swiper-container">
                        <div class="swiperwerken werk-swiper">
                            <div class="swiper-wrapper">
                                <?php
                                $delay = 0;
                                foreach (get_field("testimonials") as $testimonial) {
                                    ?>
                                <div class="swiper-slide">
                                    <div class="testimonial-slide">

                                        <span class="testimonial-text"><?= $testimonial["testimonialtext"] ?></span>
                                        <br>
                                        <span class="testimonial-naam"><?= $testimonial["testimonialnaam"] ?></span>
                                    </div>
                                </div>
                                <?php
                                    $delay += 300;
                                }
                                ?>
                            </div>
                        </div>

                        <div class="swiper-pagination"></div>
                        <div class="swiper-header">
                            <div class="swiper-text">
                                <?= get_field("werkentitle") ?>
                            </div>
                            <div class="d-flex align-items-anchor-center gap-2">
                                <div class="swiper-button-prev"></div>
                                <div class="swiper-button-next"></div>
                            </div>
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
        spaceBetween: 24,

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

        // R einitia li ze A O S after Swiper initialization
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