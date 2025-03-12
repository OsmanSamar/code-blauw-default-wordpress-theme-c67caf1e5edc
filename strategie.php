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
        font-family: "richmond-display", serif;
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
        font-family: "richmond-display", serif;
        letter-spacing: 0px;
        color: #1E73BE;
        opacity: 1;
    }


    .waaromkiezenvoorblauw {
        text-align: left;
        font-size: 36px;
        line-height: 50px;
        font-weight: 300;
        font-family: "richmond-display", serif;
        letter-spacing: 0px;
        color: #132030;
        opacity: 1;
        margin-bottom: 1.5rem;

    }

    .right-text-bold,
    .right-text-notbold {
        text-align: left;
        font-size: 17px;
        line-height: 32px;
        font-weight: 300;
        font-family: 'ff-scala-sans-pro', sans-serif;
        letter-spacing: 0px;
        color: #132030;
        opacity: 1;
    }



    .right-text-bold {
        font-weight: bolder;

    }

    .blue-block {
        width: 100%;
        margin: 0 auto;
        background-color: #CCE1F4;
        padding-top: 84px;
        padding-bottom: 65px;
    }

    .str-left-col {
        margin-top: unset;
        margin-bottom: 3rem;
    }

    @media (min-width: 768px) {

        .right-text,
        .right-text-bold {
            text-align: left;
        }
    }

    .hero-section {
        height: 500px;
    }

    .whi-container {

        margin-top: 5rem !important;
    }

    @media (min-width: 992px) {

        .strategie-hero-title {

            text-align: left;
            line-height: 80px;
        }


        .strategie-hero-text {
            font-size: 16px;
        }

        .right-text,
        .right-text-bold {
            text-align: left;
        }


        .whi-container {
            /* height: 131px; */
            /* margin-top: 5rem !important; */
        }

        .organ-title {
            font-size: 40px;
            line-height: 50px;
            text-align: left;
            padding-left: 27px;
            margin-bottom: -9px;
        }

        .hero-content {
            margin-top: 23px;
        }

        .str-left-col {
            margin-top: 5rem;
        }


    }
    </style>
    <div>
        <!-- Hero Section -->
        <div class="hero-section ">
            <div class="container">

                <!-- BreadCrumb Section -->
                <?php get_template_part('components/breadcrumb') ?>
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
        <!-- End of Hero Section -->



        <!-- Hoe werkt Blauw IJs? Block -->
        <div class="container mb-5">
            <div class="row" style="margin-top:5rem; margin-bottom: 5rem;">
                <div class="col-12 col-lg-6" data-aos="fade-right" data-aos-offset="100" data-aos-delay="50"
                    data-aos-duration="1000" data-aos-easing="ease-in-out">
                    <span class="werk-blauwijs-title"><?= get_field("voorwieisblauwijs") ?></span>

                </div>
                <div class="col-12 col-lg-6 " data-aos="fade-left" data-aos-offset="100" data-aos-delay="50"
                    data-aos-duration="1000" data-aos-easing="ease-in-out">
                    <div class="d-flex flex-column ">
                        <span class=" pt-2 ">
                            <span class="right-text-bold " style="font-weight: bolder;">
                                <?= get_field("righttext") ?>
                            </span>
                            <span class="right-text-notbold pt-2 "><?= get_field("secrighttext") ?></span>
                        </span>



                        <div class="button-group mt-5">
                            <div class="btn-custom-container">
                                <a href="<?= get_field("onzeklantcasesbtn")['url'] ?>" class="" style="color: #132030;">
                                    <?= get_field("onzeklantcasesbtn")['title'] ?>
                                </a>
                                <img src="<?= get_template_directory_uri() ?>/images/nextarrow.svg"
                                    alt="go onze execttises" class="testimonial-arrow"
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
                    <div class="col-12 col-lg-5 str-left-col " style="    " data-aos="fade-right" data-aos-offset="100"
                        data-aos-delay="50" data-aos-duration="1000" data-aos-easing="ease-in-out">
                        <div class="col-lg-8 d-flex ">
                            <span class="waaromkiezenvoorblauw"><?= get_field("waaromkiezenvoorblauw") ?></span>
                        </div>
                        <div class="d-flex flex-column  ">
                            <!-- <span class="waaromkiezenvoorblauw"><?= get_field("waaromkiezenvoorblauw") ?></span> -->
                            <span class="right-text-bold"><?= get_field("righttextbold") ?></span>
                            <span class="right-text-notbold"><?= get_field("righttextnotbold") ?></span>
                        </div>
                    </div>
                    <div class="col-lg-1"></div>
                    <!-- offset-lg-1 -->
                    <div class="col-12 col-lg-6 " data-aos="fade-left" data-aos-offset="100" data-aos-delay="50"
                        data-aos-duration="1000" data-aos-easing="ease-in-out">
                        <img src="<?= get_field("businesswomen")['url'] ?>"
                            alt="<?= get_field("businesswomen")['alt'] ?>"
                            style="border-radius: 5px 0px 0px 5px; object-fit: cover;" />
                    </div>
                </div>





                <div class="whi-container  " data-aos="fade-up" data-aos-offset="100" data-aos-delay="50"
                    data-aos-duration="1000" data-aos-easing="ease-in-out">
                    <div class="d-flex align-items-center gap-3 py-3 justify-content-between flex-column flex-lg-row">
                        <span class="organ-title">
                            <?= get_field("organisatietext") ?>
                        </span>
                        <div class="btn-primary-custom" style="margin-right: 27px;">
                            <a href="<?= get_field("vraagaanbtn")['url'] ?>" class="">
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