<?php get_header();
$fields = get_fields();
//Template Name: werkwijze  ?>

<main class="werkwijze">

   
    <div>

        <!-- Hero Section -->
       

        <div>
            <?= get_template_part("components/hero") ?>
        </div>

       



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
                        <div class="">
                            <a href="<?= get_field("wetenbtn")['url'] ?>" class="button btn-primary">
                                <?= get_field("wetenbtn")['title'] ?>
                                <img src="<?= get_template_directory_uri() ?>/images/white-arrow.svg"
                                    alt="go to article" class="go-arrow" />
                            </a>
                        </div>
                        <div class="">
                            <a href="<?= get_field("veelgesteldevragenbtn")['url'] ?>" class="button btn-custom-container"
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
                                    style="color: #F29401;;font-family Manrope; font-size:18px;font-style:normal;font-weight:600;line-height:32px;    font-weight: lighter;">
                                    <?= $testimonails["stap"] ?>
                                </span>
                                <span
                                    style="color: #F29401;;font-family Manrope; font-size:18px;font-style:normal;font-weight:600;line-height:32px;    font-weight: lighter;">
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


        <div class="container  ">
            <div class="container-img position-relative bg-holder">
                <!-- style="margin-top: 127px;" -->
                <div class="bg"
                    style="background-image: url('<?= get_template_directory_uri() ?>/images/img-container.png')">
                </div>
                <div class="swiper-title " style=" position: relative;z-index: 1;">
                    <div class="title-container" data-aos="fade-right" data-aos-offset="100" data-aos-delay="50"
                        data-aos-duration="1000" data-aos-easing="ease-in-out">
                        <?= get_field("titleoflogos") ?>
                    </div>
                </div>

                <div class="container  position-relative my-auto py-4" style=" z-index: 1;">
                    <div class="swiper sample-slider  ">
                        <div class="swiper-wrapper">
                            <?php
                            $testemonials = get_field("partnerslogotestemonials");
                            if ($testemonials) {
                                foreach ($testemonials as $testemonial) { ?>
                            <div class="swiper-slide">
                                <div class="werk-logo-container">
                                    <a href="<?= esc_url($testemonial['partnerslogolink']['url']) ?>" target="_blank">
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


        <!--first-blue-block  -->
        <div class="first-blue-block position-relative">
            <div class="container blue-container werk-slider">

                <div class="swiper-container swiper position-relative mb-5">
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
                            <div class="swiper-slide d-flex flex-column h-auto">
                                <a href="<?= get_permalink($post) ?>" class="d-flex flex-column">
                                    <div class="testimonial-slide d-flex flex-column">
                                        <img src="<?= $testimonial["logo"]['url'] ?>"
                                            alt="<?= $testimonial['logog']['alt'] ?>" class="card-img-top"
                                            style="height:101px; border-radius: 5px; background: #F7F6F4; object-fit: scale-down;" />
                                        <div class="card-body d-flex flex-column   mt-1 mb-0 pb-4 pt-2">
                                            <!-- d-flex flex-column -->
                                            <div class="d-flex justify-content-between align-items-center">
                                                <span class="card-text">
                                                    <?= $post->post_title ?></span>
                                                <span class="d-flex justify-content-center align-items-center arrow">
                                                    <img src="<?= get_template_directory_uri() ?>/images/white-arrow.svg"
                                                        alt="go Contact page" class="go-arrow" />
                                                </span>
                                            </div>
                                            <span class="card-title mt-auto" style=" color: #132030;">
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
                        <div class=" " style="margin-right: 27px;">
                            <a href="<?= get_field("vraagaanbtn")['url'] ?>" class="button btn-primary">
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
    document.addEventListener('DOMContentLoaded', function() {
        const swiper = new Swiper('.sample-slider', {

            slidesPerView: 2,
            // centeredSlides: true,
            spaceBetween: 24,

            pagination: {
                el: '.swiper-pagination',
            },
            // navigation: {
            //     nextEl: ".swiper-button-next",
            //     prevEl: ".swiper-button-prev",
            // },

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

                    slidesPerView: 4.3,

                },
                1025: {
                    slidesPerView: 6,


                }


            }
        });
    });
    </script>



    <script>
    let newswiper1 = new Swiper('.werk-swiper3', {
        slidesPerView: 2.5,
        grabCursor: true,
        spaceBetween: 24,

        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },

        navigation: {
            nextEl: ".werk-slider .swiper-button-next",
            prevEl: ".werk-slider .swiper-button-prev",
        },


        breakpoints: {
            360: {
                slidesPerView: 1.3
            },
            410: {
                slidesPerView: 1.2

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