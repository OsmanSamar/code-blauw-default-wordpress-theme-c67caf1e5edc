<?php get_header();
$fields = get_fields();
//Template Name: overons  ?>

<main class="overons">

    <div class="container">

        <!-- Hero Section -->
        <div>
            <?= get_template_part("components/hero") ?>
        </div>

        <!-- Onze Visie block -->
        <div class="row mt-lg-5">
            <div class="d-flex mt-5 mb-2" data-aos="fade-right" data-aos-offset="100" data-aos-delay="50"
                data-aos-duration="1000" data-aos-easing="ease-in-out">
                <h3><?= get_field("title") ?></h3>
            </div>

            <div class="col-12 col-lg-6" data-aos="fade-right" data-aos-offset="100" data-aos-delay="50"
                data-aos-duration="1000" data-aos-easing="ease-in-out">
                <span class="text-muted regular "> <?= get_field("lefttext") ?></span>
            </div>
            <div class="col-12 col-lg-6" data-aos="fade-left" data-aos-offset="100" data-aos-delay="50"
                data-aos-duration="1000" data-aos-easing="ease-in-out">
                <span class="text-muted regular  pt-2"> <?= get_field("righttext") ?></span>
            </div>
        </div>

        <div class="text-wraper">
            <div class="mb-5 col-12  col-lg-8 offset-lg-2  d-flex flex-column align-items-center justify-content-center "
                data-aos="fade-up" data-aos-offset="100" data-aos-delay="50" data-aos-duration="1000"
                data-aos-easing="ease-in-out" style="margin:0 auto">
                <h2 class="mb-5 text-center">
                    <?= get_field("blauwtext") ?>
                </h2>

                <div class=" d-flex flex-wrap gap-2">
                    <a href="<?= get_field("strategiebtn")['url'] ?>" class="button btn-yellow-line">
                        <?= get_field("strategiebtn")['title'] ?>
                        <img src="<?= get_template_directory_uri() ?>/images/nextarrow.svg" alt="go onze expertises"
                            class="go-arrow" />
                    </a>

                    <a href="<?= get_field("onzewerkwijzebtn")['url'] ?>" class="button btn-yellow-line">
                        <?= get_field("onzewerkwijzebtn")['title'] ?>
                        <img src="<?= get_template_directory_uri() ?>/images/nextarrow.svg" alt="go onze expertises"
                            class="go-arrow" />
                    </a>
                </div>
            </div>
        </div>


        <!--white-container -->
        <div class="white-container">
            <div class="inside-wraper">
                <div class="row">
                    <div class="col-12 col-lg-6 my-auto py-4" data-aos="fade-right" data-aos-offset="100"
                        data-aos-delay="50" data-aos-duration="1000" data-aos-easing="ease-in-out">
                        <div class="d-flex flex-column  text-left gap-4 mb-4 mb-lg-0">
                            <span class="text-visible regular ">
                                <?= get_field("bold_text") ?>
                            </span>
                            <span class="text-muted regular">
                                <?= get_field("light_text") ?>
                            </span>
                            <div class="d-flex flex-wrap gap-2 mt-3">
                                <a href="<?= get_field("contactbtn")['url'] ?>" class="button btn-primary">
                                    <?= get_field("contactbtn")['title'] ?>
                                    <img src="<?= get_template_directory_uri() ?>/images/white-arrow.svg"
                                        alt="go onze contact" class="go-arrow" />
                                </a>
                                <!-- <a href="<?= get_field("vragenstellenbtn")['url'] ?>"
                                    class="button btn-yellow-line">
                                    <?= get_field("vragenstellenbtn")['title'] ?>
                                    <img src="<?= get_template_directory_uri() ?>/images/nextarrow.svg"
                                        alt="go onze contact" class="go-arrow" />
                                </a> -->

                            </div>

                        </div>
                    </div>

                    <div class="col-12 col-lg-5 offset-lg-1" data-aos="fade-left" data-aos-offset="100"
                        data-aos-delay="50" data-aos-duration="1000" data-aos-easing="ease-in-out">
                        <img src="<?= get_field("mediumimg")['url'] ?>" alt="<?= get_field("mediumimg")['alt'] ?>"
                            class="left-img" />
                    </div>
                </div>
            </div>
        </div>

        <!--werken-swiper block  -->
        <div>
            <?php get_template_part('components/werken-swiper', null, ['ctabar' => true]); ?>
        </div>

    </div>

</main>

<?php get_footer() ?>