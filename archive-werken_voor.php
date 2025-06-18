<?php get_header();
$pageid = get_page_by_title( 'Cases');
$fields = get_fields($pageid);

//Template Name: cases
?>

<main class="cases">


    <div class=" container">

        <!-- Hero Section -->
        <div>
            <?= get_template_part("components/hero",null,['postid'=>$pageid]) ?>
        </div>


        <!--first-blue-block  -->
        <div class="blue-container position-relative">
            <div class="inside-block">
                <div class="row">
                    <div class="col-12 col-md-12 col-lg-6 offset-lg-3">
                        <div class="d-flex align-items-center justify-content-center  text-center">
                            <h3 >
                                <?= get_field("klantcases",$pageid) ?>
                            </h3>
                        </div>
                    </div>
                </div>

                <div class="row  g-4 mt-3 mb-5">
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
                        <div class="col-12 col-md-6 col-lg-4 col-xl-3   d-flex justify-content-center">
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
                    }
                    wp_reset_postdata();
                    ?>
                </div>
            </div>

        </div>

        <!--White-containe-->
        <div class="white-container" data-aos="fade-up" data-aos-offset="100" data-aos-delay="50"
            data-aos-duration="1000" data-aos-easing="ease-in-out">
            <div class="d-flex align-items-center gap-3  justify-content-between flex-column flex-lg-row">
                <h3 class="text-center text-lg-start">
                    <?= get_field("organisatietext",$pageid) ?>
                </h3>
                <div class="btn-left">
                    <a href="<?= get_field("vraageenbtn",$pageid)['url'] ?>" class="button btn-primary">
                        <?= get_field("vraageenbtn",$pageid)['title'] ?>
                        <img src="<?= get_template_directory_uri() ?>/images/whitenextarrow.svg" alt="go Contact page"
                            class="go-arrow" />
                    </a>
                </div>
            </div>
        </div>

    </div>


</main>

<?php get_footer() ?>