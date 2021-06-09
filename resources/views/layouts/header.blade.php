<!-- ======= Header ======= -->
<header id="header" class="fixed-top" >
    @guest
    <div class="container-fluid d-flex align-items-center ">
    @else    
    <div class="container d-flex align-items-center ">
    @endguest

      <h1 class="logo me-auto ms-5 ps-5"><a href="{{ url('/') }}"><img src="/assets/img/logo1.png" alt=""></a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link" href="#hero"><strong>Beranda</strong></a></li>
          @guest
          <li><a class="nav-link" href="{{route('register')}}"><strong>Jelajah Ide</strong></a></li>
          @else
          <li><a class="nav-link" href="{{route('home')}}"><strong>Jelajah Ide</strong></a></li>
          @endguest
          <li><a class="nav-link disabled" href=""><strong>Berkontribusi</strong></a></li>
          <li><a class="nav-link disabled" href="#"><strong>Berlangganan</strong></a></li>
         
          
                        @guest
                        <li>
                             <a href="{{ url('/register') }}">
                                <button type="submit" class="btn btn-outline-light btn-sm ms-3 me-5" style="background-color:#F67451">Daftar Sekarang</button>
                            </a>
                        @else
                        <li>
                            <div class="input-group ms-4">
                                    <input class="form-control btn-sm" type="text" placeholder="cari" id="example-search-input" />
                                    <span class="input-group-append ps-3">
                                        <button class="btn btn-outline-danger btn-sm" type="button">
                                            <i class="fa fa-search btn-sm"></i>
                                        </button>
                                    </span>
                            </div>
                        </li>
                        <li>
                        <div class="dropdown mt-3 ps-5">
                            <p class="text-dark dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                <?php 
                                    if (Auth::user()->username == null) {
                                ?>
                                     {{ Auth::user()->name}}
                                <?php 
                                    }else {
                                ?>   
                                    {{ Auth::user()->username }}
                                <?php                
                                    }
                                ?>
                            </p>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                <li>
                                    <a class="dropdown-item text-dark" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </li>
                                <!-- <li><a class="dropdown-item text-dark" href="#">Another action</a></li> -->
                            </ul>
                        </div>
                        @endguest
          </li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->
