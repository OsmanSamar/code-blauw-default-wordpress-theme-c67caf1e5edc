<?php
$post = $args['post'];
$args = array(
    'post_type' => 'werken_voor',
    'numberposts' => -1,
    "order" => 'asc'
);
$werkenVoor = new WP_Query($args);

if ($werkenVoor->have_posts()): ?>

    <div class="werken-slider ">
        <div class="container swiper-container">
            <div class="row">
                <div class=" col-lg-12 ">
                    <div class="d-flex justify-content-between align-items-center gap-3 flex-wrap ">
                        <h3>
                            <?= get_field("werkentitle") ?>
                        </h3>
                        <div class="d-lg-flex d-none  gap-2">
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
                                                alt="<?= $testimonial['logog']['alt'] ?>" class="card-img-top"
                                                style="height: 101px; border-radius: 5px; background: #F7F6F4; object-fit: scale-down;" />
                                            <div class="card-body  mt-1 mb-0 pb-4 pt-2">


                                                <div class="d-flex justify-content-between align-items-center">
                                                    <div class="card-text">
                                                        <?= $post->post_title ?>
                                                    </div>
                                                    <span class="d-flex justify-content-center align-items-center arrow">
                                                        <img src="<?= $testimonial["white_arrow"]['url'] ?>"
                                                            alt=" <?= $testimonial['white_arrow']['alt'] ?>" class="go-arrow" />
                                                    </span>
                                                </div>
                                                <span class="card-title mt-auto" style=" color: #132030;">
                                                    <span><?= $testimonial["text"] ?></span>
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

                    <div class="swiper-pagination"></div>

                </div>
            </div>
        </div>

    </div>

<?php endif;
wp_reset_postdata();
?>