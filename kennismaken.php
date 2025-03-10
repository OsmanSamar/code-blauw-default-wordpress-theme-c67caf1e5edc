<?php get_header()  //Template Name: kennismaken  ?>

<main class="kennismaken">


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

    /* .hero-section {
        height: 500px;
    } */

    .blue-block {
        width: 100%;
        /* max-width: 1700px; */
        margin: 0 auto;
        background-color: #CCE1F4;
        padding-top: 50px;
        padding-bottom: 50px;
    }



    /* Form Style */
    .gform_wrapper .gform_footer .gform_button {
        background: url("<?= get_field('white_arrow')['url'] ?> ");
    }

    .content-container {
        font: italic normal 300 14px/20px "ff-scala-sans-pro" !important;
        letter-spacing: 0px;
        color: #132030;
        opacity: 1;
    }

    /* .gform-theme--foundation .gfield {
        font: italic normal 300 14px/20px ff-scala-sans-pro;
        letter-spacing: 0px;
        color: #132030;
        opacity: 1;
    } */

    /* Form Style */
    </style>
    <div>


        <!-- Hero Section -->
        <div class="hero-section ">
            <div class="container">

                <!-- BreadCrumb Section -->
                <?php get_template_part('components/breadcrumb') ?>
                <div class="hero-content text-center mt-5">
                    <div
                        class="col-12  col-lg-6 offset-lg-3 col-md-8 offset-md-2 align-self-center d-flex flex-column justify-content-center align-items-center">
                        <h1 class="kennis-hero-title text-center  " data-aos="fade-up" data-aos-offset="100"
                            data-aos-delay="50" data-aos-duration="1000" data-aos-easing="ease-in-out">
                            <span class="d-block">
                                <?= get_field("herotitle") ?>
                            </span>
                        </h1>

                        <div class="kennis-hero-text ">
                            <span class="d-block">
                                <?= get_field("herotext") ?>
                            </span>
                        </div>
                    </div>

                </div>
            </div>

        </div>
        <!-- End of Hero Section -->

        <div class="blue-block ">
            <div class="container ">
                <div class="row container-form">
                    <div class="col-12 col-lg-6" data-aos="fade-right" data-aos-offset="100" data-aos-delay="50"
                        data-aos-duration="1000" data-aos-easing="ease-in-out">
                        <div class="d-flex flex-column text-align-flex-start gap-3">
                            <span class="waar-kunnen-helpen-title">
                                <?= get_field("waarkunnenwemeehelpen") ?>
                            </span>
                            <span class="waar-kunnen-helpen-text">
                                <?= get_field("text") ?>
                            </span>
                            <div class="d-flex flex-column text-align-flex-start gap-2 mt-3 ">
                                <span class="contact-title">
                                    <?= get_field("contactmetblauw_ijs") ?>
                                </span>
                                <div class="d-flex flex-column mb-5 ">
                                    <a href="tel:<?= get_field("contact_number", 'options') ?>"
                                        class="d-flex flex-row align-items-center gap-2 contact-info ">
                                        <img src="<?= get_template_directory_uri() ?>/images/tele-icon.svg"
                                            alt="go onze expertises" class="testimonial-arrow"
                                            style="  width: 15px; height:15px;  object-fit: cover;" />
                                        <?= get_field("contact_number", 'options') ?>
                                    </a>
                                    <a href="mailto:<?= get_field("contact_mail", 'options') ?>"
                                        class="d-flex flex-row align-items-center gap-2 contact-info ">
                                        <img src="<?= get_template_directory_uri() ?>/images/mai-icon.svg" alt="go mail"
                                            style="  width: 15px; height:15px;  object-fit: cover;" />
                                        <?= get_field("contact_mail", 'options') ?>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-lg-6" data-aos="fade-left" data-aos-offset="100" data-aos-delay="50"
                        data-aos-duration="1000" data-aos-easing="ease-in-out">
                        <div class="d-flex flex-column contact-form form-1">
                            <?= str_replace(['__START__', '__END__'], ['<div class="form-col">', '</div>'], do_shortcode('[gravityform id="1" title="false" description="false"   cssClass="form-1"]')) ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>



<?php get_footer() ?>