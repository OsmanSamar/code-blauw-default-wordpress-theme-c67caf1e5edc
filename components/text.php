<?php
$fields = $args['fields'];
?>

<div class="text">
    <div class="row  ">
        <div class="col-12  col-lg-8 offset-lg-2 d-flex  text-start  justify-content-lg-center align-items-lg-center text-lg-center  "
            data-aos="fade-up" data-aos-offset="100" data-aos-delay="50" data-aos-duration="1000"
            data-aos-easing="ease-in-out">
            <h2>
                <?= $fields['title']; ?>
            </h2>
        </div>
    </div>

    <div class="row g-lg-5 mt-1">
        <div class="col-lg-6 text-start " data-aos="fade-right" data-aos-offset="100"
            data-aos-delay="50" data-aos-duration="1000" data-aos-easing="ease-in-out">
            <span class="regular">
                <span style="font-weight: 700;">
                    <?= $fields['lefttextbold']; ?>
                </span>
                <?= $fields['lefttext']; ?>
            </span>
        </div>

        <div class="col-lg-6 text-start   " data-aos="fade-left" data-aos-offset="100"
            data-aos-delay="50" data-aos-duration="1000" data-aos-easing="ease-in-out">
            <span class="regular"><?= $fields['righttext']; ?></span>
        </div>
    </div>

</div>