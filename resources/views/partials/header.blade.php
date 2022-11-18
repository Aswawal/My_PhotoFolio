  <!-- ======= Header ======= -->
  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid d-flex align-items-center justify-content-between">

      <a href="/" class="logo d-flex align-items-center  me-auto me-lg-0">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <i class="bi bi-code"></i>
        <h1>As-<i class="text-success">Code</i></h1>
      </a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="/" class="{{ ($title === "Home") ? 'active' : '' }}">Home</a></li>
          <li><a href="/about" class="{{ ($title === "About") ? 'active' : '' }}">About</a></li>
          <li class="dropdown"><a class="{{ ($title === "Gallery") ? 'active' : '' }}" href="#"><span>Website</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
              <li><a href="/gallery" class="{{ ($title === "Gallery") ? 'active' : '' }}">Website Bisnis</a></li>
              <li><a href="/gallery" class="{{ ($title === "Gallery") ? 'active' : '' }}">Website Pemerintah</a></li>
              <li><a href="/gallery" class="{{ ($title === "Gallery") ? 'active' : '' }}">Website Portofolio</a></li>
              <li><a href="/gallery" class="{{ ($title === "Gallery") ? 'active' : '' }}">Website Pendidikan</a></li>
            </ul>
          </li>
          <li><a class="{{ ($title === "Services") ? 'active' : '' }}" href="/services">Services</a></li>
          <li><a class="{{ ($title === "Contact") ? 'active' : '' }}" href="/contact">Contact</a></li>
        </ul>
      </nav><!-- .navbar -->

      <div class="header-social-links">
        <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
      </div>
      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

    </div>
  </header><!-- End Header -->

