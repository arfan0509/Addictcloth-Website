 <!-- ======= Header ======= -->
 <header id="header" class="fixed-top">
     <div class="d-flex align-items-center justify-content-between container">
         <a href="#" class="logo"><span class="text-dark">Addictive</span>Clothing<span
                 class="title-admin">Admin</span></a>
         <nav id="navbar" class="navbar">
             <ul>
                 <li><a class="nav-link scrollto" href="{{ route('input') }}">Input</a></li>
                 <li><a class="nav-link scrollto" href="{{ route('barang') }}">Barang</a></li>
                 <li><a class="nav-link scrollto" href="{{ route('user') }}">User</a></li>
                 <li><a class="nav-link scrollto" href="{{ route('konfirmasi') }}">Konfirmasi Pembayaran</a></li>
                 <li class="nav-item">
                     <a href="">
                         <form method="POST" action="{{ route('logout') }}">
                             @csrf
                             <button type="submit" class="btn btn-link nav-link">LOGOUT</button>
                         </form>
                     </a>
                 </li>
         </nav><!-- .navbar -->

     </div>
 </header><!-- End Header -->
 {{-- <a href="login" class="login">Login</a> --}}
