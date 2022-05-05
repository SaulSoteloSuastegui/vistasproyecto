<nav class="navbar navbar-expand-md bg-dark navbar-dark">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
    <li class="nav-item">
    <a class="nav-link" href="{{route('welcome')}}">inicio</a>
  </li>
 <!-- Dropdown -->
 <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        solicitud
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="{{route('solicitud.solicitud')}}">Crear</a>
      
        <a class="dropdown-item" href="#">Consultar</a>
        <a class="dropdown-item" href="#">Promociones/a>
        <a class="dropdown-item" href="#">Link 3</a>
      </div>
  </li>
 <!-- Dropdown -->
 <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
         Carpeta
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item"  href="{{route('carpeta.precarpeta')}}">Crear</a>
        <a class="dropdown-item" href="#">Consultar</a>
        <a class="dropdown-item" href="#">Promociones</a>
        <a class="dropdown-item" href="#">Documento</a>
      </div>
  </li>
 <!-- Dropdown -->
 <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        Audiencia
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="{{route('audiencia.preaudiencia')}}">Crear</a>
        <a class="dropdown-item" href="#">Consultar</a>
        <a class="dropdown-item" href="#">Documento</a>
      </div>
    </li>

     <!-- Dropdown -->
 <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        Documentos
      </a>
      <div class="dropdown-menu">
      <a class="dropdown-item" href="#">Crear</a>
        <a class="dropdown-item" href="#">red</a>
        <a class="dropdown-item" href="#">software</a>
        <a class="dropdown-item" href="#">Documentos</a>
      </div>
    </li>
 <!-- Dropdown -->
 <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        informatica
      </a>
      <div class="dropdown-menu">
      <a class="dropdown-item" href="#">Consulta</a>
        <a class="dropdown-item" href="#">red</a>
        <a class="dropdown-item" href="#">software</a>
        <a class="dropdown-item" href="#">Documentos</a>
      </div>
    </li>


    </ul>
  </div>  
</nav>