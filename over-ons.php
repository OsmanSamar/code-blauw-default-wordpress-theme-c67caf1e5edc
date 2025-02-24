<?php get_header()  //Template Name: overons  ?>

<main class="overons">
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

        /* End of Swiper */



        .container-block {
            /* background-color: #F7F6F4; */
            width: 100%;
            max-width: 1700px;
            margin: 0 auto;
        }

        /* .whi-container {
            background: #FFFFFF 0% 0% no-repeat padding-box;
            width: 1000px;
            position: relative;
            z-index: 1;
            top: 45px;
            height: 131px;
            border-radius: 5px;
            margin: 0 auto;
            display: flex;
            align-items: center;
            justify-content: space-around;
            height: 250px;
            width: 100%;
            max-width: 1700px;
            margin: 0 auto;
        } */

        /* .organ-title {
            font-size: 26px;
            line-height: 35px;
            font-weight: 300;
            font-family: "Richmond Display", serif;
            text-align: center;
            letter-spacing: 0px;
            color: #132030;
            opacity: 1;
        } */

        @media (min-width: 768px) {
            .swiper-container .swiper-button-prev {
                position: absolute;
                left: -3% !important;
                top: -13px !important;
            }

        }


        @media (min-width: 992px) {

            .swiper-container .swiper-button-prev {
                position: absolute;
                left: -12% !important;
                top: -12px !important;
            }

            .swiper-text {
                font-size: 36px;
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

            /* .whi-container {
                height: 131px;
            }

            .organ-title {
                font-size: 32px;
                line-height: 50px;
                text-align: left;
            } */



        }
    </style>
    <div>


        <!-- Hero Section -->
        <div class="hero-section flex-column">
            <div class="hero-content">
                <div class="col-12  col-lg-12  pe-0 pe-lg-5">
                    <h1 class="case-hero-title" data-aos="fade-up" data-aos-offset="100" data-aos-delay="50"
                        data-aos-duration="1000" data-aos-easing="ease-in-out">
                        <span class="d-block">
                            <?= get_field("herotitle") ?>
                        </span>
                    </h1>
                </div>
            </div>
            <span class="case-hero-text ">
                <span class="d-block">
                    <?= get_field("herotext") ?>
                </span>
            </span>
            <!-- <div class="button-container ">
                <div class="circle-border btn-primary-custom "
                    style="width: 182px; pointer-events: auto ;z-index: 1000 ;">
                    <a href="<?= get_field("kennismakenbtn")['url'] ?>" class="btn btn-primary">
                        <?= get_field("kennismakenbtn")['title'] ?>
                    </a>
                  
                </div>
            </div> -->
            <!-- pointer-events: auto ;z-index: 1000 ; -->
            <div class="circle-border btn-primary-custom width-fit-content" style="width: fit-content;">
                <a href="<?= get_field("kennismakenbtn")['url'] ?>" class="btn btn-primary">
                    <?= get_field("kennismakenbtn")['title'] ?>
                </a>
                <img src="<?= get_field("arrow")['url'] ?>" alt="<?= get_field("arrow")['alt'] ?>"
                    style="width: 9px; height: 7.69px; object-fit: cover; display: block; " />
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
                <div class="col-12  col-lg-7  max-auto text-center d-flex flex-column align-items-center justify-content-center "
                    data-aos="fade-up" data-aos-offset="100" data-aos-delay="50" data-aos-duration="1000"
                    data-aos-easing="ease-in-out" style="margin:0 auto">
                    <span class="center-title fadeIn  " data-side="right" style="transition-delay: .25s;">
                        <span class="d-block">
                            <?= get_field("blauwijscentertext") ?>
                        </span>
                    </span>

                    <div class="button-group">
                        <div class="circle-border gap-1 " style="width: 182px;">
                            <a href="<?= get_field("neemcontactopbtn")['url'] ?>" class="btn-custom"
                                style="color: #132030;">
                                <?= get_field("neemcontactopbtn")['title'] ?>
                            </a>
                            <img src="<?= get_template_directory_uri() ?>/images/nextarrow.svg" alt="go onze expertises"
                                class="testimonial-arrow"
                                style="  width: 12px; height: 10.26px; flex-shrink: 0; object-fit: cover;" />
                        </div>
                        <div class="circle-border gap-1 " style="width: 172px; ">
                            <a href="<?= get_field("onzewerkwijzebtn")['url'] ?>" class="btn-custom"
                                style="color: #132030;">
                                <?= get_field("onzewerkwijzebtn")['title'] ?>
                            </a>
                            <img src="<?= get_template_directory_uri() ?>/images/nextarrow.svg" alt="go onze expertises"
                                class="testimonial-arrow"
                                style="  width: 12px; height: 10.26px; flex-shrink: 0; object-fit: cover;" />
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
                        <div class="d-flex flex-column  text-left gap-4">
                            <span class="fleft-text">
                                <?= get_field("flefttext") ?>
                            </span>
                            <span class="secleft-text">
                                <?= get_field("seclefttext") ?>
                            </span>
                            <div class="button-group">
                                <div class="circle-border  btn-primary-custom " style="  width: fit-content;">
                                    <!-- width:110px -->
                                    <a href="<?= get_field("contactbtn")['url'] ?>" class="btn btn-primary">
                                        <?= get_field("contactbtn")['title'] ?>
                                    </a>
                                    <img src="<?= get_template_directory_uri() ?>/images/white-arrow.svg"
                                        alt="go onze expertises" class="testimonial-arrow"
                                        style="  width: 9px; height: 7.69px; object-fit: cover; display: block;" />
                                </div>
                                <div class="circle-border gap-1  btn-custom-container " style=" width: fit-content;  ">
                                    <!-- width:195px  -->
                                    <a href="<?= get_field("veelgesteldevragenbtn")['url'] ?>" class="btn-custom"
                                        style="color: #132030;">
                                        <?= get_field("veelgesteldevragenbtn")['title'] ?>
                                    </a>
                                    <img src="<?= get_template_directory_uri() ?>/images/nextarrow.svg"
                                        alt="go onze expertises" class="testimonial-arrow"
                                        style="  width: 9px; height: 7.69px; object-fit: cover; display: block;" />
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
                <div class="swiper-container swiper position-relative  mt-5 mb-5">

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
                                                        <!-- <img src="<?= get_template_directory_uri() ?>/images/whitenextarrow.svg"
                                                        alt="go to article" class="icon" /> -->
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
                            ?>
                        </div>
                    </div>
                    <!-- <div class="swiper-pagination"></div> -->
                </div>


                <!--White-containe-->
                <div class="small-whit-container ">
                    <div class="whi-container  " data-aos="fade-up" data-aos-offset="100" data-aos-delay="50"
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
                         ?>                     -->
                            </span>


                            <div class="circle-border gap-1  btn-primary-custom " style=" width: fit-content;">
                                <!-- width:195px -->
                                <a h ref="<?= get_field("vraagaanbtn")['url'] ?>" class="btn btn-primary">
                                    <?= get_field("vraagaanbtn")['title'] ?>
                                </a>
                                <img src="<?= get_template_directory_uri() ?>/images/whitenextarrow.svg"
                                    alt="go to article" class="testimonial-arrow" />
                            </div>
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