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
    <link rel="shortcut icon" href="{{ asset('assets/img/logo.svg') }}" type="image/x-icon">
</head>

<body>
   <div class="row no-gutters h-100">
    <div class="col-md-2 dashboardBack">
        <ul class="nav flex-column no-wrap">
            <li class="nav-item mb-5">
                <a href="/" class="d-flex align-items-center justify-content-center">
                    <img src="{{ asset('assets/img/logo.svg') }}" alt="" class="mr-2">
                    <span class="f20 deep_grey fw_700 ">PharmaElchifaa</span>
                </a>
              </li>
            <li class="nav-item mb-3">
              <a class="nav-link AvenirNextWorld" href="#">Analytique</a>
            </li>
            {{-- <li class="nav-item mb-3">
              <a class="nav-link AvenirNextWorld" href="{{ route('admin.index') }}">Clients</a>
            </li> --}}
            <li><a href="{{ route('admin.clients') }}">Clients</a></li>
            <li class="nav-item mb-3">
              <a class="nav-link AvenirNextWorld" href="#">Commandes</a>
            </li>
            <li class="nav-item mb-3">
                <a class="nav-link AvenirNextWorld" href="{{ route('admin.products') }}">Médicaments</a>
              </li>
          </ul>
    </div>
    <div class="col-md-10">
        <router-view></router-view>
    </div>
   </div>

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

</body>

</html>
