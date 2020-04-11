<footer class="footer-area">
    <div class="footer-big section--padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="info-footer">
                        <div class="info__logo">
                            <a href="<?php echo e(url('/')); ?>">
                                <img src="<?php echo e(asset('images/flogo.png')); ?>" alt="footer logo">
                            </a>
                        </div>
                            <p class="info--text">
                                Nous œuvrons au présent pour bâtir votre avenir. Ensemble, créons une vie plus simple dans le cadre dont vous rêvez.
                            </p>
                        <ul class="info-contact">
                            <li>
                                <span class="lnr lnr-phone info-icon"></span>
                                <span class="info">Service client : 01 84 71 00 53</span>
                            </li>
                            <li>
                                <span class="lnr lnr-envelope info-icon"></span>
                                <span class="info">contact@directravaux.com</span>
                            </li>
                            <li>
                                <span class="lnr lnr-map-marker info-icon"></span>
                                <span class="info">10 bis rue de Moscou 75008 Paris</span>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-5 col-md-6">
                    <div class="footer-menu">
                        <h4 class="footer-widget-title text--white">Notre Idée</h4>
                        <ul>
                            <li>
                                <a href="<?php echo e(url('/a-propos-de-nous')); ?>">À Propos de Nous</a>
                            </li>
                            <li>
                                <a href="<?php echo e(url('/comment-ca-marche')); ?>">Comment Ça Marche</a>
                            </li>
                            <li>
                                <a href="<?php echo e(url('/rejoignez-nous')); ?>">Rejoignez Nous</a>
                            </li>
                            <li>
                                <a href="#">Évènements</a>
                            </li>
                            <li>
                                <a href="#">Offres D'emploi</a>
                            </li>
                            <li>
                                <a href="#">Actualités</a>
                            </li>
                            <li>
                                <a href="#">Affiliées</a>
                            </li>
                        </ul>
                    </div>
                    <div class="footer-menu">
                        <h4 class="footer-widget-title text--white">Aide et FAQs</h4>
                        <ul>
                            <li>
                                <a href="<?php echo e(url('/faqs-clients')); ?>">FAQS Clients</a>
                            </li>
                            <li>
                                <a href="<?php echo e(url('/faqs-professionnel')); ?>">FAQS Entreprises</a>
                            </li>
                            <li>
                                <a href="<?php echo e(url('/#')); ?>">Forum D'Assistance</a>
                            </li>
                            <li>
                                <a href="<?php echo e(url('/politique-de-confidentialite')); ?>">Confidentialité</a>
                            </li>
                            <li>
                                <a href="<?php echo e(url('/politique-de-cookies')); ?>">Politique De Cookies</a>
                            </li>
                            <li>
                                <a href="<?php echo e(url('/conditions-generales')); ?>">Conditions Générales</a>
                            </li>
                            <li>
                                <a href="<?php echo e(url('/contactez-nous')); ?>">Contactez Nous</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="newsletter">
                        <h4 class="footer-widget-title text--white">Newsletter</h4>
                            <p>
                                Cette information sera protégée conformément à la notre <a href="<?php echo e(url('/politique-de-confidentialite')); ?>">Politique de Confidentialité</a> dans la mesure où elle constitue des informations personnelles.
                            </p>
                        <div class="newsletter__form">
                            <form action="#">
                                <div class="field-wrapper">
                                    <input class="relative-field rounded" type="text" placeholder="Saisissez l'adresse e-mail">
                                    <button class="btn btn--round" type="submit">S'abonner</button>
                                </div>
                            </form>
                        </div>
                        <div class="social social--color--filled">
                            <ul>
                                <li>
                                    <a href="https://www.facebook.com/directravaux/">
                                        <span class="fa fa-facebook"></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://twitter.com/directravaux">
                                        <span class="fa fa-twitter"></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.instagram.com/directravaux/">
                                        <span class="fa fa-instagram"></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.linkedin.com/company/directravaux-com">
                                        <span class="fa fa-linkedin"></span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="mini-footer">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="copyright-text">
                        <p> 
                            <a href="<?php echo e(url('/')); ?>"><?php echo e(Config('app.name')); ?></a> 
                            &copy; <?php echo date("Y"); ?> Tous droits réservés. 
                            <a href="<?php echo e(url('/login')); ?>">100%-PRO.</a> 
                            BTP MARKETPLACE POUR PROFESSIONNELS.
                        </p>
                    </div>
                    <div class="go_top">
                        <span class="lnr lnr-chevron-up"></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<?php /**PATH /Applications/MAMP/htdocs/b2b_portal/resources/views/layout/common/footer.blade.php ENDPATH**/ ?>