<?php


$menu_id = get_nav_menu_locations()['footer-menu'];
$items = wp_get_nav_menu_items($menu_id);
$menu_items = array();
foreach ((array) $items as $key => $menu_item) {
    $menu_items[$menu_item->menu_item_parent][] = $menu_item;
}
$menu = [];
foreach ($items as $item) {
    if ($item->menu_item_parent == 0) {
        $menu[] = $item;
    }
    if (isset($menu_items[$item->ID])) {
        $item->children = $menu_items[$item->ID];
    }
}
unset($menu_items);
$footer_menu = $menu;
?>




<footer class="footer">

    <div class="footer-section">
        <div class="container">

            <div class="row g-0">

                <div class="col-lg-6 left-cont under-bottom">
                    <div class="bg-left"></div>
                    <div class="footer-sm-screen" data-aos="fade-right" data-aos-offset="100" data-aos-delay="50"
                        data-aos-duration="1000" data-aos-easing="ease-in-out">
                        <div class="row align-items-center">
                            <!-- Logo and LinkedIn in 5 cols  row align-items-center-->
                            <div class="col-lg-10 d-flex align-items-center justify-content-between"
                                style="max-width:; margin-top:70px;">
                                <a href="<?= esc_url(get_permalink(get_page_by_path('sample-page'))) ?>">
                                    <img src="<?= get_template_directory_uri() ?>/images/blauwijs.svg"
                                        class="footer-logo" alt="Blauw Ijs Logo" />
                                </a>
                                <a href="https://nl.linkedin.com" target="_blank">
                                    <img src="<?= get_field("footerlinked", 'option')['url'] ?>"
                                        alt="<?= get_field("footerlinked", 'option')['alt'] ?>"
                                        class="footer-linked-img" />
                                </a>
                            </div>

                            <div class="col-lg-10  d-flex align-items-center footer-text">
                                <?= get_field("footertext", 'option') ?>
                            </div>
                        </div>


                        <div class="row row-cols-auto mt-5 align-items-center bottom-padding">
                            <!-- Information col -->
                            <div class="col col-md-5 col-lg-3 d-flex flex-column flex-md-row">
                                <div class="d-flex flex-column gap-2">
                                    <span class="footer-adres"><?= get_field("footercity", 'option') ?></span>
                                    <span class="footer-adres"><?= get_field("footeradres", 'option') ?></span>
                                    <div class="d-flex gap-1">
                                        <span class="footer-adres"
                                            style="font-weight:bold"><?= get_field("footerkvk", 'option') ?></span>
                                        <span class="footer-adres"><?= get_field("footernumber", 'option') ?></span>
                                    </div>
                                </div>
                            </div>

                            <!-- Links col -->

                            <div class="row">
                                <?php
                                $footer_cols = array_chunk($footer_menu, ceil(count($footer_menu) / 2));
                                foreach ($footer_cols as $footer_menu): ?>
                                    <div class=" col-md-3 col-lg-6">
                                        <ul class="footer-nav">
                                            <?php
                                            foreach ($footer_menu as $item): ?>
                                                <li class="footer-nav-item footer-adres">
                                                    <?php if (!empty($item->children)): ?>

                                                        <ul class="footer-submenu">
                                                            <?php foreach ($item->children as $child): ?>
                                                                <li class="footer-nav-item footer-adres">
                                                                    <a class="footer-nav-link dropdown-toggle" href="<?= $child->url; ?>"
                                                                       >
                                                                        <?= $child->title ?>
                                                                        <img src="<?= get_template_directory_uri(); ?>/images/downarrow.svg"
                                                                            alt="Dropdown Icon"  class="dropdownarrow">
                                                                    </a>
                                                                </li>
                                                            <?php endforeach; ?>
                                                        </ul>
                                                    <?php
                                                    elseif ($item->menu_item_parent == 0):
                                                        ?>
                                                        <a class="footer-nav-link <?= get_permalink() == $item->url ? 'active' : '' ?>"
                                                            href="<?= $item->url; ?>" >
                                                            <?= $item->title ?>
                                                        </a>
                                                        <?php

                                                    endif; ?>
                                                </li>
                                            <?php endforeach; ?>
                                        </ul>
                                    </div>
                                <?php endforeach; ?>
                            </div>

                        


                        </div>



                    </div>
                </div>




                <div class="col-12 col-lg-6 right-cont ">
                    <div class="bg-right "></div>
                    <div class="d-flex flex-column position-relative footer-right-container" data-aos="fade-left"
                        data-aos-offset="100" data-aos-delay="50" data-aos-duration="1000"
                        data-aos-easing="ease-in-out">
                        <div class="d-flex align-items-start justify-content-between">
                            <div class="col-12 col-md-8">
                                <span class="footer-vraag d-block d-md-none d-lg-none">
                                    <?= get_field("footertextonsm", 'option') ?>
                                </span>
                                <span class="footer-vraag d-none d-md-block d-lg-block">
                                    <?= get_field("footervraag", 'option') ?>
                                </span>
                                <!-- md -->
                                <span class="footer-text2 d-md-none">
                                    <?= get_field("footertekst", 'option') ?>
                                </span>
                                <div class="row mt-2">
                                    <div class=" col-m-10 col-lg-12">
                                        <span class="footer-text2 d-none  d-md-block">
                                            <?= get_field("footertekst", 'option') ?>
                                        </span>
                                    </div>
                                </div>
                            </div>

                            <img src="<?= get_field("footeriemandimg", 'option')['url'] ?>"
                                alt="<?= get_field("footeriemandimg", 'option')['alt'] ?>" class="img-jordi" />
                        </div>


                        <a href="tel:<?= get_field("contact_number", 'options') ?>" style=" "
                            class="footer-icon d-flex flex-row align-items-center gap-3">
                            <img src="<?= get_field("footertelicon", 'option')['url'] ?>"
                                alt="<?= get_field("footertelicon", 'option')['alt'] ?>"
                                style="width:15.4px; height:15.41px;" />
                            <?= get_field("footertel", 'options') ?>
                        </a>


                        <a href="mailto:<?= get_field("footeremail", 'options') ?>"
                            class="footer-icon d-flex flex-row align-items-center gap-3">
                            <img src="<?= get_field("footeremailicon", 'option')['url'] ?>"
                                alt="<?= get_field("footertelicon", 'option')['alt'] ?>"
                                style="width:15.4px; height:15.41px;" />
                            <?= get_field("footeremail", 'options') ?>
                        </a>


                        <div class="mb-5 btn-wrap">
                            <a href=" <?= get_field("contactbtn", 'option')['url'] ?>"
                                class=" d-flex align-items-center gap-3  button btn-white-line">
                                <?= get_field("contactbtn", 'option')['title'] ?>
                                <img src="<?= get_template_directory_uri() ?>/images/white-arrow.svg"
                                    alt="Go to contact page" class="go-arrow" />
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>






        <!--  -->
        <div class="container">
            <div class="row">
                <div class="bottom-under">
                    <div
                        class="d-flex flex-row align-items-center justify-content-between flex-sm-row gap-3 gap-md-5 text-lg-start gap-lg-custom">
                        <span class="footer-privacy"><?= get_field("blauwijstext", 'option') ?></span>
                        <span class="footer-privacy"><?= get_field("algemenevoorwaarden", 'option') ?></span>
                        <span class="footer-privacy"><?= get_field("privacyverklaring", 'option') ?></span>
                        <span class="footer-privacy  d-none d-lg-block d-md-block">
                            <!-- <?= get_field("door:codeblauw", 'option') ?> -->
                            <a target="_blank" href="https://code-blauw.nl/" style="  color: #132030;">
                                <?= get_field("door:codeblauw", 'option') ?>
                            </a>
                        </span>


                    </div>
                </div>

                <div class="footer-codeblauw text-center d-flex justify-content-center d-md-none d-lg-none">
                    <span class="door-code-blauw">
                        <a target="_blank" href="https://code-blauw.nl/" style="  color: #132030;">
                            <?= get_field("door:codeblauw", 'option') ?>
                        </a>
                    </span>
                </div>
            </div>
        </div>


    </div>
    </div>
</footer>

<?php wp_footer(); ?>
</body>

</html>