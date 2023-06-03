<div class=" py-3">
    <a href="/" class="d-flex justify-content-center">
        <img src="{{ asset('assets/img/logo.svg') }}" alt="" class="mr-2">
        <span class="f35 deep_grey fw_700 ">PharmaElchifaa</span>
    </a>
</div>
<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light py-4">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-between" id="navbarNav">
            <ul class="navbar-nav f16">
                <li class="nav-item ml-1 {{ request()->is('/') ? 'active' : '' }}">
                    <a class="nav-link AvenirNextWorld " href="/#">Accueil <span
                            class="sr-only">(current)</span></a>
                </li>
                <a href="" class="d-flex pr-2 border_right">
                    <li class="nav-item ml-1 {{ request()->is('products') ? 'active' : '' }}">
                        <a class="nav-link AvenirNextWorld" href="/products"> Medicaments</a>
                    </li>
                </a>
                <a href="" class="d-flex pr-2 border_right">
                    <li class="nav-item ml-1">
                        <a class="nav-link AvenirNextWorld" href="/#about_us">A propos</a>
                    </li>
                </a>
                <a href="" class="d-flex pr-2 border_right">
                    <li class="nav-item ml-1">
                        <a class="nav-link AvenirNextWorld border_right" href="/#contact_us">Contacter Nous</a>
                    </li>
                </a>
                @if (Auth::user())
                    <li class="nav-item ml-1 {{ request()->is('my-orders') ? 'active' : '' }}">
                        <a class="nav-link AvenirNextWorld" href="/my-orders">Mes commandes</a>
                    </li>
                @endif
            </ul>
            <form class="mb-0" action="{{ route('products') }}" method="POST">
                @csrf
                <div class="searchBox">
                    <input class="searchInput"type="text"  name="search" value="{{ request('search') }}"class=" AvenirNextWorld f16" placeholder="Rechercher un médicament">
                    <button class="searchButton" href="#">
                        <i aria-hidden="true" class="f25 melawell-icon-search"></i>
                    </button>
                </div>
                {{-- <div class="input-group">
                    <input class="form-control" type="text" placeholder="Recharcher a..." aria-label="Search for..."
                        aria-describedby="btnNavbarSearch" />

                </div> --}}
            </form>
            <div class="">
                <div class="d-flex align-items-center">
                    <a href="/cart" class="d-flex pr-3 border_right align-items-center">
                        <i aria-hidden="true" class="f25 melawell-icon-shopping-cart black_color mr-1"></i>
                        <div class="d-flex align-items-center">
                            <div class="AvenirNextWorld f1 text-white blue_bg position-relative mr-1">
                                <span class="badge" id='basket_header'></span>
                            </div>
                            <span class="AvenirNextWorld f18 black_color" id="sub_total"></span>
                        </div>
                    </a>
                    {{-- <img src="{{ asset('assets/img/user.png') }}" alt="" class="user_img pr-2"> --}}
                    <i aria-hidden="true" class="melawell-icon-user f25 mr-2 black_color"></i>
                    <div class="hc_account_box">
                        <div class="sp_myaccount text-capitalize">
                            {{ Auth::user() ? Auth::user()->name . ' ' . Auth::user()->family_name : 'Mon compte' }}
                        </div>
                        <div class="login_right hc_tma_text ">

                            <!-- في حالة المستخدم مسجل الدخول -->
                            @if (Auth::check())
                                <a href="{{ route('user.logout') }}">Déconnexion</a>
                            @else
                                <a href="{{ route('login') }}">Connexion</a><span class="hidden1024down"> / </span>
                                <a href="{{ route('register') }}">Creer un compte</a>
                            @endif

                        </div>
                    </div>
                </div>
            </div>
    </nav>
</header>
<script>
    product_array = localStorage.getItem('product_array') ? JSON.parse(localStorage.getItem('product_array')) : []
    sub_total = 0
    product_array.forEach((item) => {
        sub_total += item.price * item.qnt
    })
    document.getElementById("sub_total").innerHTML = sub_total + ' DZ';
    var basket = product_array
    document.getElementById("basket_header").innerHTML = basket?.length ? basket.length : 0;
</script>
