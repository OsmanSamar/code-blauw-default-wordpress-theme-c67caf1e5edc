<?php
get_header()  ?>

<main id="page" class="p404">
    <div class="container">
        <div class="row p404-container">
            <div class="col-12 col-lg-8 offest-lg-2  col-md-8 offset-md-2 
                        py-5 mt-4
                        d-flex flex-column justify-content-center align-items-center align-self-center
                         my-auto text-center" data-aos="fade-up" data-aos-offset="120" data-aos-delay="50"
                data-aos-duration="70" data-aos-easing="ease-in-out">
                <h1 class="text-center">Deze pagina staat niet.</h1>
                <a href="<?= home_url() ?>" class="button btn-primary mt-4 ">Terug naar home
                    <img src="<?= get_template_directory_uri() ?>/images/white-arrow.svg" alt="go Contact page"
                        class="go-arrow" />
                </a>
            </div>

        </div>
    </div>
</main>
<?php get_footer() ?>