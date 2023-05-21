<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <title>Pharmacie Elchifaa</title>
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
    <link rel="shortcut icon" href="{{asset('assets/img/logo.svg')}}" type="image/x-icon">
</head>

<body>
    @include('includes.header')

    <section>
        <div class="container mt-3">
            <div class="row">
                <div class="col-md-8 mb-2 d-flex back_img_0 br_20">
                    <div class="p-4">
                        <span class="orang_color AvenirNextWorld f16 text-uppercase">Offre spéciale</span>
                        <p class="black_color AvenirNextWorld f34 mt-3">Équipement médical</p>
                        <div class="grey_color f18 AvenirNextWorld mt-3"> Remise week-end</div>
                        <div class="orng_color f28 AvenirNextWorld fw_700"> DZ 299.00</div>
                        <button class="btn text-white f16 AvenirNextWorld shop_now_btn mt-4 mr-2">Shop Now <i
                                class="arrow right"></i></button>
                    </div>
                </div>
                <div class="col-md-4 mb-2">
                    <div class="p-3 mb-4 back_img_1 br_20">
                        <div class="orang_color f14 AvenirNextWorld"> Offres spéciales</div>
                        <div class="black_color f21 AvenirNextWorld mt-2"> Équipement médical</div>
                        <div class="grey_color f14 AvenirNextWorld mt-3"> Remise week-end</div>
                        <div class="orng_color f20 AvenirNextWorld fw_700"> DZ 299.00</div>
                        <div></div>
                        <div></div>
                    </div>
                    <div class="p-3  back_img_2 br_20">
                        <div class="orang_color f14 AvenirNextWorld"> Offres spéciales</div>
                        <div class="black_color f21 AvenirNextWorld mt-2"> Équipement médical</div>
                        <div class="grey_color f14 AvenirNextWorld mt-3"> Remise week-end</div>
                        <div class="orng_color f20 AvenirNextWorld fw_700"> DZ 299.00</div>
                        <div></div>
                        <div></div>
                    </div>
                </div>
            </div>
            <div class="mt-2 row">
                <div class="col-md-4">
                    <div class="br_20 mb-2 p-3 back_img_3">
                        <div class="orang_color f14 AvenirNextWorld"> Offres spéciales</div>
                        <div class="black_color f21 AvenirNextWorld mt-2"> Équipement médical</div>
                        <div class="grey_color f14 AvenirNextWorld mt-3"> Remise week-end</div>
                        <div class="orng_color f20 AvenirNextWorld fw_700"> DZ 299.00</div>
                    </div>

                </div>
                <div class="col-md-4">
                    <div class="p-3 back_img_4 br_20 mb-2">
                        <div class="orang_color f14 AvenirNextWorld"> Offres spéciales</div>
                        <div class="black_color f21 AvenirNextWorld mt-2"> Équipement médical</div>
                        <div class="grey_color f14 AvenirNextWorld mt-3"> Remise week-end</div>
                        <div class="orng_color f20 AvenirNextWorld fw_700"> DZ 299.00</div>

                    </div>
                </div>
                <div class="col-md-4">
                    <div class="p-3 back_img_5 br_20 mb-2">
                        <div class="orang_color f14 AvenirNextWorld"> Offres spéciales</div>
                        <div class="black_color f21 AvenirNextWorld mt-2"> Équipement médical</div>
                        <div class="grey_color f14 AvenirNextWorld mt-3"> Remise week-end</div>
                        <div class="orng_color f20 AvenirNextWorld fw_700"> DZ 299.00</div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <section id="medecines" class="mt-5">
        <div class="container ">
            <span class="fw_700 AvenirNextWorld f28 black_color">Nos Médicaments</span>
            <div class="swiper mt-3">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper">
                    @foreach ($medecines as $medecine)
                        <a href="product/{{ $medecine->id }}" class="swiper-slide p-3">
                            <img src="{{ asset('uploads/' . $medecine->image_name) }}" alt="" class="w-100">
                            <div class="black_color f18 AvenirNextWorld fw_700"> {{ $medecine->title }}</div>
                            <div class="d-flex justify-content-between mt-2 align-items-center">
                                <div class=" f15 AvenirNextWorld fw_700"> <span
                                        class="black_color"></span>{{ $medecine->price }} <span
                                        class="orng_color">Dz</span></div>
                                <div class=" basket_cart_container">
                                    <button class="btn p-0">
                                        <i aria-hidden="true" class="f25 melawell-icon-shopping-cart blue_color"></i>
                                    </button>
                                </div>
                            </div>
                        </a>
                    @endforeach
                </div>

            </div>
        </div>
    </section>
    <section>
        <div class="container mt-5" id="special_offer">
            <div class="d-md-flex justify-content-between align-items-center special_offer px-5 py-3">
                <div class="textwhi text-white ">
                    <span class="d-block f18 AvenirNextWorld mb-3">Super remise pour votre premier achat</span>
                    <span class="f16 AvenirNextWorld grey_color">Utilisez le code de réduction dans la page de
                        paiement.</span>
                </div>
                <div class="blue_background text-white px-4 py-2 br_10">
                    EcHiFaA_pHaRmAcY
                </div>
            </div>
        </div>
    </section>
    <section id='about_us'>
        <div class="container mt-5">
            <span class="fw_700 AvenirNextWorld f28 black_color">Â propos de nous</span>
            <div class="row mt-4">
                <div class="col-md-3 text-center">
                    <div class="elementor-icon-wrapper py-5">
                        <div class="elementor-icon">
                            <i aria-hidden="true" class="melawell-icon- melawell-icon-heart"></i>
                        </div>
                        <div class="divider my-4"></div>
                        <div class="AvenirNextWorld f16">
                            <span class="black_color d-block">Accessoires médicaux</span>
                            <span class="grey_color d-block mt-3">Sed ut perspiciatis unde omnis wste natsit volupta
                                explic</span>
                        </div>

                    </div>
                </div>
                <div class="col-md-3 text-center">
                    <div class="elementor-icon-wrapper py-5">
                        <div class="elementor-icon">
                            <i aria-hidden="true" class="melawell-icon- melawell-icon-like-shapes"></i>
                        </div>
                        <div class="divider my-4"></div>
                        <div class="AvenirNextWorld f16">
                            <span class="black_color d-block">Covid - 19 Treatment Center </span>
                            <span class="grey_color d-block mt-3">Sed ut perspiciatis unde omnis wste natsit volupta
                                explic</span>
                        </div>

                    </div>
                </div>
                <div class="col-md-3 text-center">
                    <div class="elementor-icon-wrapper py-5">
                        <div class="elementor-icon">
                            <i aria-hidden="true" class="melawell-icon- melawell-icon-people"></i>
                        </div>
                        <div class="divider my-4"></div>
                        <div class="AvenirNextWorld f16">
                            <span class="black_color d-block">24/7 Hours Emergency Care</span>
                            <span class="grey_color d-block mt-3">Sed ut perspiciatis unde omnis wste natsit volupta
                                explic</span>
                        </div>

                    </div>
                </div>
                <div class="col-md-3 text-center">
                    <div class="elementor-icon-wrapper py-5">
                        <div class="elementor-icon">
                            <i aria-hidden="true" class="melawell-icon- melawell-icon-security-time"></i>
                        </div>
                        <div class="divider my-4"></div>
                        <div class="AvenirNextWorld f16">
                            <span class="black_color d-block">Online Free Consultations</span>
                            <span class="grey_color d-block mt-3">Sed ut perspiciatis unde omnis wste natsit volupta
                                explic</span>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id='contact_us'>
        <div class="container mt-5">
            <span class="fw_700 AvenirNextWorld f28 black_color">Contactez nous</span>
            <div class="row mt-4">
                <div class="col-md-3 text-center">
                    <div class="elementor-icon-wrapper py-5">
                        <div class="elementor-icon">
                            <i aria-hidden="true" class="melawell-icon- melawell-icon-sms-notification"></i>
                        </div>
                        <div class="divider my-4"></div>
                        <div class="AvenirNextWorld f16">
                            <span class="black_color d-block">Adresse e-mail</span>
                            <span class="grey_color d-block mt-3">raneghof692@gmail.com </span>
                        </div>

                    </div>
                </div>
                <div class="col-md-3 text-center">
                    <div class="elementor-icon-wrapper py-5">
                        <div class="elementor-icon">
                            <i aria-hidden="true" class="melawell-icon- melawell-icon-call-calling"></i>
                        </div>
                        <div class="divider my-4"></div>
                        <div class="AvenirNextWorld f16">
                            <span class="black_color d-block">Numéro de téléphone </span>
                            <span class="grey_color d-block mt-3">+213776402646</span>
                        </div>

                    </div>
                </div>
                <div class="col-md-3 text-center">
                    <div class="elementor-icon-wrapper py-5">
                        <div class="elementor-icon">
                            <i aria-hidden="true" class="melawell-icon- melawell-icon-map-marker-alt"></i>
                        </div>
                        <div class="divider my-4"></div>
                        <div class="AvenirNextWorld f16">
                            <span class="black_color d-block">Adresse</span>
                            <span class="grey_color d-block mt-3">Lac des oiseaux-Bouteldja-Eltaref</span>
                        </div>

                    </div>
                </div>
                <div class="col-md-3 text-center">
                    <div class="elementor-icon-wrapper py-5">
                        <div class="elementor-icon">
                            <i aria-hidden="true" class="melawell-icon- melawell-icon-directbox-notif"></i>
                        </div>
                        <div class="divider my-4"></div>
                        <div class="AvenirNextWorld f16">
                            <span class="black_color d-block">Fax</span>
                            <span class="grey_color d-block mt-3">1-800-570-7777</span>
                        </div>

                    </div>
                </div>
            </div>

        </div>
        <div class="row mt-5 no-gutters">
            <div class="col-md-8">
                <div id="googleMap" style="width:100%;height:100%;"></div>
            </div>
            <div class="col-md-4">
                <div class="p-4 grey_back">
                    <span class="aven AvenirNextWorld f35 black_color fw_700">Contactez-nous</span>
                    <form class="mt-3">
                        <div class="form-row mb-4">
                            <textarea class="form-control custom_text_area" id="" rows="6" placeholder="Votre message"></textarea>
                        </div>
                        <div class="form-row">
                            <div class="col">
                                <input type="text" class="form-control" placeholder="Votre Nom">
                            </div>
                            <div class="col">
                                <input type="text" class="form-control" placeholder="Votre Prénom">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col">
                                <input type="text" class="form-control mt-3" placeholder="Votre Sujet">
                            </div>
                        </div>
                        <button class="btn text-white f16 AvenirNextWorld shop_now_btn mt-4 ">Soumettre</button>
                    </form>
                </div>
            </div>

        </div>
    </section>
    <section>
        <div class="mt-5 deep_dark_blue">
            <div class="container py-5 d-md-flex justify-content-between">
                <div class="d-md-flex">
                    <div class="d-flex align-items-center mb-1">
                        <img src=" {{asset('assets/img/logo.svg')}}" alt="">
                        <span class="aven AvenirNextWorld f28 text-white ml-3">Elchifaa</span>
                    </div>
                    <div class="ml-md-5 d-flex align-items-center mb-1">
                        <div class="elementor-icon">
                            <i aria-hidden="true" class="melawell-icon- melawell-icon-messages-2"></i>
                        </div>
                        <div class="ml-3">
                            <span class="grey_color AvenirNextWorld f16 d-block">Vous avez des questions ? Appelez-nous 24h/24 et 7j/7 !</span>
                            <span class="textwhi text-white f18 AvenirNextWorld">+213 699256736</span>
                        </div>
                    </div>
                </div>
                <div>
                    <form class="form-inline">
                        <div class="form-group">
                          <input type="text" class="form-control mr-3 mb-1"  placeholder="Votre adresse mail">
                          <button class="btn text-white f16 AvenirNextWorld shop_now_btn mb-1">S'inscrire</button>
                        </div>


                      </form>
                </div>
            </div>
        </div>
    </section>
    @include('includes.footer')
    <script src="{{ asset('js/init_map.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDH1gP_K3PKyrGZxadhLVsixfEYVCIy3UI&callback=initMap">
    </script>
<script src="https://kit.fontawesome.com/df2a0808c5.js" crossorigin="anonymous"></script>
    <script src="{{ asset('js/main.js') }}"></script>

</body>

</html>
