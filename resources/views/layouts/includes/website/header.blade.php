<header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <div class="logo">
        <h1>
          <a href="/">
            <img src="{{ asset('/website/img/logo.png') }}" alt="" class="img-fluid">
            {{ env('APP_NAME') }}
          </a>
        </h1>
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto" href="/#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="/#about">The Firm</a></li>
          <li><a class="nav-link scrollto " href="/#live">Live Rate</a></li>
          <li><a class="nav-link scrollto" href="/#team">Team</a></li>          
          <li><a class="nav-link scrollto" href="/#contact">Get Connected</a></li>
          <li><a class="nav-link scrollto" href="/inquiry">Inquiry</a></li>          
          <li><a class="getstarted scrollto" href="/login">Login / Signup</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->