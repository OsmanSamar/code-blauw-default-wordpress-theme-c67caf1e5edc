<?php
$fields = $args['fields'];


$args = array(
    'post_type' => 'onze_expertises',
    'posts_per_page' => -1,
     "order" => 'asc'
);
$onzeExpertises = new WP_Query($args);

if ($onzeExpertises->have_posts()): ?>

    <div class=" mb-5">
        <div class="container position-relative">
           
               <div class="row">
                 <div class="col-12 d-flex justify-content-center ">
                  <div  class="section-header ">
                          <div class="onz-eexpertises-title">
                                <?= $fields['onzeexpertisestitle']; ?>
                        </div>
                  </div>
                </div>
               </div>
               
               <div class="row mb-4">
                        <?php
                        $i=0;
                        while ($onzeExpertises->have_posts()):
                           $onzeExpertises->the_post();
                            ?>
                            <div
                             <?php 
                            if($i<7){
                                echo' data-aos="fade-up" data-aos-delay="'.(100+$i*50).'"';
                            }
                            ?>>
                            
                             <div class="col-lg-4 col-md-6 col-12 mb-4">
                                    <a href="<?php the_permalink(); ?>">
                                        <div class="testimonial-container d-flex flex-row align-items-center justify-content-between p-4  h-100 ">
                                         

                                            <div class="project-content p-3">
                                                <?php if ($categories): ?>
                                                    <div class="mt-2">
                                                        <?php foreach ($categories as $cat): ?>
                                                            <span class="lead project-categories"><?= esc_html($cat->name); ?></span>
                                                        <?php endforeach; ?>
                                                    </div>
                                                <?php endif; ?>
                                                <h4 class="mt-3"><?php the_title(); ?></h4>

                                                <?php if ($plaats): ?>
                                                    <?php foreach ($plaats as $term): ?>
                                                        <span class="lead"><?= esc_html($term->name); ?></span>
                                                    <?php endforeach; ?>
                                                <?php endif; ?>

                                            </div>
                                        </div>
                                    </a>
                                </div>
                             
                            </div>
                        <?php
                    $i++;
                    endwhile; ?>
               </div>

               <div class=" col-lg-12 d-flex justify-content-between gap-3 flex-wrap">
                    <a href="<?= get_post_type_archive_link('project') ?>"
                        class="button primary-button d-flex d-lg-none"><?= __('Bekijk alle projecten', 'hegrosteel') ?>
                        <img loading="lazy" src="<?= get_template_directory_uri(); ?>/images/vector.svg" alt="Arrow"
                            class="swiper-icon">
                    </a>
                </div>
            
        </div>

    </div>

  <?php endif;
wp_reset_postdata();
?>