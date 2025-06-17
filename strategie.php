<?php get_header();
$fields = get_fields();
//Template Name: strategie  ?>

<main class="strategie">
  
    <div class="container">
        <!-- Hero Section -->
        <div>
            <?= get_template_part("components/hero") ?>
        </div>


        <!-- Werkt Block -->
        <div class="werk-container ">
            <div class=" row" >
                <div class="col-12 col-lg-6" data-aos="fade-right" data-aos-offset="100" data-aos-delay="50"
                    data-aos-duration="1000" data-aos-easing="ease-in-out">
                    <h2 ><?= get_field("voorwieisblauwijs") ?></h2>
                </div>
                <div class="col-12 col-lg-6 " data-aos="fade-left" data-aos-offset="100" data-aos-delay="50"
                    data-aos-duration="1000" data-aos-easing="ease-in-out">
                    <div class="d-flex flex-column ">
                        <span class="pt-2 regular ">
                            <span class="font-bold " style="font-weight: bolder;">
                                <?= get_field("righttext") ?>
                            </span>
                            <span class="pt-2 font-thin"><?= get_field("secrighttext") ?></span>
                        </span>
                            <a href="<?= get_field("onzeklantcasesbtn")['url'] ?>" class="button btn-yellow-line mt-5">
                                <?= get_field("onzeklantcasesbtn")['title'] ?>
                                <img src="<?= get_template_directory_uri() ?>/images/nextarrow.svg"
                                    alt="go onze execttises" class="go-arrow" />
                            </a>
                    </div>
                </div>
            </div>
        </div>
     



        <!--first-blue-block  -->
        <div class="blue-block  position-relative">
            <div class="inside-block ">

                <div class="row">
                    <div class="col-12 col-lg-5   my-auto py-4" data-aos="fade-right" data-aos-offset="100"
                        data-aos-delay="50" data-aos-duration="1000" data-aos-easing="ease-in-out">
                        <div class="col-lg-8 d-flex ">
                            <span class="h2"><?= get_field("waaromkiezenvoorblauw") ?></span>
                        </div>
                        <div class="d-flex flex-column regular ">
                            <span class=" font-bold" ><?= get_field("righttextbold") ?></span>
                            <span class=" font-thin"><?= get_field("righttextnotbold") ?></span>
                        </div>
                    </div>
                   
                    <div class="col-12 col-lg-6 offset-lg-1 " data-aos="fade-left" data-aos-offset="100" data-aos-delay="50"
                        data-aos-duration="1000" data-aos-easing="ease-in-out">
                        <img src="<?= get_field("businesswomen")['url'] ?>"
                            alt="<?= get_field("businesswomen")['alt'] ?>"
                            class="img-block"
                            />
                    </div>
                </div>

                <div class="white-container" data-aos="fade-up" data-aos-offset="100" data-aos-delay="50"
                    data-aos-duration="1000" data-aos-easing="ease-in-out">
                    <div class="d-flex align-items-center gap-3  justify-content-between flex-column flex-lg-row">
                        <h3 class="text-center text-lg-start">
                            <?= get_field("organisatietext") ?>
                        </h3>
                        <div class="d-inline-flex  mt-3 mt-lg-0">
                            <a href="<?= get_field("vraagaanbtn")['url'] ?>" class="button btn-primary">
                                <?= get_field("vraagaanbtn")['title'] ?>
                                <img src="<?= get_template_directory_uri() ?>/images/white-arrow.svg"
                                    alt="go kennismaken" class="go-arrow" />
                            </a>
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </div>
</main>



<?php get_footer() ?>