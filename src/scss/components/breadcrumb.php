<?php
// $breadcrumb = get_field('breadcrumb_groep');
?>

<div class="" data-aos="fade-up" data-aos-offset="100" data-aos-delay="50" data-aos-duration="1000"
    data-aos-easing="ease-in-out">

    <div class=" d-flex align-items-baseline justify-content-start" style=" color:red ">
        <!--  margin-bottom:-123px; -->


        <div class="d-flex align-items-center justify-content-start rounded  ">
            <!-- <a href="<?= esc_url(home_url('/')); ?>">
                <img src="<?= get_template_directory_uri() ?>/images/breadcrumbimg.svg" alt="Breadcrumb Image"
                    style="margin-bottom:0.7rem; width: 18px; height:18px; object-fit:cover;">
            </a> -->

            <?php
            if (function_exists('yoast_breadcrumb')) {
                yoast_breadcrumb('<p id="breadcrumbs">', '</p>');
            }
            ?>
        </div>


    </div>

</div>