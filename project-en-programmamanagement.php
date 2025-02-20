<?php get_header()  //Template Name: project-en-programmamanagement  ?>

<main class="front-page">
    <style>
    .hero-section {
        background: url("<?= get_field('heroimage')['url'] ?> ");
        width: 100%;
        max-width: 1700px;
        margin: 0 auto;
    }

    .pro-hero-title {
        font-size: 25px;
        line-height: 76px;
        font-weight: 500;
        font-family: "Richmond Display", serif;
        text-align: center;
        letter-spacing: 0px;
        color: #feffff;

    }

    .pro-hero-text {
        text-align: center;
        font-size: 16px;
        line-height: 24px;
        font-weight: 300;
        font-family: "Libre Franklin", sans-serif;
        letter-spacing: 0px;
        color: #ffffff;
        opacity: 1;
        width: 505px;
        display: block;
        margin-bottom: 10px;
    }


    .img-container {
        background-color: blue;
        /* Your desired background color */
        border-radius: 50px;
        padding: 10px;
        /* Optional padding to add some space around the image */
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .arrow-image {
        width: 12px;
        height: 12px;
        object-fit: contain;
        /* Ensures the image maintains its aspect ratio */
    }

    .testi-container {
        width: 100%;
        max-width: 1700px;
        margin: 0 auto;
        background: #F7F6F4 0% 0% no-repeat padding-box;
        opacity: 1;

    }

    .testi-title {
        font-size: 18px;
        line-height: 30px;
        font-family: 300;
        letter-spacing: 0px;
        color: #000000;
        opacity: 1;
        font-family: 'Scala Sans Pro', sans-serif;
    }

    .testi-text {
        font-size: 16px;
        line-height: 30px;
        font-family: 300;
        font-family: 'Scala Sans Pro', sans-serif;
        letter-spacing: 0px;
        color: #132030;
        opacity: 1;
    }

    .white-contianer {

        width: 100%;
        max-width: 1700px;
        margin: 0 auto;
        background: #FFFFFF 0% 0% no-repeat padding-box;
        opacity: 1;
    }

    .left-text {
        text-align: left;
        font-size: 38px;
        line-height: 46px;
        font-weight: 300;
        font-family: "Richmond Display", serif;
        letter-spacing: 0px;
        color: #1E73BE;
        opacity: 1;
    }

    .right-text {
        font-family: 'Scala Sans Pro', sans-serif;
        font-size: 16px;
        line-height: 26px;
        font-weight: 300;
        text-align: left;
        letter-spacing: 0px;
        color: #132030;
        opacity: 1;
    }


    b,
    strong {
        color: #132030;
        font-family: inherit;
        font-size: inherit;
        font-style: inherit;
        line-height: inherit;
    }



    @media (min-width: 992px) {
        .pro-hero-title {
            font-size: 50px;
            text-align: left;
            line-height: 80px;
        }

        b,
        strong {
            font-size: inherit;
        }


    }
    </style>


    <div>
        <!-- Hero Section -->
        <div class="hero-section flex-column">
            <div class="hero-content">
                <div class="col-12  col-lg-12  pe-0 pe-lg-5">
                    <span class="pro-hero-title fadeIn  " data-side="right" style="transition-delay: .25s;">
                        <span class="d-block">
                            <?= get_field("herotitle") ?>
                        </span>
                    </span>
                </div>
            </div>
            <span class="pro-hero-text">
                <span class="d-block">
                    <?= get_field("herotext") ?>
                </span>
            </span>

            <div class=" "
                style="display: inline-flex; justify-content: center; align-items: center; border: 1px solid #f29401; border-radius: 5px; width: 176px; height: 51px;background-color: #f29401;">
                <a href="<?= get_field("meerwetenbtn")['url'] ?>" class="text-white">
                    <?= get_field("meerwetenbtn")['title'] ?>
                    <img src="<?= get_field("arrow")['url'] ?>" alt="<?= get_field("arrow")['alt'] ?>" />
                </a>
            </div>

        </div>



        <!--Testimonials Section on All Screens -->
        <div class="testi-container">
            <div class="container pt-5 pb-5 ">
                <div class="row gy-2">
                    <?php
                    foreach (get_field("testimonials") as $testimonial) { ?>
                    <div class="col-12 col-md-6 col-lg-4">

                        <div class="d-flex flex-column text-left gap-3">
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="d-flex justify-content-center align-items-center "
                                    style="background-color: blue;width: 30px; height: 30px; border-radius: 50px;">
                                    <!-- <img src="<?= get_template_directory_uri() ?>/images/whitenextarrow.svg"
                                    alt="go to article" class="icon" /> -->
                                    <img src="<?= get_field("arrow")['url'] ?>" alt=" <?= get_field("arrow")['url'] ?>"
                                        class="icon" style="width: 14px;height: 18px;" />
                                </span>
                            </div>

                            <span class="testi-title">
                                <?= $testimonial["title"] ?>
                            </span>
                            <span class="testi-text">
                                <?= $testimonial["text"] ?>
                            </span>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </div>



        <div class="white-contianer">
            <div class="container pt-5 pb-5">
                <div class="row">
                    <div class="col-12 col-lg-5 left-text">
                        <?= get_field("lefttext") ?>
                    </div>

                    <div class="col-12 col-lg-5  offset-md-1 right-text">
                        <div class="d-flex flex-column">
                            <?= get_field("righttext") ?>

                            <div class="d-flex flex-row gap-2 mt-3">
                                <div class=" "
                                    style="display: inline-flex; justify-content: center; align-items: center; border: 1px solid #f29401; border-radius: 5px; width: 176px; height: 51px;background-color: #f29401;">
                                    <a href="<?= get_field("contactlink")['url'] ?>" class="text-white">
                                        <?= get_field("contactlink")['title'] ?>
                                        <img src="<?= get_field("arrow")['url'] ?>"
                                            alt="<?= get_field("arrow")['alt'] ?>" style="width:14px; height: 18px;;" />
                                    </a>
                                </div>
                                <div class=" "
                                    style="display: inline-flex; justify-content: center; align-items: center; border: 1px solid #f29401; border-radius: 5px; width: 190px; height: 51px;background-color:#f29401 ; ">
                                    <a href="<?= get_field("veelvragenlink")['url'] ?>" class="color: #132030;">
                                        <?= get_field("veelvragenlink")['title'] ?>
                                        <img src="<?= get_template_directory_uri() ?>/images/nextarrow.svg"
                                            alt="go onze expertises" class="testimonial-arrow"
                                            style="  width: 12px; height: 10.26px; flex-shrink: 0;" />
                                    </a>
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