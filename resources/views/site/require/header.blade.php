<!-- ======= Top Bar ======= -->
  <div id="topbar" class="d-flex align-items-center fixed-top">
    <div class="container d-flex align-items-center justify-content-center justify-content-md-between">
      <div class="align-items-center d-none d-md-flex">
        <i class="bi bi-clock"></i> DE 8heures du Matin à 10heures du Soir
      </div>
      <div class="d-flex align-items-center">
        <i class="bi bi-phone"></i> Contactez-nous à ce numéaro: 226 76 72 47 92 / 79 64 67 24
      </div>
    </div>
  </div>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

        <a href="index.html" class="logo me-auto"><img src="assets2/img/logo_sante.jpg" alt="" width="120px"></a>
        <!-- Uncomment below if you prefer to use an image logo -->
        <h1 class="logo me-auto"><a href="index.html"> Naana <br> Consultation </a></h1>

      <nav id="navbar" class="order-last navbar order-lg-0">
        <ul>
          <li><a class="nav-link scrollto " href="{{ url('Accueil') }}">Accueil</a></li>
          <li><a class="nav-link scrollto" href="#aboutly">A propos</a></li>
          <li><a class="nav-link scrollto" href="#medecin">Medecins</a></li>
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>

          @if (Route::has('login'))
                    @auth
                        <li class="dropdown"><a href="#"><span>Mon compte</span>
                            <i class="bi bi-chevron-down"></i></a>
                            <ul>
                              <li><a href="{{ url('/dashboard') }}">Modifer mes informations personnelles</a></li>
                              <li>
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <input class="btn btn-danger" type="submit" value="Se déconnecter">
                                </form>
                                </li>
                            </ul>
                        </li>

                        {{-- <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 underline dark:text-gray-500">Mon compte</a> --}}
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 underline dark:text-gray-500">Se connecter</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline dark:text-gray-500">S'inscrire</a>
                        @endif
                    @endauth
            @endif

          {{-- <li><a class="nav-link scrollto" href="#mon compte">Mon compte</a></li> --}}
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->
