<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Médicaments</title>
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
    <link rel="shortcut icon" href="{{ asset('assets/img/logo.svg') }}" type="image/x-ico  n">
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css"
        integrity="sha384-QYIZto+st3yW+o8+5OHfT6S482Zsvz2WfOzpFSXMF9zqeLcFV0/wlZpMtyFcZALm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/easyzoom@2.6.0/css/easyzoom.min.css">
</head>

<body>
    @include('includes.header')
    <section id="product">
        <div class="container mt-5">
            <div class="row">
                <div class="col-md-6">
                    <div class="product-img">
                        <div class="easyzoom easyzoom--overlay">
                            <a href="{{ asset('uploads/' . $product[0]->image_name) }}">
                                <img src="{{ asset('uploads/' . $product[0]->image_name) }}" alt=""
                                    width="100%" height="100%" />
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="">
                        <h3 class="AvenirNextWorld black_color fw_700">{{ $product[0]->title }}</h3>
                        <h5 class="Avenir_Heavy blue_color fw_700 mt-2">{{ $product[0]->price }} DZ</h5>
                        <div class="mt-3">
                            <span class="f20 Avenir_Heavy black_color">Description</span>
                            <p class="deep_grey AvenirNextWorld f17">{{ $product[0]->description }}</p>
                            {!! nl2br(e($product[0]->description)) !!}
                        </div>
                        <div class="pt-3 d-flex justify-content-between align-items-center">
                            <span class="f20 black_color Avenir_Heavy">Quantité</span>
                            <div class="">

                                <button class="btn deep_grey Avenir_Heavy quantity_btn"id='btn_min'>-</button>
                                <span class="mx-2 blue_color Avenir_Heavy f17" id='quantity'></span>
                                <button class="btn deep_grey Avenir_Heavy quantity_btn" id='btn_plus'>+</button>
                            </div>
                        </div>
                        <div class="mt-3">
                            <button class="btn shop_now_btn text-white AvenirNextWorld w-100" id='basket'>ajouter au
                                panier</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @include('includes.footer')
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="{{ asset('js/easyzoom.js') }}"></script>
    <script></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
        < script src = "https://cdn.jsdelivr.net/npm/easyzoom@2.6.0/dist/easyzoom.min.js" >
    </script>
    </script>
    <script src="https://kit.fontawesome.com/df2a0808c5.js" crossorigin="anonymous"></script>
    <script>
        var product =@json($product)
    </script>
    <script src="{{ asset('js/product.js') }}"></script>

</body>

</html>
