<?php get_header();
$fields = get_fields();
//Template Name: cases
?>

<main class="cases">
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



    .testimonial-slide {
        background: #FFFFFF 0% 0% no-repeat padding-box;
        /* border-radius: 5px; */
        padding: 18px;
        box-shadow: 10px 10px 60px #2072BE1A;
        text-align: left;
        height: 100%;
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

    .first-blue-block {
        height: fit-content;
        padding: 80px 0px;
    }


    @media (min-width: 992px) {
        .first-blue-block {
            margin-top: unset;
        }

        .whi-container {
            position: relative;
            top: -64px;
        }

    }
    </style>

    <div>

        <!-- Hero Section -->
        <div class="hero-section">
            <div class="container">
                <div class="hero-content text-center">
                    <div
                        class="col-12 col-lg-6 offset-lg-3 col-md-8 offset-md-2    align-self-center d-flex flex-column justify-content-center align-items-center">
                        <h1 class="case-hero-title text-center  " data-aos="fade-up" data-aos-offset="100"
                            data-aos-delay="50" data-aos-duration="1000" data-aos-easing="ease-in-out">
                            <span class="d-block">
                                <?= get_field("herotitle") ?>
                            </span>
                        </h1>

                        <div class="case-hero-text" data-aos="fade-up" data-aos-offset="100" data-aos-delay="50"
                            data-aos-duration="1000" data-aos-easing="ease-in-out">
                            <span class="d-block">
                                <?= get_field("herotext") ?>
                            </span>
                        </div>
                        <div class="circle-border btn-primary-custom mt-4">
                            <a href="<?= get_field("ontdekbtn")['url'] ?>" class="btn-custom">
                                <?= get_field("ontdekbtn")['title'] ?>
                                <img src="<?= get_template_directory_uri() ?>/images/whitenextarrow.svg"
                                    alt="go to article" class="go-arrow" />
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End of Hero Section -->



        <!--first-blue-block  -->
        <div class="first-blue-block position-relative">
            <div class="container blue-container">
                <div class="row">
                    <div class="col-12 col-md-6 offset-md-3">
                        <div class="section-header ">
                            <div class="section-text">
                                <?= get_field("klantcases") ?>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4 mt-3 mb-5">
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
                        <a href="<?= get_permalink($post) ?>" class=" d-flex flex-column  ">
                            <div class="card testimonial-slide d-flex flex-column  ">
                                <img src="<?= $testimonial["logo"]['url'] ?>" alt=" <?= $testimonial['logo']['alt'] ?>"
                                    class="card-img-top"
                                    style="height: 101px; border-radius: 5px; background: #F7F6F4 0% 0% no-repeat padding-box; object-fit: scale-down;" />

                                <div class="card-body d-flex flex-column mt-1 mb-0 pb-4 pt-2">
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
                    wp_reset_postdata();
                    ?>
                </div>
            </div>




        </div>
        <!--End of first-blue-block  -->

        <!--White-containe-->

        <div class="whi-container" data-aos="fade-up" data-aos-offset="100" data-aos-delay="50" data-aos-duration="1000"
            data-aos-easing="ease-in-out">
            <div class="d-flex align-items-center gap-3 py-3 justify-content-between flex-column flex-lg-row">
                <span class="organ-title">
                    <?= get_field("organisatietext") ?>
                    <!-- 
                         <?php
                         $organisatietext = get_field("organisatietext");
                         echo '<pre>';
                         print_r($organisatietext);
                         echo '</pre>';
                         ?> -->
                </span>
                <div class="circle-border btn-primary-custom  ">
                    <a href="<?= get_field("vraageenbtn")['url'] ?>" class="btn-custom">
                        <?= get_field("vraageenbtn")['title'] ?>
                        <img src="<?= get_template_directory_uri() ?>/images/whitenextarrow.svg" alt="go Contact page"
                            class="go-arrow" />
                    </a>

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