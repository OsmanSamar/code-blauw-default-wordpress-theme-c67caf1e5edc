<?php
// $breadcrumb = get_field('breadcrumb_groep');
?>

<div class="" data-aos="fade-up" data-aos-offset="100" data-aos-delay="50" data-aos-duration="1000"
    data-aos-easing="ease-in-out">

    <div class=" d-flex align-items-baseline justify-content-start" style=" position: absolute;
    top: -118px;    margin-left: 8px; ">
        <div class="d-flex align-items-center justify-content-start rounded  ">
            <?php
            if (function_exists('yoast_breadcrumb')) {
                yoast_breadcrumb('<p id="breadcrumbs" >', '</p>');
            }
            ?>
        </div>


    </div>

</div>