<?php get_header();
$fields = get_fields();
//Template Name: sing  ?>

<main class="project-en-programmamanagement">

    <div class="container">
        <!-- Hero Section -->
          <div>
            <?= get_template_part("components/hero") ?>
        </div>


        <!--Testimonials Section on All Screens -->
        <div class="testimonial-container">
            <div class="container  pb-5 " data-aos="fade-up" data-aos-offset="100" data-aos-delay="50"
                data-aos-duration="1000" data-aos-easing="ease-in-out">
                <div class="row gy-2">
                    <?php
                    $delay = 0;
                    foreach (get_field("testimonials") as $testimonial) { ?>
                    <div class="col-12 col-md-6 col-lg-4 mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="<?= $delay ?>"
                        data-aos-duration=" 800">

                        <div class="d-flex flex-column text-left gap-3">
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="d-flex justify-content-center align-items-center ">
                                    <img src="<?= get_template_directory_uri() ?>/images/check.svg"
                                        alt="go to article" />
                                </span>
                            </div>

                            <span class="normal">
                                <?= $testimonial["title"] ?>
                            </span>
                            <span class="regular testi-text  ">
                                <?= $testimonial["text"] ?>
                            </span>
                        </div>
                    </div>
                    <?php
                        $delay += 300;
                    } ?>
                </div>
            </div>
        </div>



        <div class="white-contianer position-relative">
            <div class="inside-container  ">
                <div class="row ">
                    <h2 class="col-12 col-lg-6 col-md-6  mb-3" data-aos="fade-right"
                        data-aos-offset="100" data-aos-delay="50" data-aos-duration="1000"
                        data-aos-easing="ease-in-out">
                        <?= get_field("lefttext") ?>
                    </h2>

                    <div class="col-12 col-lg-6 col-md-6  regular  " data-aos="fade-left" data-aos-offset="100"
                        data-aos-delay="50" data-aos-duration="1000" data-aos-easing="ease-in-out">
                        <div class="d-flex flex-column">
                            <span>
                                <?= get_field("righttextbold") ?>
                            </span>

                            <div class="button-group  d-flex flex-wrap  justify-content-start mt-5 gap-2">
                                    <a href="<?= get_field("contactlink")['url'] ?>" class="button btn-primary">
                                        <?= get_field("contactlink")['title'] ?>
                                        <img src="<?= get_template_directory_uri() ?>/images/white-arrow.svg"
                                            alt="go onze expertises" class="go-arrow" />
                                    </a>
                                    <a href="<?= get_field("veelvragenlink")['url'] ?>" class="button btn-yellow-line"
                                        style="color: #132030;">
                                        <?= get_field("veelvragenlink")['title'] ?>
                                        <img src="<?= get_template_directory_uri() ?>/images/nextarrow.svg"
                                            alt="go onze expertises" class="go-arrow" />
                                    </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    
       <!--werken-swiper block  -->
        <div >
            <?php get_template_part('components/werken-swiper' ,null); ?>
        </div>


    </div>


  
</main>



<?php get_footer() ?>