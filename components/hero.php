<div class="container">
    <div class="hero-section bg-holder flex-column">

        <!-- <?php get_template_part('components/breadcrumb') ?>
        <p style="color: red;">Breadcrumb Loaded</p> -->

        <div class="bg" style="background-image:url('<?= get_field('heroimage')['url'] ?> ')">
        </div>

        <div class="hero-content text-center  w-100 ">

            <?php get_template_part('components/breadcrumb') ?>
            <!-- <p style="color: red;">Breadcrumb Loaded2</p> -->
            <div class="col-12  col-lg-6 offset-lg-3 col-md-8 offset-md-2 
                        py-5 mt-4
                        align-self-center d-flex flex-column justify-content-center align-items-center">
                <h1 class="kennis-hero-title text-center  " data-aos="fade-up" data-aos-offset="100" data-aos-delay="50"
                    data-aos-duration="1000" data-aos-easing="ease-in-out">
                    <span class="d-block">
                        <?= get_field("herotitle") ?>
                    </span>
                </h1>

                <div class="kennis-hero-text ">
                    <span class="d-block">
                        <?= get_field("herotext") ?>
                    </span>
                </div>
                <!-- <span class="d-block mb-3 invisible">Placeholder</span>
                <div class="d-flex flex-wrap row-gap-2 column-gap-3">
                    <?php foreach (get_field("btns") as $i => $btn) {
                        ?>
                    <div class="<?= $i == 0 ? "btn-primary-custom" : " btn-custom-container" ?> mt-4">
                        <a href="<?= $btn['btn']['url'] ?>" class="">
                            <?= $btn['btn']['title'] ?>
                            <img src="<?= get_template_directory_uri() ?>/images/white-arrow.svg" alt="go to contact"
                                class="go-arrow" />
                        </a>
                    </div>
                    <?php
                    }
                    ?>
                </div> -->

                <?php
                $buttons = get_field("btns");
                ?>

                <span class="d-block mb-3 <?= empty($buttons) ? '' : 'd-none' ?>"></span>

                <div class="d-flex flex-wrap row-gap-2 column-gap-3">
                    <?php if (!empty($buttons)): ?>
                    <?php foreach ($buttons as $i => $btn): ?>
                    <div class="<?= $i == 0 ? "btn-primary-custom" : "btn-custom-container" ?> mt-4">
                        <a href="<?= esc_url($btn['btn']['url']) ?>">
                            <?= esc_html($btn['btn']['title']) ?>
                            <img src="<?= get_template_directory_uri() ?>/images/white-arrow.svg" alt="go to contact"
                                class="go-arrow" />
                        </a>
                    </div>
                    <?php endforeach; ?>
                    <?php endif; ?>
                </div>
            </div>

        </div>
    </div>

</div>