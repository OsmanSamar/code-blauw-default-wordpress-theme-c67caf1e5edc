<?php get_header()  //Template Name: kennismaken  ?>

<main class="kennismaken">


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

        .werkwijze-hero-title {
            font-size: 25px;
            line-height: 76px;
            font-weight: 500;
            font-family: "Richmond Display", serif;
            text-align: center;
            letter-spacing: 0px;
            color: #feffff;
        }

        .werkwijze-hero-text {
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


        @media (min-width: 992px) {

            .werkwijze-hero-title {
                font-size: 50px;
                text-align: left;
                line-height: 80px;
            }


            .werkwijze-hero-text {
                font-size: 16px;
                width: 505px;
                display: block;
            }
        }
    </style>
    <div>


        <!-- Hero Section -->
        <div class="hero-section flex-column">
            <div class="hero-content">
                <div class="col-12  col-lg-12  pe-0 pe-lg-5">
                    <span class="werkwijze-hero-title fadeIn  " data-side="right" style="transition-delay: .25s;">
                        <span class="d-block">
                            <?= get_field("herotitle") ?>
                        </span>
                    </span>
                </div>
            </div>
            <span class="werkwijze-hero-text ">
                <span class="d-block">
                    <?= get_field("herotext") ?>
                </span>
            </span>
        </div>
        <!-- End of Hero Section -->
    </div>
</main>



<?php get_footer() ?>