<footer class="footer">
    <style>
    .footer {
        max-width: 1700px;
        width: 100%;
        margin: 0 auto;

    }

    .footer-section {
        padding-bottom: 20px;
        /* overflow-x: clip; */
        max-width: 100vw;
    }

    .row {
        display: flex;
        flex-wrap: wrap;
    }

    .left-cont,
    .right-cont {
        position: relative;
    }

    .left-cont .bg-left {
        position: absolute;
        background-color: #F7F6F4;
        height: 100%;
        padding-left: 10px;
        width: 200vw;
        left: -50%;
        z-index: -1;
    }

    .under-bottom {
        border-bottom: 1px solid rgba(19, 32, 48, 0.25);
    }

    .left-cont {
        order: 2;

    }

    .right-cont {
        order: 1;
    }

    .right-cont .bg-right {
        background: #F29401;
        height: 100%;
        padding-right: 0;
        width: 200vw;
        position: absolute;
        z-index: 0;
        left: -50%;
    }


    .bg-right {
        left: 0;
    }

    .bottom-under {
        padding-top: 40px;

    }


    .footer-codeblauw {
        /* margin-left: auto; */
        padding: 30px 0;

    }

    .door-code-blauw {
        color: #132030;
        font-family: 'Scala Sans Pro', sans-serif;
        font-size: 18px;
        font-weight: 300;
        line-height: 24px;
        letter-spacing: 0px;
        opacity: 0.5;
    }




    .footer-text {
        margin-top: 20px;
        color: #132030;
        text-align: left;
        font-size: 16px;
        line-height: 24px;
        letter-spacing: 0px;
        font-weight: 300;
        font-family: 'Scala Sans Pro', sans-serif;
        /* max-width: 432px; */
    }

    .footer-adres {
        color: #132030;
        font-family: 'Scala Sans Pro', sans-serif;
        font-size: 16px;
        font-weight: 300;
        line-height: 24px;
        letter-spacing: 0px;
    }

    .navbar-nav .custom-nav-link {
        text-align: left;
        font-size: 12px;
        font-weight: 300;
        line-height: 22px;
        font-family: 'Scala Sans Pro', sans-serif;
        color: #132030;
        letter-spacing: 0px;
    }

    .footer-vraag {
        color: #FFFFFF;
        font-family: 'Richmond Display', serif;
        font-size: 24px;
        font-weight: 300;
        line-height: 30px;
        letter-spacing: 0px;
        margin-bottom: 20px;
        width: 280px;
    }

    .footer-text2 {
        color: #FFFFFF;
        font-family: 'Scala Sans Pro', sans-serif;
        /* font-size: 16px;
        font-weight: 300;
        line-height: 24px; */
        font-size: 16px;
        font-weight: 300;
        line-height: 30px;
        letter-spacing: 0px;
        margin-bottom: 10px;
        width: 263px;
        display: block;
    }

    .footer-icon {
        color: #FFFFFF;
        font-family: 'Scala Sans Pro', sans-serif;
        font-size: 16px;
        font-weight: 300;
        line-height: 30px;
        letter-spacing: 0px;
        opacity: 1;

    }

    .img-jordi {
        position: absolute;
        object-fit: cover;

        width: 176.46px;
        height: 268px;
        right: -18px;
        bottom: 0;

    }

    .footer-right-container {
        margin-top: 70px;
        padding-left: 20px;
    }


    .footer-privacy {
        color: #132030;
        font-family: 'Scala Sans Pro', sans-serif;
        font-size: 12px;
        font-weight: 300;
        line-height: 24px;
        letter-spacing: 0px;
        opacity: 0.5;
    }


    ul {
        list-style-type: none;
        margin: 0;
        padding: 0;
    }

    li {
        margin-bottom: 0.25rem;

    }

    .footer-contact-btn {
        width: fit-content;
        border: 1px solid #FFFFFF;
        border-radius: 5px;
        padding: 19px 14px 16px 14px;
        /* padding: 4px 14px; */
        height: 51px;
        display: flex;
        align-items: center;
        margin-top: 33px;
    }

    .footer-linked-img {
        width: 25.79px;
        height: 25.8px;
    }

    .footer-logo {
        width: 136px;
        height: 36px;
        object-fit: cover;
    }

    .footer-sm-screen {
        margin-left: 20px;
    }

    .bottom-padding {
        margin-bottom: 4rem;
    }

    @media(min-width: 768px) {


        .footer-text {
            font-size: 18px;
        }

        /* 
        .footer-adres {
            font-size: 14px;
        } */

        .footer-text2 {

            width: unset;
        }

        .img-jordi {
            width: 238.46px;
            height: 381px;
        }
    }

    @media (min-width: 992px) {
        .bottom-padding {
            margin-bottom: unset;
        }

        .footer-text {
            margin-top: 40px;
        }

        .footer-right-container {
            padding-left: 50px;
        }

        .left-cont {
            order: 1;
        }

        .right-cont {

            order: 2;
        }

        .right-cont .bg-right {
            width: 50vw;
            left: unset;
        }

        .navbar-nav .custom-nav-link {
            text-align: left;
            font-size: 16px;
        }



        /* .img-jordi {
            height: 325px;
            width: 176.46px;
        } */
        .img-jordi {
            height: 375px;
            width: 210.46px;
        }


        .footer-text2 {
            width: unset;
        }

        .bottom-under {
            padding-left: 15px;
            padding-top: 20px;
        }

        .gap-lg-custom {
            gap: 10rem !important;
        }

        .footer-privacy {
            font-size: 14px;

        }

        .footer-sm-screen {
            margin-left: unset;
        }







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
                                    <span class="footer-adres"><?= get_field("footerkvk", 'option') ?></span>
                                </div>
                            </div>
                            <div class="col col-md-2 col-lg-2 d-flex flex-column gap-2">
                                <ul class="footer-nav">
                                    <li class="footer-nav-item footer-adres">
                                        <a class="footer-nav-link"
                                            href="<?= esc_url(home_url('/sample-page')); ?>">Home</a>
                                    </li>
                                    <li class="footer-nav-item dropdown footer-adres">
                                        <a class="footer-nav-link dropdown-toggle" href="#" id="footerDropdown"
                                            role="button" data-bs-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">
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
                                        <a class="footer-nav-link" href="<?= esc_url(home_url('/cases')); ?>">Cases</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col col-md-4 col-lg-4 d-flex flex-column gap-2">
                                <ul class="footer-nav">
                                    <li class="footer-nav-item footer-adres">
                                        <a class="nav-link custom-nav-link"
                                            href="<?= esc_url(home_url('/over-ons')); ?>">Overons</a>
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
                            <a target="_blank" href="https://code-blauw.nl/">
                                <?= get_field("door:codeblauw", 'option') ?>
                            </a>
                        </span>


                    </div>
                </div>

                <div class="footer-codeblauw text-center d-flex justify-content-center d-md-none d-lg-none">
                    <span class="door-code-blauw">
                        <a target="_blank" href="https://code-blauw.nl/">
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