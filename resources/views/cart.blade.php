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
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

</head>

<body>
    @include('includes.header')
    <div class="my_account_back_img">
        <div class="container">
            <div class="my_account d-flex align-items-center">
                <span class="AvenirNextWorld f35 black_color fw_700">Mon panier
                </span>
            </div>
        </div>
    </div>
    <section id="cart">
        <div class="container mt-5">

            <div class="row">
                <div class="col-md-8">
                    <div class="responsive-table">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th class="grey_color f17 AvenirNextWorld">Produit </th>
                                    <th class="grey_color f17 AvenirNextWorld">Prix </th>
                                    <th class="grey_color f17 AvenirNextWorld">Quantité</th>
                                    <th class="grey_color f17 AvenirNextWorld">Total</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody id='exampleid'>
                            </tbody>
                        </table>
                    </div>
                    @include('upload.form')
                </div>
                <div class="col-md-4 h-100 basket_container">
                    <div class="p-4">
                        <span class="f18 Avenir_Heavy text-uppercase black_color">Total du panier</span>
                        <div class="d-flex align-items-center justify-content-between mt-3 pb-2 seperator">
                            <span class="AvenirNextWorld f16 black_color">Total</span>
                            <div>
                                <span class="AvenirNextWorld f16 black_color d-block"> Total: </span>
                                <span class="AvenirNextWorld f16 blue_color" id="sub-total"> </span>
                            </div>
                        </div>
                        <div class="d-flex align-items-center justify-content-between mt-3 pb-2 seperator">
                            <span class="AvenirNextWorld f16 black_color">Livraison</span>
                            <div>
                                <span class="AvenirNextWorld f16 black_color d-block"> Livraison: </span>
                                <span class="AvenirNextWorld f16 blue_color"> 400DZ </span>
                            </div>
                        </div>
                        <div class="d-flex align-items-center justify-content-between mt-3 pb-2 ">
                            <span class="AvenirNextWorld f16 black_color">Total</span>
                            <div>
                                <span class="AvenirNextWorld f16 black_color d-block"> Total: </span>
                                <span class="AvenirNextWorld f16 blue_color" id='total'> </span>
                            </div>
                        </div>
                        <button class="btn text-white f14 AvenirNextWorld w-100 py-2 blue_background br_10"
                            id='submit_order' type="submit">
                            Passer la commande
                        </button>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <div class="">
        @include('includes.footer')
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <script src="https://kit.fontawesome.com/df2a0808c5.js" crossorigin="anonymous"></script>
    <script>
        var product_array = JSON.parse(localStorage.getItem('product_array'));
        const found = product_array.some(el => el.need_presecription === 0);
        product_array.forEach(element => {
            console.log(element.need_presecription);
        });

        console.log(found);
        var sub_total = 0;
        append();

        function append() {
            $('#exampleid').empty();

            $.each(product_array, function(key, value) {
                value.description = ""
                value.sub_total = value.price * value.qnt;
                sub_total += value.sub_total;
                $('#exampleid').append("<tr class='clickable'>\
                                                										<td><img class='img_product' src=/uploads/products/>" + value.image_name +
                    " alt=''> " + "</td>\
                                                										<td class='AvenirNextWorld f14 black_color'>" + value.title + "</td>\
                                                										<td class='AvenirNextWorld f14 black_color'>" + value.price + " DZ </td>\
                                                										<td class='AvenirNextWorld f14 black_color'>" + value.qnt + "</td>\
                                                										<td class='AvenirNextWorld f14 black_color'>" + value.sub_total +
                    " DZ </td>\
                                                										<td class='AvenirNextWorld f14 black_color'>\
                                                                                            <button class='btn p-0 delete_item' id='delete_item' value=" +
                    value.id + ">\
                                                                                                <i aria-hidden='true'  class='melawell-icon- melawell-icon-trash blue_color'></i>\
                                                                                            </button> \
                                                                                        </td>\
                                                </tr>");
            })
        }
        $('#sub-total').text(sub_total + ' DZ');
        var total = sub_total + 400;
        $('#total').text(total + ' DZ');
        $('.delete_item').click(function($event) {
            product_array = product_array.filter((item) => item.id !== JSON.parse($(this).val()))
            localStorage.setItem('product_array', JSON.stringify(product_array))
            append();
        });
        $('#submit_order').click(function($event) {
            if ({!! str_replace("'", "\'", json_encode(Auth::user())) !!}) {
                var form = document.getElementById('myForm');
                var formData = new FormData(form);
                formData.append('data', JSON.stringify(product_array));
                var xhr = new XMLHttpRequest();
                xhr.open('POST', '/place_order', true);
                xhr.onload = function() {
                    if (xhr.status === 200) {
                        console.log("success");
                        localStorage.removeItem('product_array');
                        window.location.href = "/order_confirmed";
                    } else {
                        console.log("error");
                    }
                };
                xhr.send(formData);
                // $.ajax({
                //     url: '/place_order',
                //     type: 'POST',
                //     data: {
                //         data: formData,
                //     },
                //     success: function(response) {

                //     },
                //     error: function(error) {

                //     }
                // });
            } else {
                window.location.href = "/login"
            }
        })
    </script>

</body>

</html>
