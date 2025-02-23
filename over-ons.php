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

        .over-ons-hero-title {
            font-size: 25px;
            line-height: 76px;
            font-weight: 500;
            font-family: "Richmond Display", serif;
            text-align: center;
            letter-spacing: 0px;
            color: #feffff;
        }

        .over-ons-hero-text {
            text-align: center;
            font-size: 14px;
            line-height: 24px;
            font-weight: 300;
            font-family: "Libre Franklin", sans-serif;
            letter-spacing: 1px;
            color: #ffffff;
            opacity: 1;
            /* width: 505px; */
            /* display: block; */
            margin-bottom: 10px;
        }

        .button-container {
            border: 1px solid #f29401;
            border-radius: 5px;
            width: 250px;
            height: 51px;
            padding: 10px;
            background-color: #f29401;
            display: flex;
            justify-content: center;
            align-items: center;

            margin-top: 30px;
        }

        .button-text {
            text-align: center;
            font-size: 14px;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            color: #FFFFFF;
        }

        /* End of style Hero */

        /* Second Section */

        .onzevisie-title {
            text-align: left;
            font-size: 36px;
            line-height: 50px;
            font-weight: 300;
            font-family: "Richmond Display", serif;
            letter-spacing: 0px;
            color: #132030;
            opacity: 1;
        }

        .left-text,
        .right-text {
            text-align: center;
            font-size: 16px;
            line-height: 30px;
            font-weight: 300;
            font-family: 'Scala Sans Pro', sans-serif;
            letter-spacing: 1px;
            color: #132030;
            opacity: 1;
            text-wrap: balance;
            white-space: break-spaces;
        }

        .right-text {
            margin-top: 8px;

        }

        .baluwtext {
            padding-top: 80px;
            padding-bottom: 46px;
        }

        .center-title {
            font-size: 36px;
            line-height: 46px;
            font-weight: 300;
            font-family: "Richmond Display", serif;
            text-align: center;
            letter-spacing: 0px;
            color: #1E73BE;
            margin-bottom: 50px;
            opacity: 1;
        }



        .secleft-text,
        .fleft-text {
            text-align: left;
            font-size: 16px;
            line-height: 26px;
            font-family: 'Scala Sans Pro', sans-serif;
            letter-spacing: 0px;
            letter-spacing: 0px;
            color: #132030;
        }

        .secleft-text,
        {
        font-weight: 300;
        }

        .fleft-text {
            font-weight: bold;
        }



        .medium-img {
            width: 100%;
            height: 367px;
            background: transparent 0% 0% no-repeat padding-box;
            border-radius: 5px 0px 0px 5px;
            opacity: 1;
            object-fit: contain;
        }

        .small-whit-container {
            width: 100%;
            max-width: 1700px;
            margin: 0 auto;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 192px;
            text-align: center;
            gap: 4px;
            flex-direction: row;
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

        /* End of Swiper */
        .arrow {
            background-color: #1E73BE;
            border-radius: 50px;
            height: 28px;
            width: 28px;
        }

        .container-block {
            background-color: #F7F6F4;
            width: 100%;
            max-width: 1700px;
            margin: 0 auto;
        }

        .whi-container {
            background: #FFFFFF 0% 0% no-repeat padding-box;
            width: 1000px;
            position: relative;
            z-index: 1;
            /* top: -60px; */
            top: 105px;
            height: 131px;
            border-radius: 5px;
            margin: 0 auto;
            display: flex;
            align-items: center;
            justify-content: space-around;
            height: 250px;
        }

        .organ-title {
            /* font-size: 32px; 
        line-height: 50px;
         text-align: left;*/
            font-size: 26px;
            line-height: 35px;
            font-weight: 300;
            font-family: "Richmond Display", serif;
            text-align: center;
            letter-spacing: 0px;
            color: #132030;
            opacity: 1;
        }

        @media (min-width: 768px) {
            .swiper-container .swiper-button-prev {
                position: absolute;
                left: -3% !important;
                top: -13px !important;
            }

            .case-hero-text {
                width: 505px;
                display: block;
                font-size: 18px;
                line-height: 30px;

            }

        }


        @media (min-width: 992px) {

            .over-ons-hero-title {
                font-size: 50px;
                text-align: left;
                line-height: 80px;
            }


            .over-ons-hero-text {
                font-size: 16px;
                width: 505px;
                display: block;
            }



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

            .left-text,
            .right-text {
                text-align: left;
            }

            .medium-container {
                margin-top: 50px;
                margin-bottom: 50px;
            }

            .first-blue-block {
                height: 683px;
                margin-top: unset;

            }

            .whi-container {
                height: 131px;
            }

            .organ-title {
                font-size: 32px;
                line-height: 50px;
                text-align: left;
            }



        }
    </style>
    <div>


        <!-- Hero Section -->
        <div class="hero-section flex-column">
            <div class="hero-content">
                <div class="col-12  col-lg-12  pe-0 pe-lg-5">
                    <span class="over-ons-hero-title fadeIn  " data-side="right" style="transition-delay: .25s;">
                        <span class="d-block">
                            <?= get_field("herotitle") ?>
                        </span>
                    </span>
                </div>
            </div>
            <span class="over-ons-hero-text ">
                <span class="d-block">
                    <?= get_field("herotext") ?>
                </span>
            </span>
            <div class="button-container ">
                <div class="circle-border btn-primary-custom "
                    style="width: 182px; pointer-events: auto ;z-index: 1000 ;">
                    <a href="<?= get_field("kennismakenbtn")['url'] ?>" class="btn btn-primary">
                        <?= get_field("kennismakenbtn")['title'] ?>
                    </a>
                    <img src="<?= get_field("arrow")['url'] ?>" alt="<?= get_field("arrow")['alt'] ?>"
                        style="width: 9px; height: 7.69px; object-fit: cover; display: block; " />
                </div>
            </div>


        </div>
        <!-- End of Hero Section -->

        <!-- Onze Visie -->
        <div class="container">
            <div class="row mt-5">
                <div class="d-flex my-4 ">
                    <span class="onzevisie-title"><?= get_field("onzevisietitle") ?></span>
                </div>

                <div class="col-12 col-lg-6">
                    <span class="left-text"> <?= get_field("lefttext") ?></span>
                </div>
                <div class="col-12 col-lg-6">
                    <span class="right-text pt-2"> <?= get_field("righttext") ?></span>
                </div>
            </div>

            <div class="baluwtext">
                <div class="col-12  col-lg-7  max-auto text-center d-flex flex-column align-items-center justify-content-center "
                    style="margin:0 auto">
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

        <!--New Section -->
        <div class="container medium-container">
            <div class="row">
                <div class="col-12  col-lg-5 ">
                    <div class="d-flex flex-column  text-left gap-4">
                        <span class="fleft-text">
                            <?= get_field("flefttext") ?>
                        </span>
                        <span class="secleft-text">
                            <?= get_field("seclefttext") ?>
                        </span>
                        <div class="button-group">
                            <div class="circle-border  btn-primary-custom " style="width:110px ">
                                <a href="<?= get_field("contactbtn")['url'] ?>" class="btn btn-primary">
                                    <?= get_field("contactbtn")['title'] ?>
                                </a>
                                <img src="<?= get_template_directory_uri() ?>/images/white-arrow.svg"
                                    alt="go onze expertises" class="testimonial-arrow"
                                    style="  width: 9px; height: 7.69px; object-fit: cover; display: block;" />
                            </div>
                            <div class="circle-border gap-1  btn-custom-container " style="width:195px  ">
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
                <!-- <div class="col-lg-1 d-none d-lg-block"></div> -->
                <div class="col-12 col-lg-5 offset-lg-1">
                    <img src="<?= get_field("mediumimg")['url'] ?>" alt="<?= get_field("")['alt'] ?>"
                        class="medium-img" />
                </div>
            </div>
        </div>
        <!--End of new Section -->



        <!--first-blue-block  -->
        <div class="first-blue-block position-relative">
            <div class="container blue-container">
                <div class="swiper-container swiper position-relative  mt-5">

                    <div class="swiper-header mb-5">
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
                    <div class="swiper-pagination"></div>
                </div>


                <!--White-containe-->
                <div class="small-whit-container">
                    <div class="whi-container ">
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


                            <div class="circle-border gap-1  btn-primary-custom " style="width:195px">
                                <a h ref="<?= get_field("vraagaanbtn")['url'] ?>" class="btn btn-primary">
                                    <?= get_field("vraagaanbtn")['title'] ?>
                                </a>
                                <img src="<?= get_template_directory_uri() ?>/images/nextarrow.svg"
                                    alt="go onze expertises" class="testimonial-arrow" style="  width: 9px; height: 7.69px; ob
                                                       ject-fit: cover; display: block;" />
                                <img src="<?= get_field("arrow")['url'] ?>" alt="<?= get_field("arrow")['alt'] ?>"
                                    style="width: 9px; height: 7.69px; object-fit: cover; display: " />
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
            autoplay: { //added
                delay: 2000, //added
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