<?php
$post = $args['post'];
$args = array(
    'post_type' => 'onze_expertises',
    'posts_per_page' => -1,
    "order" => 'asc'
);
$onzeExpertises = new WP_Query($args);

if ($onzeExpertises->have_posts()): ?>

    <div class="onze-expertises ">
        <!-- mt-5 -->
        <div class="expertises-container  position-relative" id="testimonials" style=" z-index: 2;">

            <div class="row mb-4">
                <div class="col-12 d-flex justify-content-center ">
                    <div class="d-flex align-items-center justify-content-center">
                        <h3 >
                            <?= get_field("expertisestitle") ?>
                        </h3>
                    </div>
                </div>
            </div>

            <div class="row gy-4">
                <?php
                $i = 0;
                while ($onzeExpertises->have_posts()):
                    $onzeExpertises->the_post();
                    ?>
                    <div class="col-lg-4 col-md-6 col-12" <?php
                    if ($i < 7) {
                        echo ' data-aos="fade-up" data-aos-delay="' . (100 + $i * 50) . '"';
                    }
                    ?>>
                        <a href="<?= get_permalink($post) ?>">
                            <div
                                class="testimonial-container d-flex flex-row align-items-center justify-content-between p-4  h-100 ">
                                <span class="title">
                                    <?php the_title(); ?>
                                </span>
                                <span class="img-border">
                                    <img src="<?= get_template_directory_uri() ?>/images/nextarrow.svg" alt="go onze expertises"
                                        class="go-arrow" />
                                </span>

                            </div>
                        </a>
                    </div>
                    <?php
                    $i++;
                endwhile; ?>
            </div>
        </div>
    </div>
<?php endif;
wp_reset_postdata();
?>