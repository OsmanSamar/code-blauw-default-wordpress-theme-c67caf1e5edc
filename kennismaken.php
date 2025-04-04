<?php get_header()  //Template Name: kennismaken  ?>

<main class="kennismaken">


    <style>
    .breadcrumb-wrap {
        position: absolute;
        /* top: -109px; */
        top: -41px;
    }

    /* Form Style */
    .gform_wrapper .gform_footer .gform_button {
        background: url("<?= get_field('white_arrow')['url'] ?> ");
    }
    </style>
    <div>


        <!-- Hero Section -->

        <!-- <div class="container ">
            <div class="hero-section  bg-holder">
                <div class="bg" style="background-image:url('<?= get_field('heroimage')['url'] ?> ')">
                </div>
                <div class="hero-content text-center w-100">
                    <?php get_template_part('components/breadcrumb') ?>
                    <div class="row  ">
                        <div class="col-12  col-lg-6 offset-lg-3 col-md-8 offset-md-2
                            
                             align-self-center d-flex flex-column justify-content-center align-items-center">
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
                        </div>
                    </div>
                </div>
            </div>
        </div> -->

        <div>
            <?= get_template_part("components/hero") ?>
        </div>
        <!-- End of Hero Section -->

        <div class="blue-block ">
            <div class="container ">
                <div class="row container-form">
                    <div class="col-12 col-lg-6" data-aos="fade-right" data-aos-offset="100" data-aos-delay="50"
                        data-aos-duration="1000" data-aos-easing="ease-in-out">
                        <div class="d-flex flex-column text-align-flex-start gap-3 contact-left-col" style="   ">
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