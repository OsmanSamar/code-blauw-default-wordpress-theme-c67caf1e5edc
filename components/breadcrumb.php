<?php
// $breadcrumb = get_field('breadcrumb_groep');
?>

<div class="breadcrumb-wrap" data-aos="fade-up" data-aos-offset="100" data-aos-delay="50" data-aos-duration="1000"
    data-aos-easing="ease-in-out">

    <div class=" d-flex align-items-baseline justify-content-start" style="">
        <div class="d-flex align-items-center justify-content-start rounded  ">
            <?php
            if (function_exists('yoast_breadcrumb')) {
                yoast_breadcrumb('<p id="breadcrumbs" >', '</p>');
            }
            ?>
        </div>


    </div>

</div>