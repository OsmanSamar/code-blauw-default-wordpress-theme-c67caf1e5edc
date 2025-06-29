<?php get_header();
$fields = get_fields();

//Template Name: single-werken-voor
?>

<main class="single-werken-voor flex-grow-1">

    <div class="container">

        <!-- Hero Section -->
        <?= get_template_part('components/hero') ?>

        <div class="medium-container">
            <div class="row">
                <div class="col-12 col-lg-5  my-auto py-lg-4" data-aos="fade-right" data-aos-offset="100"
                    data-aos-delay="50" data-aos-duration="1000" data-aos-easing="ease-in-out">
                    <div class="d-flex flex-wrap flex-column">
                        <h3>
                            <?= get_field("lefttitle") ?>
                        </h3>
                        <span class="regular">
                            <span class="text-visible">
                                <?= get_field("lefttext") ?>
                            </span>
                            <span class="text-muted"><?= get_field("lightlefttext") ?>
                            </span>
                        </span>
                    </div>
                </div>
                <div class="col-12 col-lg-6 offset-lg-1 mt-4 mt-lg-0" data-aos="fade-left" data-aos-offset="100"
                    data-aos-delay="50" data-aos-duration="1000" data-aos-easing="ease-in-out">
                    <img loading="lazy" src="<?= get_field("mediumimg")['url'] ?>" alt="<?= get_field("")['alt'] ?>"
                        class="medium-img" />
                </div>
            </div>
        </div>


        <div class="white-contianer position-relative">
            <div class="inside-block">
                <div class="row">
                    <div class="col-12 col-lg-6 col-md-6 mb-3" data-aos="fade-right" data-aos-offset="100"
                        data-aos-delay="50" data-aos-duration="1000" data-aos-easing="ease-in-out">
                        <span class="text-muted regular">
                            <?= get_field("seclefttext") ?>
                        </span>
                    </div>
                    <div class="col-12 col-lg-6 col-md-6" data-aos="fade-right" data-aos-offset="100"
                        data-aos-delay="50" data-aos-duration="1000" data-aos-easing="ease-in-out">
                        <span class="text-muted regular">
                            <?= get_field("righttext") ?>
                        </span>
                    </div>
                </div>
            </div>
        </div>

        <div class="whi-container " data-aos="fade-up" data-aos-offset="100" data-aos-delay="50"
            data-aos-duration="1000" data-aos-easing="ease-in-out">
            <div
                class="d-flex align-items-center gap-3 py-3 justify-content-between flex-column flex-lg-row text-center">
                <h3 class="ml ">
                    <?= get_field("organisatietext") ?>
                </h3>


                <!-- Check if the btn empty -->
                <?php $vraagaanbtn = get_field("vraagaanbtn"); ?>
                <?php if (!empty($vraagaanbtn['url']) && !empty($vraagaanbtn['title'])): ?>
                    <a href="<?= esc_url($vraagaanbtn['url']) ?>" class="btn-wrap button btn-primary">
                        <?= esc_html($vraagaanbtn['title']) ?>
                        <img src="<?= get_template_directory_uri() ?>/images/whitenextarrow.svg" alt="go Contact page"
                            class="go-arrow" />
                    </a>
                <?php endif; ?>


            </div>
        </div>

    </div>


</main>
<?php get_footer() ?>