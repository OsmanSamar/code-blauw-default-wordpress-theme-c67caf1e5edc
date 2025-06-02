<?php get_header();
$fields = get_fields();
//Template Name: overons  ?>

<main class="overons">
    <style>
    .breadcrumb-wrap {
        position: absolute;
        /* top: -96px; */
        top: -24px;
    }
    </style>
    <div>

        <!-- Hero Section -->


        <!-- <div class=" container ">
            <div class="hero-section  bg-holder">
                <div class="bg" style="background-image:url('<?= get_field('heroimage')['url'] ?> ')">
                </div>
                <div class="hero-content text-center w-100">
                    <div class="row ">
                        <?php get_template_part('components/breadcrumb') ?>
                    </div>
                    <div class="row">
                        <div class="col-12 col-md-6 offset-md-3 align-self-center
                             d-flex flex-column justify-content-center align-items-center ">
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
                            <div class="btn-primary-custom mt-4">
                                <a href="<?= get_field("meerwetenbtn")['url'] ?>" class="">
                                    <?= get_field("meerwetenbtn")['title'] ?>
                                    <img src="<?= get_template_directory_uri() ?>/images/white-arrow.svg"
                                        alt="go kennismaken" class="go-arrow" />
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->

        <div style=" height: 500px;">
            <?= get_template_part("components/hero") ?>
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
                        <div class="">
                            <!--  style="width: 182px;" -->
                            <a href="<?= get_field("neemcontactopbtn")['url'] ?>" class="button btn-custom-container"
                                style="color: #132030;">
                                <?= get_field("neemcontactopbtn")['title'] ?>
                                <img src="<?= get_template_directory_uri() ?>/images/nextarrow.svg"
                                    alt="go onze expertises" class="go-arrow" />
                            </a>

                        </div>
                        <div class="">

                            <a href="<?= get_field("onzewerkwijzebtn")['url'] ?>" class="button btn-custom-container"
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
                    <div class="col-12 col-lg-6" data-aos="fade-right" data-aos-offset="100" data-aos-delay="50"
                        data-aos-duration="1000" data-aos-easing="ease-in-out">
                        <div class="d-flex flex-column  text-left gap-4 mb-4">
                            <span class="fleft-text">
                                <?= get_field("flefttext") ?>
                            </span>
                            <span class="secleft-text">
                                <?= get_field("seclefttext") ?>
                            </span>
                            <div class="button-group mt-3 d-flex gap-2">
                                <div class=" ">
                                    <a href="<?= get_field("contactbtn")['url'] ?>" class="button btn-primary">
                                        <?= get_field("contactbtn")['title'] ?>
                                        <img src="<?= get_template_directory_uri() ?>/images/white-arrow.svg"
                                            alt="go onze contact" class="go-arrow" />
                                    </a>
                                </div>
                                <div class="">
                                    <a href="<?= get_field("veelgesteldevragenbtn")['url'] ?>"
                                        class="button btn-custom-container" style="color: #132030;">
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
                            <div class="swiper-slide d-flex flex-column h-auto">
                                <a href="<?= get_permalink($post) ?>" class=" d-flex flex-column">
                                    <div class="testimonial-slide d-flex flex-column">
                                        <img src="<?= $testimonial["logo"]['url'] ?>"
                                            alt=" <?= $testimonial['logo']['alt'] ?>" style=" height: 101px;
                                            border-radius: 5px; background: #F7F6F4; object-fit: scale-down;"
                                            class="card-img-top" />
                                        <!--  style="height: 101px; border-radius: 5px; background: #F7F6F4; object-fit: scale-down;"  -->
                                        <!--  class="card-img-top" -->
                                        <div class="card-body d-flex flex-column mt-1 mb-0 pb-4 pt-2">
                                            <!-- d-flex flex-column -->
                                            <div class="d-flex justify-content-between align-items-center">
                                                <span class="card-text">
                                                    <?= $post->post_title ?></span>
                                                <span class="d-flex justify-content-center align-items-center arrow">
                                                    <img src="<?= $testimonial["white_arrow"]['url'] ?>"
                                                        alt=" <?= $testimonial['white_arrow']['alt'] ?>"
                                                        class="go-arrow" />
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
                        <div class="" style="margin-right: 27px;">
                            <a href="<?= get_field("vragenaanbtn")['url'] ?>" class="button btn-primary">
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