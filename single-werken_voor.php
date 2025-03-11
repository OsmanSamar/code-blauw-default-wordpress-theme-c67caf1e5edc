<?php get_header();
$fields = get_fields();

//Template Name: single-werken-voor
?>

<main class="single-werken-voor flex-grow-1">
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

    .hero-section {
        height: 500px;
    }


    .datum-title,
    .less-title {
        font-size: 16px;
        font-weight: bold;
        color: #F29401;
        opacity: 1;
        letter-spacing: 0px;
        line-height: 24px;
        font-family: "Libre Franklin", sans-serif;

    }

    .datum,
    .less {
        font-size: 16px;
        font-weight: bold;
        color: #FFFFFF;
        opacity: 1;
        letter-spacing: 0px;
        line-height: 24px;
        font-family: "Libre Franklin", sans-serif;
        margin-top: 10px;
    }

    .datum-container {
        display: flex;
        flex-direction: column;
        /* align-items: flex-start; */
        margin-top: 120px;
    }

    .less-container {
        display: flex;
        flex-direction: column;
        align-items: flex-end;
        margin-top: 120px;
        align-items: flex-start;

    }


        {
        font-size: 16px;
        font-weight: bold;
        color: #FFFFFF;
        opacity: 1;
        letter-spacing: 0px;
        line-height: 24px;
        font-family: "Libre Franklin", sans-serif;
        margin-top: 10px;
    }
    </style>

    <div>

        <!-- Hero Section -->
        <div class="hero-section ">
            <!-- <div class="container">
                <?php get_template_part('components/breadcrumb') ?>
                <div class="hero-content flex-column">
                    <div class="col-12  col-lg-12  pe-0 pe-lg-5">
                        <span class="posttitle">
                            <span class="d-block">
                                <?= get_field("posttitle") ?>
                            </span>


                        </span>
                        <div class="d-flex flex-row justify-content-center gap-4">

                            <div class="datum-container ">
                                <span class="datum-title">
                                    Datum </span>
                                <span class="datum">
                                    <?= get_field("datum") ?>
                                </span>
                            </div>

                            <div class="less-container ">
                                <span class="less-title">
                                    Leestijd
                                </span>
                                <span class="less">
                                    <?= get_field("datum") ?>
                                    5 minuten
                                </span>
                            </div>

                        </div>


                    </div>
                </div>
            </div> -->

            <!-- <?php get_template_part('components/breadcrumb') ?> -->
            <div>

                <div class="hero-content flex-column">
                    <div class="col-12  col-lg-12  pe-0 pe-lg-5">
                        <span class="posttitle">
                            <span class="d-block">
                                <?= get_field("posttitle") ?>
                            </span>

                            <div class="d-flex flex-row justify-content-between">
                                <div class="datum-container ">
                                    <span class="datum-title">
                                        Datum
                                    </span>
                                    <span class="datum">
                                        <?= get_field("datum") ?>
                                    </span>
                                </div>
                                <div class="less-container ">
                                    <span class="less-title">
                                        Leestijd
                                    </span>
                                    <span class="less">
                                        <!-- <?= get_field("datum") ?> -->
                                        5 minuten
                                    </span>
                                </div>
                            </div>

                        </span>
                    </div>
                </div>
            </div>

        </div>
        <!-- End of Hero Section -->


        <!--New Section -->
        <div class="medium-container">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-5   mb-3 " data-aos="fade-right" data-aos-offset="100" data-aos-delay="50"
                        data-aos-duration="1000" data-aos-easing="ease-in-out">
                        <div class="d-flex flex-wrap flex-column  text-left">
                            <span class="post-werk-title">
                                <?= get_field("lefttitle") ?>
                            </span>
                            <span class="post-werk-left">
                                <span style=" font-weight: bolder;">
                                    <?= get_field("lefttext") ?>
                                </span>
                                <?= get_field("lightlefttext") ?>
                            </span>
                        </div>
                    </div>
                    <div class="col-lg-1 "></div>
                    <div class="col-12 col-lg-6 " data-aos="fade-left" data-aos-offset="100" data-aos-delay="50"
                        data-aos-duration="1000" data-aos-easing="ease-in-out">
                        <img src="<?= get_field("mediumimg")['url'] ?>" alt="<?= get_field("")['alt'] ?>"
                            class="medium-img" />
                    </div>
                </div>
            </div>
        </div>
        <!--End of new Section -->



        <div class="white-container-text">
            <div class="container">
                <div class="row" style="    margin-top: 25px;">
                    <div class="col-12 col-lg-6 col-md-6 mb-3">
                        <p class="whitecontainertext-right">
                            <?= get_field("seclefttext") ?>
                        </p>
                    </div>
                    <div class="col-12 col-lg-6 col-md-6">
                        <p class="whitecontainertext-left">
                            <?= get_field("righttext") ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>




        <!--White-containe-->

        <div class="container">
            <div class="whi-container mt-5 mb-5 " data-aos="fade-up" data-aos-offset="100" data-aos-delay="50"
                data-aos-duration="1000" data-aos-easing="ease-in-out">
                <div class="d-flex align-items-center gap-3 py-3 justify-content-between flex-column flex-lg-row">
                    <span class="organ-title">
                        <!-- Ook de volgende stap zetten met jouw organisatie? -->
                        <?= get_field("organisatietext") ?>

                    </span>


                    <div class="circle-border btn-primary-custom ">
                        <!-- width:195px -->
                        <a href="<?= get_field("vraagaanbtn")['url'] ?>" class="btn-custom">
                            <?= get_field("vraagaanbtn")['title'] ?>
                            <img src="<?= get_template_directory_uri() ?>/images/whitenextarrow.svg"
                                alt="go Contact page" class="go-arrow" />
                        </a>

                    </div>
                </div>
            </div>
        </div>

        <!--End of wshite-containe-->

    </div>


</main>
<?php get_footer() ?>