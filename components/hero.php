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
                    <span class="hero-text">  <?= get_field("herotext") ?> </span>

                    <?php if(is_singular( 'werken_voor' )): ?>
                        <div class="d-flex flex-row justify-content-between">
                                <div class="datum-container ">
                                    <span class="datum-title">
                                        Datum
                                    </span>
                                    <span class="datum">
                                        <?= get_the_date(  )?>
                                    </span>
                                </div>
                                <div class="less-container ">
                                    <span class="less-title">
                                        Leestijd
                                    </span>
                                    <span class="less">
                                        <?= (string) YoastSEO()->meta->for_current_page()->estimated_reading_time_minutes ?> minuten
                                    </span>
                                </div>
                            </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>