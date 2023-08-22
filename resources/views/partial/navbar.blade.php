{{-- <nav class="navbar navbar-expand-lg navbar-dark bg-danger">
     <div class="container">
          <a class="navbar-brand" href="/">Aplikasi Blog</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
               <ul class="navbar-nav">
                    <li class="nav-item">
                         <a class="nav-link {{ ($active === "home") ? 'active' : '' }}" aria-current="page" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                         <a class="nav-link {{ ($active === "about") ? 'active' : '' }}" href="/about">About</a>
                    </li>
                    <li class="nav-item">
                         <a class="nav-link {{ ($active === "posts") ? 'active' : '' }}" href="/blog">Blog</a>
                    </li>
                    <li class="nav-item">
                         <a class="nav-link {{ ($active === "categories") ? 'active' : '' }}" href="/categories">Categories</a>
                    </li>
               </ul>

               <ul class="navbar-nav ms-auto">
                    @auth
                        <li class="nav-item dropdown">
                         <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="flase">
                              Welcome back, {{ auth()->user()->name }}
                         </a>
                         <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                              <li><a class="dropdown-item" href="/dashboard"><i class="bi bi-layout-text-sidebar-reverse"></i> My Dashboard</a></li>
                              <li><hr class="dropdown-divider"></li>
                              <li>
                                   <form action="/logout" method="POST">
                                        @csrf
                                        <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-right"></i> Logout</button>
                                   </form>
                              </li>
                         </ul>
                        </li>
                    @else
                    <li class="nav-item">
                         <a class="nav-link {{ ($active === "login") ? 'active' : '' }}" href="/login"><i class="bi bi-box-arrow-in-right"></i>Login</a>
                    </li>
                    
                    @endauth
               </ul>
              
          </div>
     </div>
</nav> --}}

<div class="container-fluid d-none d-lg-block">
    <div class="row align-items-center bg-dark px-lg-5">
        <div class="col-lg-9">
            <nav class="navbar navbar-expand-sm bg-dark p-0">
                <ul class="navbar-nav ml-n2">
                    <li class="nav-item border-right border-secondary">
                        <a class="nav-link text-body small" href="#">{{ date('D, d F Y') }}</a>
                    </li>
                    {{-- <li class="nav-item border-right border-secondary">
                        <a class="nav-link text-body small" href="#">Advertise</a>
                    </li>
                    <li class="nav-item border-right border-secondary">
                        <a class="nav-link text-body small" href="#">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-body small" href="#">Login</a>
                    </li> --}}
                </ul>
            </nav>
        </div>
        <div class="col-lg-3 text-right d-none d-md-block">
            <nav class="navbar navbar-expand-sm bg-dark p-0">
                <ul class="navbar-nav ml-auto mr-n2">
                    @foreach($Sosmed as $Sosmed)
                    <li class="nav-item">
                        <a class="nav-link text-body" href="{{ $Sosmed->twitter }}"><small class="fab fa-twitter"></small></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-body" href="{{ $Sosmed->fb }}"><small class="fab fa-facebook-f"></small></a>
                    </li>
                    {{-- <li class="nav-item">
                        <a class="nav-link text-body" href="#"><small class="fab fa-linkedin-in"></small></a>
                    </li> --}}
                    <li class="nav-item">
                        <a class="nav-link text-body" href="{{ $Sosmed->ig }}"><small class="fab fa-instagram"></small></a>
                    </li>
                    {{-- <li class="nav-item">
                        <a class="nav-link text-body" href="#"><small class="fab fa-google-plus-g"></small></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-body" href="#"><small class="fab fa-youtube"></small></a>
                    </li> --}}
                    @endforeach
                </ul>
            </nav>
        </div>
    </div>
    <div class="row align-items-center bg-white py-3 px-lg-5">
        <div class="col-lg-4">
            <a href="/" class="navbar-brand p-0 d-none d-lg-block">
                {{-- <h1 class="m-0 display-4 text-uppercase text-primary">Biz<span class="text-secondary font-weight-normal">News</span></h1> --}}
                <a href="/"><img class="m-0 display-4 text-uppercase text-primary img-fluid" src="{{asset('home/img/justitia.png')}}" alt="" width="40%"></a>
            </a>
        </div>
        <div class="col-lg-8 text-center text-lg-right">
            <a href="https://htmlcodex.com"><img class="img-fluid" src="{{asset('home/img/ads-728x90.png')}}" alt=""></a>
        </div>
    </div>
</div>
<!-- Topbar End -->


<!-- Navbar Start -->
<div class="container-fluid p-0">
    <nav class="navbar navbar-expand-lg bg-dark navbar-dark py-2 py-lg-0 px-lg-5">
        <a href="/" class="navbar-brand d-block d-lg-none">
            <h1 class="m-0 display-4 text-uppercase text-primary">Justitia
                
            </h1>
        </a>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-between px-0 px-lg-3" id="navbarCollapse">
            <div class="navbar-nav mr-auto py-0">
               
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Profil</a>
                    <div class="dropdown-menu rounded-0 m-0">
                        <a href="/tentang-kami" class="dropdown-item">Tentang Justitia Official</a>
                        <a href="/visi-misi" class="dropdown-item">Visi & Misi</a>
                        <a href="#" class="dropdown-item">Justitia News</a>
                    </div>
                </div>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Justitia Publikasi</a>
                    <div class="dropdown-menu rounded-0 m-0">
                        @foreach($Categories as $Categories)
                        <a href="/posts?category={{ $Categories->slug }}" class="dropdown-item">{{ $Categories->name }} </a>
                        @endforeach
                    </div>
                </div>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Justitia News</a>
                    <div class="dropdown-menu rounded-0 m-0">
                        @foreach($News as $News)
                        <a href="/posts?news={{ $News->slug }}" class="dropdown-item">{{ $News->name }} </a>
                        @endforeach
                       
                    </div>
                </div>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Layanan</a>
                    <div class="dropdown-menu rounded-0 m-0">
                        <a href="/konsultasi-hukum" class="dropdown-item">Konsultasi Hukum</a>
                        <a href="/tanya-hukum" class="dropdown-item">Tanya Hukum</a>
                    </div>
                </div>
                
                <a href="/kirim-tulisan" class="nav-item nav-link">Kirim Tulisan</a>
            </div>
            <form action="/posts">
            <div class="input-group ml-auto d-none d-lg-flex" style="width: 100%; max-width: 300px;">
                <input type="text" class="form-control border-0" placeholder="Keyword" name="search" value="{{ request('search') }}">
                <div class="input-group-append">
                    <button class="input-group-text bg-primary text-dark border-0 px-3" type="submit"><i
                            class="fa fa-search"></i></button>
                </div>
            </div>
        </form>
        </div>
    </nav>
</div>
<!-- Navbar End -->