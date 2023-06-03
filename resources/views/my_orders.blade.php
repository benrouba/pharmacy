<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <title>Mes commandes</title>
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
    <link rel="shortcut icon" href="{{ asset('assets/img/logo.svg') }}" type="image/x-icon">
</head>

<body>
    @include('includes.header')
    <div class="container">
        <div class="table-responsive">
            <table class="table table-borderless">
                <thead class="ave Avenir_Heavy f17 grey_color">
                    <tr>
                        <th></th>
                        <th>Date</th>
                        <th>Total</th>
                        <th>Adresse de livraison</th>
                        <th>Statut</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($orders as $order)
                        <tr data-toggle="collapse" data-target="#collapse{{ $order->id }}" class="accordion-toggle">
                            <td><button class="btn arrow_btn d-flex justify-content-center align-items-center p-0"><i
                                        class="arrow right f10"></i></button></td>
                            <td class="black_color AvenirNextWorld f17">{{ $order->date }}</td>
                            <td class="black_color AvenirNextWorld f17">{{ $order->amount }} DZ</td>
                            <td class="black_color AvenirNextWorld f17">{{ $order->address }}</td>
                            <td class="black_color AvenirNextWorld f17">Livré</td>
                        </tr>
                        <tr>
                            <td colspan="6" class="hiddenRow">
                                <div id="collapse{{ $order->id }}" class="accordian-body collapse">
                                    @foreach ($order->items as $item)
                                        <div class="pl-3 mb-3">
                                            <a href="" class="black_color avenit AvenirNextWorld f17 custom_hyper">
                                                <span class="mr-2">{{ $item->qnt }} </span>
                                                <img src="/uploads/products/{{ $item->image_name }}" alt=""
                                                    class="mr-2 item_img">
                                                <span class="Medium f15 black mr-2">{{ $item->title }} </span>
                                                <span class="mr-2">{{ $item->price }} DZ</span>
                                                {{-- <p class="black_color f16 AvenirNextWorld">{{$item->description}}</p> --}}
                                            </a>
                                        </div>
                                    @endforeach
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
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
    <script src="https://kit.fontawesome.com/df2a0808c5.js" crossorigin="anonymous"></script>
    {{-- <script src="{{ asset('js/main.js') }}"></script> --}}

</body>

</html>
