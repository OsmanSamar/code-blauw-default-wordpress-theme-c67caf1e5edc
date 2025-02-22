<?php get_header()  //Template Name: strategie  ?>

<main class="strategie">
    <style>
    .hero-section {
        background: url("<?= get_field('heroimage')['url'] ?> ");
        width: 100%;
        max-width: 1700px;
        margin: 0 auto;
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        object-fit: cover;
    }

    .strategie-hero-title {
        font-size: 25px;
        line-height: 76px;
        font-weight: 500;
        font-family: "Richmond Display", serif;
        text-align: center;
        letter-spacing: 0px;
        color: #feffff;
    }

    .strategie-hero-text {
        text-align: center;
        font-size: 14px;
        line-height: 24px;
        font-weight: 300;
        font-family: "Libre Franklin", sans-serif;
        letter-spacing: 1px;
        color: #ffffff;
        opacity: 1;
        /* width: 505px; */
        /* display: block; */
        margin-bottom: 10px;
    }



    .button-container {
        border: 1px solid #f29401;
        border-radius: 5px;
        width: 250px;
        height: 51px;
        padding: 10px;
        background-color: #f29401;
        display: flex;
        justify-content: center;
        align-items: center;

        margin-top: 30px;
    }

    .button-text {
        text-align: center;
        font-size: 14px;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        color: #FFFFFF;
    }

    .werk-blauwijs-title {
        text-align: left;
        font-size: 36px;
        line-height: 50px;
        font-weight: 300;
        font-family: "Richmond Display", serif;
        letter-spacing: 0px;
        color: #1E73BE;
        opacity: 1;
    }

    .right-text,
    .right-text-bold {
        text-align: center;
        font-size: 16px;
        line-height: 30px;
        font-weight: 300;
        font-family: 'Scala Sans Pro', sans-serif;
        letter-spacing: 2px;
        color: #132030;
        opacity: 1;
        text-wrap: balance;
        white-space: break-spaces;
    }

    .right-text-bold {
        font-weight: bold;
    }


    .small-whit-container {
        width: 100%;
        max-width: 1700px;
        margin: 0 auto;
        display: flex;
        justify-content: center;
        align-items: center;
        /* height: 192px; */
        text-align: center;
        gap: 4px;
        flex-direction: row;
        padding: 10px;
    }

    .whi-container {
        background: #FFFFFF 0% 0% no-repeat padding-box;
        width: 1000px;
        /* position: relative; */
        z-index: 1;
        /* top: -60px; */
        /* top: 105px; */
        height: 131px;
        border-radius: 5px;
        margin: 0 auto;
        display: flex;
        align-items: center;
        justify-content: space-around;
        height: 250px;
        margin-top: 50px;
    }

    .organ-title {

        font-size: 26px;
        line-height: 35px;
        font-weight: 300;
        font-family: "Richmond Display", serif;
        text-align: center;
        letter-spacing: 0px;
        color: #132030;
        opacity: 1;
    }

    .waaromkiezenvoorblauw {
        text-align: left;
        font-size: 36px;
        line-height: 50px;
        font-weight: 300;
        font-family: "Richmond Display", serif;
        letter-spacing: 0px;
        color: #132030;
        opacity: 1;

    }

    .right-text-bold,
    .right-text-notbold {
        text-align: left;
        font-size: 16px;
        line-height: 26px;
        font-weight: 300;
        font-family: 'Scala Sans Pro', sans-serif;
        letter-spacing: 1px;
        color: #132030;
        opacity: 1;
        text-wrap: balance;
        white-space: break-spaces;

    }

    .right-text-bold {
        font-weight: bold;

    }

    .blue-block {
        width: 100%;
        max-width: 1700px;
        margin: 0 auto;
        background-color: #CCE1F4;
        /* height: 41px; */
        padding-top: 50px;
        padding-bottom: 50px;
    }


    @media (min-width: 768px) {

        .right-text,
        .right-text-bold {
            text-align: left;
        }
    }



    @media (min-width: 992px) {

        .strategie-hero-title {
            font-size: 50px;
            text-align: left;
            line-height: 80px;
        }


        .strategie-hero-text {
            font-size: 16px;
            width: 505px;
            display: block;
        }

        .right-text,
        .right-text-bold {
            text-align: left;
        }


        .whi-container {
            height: 131px;
        }

        .organ-title {
            font-size: 32px;
            line-height: 50px;
            text-align: left;
        }



    }
    </style>
    <div>
        <!-- Hero Section -->
        <div class="hero-section flex-column">
            <div class="hero-content">
                <div class="col-12  col-lg-12  pe-0 pe-lg-5">
                    <span class="strategie-hero-title fadeIn  " data-side="right" style="transition-delay: .25s;">
                        <span class="d-block">
                            <?= get_field("herotitle") ?>
                        </span>
                    </span>
                </div>
            </div>
            <span class="strategie-hero-text ">
                <span class="d-block">
                    <?= get_field("herotext") ?>
                </span>
            </span>
            <div class="button-container ">
                <div class="circle-border btn-primary-custom " style="width: 182px;">
                    <a href="<?= get_field("meerwetenbtn")['url'] ?>" class="btn btn-primary">
                        <?= get_field("meerwetenbtn")['title'] ?>
                    </a>
                    <img src="<?= get_field("arrow")['url'] ?>" alt="<?= get_field("arrow")['alt'] ?>"
                        style="width: 9px; height: 7.69px; object-fit: cover; display: block; " />
                </div>
            </div>
        </div>
        <!-- End of Hero Section -->



        <!-- Hoe werkt Blauw IJs? Block -->
        <div class="container mb-5">
            <div class="row" style="margin-top:5rem; margin-bottom: 5rem;">
                <div class="col-12 col-lg-6">
                    <span class="werk-blauwijs-title"><?= get_field("voorwieisblauwijs") ?></span>
                </div>
                <div class="col-12 col-lg-6 ">
                    <div class="d-flex flex-column ">
                        <div class="right-text-bold pt-2"> <?= get_field("righttext") ?></div>
                        <div class="right-text pt-2 "> <?= get_field("secrighttext") ?></div>
                        <div class="button-group mt-5">
                            <div class="circle-border gap-1  " style="width: 172px; ">
                                <a href="<?= get_field("onzeklantcasesbtn")['url'] ?>" class="btn-custom"
                                    style="color: #132030;">
                                    <?= get_field("onzeklantcasesbtn")['title'] ?>
                                </a>
                                <img src="<?= get_template_directory_uri() ?>/images/nextarrow.svg"
                                    alt="go onze expertises" class="testimonial-arrow"
                                    style="  width: 12px; height: 10.26px; flex-shrink: 0; object-fit: cover;" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--End of Hoe werkt Blauw IJs? Block -->

        <!--first-blue-block  -->
        <div class="blue-block ">
            <div class="container ">

                <div class="row  mb-3">
                    <div class="col-12 col-lg-6 mb-5">
                        <div class="d-flex flex-column gap-4 ">
                            <span class="waaromkiezenvoorblauw"><?= get_field("waaromkiezenvoorblauw") ?></span>
                            <span class="right-text-bold"><?= get_field("righttextbold") ?></span>
                            <span class="right-text-notbold"><?= get_field("righttextnotbold") ?></span>
                        </div>
                    </div>
                    <div class="col-12 col-lg-5 offset-lg-1">
                        <img src="<?= get_field("businesswomen")['url'] ?>"
                            alt="<?= get_field("businesswomen")['alt'] ?>"
                            style="border-radius: 5px 0px 0px 5px; object-fit: cover;" />
                    </div>
                </div>


                <!--White-containe-->
                <div class="small-whit-container">
                    <div class="whi-container ">
                        <div class="d-flex align-items-center gap-4 flex-column flex-lg-row">
                            <span class="organ-title">
                                <?= get_field("organisatietext") ?>
                                <!-- <?php
                                $organisatietext = get_field("organisatietext");
                                echo '<pre>';
                                print_r($organisatietext);
                                echo '</pre>';
                                ?>  -->
                            </span>

                            <div class="circle-border   btn-primary-custom " style="width: 248px">
                                <a h ref="<?= get_field("vraagaanbtn")['url'] ?>" class="btn btn-primary">
                                    <?= get_field("vraagaanbtn")['title'] ?>
                                </a>

                                <img src="<?= get_field("arrow")['url'] ?>" alt="<?= get_field("arrow")['alt'] ?>"
                                    style="width: 9px; height: 7.69px; object-fit: cover; display: " />
                            </div>
                        </div>
                    </div>
                </div>
                <!--End of wshite-containe-->
            </div>
        </div>
        <!--first-blue-block  -->





    </div>
</main>



<?php get_footer() ?>