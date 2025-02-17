<?php get_header()  //Template Name: frontpage  ?>

<main class="front-page">
    <style>
    b,
    strong {
        color: #F29401;
        font-family: inherit;
        font-size: inherit;
        font-style: inherit;
        line-height: inherit;
    }

    /* #1E73BE */

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
        z-index: 2;
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
            font-weight: 500;
        }

        .hero-text {
            font-size: 14px;
            font-weight: 300;
        }
    }
    </style>
    <div>

        <div class="hero-section">

            <div class="hero-content">
                <h1 class="hero-title">
                    <?= get_field("herotitle") ?>
                    <?= get_field("herotitlegekleuredtext") ?>

                </h1>
                <p class="hero-text">
                    <?= get_field("herotext") ?>
                </p>
            </div>

        </div>



    </div>
</main>

<?php get_footer() ?>