<?php get_header();
$fields = get_fields();
//Template Name: cases
?>

<main class="cases">
    <style>
       
      

        .whi-container {
            background: #ffffff 0% 0% no-repeat padding-box;
            width: 1000px;
            border-radius: 5px;
            margin: 0 auto;
            width: 100%;
            max-width: 1289px;
            padding: 23px;
        }

        @media (min-width: 992px) {


            .whi-container {
                position: relative;
                top: -64px;
            }
        }
    </style>

    <div class=" container">

        <!-- Hero Section -->
        <div>
            <?= get_template_part("components/hero") ?>
        </div>

     



        <!--first-blue-block  -->
        <div class="first-blue-block position-relative">
            <div class=" blue-container">
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
                        <div class="col-lg-3 col-md-4 col-12 d-flex">
                            <a href="<?= get_permalink($post) ?>" class=" d-flex flex-column ">
                                <div class=" card border-0 testimonial-slide d-flex flex-column ">
                                    <img src=" <?= $testimonial["logo"]['url'] ?>" alt=" <?= $testimonial['logo']['alt'] ?>"
                                        class=" card-img-top"
                                        style="height: 101px; border-radius: 5px; background: #F7F6F4 0% 0% no-repeat padding-box; object-fit: scale-down;" />

                                    <div class="card-body mt-1 mb-0 pb-4 pt-2">
                                        <!--  d-flex flex-column  -->
                                        <div class="d-flex justify-content-between align-items-center">
                                            <span class="card-text"><?= $post->post_title ?></span>
                                            <span class="d-flex justify-content-center align-items-center arrow">
                                                <img src="<?= $testimonial["white_arrow"]['url'] ?>"
                                                    alt=" <?= $testimonial['white_arrow']['alt'] ?>" class="card-img-top"
                                                    style="width: 9px; height: 7.69px; object-fit: cover; display: block;" />
                                            </span>
                                        </div>
                                        <span class="card-title mt-auto" style=" color: #132030;">
                                            <span>
                                                <?= $testimonial["text"] ?></span>
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
                <div class="" style="margin-right: 27px;">
                    <a href="<?= get_field("vraageenbtn")['url'] ?>" class="button btn-primary">
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

            // R ein itia li ze A O S after Swiper initialization
            on: {
                init: function () {
                    AOS.refres h();
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