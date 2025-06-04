<?php
$bgImg = get_the_post_thumbnail_url();
?>

<div class="hero" >
    <div class="hero-section bg-holder d-flex align-items-start flex-column" data-aos="fade-up" data-aos-offset="120" data-aos-delay="50" data-aos-duration="70"
                        data-aos-easing="ease-in-out">
        <div class="bg-img" style="background-image:url('<?= $bgImg?>')">
        </div>
        <div class="hero-content container">
            <?php get_template_part('components/breadcrumb') ?>
          
            <div class="row my-auto">
                <div
                    class="col-12 col-lg-6 offset-lg-3 col-md-8 offset-md-2 
                        py-5 mt-4
                        d-flex flex-column justify-content-center align-items-center align-self-center
                         my-auto ">
                    <h1 data-aos="fade-up" data-aos-offset="120" data-aos-delay="50" data-aos-duration="70"
                        data-aos-easing="ease-in-out">
                        <?php if (get_field("hero_title")): ?>
                            <?= get_field("hero_title", $id) ?>
                        <?php else: ?>
                            <?= get_the_title($id); ?>
                            <?php
                        endif; ?>
                    </h1>
                </div>
            </div>
        </div>
    </div>
</div>