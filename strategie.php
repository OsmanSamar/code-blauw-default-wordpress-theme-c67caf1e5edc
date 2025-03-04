<?php get_header();
$fields = get_fields();
//Template Name: strategie  ?>

<main class="strategie">
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

        .strategie-hero-title {
            font-size: 54px;
            line-height: 76px;
            font-weight: 500;
            font-family: "Richmond Display", serif;
            text-align: center;
            letter-spacing: 0px;
            color: #feffff;
        }

        .strategie-hero-text {
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

        .werk-blauwijs-title {
            text-align: left;
            font-size: 36px;
            line-height: 50px;
            font-weight: 300;
            font-family: "Richmond Display", serif;
            letter-spacing: 0px;
            color: #1E73BE;
            opacity: 1;
        }

        .right-text,
        .right-text-bold {
            text-align: left;
            font-size: 16px;
            line-height: 30px;
            font-weight: 300;
            font-family: 'Scala Sans Pro', sans-serif;
            letter-spacing: 2px;
            color: #132030;
            opacity: 1;
            text-wrap: balance;
            white-space: break-spaces;
        }

        .right-text-bold {
            font-weight: bold;
        }



        /* .whi-container {
            background: #FFFFFF 0% 0% no-repeat padding-box;
            width: 1000px;
            z-index: 1;
            height: 131px;
            border-radius: 5px;
            margin: 0 auto;
            display: flex;
            align-items: center;
            justify-content: space-around;
            height: 250px;
            margin-top: 50px;
        } */



        .waaromkiezenvoorblauw {
            text-align: left;
            font-size: 36px;
            line-height: 50px;
            font-weight: 300;
            font-family: "Richmond Display", serif;
            letter-spacing: 0px;
            color: #132030;
            opacity: 1;

        }

        .right-text-bold,
        .right-text-notbold {
            text-align: left;
            font-size: 16px;
            line-height: 26px;
            font-weight: 300;
            font-family: 'Scala Sans Pro', sans-serif;
            letter-spacing: 1px;
            color: #132030;
            opacity: 1;
            text-wrap: balance;
            white-space: break-spaces;

        }

        .right-text-bold {
            font-weight: bold;

        }

        .blue-block {
            width: 100%;

            margin: 0 auto;
            background-color: #CCE1F4;
            /* height: 41px; */
            padding-top: 50px;
            padding-bottom: 50px;
        }


        @media (min-width: 768px) {

            .right-text,
            .right-text-bold {
                text-align: left;
            }
        }



        @media (min-width: 992px) {

            .strategie-hero-title {

                text-align: left;
                line-height: 80px;
            }


            .strategie-hero-text {
                font-size: 16px;
                /* width: 505px;
            display: block; */
            }

            .right-text,
            .right-text-bold {
                text-align: left;
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
        <div class="hero-section ">
            <div class="container">
                <div class="hero-content text-center">
                    <div
                        class="col-12 col-md-6 offset-md-3 align-self-center d-flex flex-column justify-content-center align-items-center ">
                        <h1 class="strategie-hero-title text-center  " data-aos="fade-up" data-aos-offset="100"
                            data-aos-delay="50" data-aos-duration="1000" data-aos-easing="ease-in-out">
                            <span class="d-block">
                                <?= get_field("herotitle") ?>
                            </span>
                        </h1>
                        <div class="strategie-hero-text ">
                            <span class="d-block">
                                <?= get_field("herotext") ?>
                            </span>
                        </div>
                        <div class="circle-border  btn-primary-custom mt-4" style="width: fit-content;">
                            <a href="<?= get_field("meerwetenbtn")['url'] ?>" class="btn-custom">
                                <?= get_field("meerwetenbtn")['title'] ?>
                                <img src="<?= get_template_directory_uri() ?>/images/white-arrow.svg"
                                    alt="go kennismaken" class="go-arrow" />
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End of Hero Section -->



        <!-- Hoe werkt Blauw IJs? Block -->
        <div class="container mb-5">
            <div class="row" style="margin-top:5rem; margin-bottom: 5rem;">
                <div class="col-12 col-lg-6" data-aos="fade-right" data-aos-offset="100" data-aos-delay="50"
                    data-aos-duration="1000" data-aos-easing="ease-in-out">
                    <span class="werk-blauwijs-title"><?= get_field("voorwieisblauwijs") ?></span>
                    sbl
                </div>
                <div class="col-12 col-lg-6 " data-aos="fade-left" data-aos-offset="100" data-aos-delay="50"
                    data-aos-duration="1000" data-aos-easing="ease-in-out">
                    <div class="d-flex flex-column ">
                        <div class="right-text-bold pt-2"> <?= get_field("righttext") ?></div>
                        <div class="right-text pt-2 "> <?= get_field("secrighttext") ?></div>
                        <div class="button-group mt-5">
                            <div class="circle-border gap-1  " style="width: 172px; ">
                                <a href="<?= get_field("onzeklantcasesbtn")['url'] ?>" class="btn-custom"
                                    style="color: #132030;">
                                    <?= get_field("onzeklantcasesbtn")['title'] ?>
                                </a>
                                <img src="<?= get_template_directory_uri() ?>/images/nextarrow.svg"
                                    alt="go onze expertises" class="testimonial-arrow"
                                    style="  width: 12px; height: 10.26px; flex-shrink: 0; object-fit: cover;" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--End of Hoe werkt Blauw IJs? Block -->

        <!--first-blue-block  -->
        <div class="blue-block ">
            <div class="container ">

                <div class="row  mb-3">
                    <div class="col-12 col-lg-6 mb-5" data-aos="fade-right" data-aos-offset="100" data-aos-delay="50"
                        data-aos-duration="1000" data-aos-easing="ease-in-out">
                        <div class="d-flex flex-column gap-4 ">
                            <span class="waaromkiezenvoorblauw"><?= get_field("waaromkiezenvoorblauw") ?></span>
                            <span class="right-text-bold"><?= get_field("righttextbold") ?></span>
                            <span class="right-text-notbold"><?= get_field("righttextnotbold") ?></span>
                        </div>
                    </div>
                    <div class="col-12 col-lg-5 offset-lg-1" data-aos="fade-left" data-aos-offset="100"
                        data-aos-delay="50" data-aos-duration="1000" data-aos-easing="ease-in-out">
                        <img src="<?= get_field("businesswomen")['url'] ?>"
                            alt="<?= get_field("businesswomen")['alt'] ?>"
                            style="border-radius: 5px 0px 0px 5px; object-fit: cover;" />
                    </div>
                </div>





                <div class="whi-container mt-5 " data-aos="fade-up" data-aos-offset="100" data-aos-delay="50"
                    data-aos-duration="1000" data-aos-easing="ease-in-out">
                    <div class="d-flex align-items-center gap-3 py-3 justify-content-between flex-column flex-lg-row">
                        <span class="organ-title">
                            <?= get_field("organisatietext") ?>
                        </span>
                        <div class="circle-border  btn-primary-custom">
                            <a href="<?= get_field("vraagaanbtn")['url'] ?>" class="btn-custom">
                                <?= get_field("vraagaanbtn")['title'] ?>
                                <img src="<?= get_template_directory_uri() ?>/images/white-arrow.svg"
                                    alt="go kennismaken" class="go-arrow" />
                            </a>
                        </div>

                    </div>
                </div>

                <!--End of wshite-containe-->
            </div>
        </div>
        <!--first-blue-block  -->





    </div>
</main>



<?php get_footer() ?>