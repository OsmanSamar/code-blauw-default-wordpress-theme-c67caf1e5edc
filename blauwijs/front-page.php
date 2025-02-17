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
            display: inline-block;
            border: 1px solid #F29401;
            border-radius: 5px;
            opacity: 1;
            position: relative;
            overflow: hidden;
            margin: 8px;
            padding: 2px;
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

        @media (min-width: 992px) {
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



    </div>
</main>

<?php get_footer() ?>