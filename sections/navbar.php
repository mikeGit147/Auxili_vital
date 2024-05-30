<!-- 
<div class="navbar">
    <div class="navbar-left">
        <a href="#"><h1>Auxili Vital</h1></a>
    </div>
    <div class="navbar-right" id="navbar">
        <a href="#responsabilidad"><h2>Responsabilidad Legal</h2></a>
        <a href="#pautas"><h2>Pautas P.A.S</h2></a>
        <a href="#protocolos"><h2>Protocolos</h2></a>
    </div>
    <a href="#" class="icon" onclick="openMenu()">
        <i class="fa fa-bars"></i>
    </a>
</div>
<script>
    navbar = document.getElementById("navbar");
    icon = document.getElementByClass("icon");
    function openMenu() {
  if (navbar.className === "navbar") {
    navbar.className += "responsive";
  } else {
    navbar.className = "navbar";
  }
}
</script> -->
<!-- <nav class="navbar navbar-expand-lg"> -->
<div class="container position-absolute top-0 start-50 translate-middle-x ">
  <header class="d-flex flex-wrap justify-space-around w-100 py-3 nav navbar navbar-expand-lg">
    <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
      <svg class="bi me-2" width="40" height="32">
        <use xlink:href="#bootstrap"></use>
      </svg>
      <span class="fs-2 text-white">Auxili Vital</span>
    </a>
    <button id="togglebtn" class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navbarScroll">
      <ul class="nav nav-pills navbar-nav-scroll" style="--bs-scroll-height: 100px;">
        <li class="nav-item"><a href="#responsabilidad" class="nav-link text-white fs-4" aria-current="page">Responsabilidad Legal</a></li>
        <li class="nav-item"><a href="#pautas" class="nav-link text-white fs-4">Pautas P.A.S</a></li>
        <li class="nav-item"><a href="#protocolos" class="nav-link text-white fs-4">Protocolos</a></li>
      </ul>
    </div>
  </header>
</div>
<!-- </nav> -->
<!-- <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar scroll</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarScroll">
      <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Link
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li>
              <hr class="dropdown-divider">
            </li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" aria-disabled="true">Link</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav> -->