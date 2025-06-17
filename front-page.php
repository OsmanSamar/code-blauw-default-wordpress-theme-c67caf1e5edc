<?php get_header();
$fields = get_fields();
//Template Name: frontpage  ?>

<main class="front-page">

  

    <div class="container">

        <!-- Hero Section -->
        <div class="hero-section bg-holder">
            <div class="bg-content"
                style="background: url('<?= get_the_post_thumbnail_url() ?>') lightgray 50% / cover no-repeat;">
            </div>
            <div class="hero-content ">
                <div class="row">
                    <div class="col-12 col-lg-8  offset-lg-1 pe-0 text-start ">
                        <h1 class="mb-3" data-aos="fade-up" data-aos-offset="100" data-aos-delay="50"
                            data-aos-duration="1000" data-aos-easing="ease-in-out">
                            <?= get_field("herotitlegekleuredtext") ?>
                        </h1>
                        <span class="lead" data-aos="fade-up" data-aos-offset="100" data-aos-delay="50"
                            data-aos-duration="1000" data-aos-easing="ease-in-out">
                            <?= get_field("herotext") ?>
                        </span>

                        <div class="button-group d-flex justify-content-start flex-wrap gap-2">
                            <a href="<?= get_field("meerwetenbtn")['url'] ?>" class="button btn-primary">
                                <?= get_field("meerwetenbtn")['title'] ?>
                                <img src="<?= get_template_directory_uri() ?>/images/white-arrow.svg"
                                    alt="go contact page" class="go-arrow" />
                            </a>
                            <a href="<?= get_field("overonsbtn")['url'] ?>" class="button btn-custom">
                                <?= get_field("overonsbtn")['title'] ?>
                                <img src="<?= get_template_directory_uri() ?>/images/white-arrow.svg"
                                    alt="go over ons page" class="go-arrow" />
                            </a>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <?php
        $content = get_field('content');

        if (!empty($content) && is_array($content)) {
            foreach ($content as $block) {
                get_template_part('components/' . $block['acf_fc_layout'], null, ['fields' => $block]);
            }
        }
        ?>

        <!-- Onze_Expertises -->
        <div class="" data-type="onze_expertises">
            <?php
            $i = 0;
            foreach ($posts as $post) {
                // Fetch the "General" tab fields directly
                get_template_part('components/onze-expertises', null, ['post' => $post, 'index' => $i]);
                $i++;
            }
            wp_reset_postdata();
            ?>
        </div>

        <!--werken-swiper block  -->
        <div class="" data-type="onze_expertises">
            <?php
            $i = 0;
            foreach ($posts as $post) {
                // Fetch the "General" tab fields directly
                get_template_part('components/werken-swiper', null, ['post' => $post, 'index' => $i]);
                $i++;
            }
            wp_reset_postdata();
            ?>
        </div>





        <div class="img-container position-relative bg-holder">
            <div class="bg" style="background-image:url('<?= get_template_directory_uri() ?>/images/mask-group.png') ">
            </div>

            <div class="text-img-container row g-0  position-relative">
                <div class="col-12 col-md-6 col-lg-6">
                    <img src="<?= get_template_directory_uri() ?>/images/senior-leadership.png" alt="manager-leading"
                        class="w-100 right-img">
                </div>
                <div class="left-container col-12 col-md-6 col-lg-6 d-flex align-items-center ">
                    <div class="row">
                        <div class="col-lg-10 offset-lg-1">
                            <h3><?= get_field("onsverhaaltitle") ?></h3>
                            <span class="regular"><?= get_field("verhaaltext") ?> </span>
                            <div class="d-flex flex-wrap mt-4 gap-2">
                                <a href="<?= get_field("overonsbtn")['url'] ?>" class="button btn-yellow-line">
                                    <?= get_field("overonsbtn")['title'] ?>
                                    <img src="<?= get_template_directory_uri() ?>/images/nextarrow.svg"
                                        alt="go onze expertises" class="go-arrow" />
                                </a>
                                <a href="<?= get_field("werkwijzebtn")['url'] ?>" class="button btn-yellow-line">
                                    <?= get_field("werkwijzebtn")['title'] ?>
                                    <img src="<?= get_template_directory_uri() ?>/images/nextarrow.svg"
                                        alt="go onze expertises" class="go-arrow" />
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="w-100 partner-slider  position-relative">
                <div class="d-flex align-items-center justify-content-between pb">
                    <h3 class="text-white" data-aos="fade-right" data-aos-offset="100" data-aos-delay="50"
                        data-aos-duration="1000" data-aos-easing="ease-in-out">
                        <?= get_field("titleoflogos") ?>
                    </h3>
                    <div class="d-flex  align-items-center gap-4 swiper-button-wrap">
                        <div class="swiper-button-prev "></div>
                        <div class="swiper-button-next"></div>
                    </div>
                </div>
                <div class=" position-relative">
                    <div class="row">
                        <div class="col-12 col-lg-12">

                            <div class="logoswiper partner-swiper">
                                <div class="swiper-wrapper">
                                    <?php
                                    $testemonials = get_field("partnerslogotestemonials");
                                    if ($testemonials) {
                                        foreach ($testemonials as $testemonial) { ?>
                                            <div class="swiper-slide">
                                                <div class="logo-container">
                                                    <a href="<?= esc_url($testemonial['partnerslogolink']['url']) ?>"
                                                        target="_blank">
                                                        <img src="<?= esc_url($testemonial['partnerslogoimg']['url']) ?>"
                                                            alt="<?= esc_attr($testemonial['partnerslogoimg']['alt']) ?>"
                                                            class="logo-img" />
                                                    </a>
                                                </div>
                                            </div>
                                        <?php }
                                    } ?>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>

    </div>


</main>

<?php get_footer() ?>