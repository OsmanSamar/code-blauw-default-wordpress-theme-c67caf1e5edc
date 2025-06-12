<?php get_header();
$fields = get_fields();
//Template Name: werkwijze  ?>

<main class="werkwijze">


    <div class="container">

        <!-- Hero Section -->
        <div>
            <?= get_template_part("components/hero") ?>
        </div>

        <!-- Hoe werkt Blauw IJs? Block -->
        <div class="text-block">
            <div class="row ">
                <div class="col-12 col-lg-6" data-aos="fade-right" data-aos-offset="100" data-aos-delay="50"
                    data-aos-duration="1000" data-aos-easing="ease-in-out">
                    <h2><?= get_field("hoewerktblauwijstitle") ?></h2>
                </div>
                <div class="col-12 col-lg-6" data-aos="fade-left" data-aos-offset="100" data-aos-delay="50"
                    data-aos-duration="1000" data-aos-easing="ease-in-out">
                    <div class="text-bold regular  pt-2"> <?= get_field("righttext") ?></div>
                    <div class="regular  pt-2 mt-3"> <?= get_field("secrighttext") ?></div>

                    <div class="d-flex flex-wrap mt-5 gap-2">
                        <a href="<?= get_field("wetenbtn")['url'] ?>" class="button btn-primary">
                            <?= get_field("wetenbtn")['title'] ?>
                            <img src="<?= get_template_directory_uri() ?>/images/white-arrow.svg" alt="go to article"
                                class="go-arrow" />
                        </a>

                        <a href="<?= get_field("veelgesteldevragenbtn")['url'] ?>" class="button btn-yellow-line">
                            <?= get_field("veelgesteldevragenbtn")['title'] ?>
                            <img src="<?= get_template_directory_uri() ?>/images/nextarrow.svg" alt="go onze expertises"
                                class="go-arrow" />
                        </a>
                    </div>
                </div>
            </div>
        </div>



        <!--Onze werkwijze Block  -->
        <div class="werkwijze-block">
            <div class="inner-wrap" data-aos="fade-up" data-aos-offset="100" data-aos-delay="50" data-aos-duration="1000"
                data-aos-easing="ease-in-out">
                <div class="row ">
                    <div
                        class="col-12 col-lg-4 offset-lg-4  d-flex flex-column align-items-flex-start align-items-md-center justify-content-center  mb-lg-5">
                        <h3>
                            <?= get_field("onzewerkwijzetitle") ?>
                        </h3>
                    </div>
                </div>
                <div class="row  ">
                    <?php
                    $delay = 0;
                    foreach (get_field("onzewerkwijzetestemonials") as $testimonails) {
                        ?>
                        <div class="col-12 col-md-4 col-lg-3  mb-5 d-flex  justify-content-center " data-aos="fade-up"
                            data-aos-delay="<?= $delay ?>" data-aos-duration=" 800">
                            <div>

                                <div class="d-flex flex-column ">
                                    <span class="sub-title">
                                        <?= $testimonails["stap"] ?>
                                    </span>
                                    <span class="sub-title">
                                        <?= $testimonails["staptitle"] ?>
                                    </span>
                                </div>
                                <div class="regular ">
                                    <?= $testimonails["text"] ?>
                                </div>
                            </div>
                        </div>
                        <?php
                        $delay += 300;
                    }
                    ?>
                </div>
            </div>
        </div>




        <div class="container-img partner-slider   w-100  position-relative ">
            <div class="bg" style="background-image:url('<?= get_template_directory_uri() ?>/images/mask-group.png') ">
            </div>
          


                <div class="d-flex align-items-center justify-content-between text-wrap ">
                        <h2 class="text-white" data-aos="fade-right" data-aos-offset="100" data-aos-delay="50"
                            data-aos-duration="1000" data-aos-easing="ease-in-out" >
                           <?= get_field("titleoflogos") ?>
                        </h2>
                        <div class="d-flex  align-items-center gap-4 swiper-button-wrap">
                            <div class="swiper-button-prev "></div>
                            <div class="swiper-button-next"></div>
                        </div>
                    </div>

            <div class="position-relative  ">
                <div class="row">
                    <div class="col-12 col-lg-12">
                        <div class="logoswiper partner-swiper  ">
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
                                                        class="logo-img"
                                                         />
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






        <!--werken-swiper block  -->
        <div>
            <?php get_template_part('components/werken-swiper', null, ['ctabar' => true]); ?>
        </div>

    </div>

   



  

</main>

<?php get_footer() ?>