 <!-- ======= Header ======= -->
 <header id="header" class="fixed-top">
     <div class="d-flex align-items-center justify-content-between container">
         <a href="{{ route('home.index') }}" class="logo"><span class="text-dark">Addictive</span> Clothing</a>
         <nav id="navbar" class="navbar">
             <ul>
                 <li><a class="nav-link scrollto active" href="#hero">Beranda</a></li>
                 <li><a class="nav-link scrollto" href="#services">Layanan</a></li>
                 <li><a class="nav-link scrollto" href="#Produk">Produk</a></li>
                 <li><a class="nav-link scrollto" href="#kami">Tentang Kami</a></li>
                 @if (Auth::check())
                     <div class="box">
                         <li class="dropdown">
                             <a class="name">{{ Auth::user()->name }}</a>
                             <ul>
                                 <li class="nac-item"><a href="{{ route('profile') }}">PROFILE</a></li>
                                 <li class="nac-item"><a href="{{ route('favorite') }}">FAVORIT</a></li>
                                 <li class="nac-item"><a href="{{ route('pesanan') }}">PESANAN SAYA</a></li>
                                 <li class="nav-item">
                                     <a href="">
                                         <form method="POST" action="{{ route('logout') }}">
                                             @csrf
                                             <button type="submit" class="btn btn-link nav-link">LOGOUT</button>
                                         </form>
                                     </a>
                                 </li>
                             </ul>
                         </li>
                     </div>
             </ul>
             </li>
         @else
             <li><a href="login" class="login">Login</a></li>
             @endif
             </ul>
             <i class="bi bi-list mobile-nav-toggle"></i>
         </nav><!-- .navbar -->

     </div>
 </header><!-- End Header -->
 {{-- <a href="login" class="login">Login</a> --}}
