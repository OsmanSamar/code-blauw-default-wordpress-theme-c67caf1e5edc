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

        .hero-text {
            font-size: 14px;
            line-height: 24px;
            font-weight: 300;
            font-family: 'Libre Franklin', sans-serif;
        }

        .btn-custom {
            color: #FFF;
            background-color: transparent;
            border: none;
            /* Remove any default border */
            font-size: 16px;
            font-weight: 600;
        }

        .btn-custom:hover,
        .btn-custom:focus {
            color: #FFF;
            /* Ensure text color remains white on hover and focus */
            background-color: transparent;
            /* Ensure background remains transparent */
        }

        .btn-primary {
            white-space: nowrap !important;
            background-color: transparent !important;
            border: none !important;

        }
    }
    </style>
    <div>

        <div class="hero-section">

            <div class="hero-content">
                <h1 class="hero-title">
                    <!-- <?= get_field("herotitle") ?> -->
                    <?= get_field("herotitlegekleuredtext") ?>

                </h1>
                <p class="hero-text">
                    <?= get_field("herotext") ?>
                </p>

                <div class="button-group d-flex flex-row align-items-center ">

                    <div class="circle-border " style="left: calc(var(--bs-gutter-x)* -1.0);  display: inline-block;
                 border: 1px solid #F29401;
border-radius: 5px;
opacity: 1;
background: #F29401 0% 0% no-repeat padding-box;
              position: relative;
            overflow: hidden;
             margin: 8px;
             padding: 2px;
             width: 181px;
height: 50px;color:#FFF">
                        <a href="<?= get_field("tuin_op_maat_btn")['url'] ?>" style="  white-space: nowrap !important;
            background-color: transparent !important;
            border: none !important;" class="btn btn-primary">
                            <!-- <?= get_field("tuin_op_maat_btn")['title'] ?> -->
                            ik wil meer weten
                        </a>
                    </div>
                    <div class="circle-border" style="left: calc(var(--bs-gutter-x)* -0.5);  display: inline-block;
            
width: 126px;
height: 50px;


border: 1px solid #F29401;
border-radius: 5px;
opacity: 1;
            position: relative;
           overflow: hidden;
           margin: 8px;
          padding: 2px;
          background:transparant; 
          color:#FFF;">
                        <a href="<?= get_field("projecten_btn")['url'] ?>" style=" white-space: nowrap !important;
            background-color: transparent !important;
            border: none !important;" class="btn btn-custom " style="color:#FFF">
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