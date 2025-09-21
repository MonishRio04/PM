 <header id="header" class="header d-flex align-items-center sticky-top">
     <div class="container-fluid container-xl position-relative d-flex align-items-center">

         <a href="{{url('/')}}" class="logo d-flex align-items-center me-auto">
             <!-- Uncomment the line below if you also wish to use an image logo -->
             <img loading="lazy" src="{{asset('assets/img/logo_main_rect.png')}}" alt="" class="img-fluid">
             <!-- <h1 class="sitename"></h1> -->
         </a>

         <nav id="navmenu" class="navmenu">
             <ul>
                 <li><a href="{{url('/')}}#hero" class="active">Home</a></li>
                 <li><a href="{{url('/')}}#about">About</a></li>
                 <li><a href="{{url('/')}}#services">Services</a></li>
                 <li><a href="{{url('/')}}#contact">Contact</a></li>
             </ul>
             <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
         </nav>
         <a class="btn-getstarted" href="{{url('/')}}#contact">Get Started</a>
     </div>
 </header>
