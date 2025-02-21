<?php get_header()  //Template Name: overons  ?>

<main class="overons">
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

    .swiper-container {
        width: 100%;
        margin: 0 auto;
        overflow: clip;
        overflow-y: visible;

    }

    .swiper-container .swiper-pagination {
        bottom: -50px !important;
    }

    .swiper-container .swiper-pagination-bullet {
        width: 10px;
        height: 10px;
        background-color: #FFFFFF;
    }

    .swiper-header {
        display: flex;
        align-items: baseline;
        justify-content: space-between;
        position: absolute;
        top: -70px;
        right: 0;
        width: 100%;
    }

    .swiper-text {
        font-size: 16px;
        font-weight: 300;
        white-space: nowrap;
        text-align: left;
        line-height: 50px;
        font-family: 'Richmond Display', serif;
        letter-spacing: 0px;
        color: #132030;
        opacity: 1;
    }

    .swiper-button-prev,
    .swiper-button-next {
        /* position: static !important; */
        position: relative !important;
        width: 41px;
        height: 41px;
        border: 1px solid #132030;
        color: #132030;
        border-radius: 5px;
        display: flex;
        align-items: center;
        justify-content: center;
        z-index: 10;

    }


    .swiper-button-next::after,
    .swiper-rtl .swiper-button-prev::after {
        font-size: 16px;
        font-weight: 900;
    }

    .swiper-button-prev:after,
    .swiper-rtl .swiper-button-next:after,
    .swiper-button-next::after,
    .swiper-rtl .swiper-button-prev::after {
        font-size: 16px;
        font-weight: 900;
    }


    .swiper-container .swiper-button-prev {
        position: absolute;
        left: 82% !important;
        top: -70px !important;
    }

    .swiper-container .swiper-button-next {
        position: absolute;
        right: 5px !important;
        top: -12px !important;
    }

    .arrow {
        background-color: #1E73BE;
        border-radius: 50px;
        height: 28px;
        width: 28px;
    }

    .container-block {
        background-color: #F7F6F4;
        width: 100%;
        max-width: 1700px;
        margin: 0 auto;
    }

    .whi-container {
        background: #FFFFFF 0% 0% no-repeat padding-box;
        width: 1000px;
        position: relative;
        z-index: 1;
        top: -60px;
        height: 131px;
        border-radius: 5px;
        margin: 0 auto;
    }

    .organ-title {
        font-size: 32px;
        line-height: 50px;
        font-weight: 300;
        font-family: "Richmond Display", serif;
        text-align: left;
        letter-spacing: 0px;
        color: #132030;
        opacity: 1;
    }

    @media (min-width: 768px) {
        .swiper-container .swiper-button-prev {
            position: absolute;
            left: -3% !important;
            top: -13px !important;
        }
    }


    @media (min-width: 992px) {


        .swiper-container .swiper-button-prev {
            position: absolute;
            left: -12% !important;
            top: -12px !important;
        }

        .swiper-text {
            font-size: 36px;
        }
    }
    </style>

</main>

<?php get_footer() ?>