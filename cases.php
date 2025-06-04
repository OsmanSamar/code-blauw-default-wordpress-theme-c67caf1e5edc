<?php get_header();
$fields = get_fields();
//Template Name: cases
?>

<main class="cases">
   

    <div class=" container">

        <!-- Hero Section -->
        <div>
            <?= get_template_part("components/hero") ?>
        </div>

     



        <!--first-blue-block  -->
        <div class="blue-container position-relative">
            <div class="inside-block">
                <div class="row">
                    <div class="col-12 col-md-6 offset-md-3">
                        <div class="d-flex align-items-center justify-content-center ">
                            <h3>
                                <?= get_field("klantcases") ?>
                            </h3>
                        </div>
                    </div>
                </div>

                <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4 mt-3 mb-5">
                    <?php
                    $posts = get_posts([
                        'post_type' => 'werken_voor',
                        'numberposts' => -1,
                        'order' => 'asc'
                    ]);

                    foreach ($posts as $post) {
                        $fields = get_fields($post->ID);
                        $testimonial = get_field("testimonialwerkvoor");
                        ?>
                        <div class="col-lg-3 col-md-4 col-12 d-flex">
                            <a href="<?= get_permalink($post) ?>" class=" d-flex flex-column ">
                                <div class=" card border-0 testimonial-slide d-flex flex-column ">
                                    <img src=" <?= $testimonial["logo"]['url'] ?>" alt=" <?= $testimonial['logo']['alt'] ?>"
                                        class="testimonial-img" />

                                    <div class="card-body mt-1 mb-0 pb-4 pt-2">
                                       
                                        <div class="d-flex justify-content-between align-items-center">
                                            <span class="testimonial-title"><?= $post->post_title ?></span>
                                            <span class="d-flex justify-content-center align-items-center arrow">
                                                <img src="<?= $testimonial["white_arrow"]['url'] ?>"
                                                    alt=" <?= $testimonial['white_arrow']['alt'] ?>" class="go-arrow"/>
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
                    }
                    wp_reset_postdata();
                    ?>
                </div>
            </div>



        </div>
       
        <!--White-containe-->
        <div class="white-container" data-aos="fade-up" data-aos-offset="100" data-aos-delay="50" data-aos-duration="1000"
            data-aos-easing="ease-in-out">
            <div class="d-flex align-items-center gap-3 py-3 justify-content-between flex-column flex-lg-row">
                <h3>
                    <?= get_field("organisatietext") ?>
                </h3>
                <div class="btn-left">
                    <a href="<?= get_field("vraageenbtn")['url'] ?>" class="button btn-primary">
                        <?= get_field("vraageenbtn")['title'] ?>
                        <img src="<?= get_template_directory_uri() ?>/images/whitenextarrow.svg" alt="go Contact page"
                            class="go-arrow" />
                    </a>
                </div>
            </div>
        </div>

    </div>





</main>

<?php get_footer() ?>