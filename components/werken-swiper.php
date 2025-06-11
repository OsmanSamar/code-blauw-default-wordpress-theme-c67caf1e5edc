<?php

$ctabarShow = isset($args['ctabar']) && $args['ctabar'];
$post = $args['post'];
$args = array(
    'post_type' => 'werken_voor',
    'numberposts' => -1,
    "order" => 'asc'
);
$werkenVoor = new WP_Query($args);

if ($werkenVoor->have_posts()): ?>

    <div class="werken-slider position-relative z-1 ">
        <div class="container swiper-container">
            <div class="row">
                <div class=" col-lg-12 ">
                    <div class="d-flex justify-content-between align-items-center gap-3 flex-wrap pb ">
                        <h3>
                            <?= get_field("werkentitle") ?>
                        </h3>
                        <div class="button-wrap d-flex align-items-center  gap-2">
                            <div class="swiper-button-prev"></div>
                            <div class="swiper-button-next"></div>
                        </div>
                    </div>
                </div>

                <div class="swiperwerken werk-swiper">
                    <div class="swiper-wrapper">
                        <?php
                        $i = 0;
                        while ($werkenVoor->have_posts()):
                            $werkenVoor->the_post();
                            $testimonial = get_field("testimonialwerkvoor");
                            ?>
                            <div class="swiper-slide" <?php
                            if ($i < 7) {
                                echo ' data-aos="fade-up" data-aos-delay="' . (100 + $i * 50) . '"';
                            }
                            ?>>
                                <div class="container-card border-wrap"
                                    style="<?= $hasBackground && $backgroundColor ? '--background-color: ' . esc_attr($backgroundColor) . ';' : ''; ?>">
                                    <a href="<?= get_permalink($post) ?>">
                                        <div class="testimonial-slide d-flex flex-column ">
                                            <img src="<?= $testimonial["logo"]['url'] ?>"
                                                alt="<?= $testimonial['logog']['alt'] ?>" class="testimonial-img" />
                                            <div class="card-body  mt-1 mb-0 pb-4 pt-2 d-flex flex-column">
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <div class="testimonial-title">
                                                        <?= $post->post_title ?>
                                                    </div>
                                                    <span class="d-flex justify-content-center align-items-center arrow">
                                                        <img src="<?= get_template_directory_uri() ?>/images/white-arrow.svg"
                                                            alt="go Contact page" class="go-arrow" />
                                                    </span>
                                                </div>
                                                <span class="testimonial-text mt-auto">
                                                    <?= $testimonial["text"] ?>
                                                </span>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <?php
                            $i++;
                        endwhile; ?>
                    </div>
                </div>
            </div>
        </div>

        <?php if ($ctabarShow) {

            wp_reset_postdata();
            ?>
            <!-- White-block -->
            <div class="white-wraper" data-aos="fade-up" data-aos-offset="100" data-aos-delay="50" data-aos-duration="1000"
                data-aos-easing="ease-in-out">
                <div class="d-flex align-items-center gap-3 py-3 justify-content-between flex-column flex-lg-row">
                    <h3>
                        <?= get_field("organisatietext") ?>
                    </h3>
                    <div class="btn-left">
                        <a href="<?= get_field("vragenaanbtn")['url'] ?>" class="button btn-primary">
                            <?= get_field("vragenaanbtn")['title'] ?>
                            <img src="<?= get_template_directory_uri() ?>/images/white-arrow.svg" alt="go Contact page"
                                class="go-arrow" />
                        </a>

                    </div>
                </div>
            </div>
            <?php
        }
        ?>

    </div>

<?php endif;
wp_reset_postdata();
?>