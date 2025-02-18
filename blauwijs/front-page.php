<?php get_header()  //Template Name: frontpage  ?>

<main class="front-page">

    <style>
    b,
    strong:first-of-type {
        color: #F29401;
        font-family: inherit;
        font-size: inherit;
        font-style: inherit;
        line-height: inherit;
    }

    b,
    strong:nth-of-type(2) {
        color: #1E73BE;
    }




    .hero-section {
        position: relative;
        background: url("<?= get_field('heroimage')['url'] ?>");
        width: 100vw;
        height: 676px;
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        object-fit: cover;
        overflow: hidden;
        display: flex;
        align-items: center;
        justify-content: center;
        text-align: center;
        color: white;

    }

    .hero-section::before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        /* Dark overlay */
        background: transparent linear-gradient(90deg, var(--unnamed-color-132030) 0%, #13203000 100%) 0% 0% no-repeat padding-box;
        background: transparent linear-gradient(90deg, #132030 0%, #13203000 100%) 0% 0% no-repeat padding-box;
        z-index: 1;
        opacity: 0.88;
    }

    .hero-section img {
        display: none;

    }


    /* .hero-content {
        position: relative;
        z-index: 2;
        color: white;
        text-align: center;
        max-width: 80%;
        text-align: left;
        letter-spacing: 0px;


    } */
    .hero-content {
        position: relative;
        /* z-index: 2; */
        z-index: 1;
        color: white;

        letter-spacing: 0px;
        color: #FEFFFF;
        text-align: center;
        margin-left: auto;
        margin-right: auto;

    }

    .hero-title {
        font-size: 60px;
        line-height: 65px;
        font-weight: 500;
        font-family: 'Richmond Display', serif;
        text-align: left;
        letter-spacing: 0px;
        opacity: 1;
    }

    .hero-title br {
        display: none;
    }

    .button-group {
        display: flex;
        flex-direction: row;
        align-items: center;
    }

    .circle-border {
        display: inline-flex;
        justify-content: center;
        align-items: anchor-center;
        border: 1px solid #F29401;
        border-radius: 5px;
        opacity: 1;
        position: relative;
        overflow: hidden;
        margin: 8px;
        padding: 6px 14px;
        height: 50px;
        color: #FFF;
    }

    /* Style for the first button */
    .btn-primary-custom {
        background: #F29401;
        width: 181px;
    }

    /* Style for the second button */
    .btn-custom-container {
        background: transparent;
        width: 126px;

    }

    /* Button styles */
    .btn-custom {
        color: #FFF;
        background-color: transparent;
        border: none;
        font-family: 'Scala Sans Pro', sans-serif;
        font-size: 16px;
        font-weight: 600;
        line-height: 22px;
    }

    .btn-custom:hover,
    .btn-custom:focus {
        color: #FFF;
        background-color: transparent;
    }

    .btn-primary {
        white-space: nowrap !important;
        background-color: transparent !important;
        border: none !important;
    }

    .flexible-title {
        color: #1e73be;
        font-size: 36px;
        font-weight: 300;
        line-height: 1.3;
        font-family: 'Richmond Display', serif;
        letter-spacing: 0px;
        opacity: 1;
        text-wrap: balance;
        display: flex;
        justify-content: left;
        align-items: flex-start;
        text-align: left;
        word-break: break-word;
        white-space: normal;
        max-width: 80%;
        margin: 0 auto;
    }

    .flexible-left-text p,
    .flexible-right-text p {
        max-width: 90%;
        font-size: 16px;
        text-align: justify;
        font-weight: 300;
        line-height: 26px;
        font-family: 'Scala Sans Pro', sans-serif;
        letter-spacing: 0px;
        color: #132030;
        opacity: 1;
    }

    .logos-container {
        flex-wrap: wrap !important;
        gap: 17px;
    }

    .logos-container .col-auto {
        flex: 1 1 calc(20% - 20px);
        display: flex;
        justify-content: center;
    }



    .testimonial-container {
        padding: 10px;
        max-width: 100%;

    }

    .testimonial-content {
        gap: 5px;
    }

    .test-post-title {
        font-size: 16px;
        line-height: 24px;
    }








    @media (max-width: 768px) {
        .flexible-title {
            max-width: 100%;
        }



    }


    @media (min-width: 992px) {

        b,
        strong {
            font-size: inherit;
        }

        .hero-content {
            text-align: left;
            /* left: 227px; */
            max-width: 80%;
        }

        .hero-title {
            font-size: 80px;
            line-height: 85px;
            font-weight: 500;
            font-family: 'Richmond Display', serif;
        }

        .hero-title br {
            display: inline;
        }

        .hero-text {
            font-size: 14px;
            line-height: 24px;
            font-weight: 300;
            font-family: 'Libre Franklin', sans-serif;
        }

        .flexible-title {
            font-size: 46px;
            max-width: 94%;
            text-align: center;
            justify-content: center;
            align-items: center;
            text-align: center;
        }

        .flexible-left-text,
        .flexible-right-text {
            min-height: 5em;

        }


        .logos-container {
            flex-wrap: nowrap !important;
            justify-content: center;
            gap: 40px;
        }

        .logos-container .col-auto {
            flex: 0 0 auto;

        }

        .testimonial-container {
            box-shadow: 10px 10px 60px #2072BE1A;
            width: 100%;
            max-width: 305px;
            height: auto;
            padding: 15px;
            border-radius: 5px;
            background-color: white;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 10px;

        }


        .testimonial-content {
            display: flex;
            align-items: center;
            justify-content: space-between;
            width: 100%;

        }


        .test-post-title {
            font-size: 18px;
            font-style: normal;
            font-weight: 700;
            line-height: 30px;
            color: #000000;
            font-family: 'Scala Sans Pro', sans-serif;
            flex: 1;
            /* Allow text to take available space */
            white-space: nowrap;
            /* Prevents text from wrapping */
            overflow: hidden;
            /* text-overflow: ellipsis; */
            /* Adds '...' if text is too long */
        }


        .testimonial-arrow {
            width: 12px;
            height: 18px;
            flex-shrink: 0;
        }





    }
    </style>
    <div>

        <div class="hero-section">
            <div class="hero-content">
                <span class="hero-title">
                    <!-- <?= get_field("herotitle") ?> -->
                    <?= get_field("herotitlegekleuredtext") ?>

                </span>
                <p class="hero-text">
                    <?= get_field("herotext") ?>
                </p>
                <div class="button-group d-flex flex-row align-items-center">
                    <div class="circle-border btn-primary-custom">
                        <a href="<?= get_field("tuin_op_maat_btn")['url'] ?>" class="btn btn-primary">
                            <!-- <?= get_field("tuin_op_maat_btn")['title'] ?> -->
                            Ik wil meer weten
                        </a>
                    </div>
                    <div class="circle-border btn-custom-container">
                        <a href="<?= get_field("projecten_btn")['url'] ?>" class="btn btn-custom">
                            <!-- <?= get_field("projecten_btn")['title'] ?> -->
                            Over Ons
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- End of hero Section -->

        <!-- logostestimonials Repeater -->
        <div class="container-xl px-lg-5">
            <div class="row g-0 d-inline-flex align-items-anchor-center justify-content-center logos-container"
                style="margin-top:40px; margin-bottom:14px; flex-wrap:nowrap; width: 100%; opacity: 1;">
                <?php foreach (get_field("logostestimonials") as $sue) { ?>
                <div class="col-auto">
                    <a href="<?= $sue['logosteslinks']['url'] ?>" target=" _blank">
                        <div class="d-flex flex-row align-items-center justify-content-center">
                            <img src="<?= $sue['logosimg']['url'] ?>" alt=" <?= $sue['logosimg']['alt'] ?>"
                                class="logos-img" style="max-width: 100%; height: auto; flex-shrink: 0;" />
                        </div>
                    </a>
                </div>
                <?php } ?>
            </div>
        </div>


        <!-- Flexible Content Field -->
        <div>
            <?php if (have_rows('flexiblecontentfield')): ?>
            <div class="container mt-5">
                <?php while (have_rows('flexiblecontentfield')):
                        the_row(); ?>
                <?php if (get_row_layout() == 'text'): ?>
                <div class="row">

                    <div class="col-12  h-100 p-3 px-4 mt-5 flexible-title" data-aos="fade-up" data-aos-offset="100"
                        data-aos-delay="50" data-aos-duration="1000" data-aos-easing="ease-in-out">
                        <span><?php the_sub_field('title'); ?></span>
                    </div>
                </div>

                <div class="row g-5">
                    <div class="col-lg-6 text-start mt-5 flexible-left-text" data-aos="fade-right" data-aos-offset="100"
                        data-aos-delay="50" data-aos-duration="1000" data-aos-easing="ease-in-out">

                        <p><?php the_sub_field('lefttext'); ?></p>
                    </div>

                    <div class="col-lg-6 text-start mt-5 flexible-right-text" data-aos="fade-left" data-aos-offset="100"
                        data-aos-delay="50" data-aos-duration="1000" data-aos-easing="ease-in-out">

                        <p><?php the_sub_field('righttext'); ?></p>
                    </div>
                </div>

                <?php endif; ?>
                <?php endwhile; ?>
            </div>
            <?php endif; ?>
        </div>
        <!-- End of Flexible Content Field -->

        <!-- Onze_Expertises -->
        <div class="container p-3 px-4 mt-5" id="testimonials" data-aos="fade-up" data-aos-offset="100"
            data-aos-delay="50" data-aos-duration="1000" data-aos-easing="ease-in-out">
            <div class="row g-0 ">
                <?php
                $delay = 0;
                $posts = get_posts([
                    'post_type' => 'onze_expertises',
                    'numberposts' => -1,
                    "order" => 'asc'
                ]);

                foreach ($posts as $post) {
                    $fields = get_fields($post->ID);
                    $testimonial = get_field("expertisestestimonials");
                    // Debugging: Check the values of $fields['nextarrow']
                    // var_dump($fields['nextarrow']);
                
                    ?>

                <div class="col-lg-4 col-md-4 col-12" data-aos="fade-up" data-aos-delay="<?= $delay ?>"
                    data-aos-duration="800">
                    <a href="<?= get_permalink($post) ?>">
                        <div class="testimonial-container">
                            <div class="testimonial-content">
                                <span class="test-post-title">
                                    <?= $post->post_title ?>
                                </span>
                                <span
                                    style="border: 1px solid #F29401;border-radius: 5px;opacity: 1; background:#FFFFFF;width:  38px;;height: 38px; display:flex; align-items: center; justify-content: center;">
                                    <img src="<?= get_template_directory_uri() ?>/images/nextarrow.svg"
                                        alt="go onze expertises" class="testimonial-arrow" />


                                </span>

                            </div>
                        </div>
                    </a>
                </div>
                <?php
                    $delay += 300;
                }
                wp_reset_postdata();
                ?>
            </div>
        </div>
        <!--  -->
        <div>

        </div>













    </div>
</main>

<?php get_footer() ?>