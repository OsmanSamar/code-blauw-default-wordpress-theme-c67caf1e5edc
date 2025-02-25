<?php get_header()  //Template Name: cases
    ?>

<main class="cases">
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





    /* End of style Hero */

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

    /* .swiper-container {
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
    } */

    .swiper-header {
        /* display: flex;
        align-items: center;
        justify-content: center; */
        /* position: absolute;
        top: -70px;
        right: 0;
        width: 100%; */
    }

    /* .swiper-text {
        font-size: 26px;
        font-weight: 300;
        white-space: nowrap;
        text-align: center;
        line-height: 50px;
        font-family: 'Richmond Display', serif;
        letter-spacing: 0px;
        color: #132030;
        opacity: 1;
    } */

    .swiper-button-prev,
    .swiper-button-next {
        /* position: static !important; */
        /* position: relative !important;
        width: 41px;
        height: 41px;
        border: 1px solid #132030;
        color: #132030;
        border-radius: 5px;
        display: flex;
        align-items: center;
        justify-content: center;
        z-index: 10; */

    }

    /* 
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
    } */


    .swiper-container .swiper-button-prev {
        position: absolute;
        /* left: 82% !important;
        top: -70px !important; */
        /* left: -2% !important;
        top: -13px !important; */
    }

    /* .swiper-container .swiper-button-next {
        position: absolute;
        right: 5px !important;
        top: -12px !important;
    } */

    /* End of Swiper */

    .section-header {
        display: flex;
        align-items: center;
        justify-content: center;

    }

    .section-text {
        font-size: 26px;
        font-weight: 300;
        white-space: nowrap;
        text-align: center;
        line-height: 50px;
        font-family: 'Richmond Display', serif;
        letter-spacing: 0px;
        color: #132030;
        opacity: 1;

    }



    .container-block {
        width: 100%;
        max-width: 1700px;
        margin: 0 auto;
    }

    .whi-container {

        width: 100%;
        max-width: 1289px;

    }












    @media (min-width: 768px) {
        /* .swiper-container .swiper-button-prev {
            position: absolute;
            left: -3% !important;
            top: -13px !important;
        } */


    }


    @media (min-width: 992px) {

        /* .swiper-container .swiper-button-prev {
            position: absolute;
            left: -12% !important;
            top: -12px !important;
        }


        .swiper-text {
            font-size: 36px;
        }

        .organ-title {
            font-size: 32px;
            text-align: left;
            line-height: 50px;
        }

        .whi-container {
            height: 131px;
        } */

        .first-blue-block {
            margin-top: unset;
            height: 868px;

        }

        .whi-container {
            position: relative;
            top: -64px;
        }

    }
    </style>

    <div>

        <!-- Hero Section -->
        <div class="hero-section flex-column">
            <div class="hero-content text-center">
                <div class="col-12  col-lg-12  pe-0 pe-lg-5">
                    <h1 class="case-hero-title text-center  " data-aos="fade-up" data-aos-offset="100"
                        data-aos-delay="50" data-aos-duration="1000" data-aos-easing="ease-in-out">
                        <span class="d-block">
                            <?= get_field("herotitle") ?>
                        </span>
                    </h1>
                </div>
                <span class="case-hero-text ">
                    <span class="d-block">
                        <?= get_field("herotext") ?>
                    </span>
                </span>

                <div class="circle-border btn-primary-custom mt-4" style="width: fit-content;">
                    <a href="<?= get_field("ontdekbtn")['url'] ?>" class="btn-custom">
                        <?= get_field("ontdekbtn")['title'] ?>
                        <img src="<?= get_template_directory_uri() ?>/images/whitenextarrow.svg" alt="go to article"
                            class="testimonial-arrow" />
                    </a>


                </div>


            </div>


        </div>
        <!-- End of Hero Section -->



        <!--first-blue-block  -->
        <div class="first-blue-block position-relative">
            <div class="container blue-container">
                <div class="row">
                    <div class="col-12">
                        <div class="section-header ">
                            <div class="section-text">
                                <?= get_field("klantcases") ?>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4 mt-5">
                    <?php
                    $posts = get_posts([
                        'post_type' => 'werken_voor',
                        'numberposts' => -1,
                        'order' => 'asc'
                    ]);

                    foreach ($posts as $post) {
                        $fields = get_fields($post->ID);
                        $testimonial = get_field("testimonialwerkvoor");
                        ?>
                    <div class="col d-flex">
                        <a href="<?= get_permalink($post) ?>" class=" d-flex flex-column w-100">
                            <div class="testimonial-slide d-flex flex-column w-100 p-3 border rounded">
                                <img src="<?= $testimonial["logo"]['url'] ?>" alt=" <?= $testimonial['logo']['alt'] ?>"
                                    class="card-img-top"
                                    style="height: 101px; border-radius: 5px; background: #F7F6F4; object-fit: scale-down;" />

                                <div class="card-body d-flex flex-column mt-1 mb-0 pb-4 pt-2 h-100">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <span class="card-text"><?= $post->post_title ?></span>
                                        <span class="d-flex justify-content-center align-items-center arrow">
                                            <img src="<?= $testimonial["white_arrow"]['url'] ?>"
                                                alt=" <?= $testimonial['white_arrow']['alt'] ?>" class="card-img-top"
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
                    }
                    ?>
                </div>
            </div>




        </div>
        <!--End of first-blue-block  -->

        <!--White-containe-->
        <div class="container-block">
            <div class="whi-container" data-aos="fade-up" data-aos-offset="100" data-aos-delay="50"
                data-aos-duration="1000" data-aos-easing="ease-in-out">
                <div class="d-flex align-items-center gap-4 flex-column flex-lg-row">
                    <span class="organ-title">
                        Ook de volgende stap zetten met jouw organisatie?
                        <?= get_field("organisatietext") ?>
                        <!-- 
                         <?php
                         $organisatietext = get_field("organisatietext");
                         echo '<pre>';
                         print_r($organisatietext);
                         echo '</pre>';
                         ?> -->
                    </span>
                    <div class="circle-border btn-primary-custom  gap-1">
                        <a href="<?= get_field("vraageenbtn")['url'] ?>" class="btn-custom">
                            <?= get_field("vraageenbtn")['title'] ?>
                            <img src="<?= get_template_directory_uri() ?>/images/whitenextarrow.svg"
                                alt="go Contact page" class="testimonial-arrow" />
                        </a>

                    </div>

                </div>
            </div>
        </div>


        <!--End of wshite-containe-->


    </div>


    <script>
    let swiperwerken3 = new Swiper('.werk-swiper3', {
        slidesPerView: 2.5,
        grabCursor: true,
        spaceBetween: 20,

        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        // loop: true,
        // autoplay: { //added
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
                AOS.refres h();
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