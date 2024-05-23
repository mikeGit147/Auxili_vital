
<div class="navbar">
    <div class="navbar-left">
        <a href="#"><h1>Auxili Vital</h1></a>
        <div class="navbar-right" id="navbar">
            <a href="#responsabilidad"><h2>Responsabilidad Legal</h2></a>
            <a href="#pautas"><h2>Pautas P.A.S</h2></a>
            <a href="#protocolos"><h2>Protocolos</h2></a>
        </div>
        <a href="#" class="icon" onclick="openMenu()">
            <i class="fa fa-bars"></i>
        </a>
    </div>
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
</script>

