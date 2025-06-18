<?php get_header() ?>        

<main class="page">

    <div class="container">
         <!-- Hero Section -->
        <div>
            <?= get_template_part("components/hero") ?>
        </div>
        <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
         

            <?php the_content(); ?>
        <?php endwhile; endif; ?>
    </div>
</main>

<?php get_footer() ?>
