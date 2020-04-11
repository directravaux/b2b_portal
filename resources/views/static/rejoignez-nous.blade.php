@extends('layout.index')
@section('content')
    <section class="about_mission">
        <div class="content_block1">
            <div class="container">
                <div class="row">
                    <div class="col-md-5 col-sm-12">
                        <div class="content_area">
                            <h1 class="content_area--title">Grandir avec
                                <span class="highlight">Nous !</span>
                            </h1>
                            <p>Nous aidons les entreprises à Améliorer leurs Affaires. Nunc placerat mi id nisi interdum mollis. Praesent pharetra justo ut sceler isque the mattis,
                                leo quam aliquet congue this there placerat mi id nisi they interdum mollis. Praesent pharetra
                                justo ut sceleris que the mattis, leo quam aliquet. Nunc placer atmi id nisi interdum mollis
                                quam. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor
                                invidunt sanctus est Lorem ipsum dolor sit amet consetetur sadipscing.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="content_image bgimage">
                <div class="bg_image_holder">
                    <img src="{{asset('img/concept.jpg')}}" alt="">
                </div>
            </div>
        </div>

        <div class="content_block2">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 col-md-6  offset-md-6 offset-lg-7">
                        <div class="content_area2">
                            <h1 class="content_area2--title">Notre
                                <span class="highlight">Mission</span>
                            </h1>
                            <p>Nunc placerat mi id nisi interdum mollis. Praesent pharetra justo ut sceler isque the mattis,
                                leo quam aliquet congue this there placerat mi id nisi they interdum mollis. Praesent pharetra
                                justo ut sceleris que the mattis, leo quam aliquet. Nunc placer atmi id nisi interdum mollis
                                quam. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor
                                invidunt sanctus est Lorem ipsum dolor sit amet consetetur sadipscing.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="content_image2 bgimage">
                <div class="bg_image_holder">
                    <img src="{{asset('img/mission.jpg')}}" alt="">
                </div>
            </div>
        </div>
    </section>

    <section class="partner-area section--padding partner--area2 bgimage">
        <div class="bg_image_holder">
            <img src="images/fn.jpg" alt="">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title">
                        <h1>Nous
                            <span class="highlighted">Participerons</span>
                        </h1>
                        <p>Notre équipe travaille chaque jour pour que vos services soient affichés de la meilleure façon possible. Nous vous garantissons 99,99 % que votre boutique sera visible en ligne 24h/24h – 7j/7j. Direct Travaux vous offrons une paiement en ligne sécurisé pour tous vos produits que vous vendez.</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="partners">
                        <div class="partner">
                            <h4>Performances</h4><br>
                            <img src="{{asset('img/performances.svg')}}" alt="partner image">
                        </div>
                        <div class="partner">
                            <h4>Sauvegardes</h4><br>
                            <img src="{{asset('img/backup.svg')}}" alt="partner image">
                        </div>
                        <div class="partner">
                            <h4>Confiance</h4><br>
                            <img src="{{asset('img/confiance.svg')}}" alt="partner image">
                        </div>
                        <div class="partner">
                            <h4>Sécurité</h4><br>
                            <img src="{{asset('img/security.svg')}}" alt="partner image">
                        </div>
                        <div class="partner">
                            <h4>Référencement</h4><br>
                            <img src="{{asset('img/seo.svg')}}" alt="partner image">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="gallery_area">
        <div class="gallery_contents_wrapper bgimage">
            <div class="bg_image_holder">
                <img src="{{asset('img/teamwork.jpg')}}" alt="">
            </div>
            <div class="container content_above">
                <div class="row">
                    <div class="col-md-6 offset-md-3">
                        <div class="gallery_contents">
                            <h3>Travailler Esemble</h3>
                            <p>Nous aimons ce que nous faisons et continuerons à travailler dur pour augmenter vos activités.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="call-to-action bgimage">
        <div class="bg_image_holder">
            <img src="{{asset('img/join-us.jpg')}}" alt="">
        </div>
        <div class="container content_above">
            <div class="row">
                <div class="col-md-12">
                    <div class="call-to-wrap">
                        <h1 class="text--white">Prêt à Nous Rejoindre ?</h1>
                        <h4 class="text--white">Plus de 1 200 entreprises font confiance à Direct Travaux pour améliorer leur réactivité.</h4>
                        <a href="#" class="btn btn--lg btn--round btn--white callto-action-btn">Rejoignez Nous</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--===========Video==============-->
    <div class="modal fade video_modal" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModal">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <iframe width="100" src="https://www.youtube.com/embed/lvtfD_rJ2hE" allowfullscreen></iframe>
            </div>
        </div>
    </div>
@stop