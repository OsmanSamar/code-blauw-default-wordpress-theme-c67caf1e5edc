<?php get_header();

//Template Name: single-werken-voor
?>

<main class="single-werken-voor flex-grow-1">
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

    .posttitle {
        font-size: 25px;
        line-height: 76px;
        font-weight: 500;
        font-family: "Richmond Display", serif;
        text-align: center;
        letter-spacing: 0px;
        color: #feffff;
    }
    </style>

    <div>

        <!-- Hero Section -->
        <div class="hero-section flex-column">
            <div class="hero-content">
                <div class="col-12  col-lg-12  pe-0 pe-lg-5">
                    <span class="werkwijze-hero-title fadeIn  " data-side="right" style="transition-delay: .25s;">
                        <span class="d-block">
                            <?= get_field("posttitle") ?>
                        </span>
                    </span>
                </div>
            </div>

        </div>
        <!-- End of Hero Section -->

    </div>


</main>
<?php get_footer() ?>