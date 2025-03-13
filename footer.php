<footer class="footer">
    <style>
    ul {
        list-style-type: none;
        margin: 0;
        padding: 0;
    }

    li {
        margin-bottom: 0.25rem;

    }

    @media (min-width: 992px) {


        .navbar-nav .custom-nav-link {
            text-align: left;
            font-size: 16px;
        }
    }

    .footer-text {
        margin-top: 49px;
    }
    </style>



    <div class="footer-section">
        <div class="container">
            <!-- container -->
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
                            <!-- Footer text in 5 cols -->
                            <div class="col-lg-10  d-flex align-items-center footer-text">
                                <?= get_field("footertext", 'option') ?>
                            </div>
                        </div>


                        <div class="row row-cols-auto mt-3 align-items-center  bottom-padding">
                            <div class="col col-md-5 col-lg-5 d-flex flex-column flex-md-row">
                                <div class="d-flex flex-column gap-2">
                                    <span class="footer-adres"><?= get_field("footercity", 'option') ?></span>
                                    <span class="footer-adres"><?= get_field("footeradres", 'option') ?></span>
                                    <!-- <span class="footer-adres"><?= get_field("footerkvk", 'option') ?></span> -->
                                    <div class="d-flex gap-1">
                                        <span class="footer-adres "
                                            style="font-weight:bold"><?= get_field("footerkvk", 'option') ?></span>
                                        <span class="footer-adres"><?= get_field("footernumber", 'option') ?></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col col-md-2 col-lg-2 d-flex flex-column gap-2">
                                <ul class="footer-nav">
                                    <li class="footer-nav-item footer-adres">
                                        <a class="footer-nav-link" style=" color: #132030;"
                                            href="<?= esc_url(home_url('/sample-page')); ?>">Home</a>
                                    </li>
                                    <li class="footer-nav-item dropdown footer-adres">
                                        <a class="footer-nav-link dropdown-toggle" href="#" id="footerDropdown"
                                            role="button" data-bs-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false" style=" color: #132030;">
                                            Diensten
                                        </a>
                                        <ul class="dropdown-menu" aria-labelledby="footerDropdown">
                                            <li><a class="dropdown-item footer-adres"
                                                    href="<?= esc_url(home_url('/')); ?>">X</a></li>
                                            <li><a class="dropdown-item footer-adres"
                                                    href="<?= esc_url(home_url('/')); ?>">e</a></li>
                                            <li><a class="dropdown-item footer-adres"
                                                    href="<?= esc_url(home_url('/')); ?>">g</a></li>
                                            <li><a class="dropdown-item footer-adres"
                                                    href="<?= esc_url(home_url('/')); ?>">T</a></li>
                                            <li><a class="dropdown-item footer-adres"
                                                    href="<?= esc_url(home_url('/')); ?>">A</a></li>
                                        </ul>
                                    </li>
                                    <li class="footer-nav-item footer-adres">
                                        <a class="footer-nav-link" href="<?= esc_url(home_url('/cases')); ?>"
                                            style=" color: #132030;">Cases</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col col-md-4 col-lg-4 d-flex flex-column gap-2">
                                <ul class="footer-nav">
                                    <li class="footer-nav-item footer-adres">
                                        <a class="nav-link custom-nav-link"
                                            href="<?= esc_url(home_url('/over-ons')); ?>">Over ons</a>
                                    </li>
                                    <li class="footer-nav-item footer-adres">
                                        <a class="nav-link custom-nav-link"
                                            href="<?= esc_url(home_url('/werkwijze')); ?>">Werkwijze</a>
                                    </li>
                                    <li class="footer-nav-item footer-adres">
                                        <a class="nav-link custom-nav-link"
                                            href="<?= esc_url(home_url('/kennismaken')); ?>">Veelgestelde vragen</a>
                                    </li>
                                </ul>
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


                        <div class=" mb-5 footer-contact-btn">
                            <a href=" <?= get_field("contactbtn", 'option')['url'] ?>"
                                class=" d-flex align-items-center gap-3 text-white">
                                <?= get_field("contactbtn", 'option')['title'] ?>
                                <img src="<?= get_template_directory_uri() ?>/images/white-arrow.svg"
                                    alt="go contact page" class="go-arrow" />
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