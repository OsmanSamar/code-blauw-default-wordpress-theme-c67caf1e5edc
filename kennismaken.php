<?php get_header()  //Template Name: kennismaken  ?>

<main class="kennismaken">


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

    .kennis-hero-title {
        font-size: 54px;
        line-height: 76px;
        font-weight: 500;
        font-family: "Richmond Display", serif;
        text-align: center;
        letter-spacing: 0px;
        color: #feffff;
    }

    .kennis-hero-text {
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



    .blue-block {
        width: 100%;
        max-width: 1700px;
        margin: 0 auto;
        background-color: #CCE1F4;
        padding-top: 50px;
        padding-bottom: 50px;
    }

    .waar-kunnen-helpen-title {
        text-align: left;
        font-size: 36px;
        line-height: 50px;
        font-weight: 300;
        font-family: "Richmond Display", serif;
        letter-spacing: 0px;
        color: #132030;
        opacity: 1;
        margin-top: 50px;
    }

    .waar-kunnen-helpen-text {

        text-align: left;
        font-size: 16px;
        line-height: 30px;
        font-weight: 300;
        font-family: 'Scala Sans Pro', sans-serif;
        letter-spacing: 0px;
        color: #132030;
        opacity: 1;
        letter-spacing: 0px;
        text-wrap: balance;
        /* word-break: break-word;
        white-space: normal; */

    }

    .contact-title {
        text-align: left;
        font-size: 16px;
        line-height: 30px;
        font-weight: bold;
        font-family: 'Scala Sans Pro', sans-serif;
        letter-spacing: 0px;
        color: #132030;
        opacity: 1;
    }

    .contact-info {
        text-align: left;
        font-size: 16px;
        line-height: 30px;
        font-weight: 300;
        font-family: 'Scala Sans Pro', sans-serif;
        letter-spacing: 0px;
        color: #132030;
        opacity: 1;
    }

    /* Form Style */

    .contact-form {
        width: 100%;
        max-width: 490px;
        background: #ffffff 0% 0% no-repeat padding-box;
        border-radius: 5px;
        opacity: 1;
        padding: 40px;
    }

    .form-1 .gform_wrapper .gform_body .gform_fields .gfield {
        width: 100%;
    }

    /* Input field */
    .gform-theme--foundation .gfield input,
    .gform-theme--foundation .gfield textarea,
    .gform-theme--foundation .gfield select {
        inline-size: 100% !important;
        box-sizing: border-box !important;
        border-radius: 5px !important;
        margin-bottom: 5px !important;
        border: 1px solid #cce1f4 !important;
    }

    .gform_wrapper .gform_footer .gform_button {
        width: 116px !important;
        padding: 12px 21px !important;
        align-items: center;
        border-radius: 5px !important;
        background-color: #f29401 !important;
        color: #fff !important;
        border: none !important;
        display: inline-flex !important;
        align-items: center !important;
        background: url("<?= get_field('white_arrow')['url'] ?> ");
        background-size: 9px 8px !important;
        background-position: right 5px center !important;
        background-repeat: no-repeat !important;
    }

    .gform-theme--framework,
    .gform-field-label,
    .gform-label,
    .gfield_label,
    .name-label {
        color: #132030 !important;
        letter-spacing: 0px !important;
        font-size: 16px !important;
        font-weight: bold !important;
        line-height: 30px !important;
    }

    /* Form Style */


    @media (min-width: 992px) {

        .kennis-hero-title {
            font-size: 50px;
            text-align: left;
            line-height: 80px;
        }


        .kennis-hero-text {
            font-size: 16px;
            width: 505px;
            display: block;
        }
    }
    </style>
    <div>


        <!-- Hero Section -->
        <div class="hero-section flex-column">
            <div class="hero-content text-center">
                <div class="col-12  col-lg-12  pe-0 pe-lg-5">
                    <h1 class="kennis-hero-title text-center  " data-aos="fade-up" data-aos-offset="100"
                        data-aos-delay="50" data-aos-duration="1000" data-aos-easing="ease-in-out">
                        <span class="d-block">
                            <?= get_field("herotitle") ?>
                        </span>
                    </h1>
                </div>
                <span class="kennis-hero-text ">
                    <span class="d-block">
                        <?= get_field("herotext") ?>
                    </span>
                </span>



            </div>

        </div>
        <!-- End of Hero Section -->

        <div class="blue-block ">
            <div class="container ">
                <div class="row">
                    <div class="col-12 col-lg-6" data-aos="fade-right" data-aos-offset="100" data-aos-delay="50"
                        data-aos-duration="1000" data-aos-easing="ease-in-out">
                        <div class="d-flex flex-column text-align-flex-start gap-3">
                            <span class="waar-kunnen-helpen-title">
                                <?= get_field("waarkunnenwemeehelpen") ?>
                            </span>
                            <span class="waar-kunnen-helpen-text">
                                <?= get_field("text") ?>
                            </span>
                            <div class="d-flex flex-column text-align-flex-start gap-2 ">
                                <span class="contact-title">
                                    <?= get_field("contactmetblauw_ijs") ?>
                                </span>
                                <div class="d-flex flex-column mb-5 ">
                                    <a href="tel:<?= get_field("contact_number", 'options') ?>" style=" "
                                        class="d-flex flex-row align-items-center gap-2 contact-info ">
                                        <img src="<?= get_template_directory_uri() ?>/images/tele-icon.svg"
                                            alt="go onze expertises" class="testimonial-arrow"
                                            style="  width: 15px; height:15px; flex-shrink: 0; object-fit: cover;" />
                                        <?= get_field("contact_number", 'options') ?>
                                    </a>
                                    <a href="mailto:<?= get_field("contact_mail", 'options') ?>"
                                        class="d-flex flex-row align-items-center gap-2 contact-info ">
                                        <img src="<?= get_template_directory_uri() ?>/images/mai-icon.svg" alt="go mail"
                                            style="  width: 15px; height:15px; flex-shrink: 0; object-fit: cover;" />
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