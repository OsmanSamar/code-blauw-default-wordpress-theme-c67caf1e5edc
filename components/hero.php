<?php
$postid= $args['postid']??null;
$bgImg = get_the_post_thumbnail_url($postid);
?>

<div class="hero">
    <div class="hero-section bg-holder d-flex align-items-start flex-column" data-aos="fade-up" data-aos-offset="120"
        data-aos-delay="50" data-aos-duration="70" data-aos-easing="ease-in-out">
        <div class="bg-img" style="background-image:url('<?= $bgImg ?>')">
        </div>
        <div class="hero-content container">
            <?php get_template_part('components/breadcrumb') ?>

            <div class="row my-auto">
                <div class="col-12 col-lg-8 offest-lg-2  col-md-8 offset-md-2 
                        py-5 mt-4
                        d-flex flex-column justify-content-center align-items-center align-self-center
                         my-auto text-center ">
                         <?php 
                         if(is_singular( "werken_voor" )){
                           ?>
                           <a href="<?=  get_post_type_archive_link( "werken_voor" ) ?>" class="text-white">Terug naar cases</a>
                           <?php
                         }
                         
                         
                         ?>
                    <h1 class="text-center" data-aos="fade-up" data-aos-offset="120" data-aos-delay="50" data-aos-duration="70"
                        data-aos-easing="ease-in-out">
                        <?php if (get_field("herotitle",$postid)): ?>
                            <?= get_field("herotitle", $postid) ?>
                        <?php else: ?>
                            <?= get_the_title($postid); ?>
                            <?php
                        endif; ?>
                    </h1>
                    <span class="col-lg-8 offset-lg- hero-text"> <?= get_field("herotext",$postid) ?> </span>

                    <!-- Btns -->
                   
                        <?php
                        $btns = get_field("btns",$postid);
                        if (!empty($btns) && isset($btns['url']) && isset($btns['title'])): ?>
                          <div class=" mt-5">
                              <a href="<?= esc_url($btns['url']) ?>" class="button btn-primary ">
                                <?= esc_html($btns['title']) ?>
                                <img src="<?= get_template_directory_uri() ?>/images/white-arrow.svg" alt="go Contact page"
                                    class="go-arrow" />
                            </a>
                          </div>
                        <?php endif; ?>
                   


                    <!-- Lees tijd -->
                    <?php if (is_singular('werken_voor')): ?>
                        <div class=" d-flex flex-row justify-content-between datum-time-container" >
                            <div class=" datum-container  ">
                                <span class="datum-title">
                                    Datum
                                </span>
                                <span class="datum">
                                    <?= get_the_date() ?>
                                </span>
                            </div>
                            <div class=" less-container ">
                                <span class="less-title">
                                    Leestijd
                                </span>
                                <span class="less">
                                    <?= (string) YoastSEO()->meta->for_current_page()->estimated_reading_time_minutes ?>
                                    minuten
                                </span>
                            </div>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>