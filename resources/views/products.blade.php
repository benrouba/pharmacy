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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css" integrity="sha384-QYIZto+st3yW+o8+5OHfT6S482Zsvz2WfOzpFSXMF9zqeLcFV0/wlZpMtyFcZALm" crossorigin="anonymous">

</head>

<body>

    @include('includes.header')
    <section>
        <div class="my_account_back_img">
            <div class="container">
                <div class="my_account d-flex align-items-center">
                    <span class="AvenirNextWorld f35 black_color fw_700">Médicaments
                    </span>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container mt-5">
            <div class="row">
                <div class="col-md-3">
                    <ul class="li list-unstyled">
                        <div class="d-flex justify-content-center py-3">
                            <form action="{{ route('products') }}" method="POST">
                                @csrf
                              <div class="input-group">
                                <input type="search" class="form-control" placeholder="Recherche un produit" name="search" value="{{ request('search') }}">

                              </div>
                            </form>
                          </div>
                     {{-- {{ request('category') }}  {{ request('category') === $item->id ? 'checked' : '' }} --}}
                        <form >
                            @foreach ($categories as $item)
                                <li>
                                    <div class="form-group form-check">
                                        <input type="checkbox" class="form-check-input" id="{{ $item->id }}"
                                            name="category"  {{ request('category')==$item->id ? 'checked': '' }}>
                                        <label class="form-check-label AvenirNextWorld f16 black_color"
                                            for="{{ $item->id }}">{{ $item->title }}</label>
                                    </div>
                                </li>
                            @endforeach
                        </form>
                    </ul>
                </div>
                <div class="col-md-9">
                    <div class="row">
                        @foreach ($products as $medecine)
                            <div class="col-md-4">
                                <a href='product/{{$medecine->id}}' class="swiper-slide p-3">
                                    <img src="{{ asset('uploads/products/' . $medecine->image_name) }}" alt=""
                                        class="w-100">
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
                            </div>
                        @endforeach
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
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <script src="{{ asset('js/main.js') }}"></script>
    <script src="https://kit.fontawesome.com/df2a0808c5.js" crossorigin="anonymous"></script>
    <script src="{{ asset('js/main.js') }}"></script>


</body>

</html>
