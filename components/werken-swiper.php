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
                             
                                    <a href="<?= get_permalink($post) ?>" class=" d-flex flex-column ">
                                <div class=" card border-0 testimonial-slide d-flex flex-column ">
                                    <img src=" <?= $testimonial["logo"]['url'] ?>" alt=" <?= $testimonial['logo']['alt'] ?>"
                                        class="testimonial-img" />

                                    <div class="card-body d-flex flex-column  mt-1 mb-0 pb-4 pt-2">

                                        <div class="d-flex justify-content-between align-items-center">
                                            <span class="testimonial-title"><?= $post->post_title ?></span>
                                            <span class="d-flex justify-content-center align-items-center arrow">
                                                <img src="<?= get_template_directory_uri() ?>/images/white-arrow.svg"
                                                    alt="go Contact page" class="go-arrow" />
                                            </span>
                                        </div>
                                        <span class="testimonial-text mt-auto">
                                            <span>
                                                <?= $testimonial["text"] ?></span>
                                        </span>
                                    </div>
                                </div>
                            </a>

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
                <div class="d-flex align-items-center gap-3  justify-content-between flex-column flex-lg-row">
                    <h3 class="text-center text-lg-start">
                        <?= get_field("organisatietext",'option') ?>
                    </h3>
                    <div class="">
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