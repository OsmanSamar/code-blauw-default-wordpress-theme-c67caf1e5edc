<?php get_header()  //Template Name: kennismaken  ?>

<main class="kennismaken">
    <div class="container">
        <div>
            <?= get_template_part("components/hero") ?>
        </div>

        <div class="blue-block position-relative">
            <div class="inside-wrap ">
                <div class="row container-form">
                    <div class="col-12 col-lg-6" data-aos="fade-right" data-aos-offset="100" data-aos-delay="50"
                        data-aos-duration="1000" data-aos-easing="ease-in-out">
                        <div class=" d-flex flex-column text-align-flex-start gap-3 left-container" >
                            <h3 >
                                <?= get_field("waarkunnenwemeehelpen") ?>
                            </h3>
                            <span class="col-lg-11 regular text-muted ">
                                <?= get_field("text") ?>
                            </span>
                            <div class="d-flex flex-column text-align-flex-start gap-2 mt-3 ">
                                <span class="text-bold regular  ">
                                    <?= get_field("contactmetblauw_ijs") ?>
                                </span>
                                <div class="d-flex flex-column mb-5 ">
                                    <a href="tel:<?= get_field("contact_number", 'options') ?>"
                                        class="d-flex flex-row align-items-center gap-2 contact-info ">
                                        <img src="<?= get_template_directory_uri() ?>/images/tele-icon.svg"
                                            alt="go onze expertises" class="icon"
                                             />
                                        <?= get_field("contact_number", 'options') ?>
                                    </a>
                                    <a href="mailto:<?= get_field("contact_mail", 'options') ?>"
                                        class="d-flex flex-row align-items-center gap-2 contact-info ">
                                        <img src="<?= get_template_directory_uri() ?>/images/mai-icon.svg" alt="go mail"
                                         class="icon" />
                                        <?= get_field("contact_mail", 'options') ?>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-lg-6 " data-aos="fade-left" data-aos-offset="100" data-aos-delay="50"
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