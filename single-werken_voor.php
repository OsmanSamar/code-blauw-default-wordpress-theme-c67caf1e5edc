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
    </style>

    <div>

        <!-- Hero Section -->
        <div class="hero-section flex-column">
            <div class="hero-content">
                <div class="col-12  col-lg-12  pe-0 pe-lg-5">
                    <span class="posttitle">
                        <span class="d-block">
                            <?= get_field("posttitle") ?>
                        </span>
                    </span>
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
                        <div class="d-flex flex-column  text-left gap-4">
                            <span class="post-werk-title">
                                <?= get_field("lefttitle") ?>
                            </span>
                            <span class="post-werk-left">
                                <?= get_field("lefttext") ?>
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
                <div class="row">
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


                    <div class="circle-border gap-1  btn-primary-custom ">
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