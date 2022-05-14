<nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #4065AE">
  <div class="container">
    <img class="navbar-brand fw-bold" src={{ asset('images/logo-endek.png') }} width="100" href="/">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link {{ ($title === "Home") ? 'active' : '' }} " aria-current="page" href="/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ ($title === "About") ? 'active' : '' }}" href="/about">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ ($title === "Dashboard") ? 'active' : '' }}" href="/dashboard">Dashboard</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle {{ ($title === "Features") ? 'active' : '' }}" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Features
          </a>
          
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="/searchingmenu">Searching</a></li>
            <li><a class="dropdown-item" href="/browsing">Browsing</a></li>
          </ul>
      </ul>
    </div>
  </div>   
 </nav>