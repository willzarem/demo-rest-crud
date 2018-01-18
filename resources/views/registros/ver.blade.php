@extends('layouts.app')

@section('content')


<body>
  <header>
    <nav class="navbar navbar-inverse navbar-static-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navegacion-fm">
            <span class="sr-only">Desplegar / Ocultar Menu</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a href="#" class="navbar-brand">FalconMasters</a>
        </div>
        <!-- Inicia Menu -->
        <div class="collapse navbar-collapse" id="navegacion-fm">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Inicio</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">
                Categorias <span class="caret"></span>
              </a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="#">Categoria #1</a></li>
                <li class="divider"></li>
                <li><a href="#">Categoria #2</a></li>
                <li><a href="#">Categoria #3</a></li>
                <li><a href="#">Categoria #4</a></li>
              </ul>
            </li>
            <li><a href="#">Blog</a></li>
            <li><a href="#">Contacto</a></li>
          </ul>

          <form action="" class="navbar-form navbar-right" role="search">
            <div class="form-group">
              <input type="text" class="form-control" placeholder="buscar">
            </div>
            <button type="submit" class="btn btn-primary">
              <span class="glyphicon glyphicon-search"></span>
            </button>
          </form>
        </div>
      </div>
    </nav>
  </header>

  <section class="jumbotron">
    <div class="container">
      <h1>FalconMasters Blog</h1>
      <p>Blog de diseño web</p>
    </div>
  </section>

  <section class="main container">
    <div class="row">
      <section class="posts col-md-9">
        <div class="miga-de-pan">
          <ol class="breadcrumb">
            <li><a href="#">Inicio</a></li>
            <li><a href="#">Categorias</a></li>
            <li class="active">Diseño Web</li>
          </ol>
        </div>

        <article class="post clearfix">
          <a href="#" class="thumb pull-left">
            <img class="img-thumbnail" src="img/img1.jpg" alt="">
          </a>
          <h2 class="post-title">
            <a href="#">Inicia proyectos HTML5 mas rápido con Initializr</a>
          </h2>
          <p><span class="post-fecha">26 de Enero de 2015</span> por <span class="post-autor"><a href="#">Carlos Arturo</a></span></p>
          <p class="post-contenido text-justify">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
          </p>

          <div class="contenedor-botones">
            <a href="#" class="btn btn-primary">Leer Mas</a>
            <a href="#" class="btn btn-success">Comentarios <span class="badge">20</span></a>
          </div>
        </article>

        <article class="post clearfix">
          <a href="#" class="thumb pull-left">
            <img class="img-thumbnail" src="img/img2.jpg" alt="">
          </a>
          <h2 class="post-title">
            <a href="#">Inicia proyectos HTML5 mas rápido con Initializr</a>
          </h2>
          <p><span class="post-fecha">26 de Enero de 2015</span> por <span class="post-autor"><a href="#">Carlos Arturo</a></span></p>
          <p class="post-contenido text-justify">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
          </p>

          <div class="contenedor-botones">
            <a href="#" class="btn btn-primary">Leer Mas</a>
            <a href="#" class="btn btn-success">Comentarios <span class="badge">20</span></a>
          </div>
        </article>

        <article class="post clearfix">
          <a href="#" class="thumb pull-left">
            <img class="img-thumbnail" src="img/img3.jpg" alt="">
          </a>
          <h2 class="post-title">
            <a href="#">Inicia proyectos HTML5 mas rápido con Initializr</a>
          </h2>
          <p><span class="post-fecha">26 de Enero de 2015</span> por <span class="post-autor"><a href="#">Carlos Arturo</a></span></p>
          <p class="post-contenido text-justify">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
          </p>

          <div class="contenedor-botones">
            <a href="#" class="btn btn-primary">Leer Mas</a>
            <a href="#" class="btn btn-success">Comentarios <span class="badge">20</span></a>
          </div>
        </article>

        <nav>
          <div class="center-block">
            <ul class="pagination">
              <li class="disabled"><a href="#">&laquo;<span class="sr-only">Anterior</span></a></li>
              <li class="active"><a href="#">1</a></li>
              <li><a href="#">1</a></li>
              <li><a href="#">2</a></li>
              <li><a href="#">3</a></li>
              <li><a href="#">4</a></li>
              <li><a href="#">5</a></li>
              <li><a href="#">&raquo; <span class="sr-only">Siguiente</span></a></li>
            </ul>
          </div>
        </nav>
      </section>

      <aside class="col-md-3 hidden-xs hidden-sm">
        <h4>Categorias</h4>
        <div class="list-group">
          <a href="#" class="list-group-item active">Diseño Web</a>
          <a href="#" class="list-group-item">CSS</a>
          <a href="#" class="list-group-item">Cursos</a>
          <a href="#" class="list-group-item">Desarrollo Web</a>
          <a href="#" class="list-group-item">Elementos Web</a>
          <a href="#" class="list-group-item">Jquery</a>
          <a href="#" class="list-group-item">Recursos y Herramientas</a>
        </div>

        <h4>Articulos Recientes</h4>
        <a href="#" class="list-group-item">
          <h4 class="list-group-item-heading">Inicia proyectos HTML5 mas rápido con Initializr</h4>
          <p class="list-group-item-text">Aprende como iniciar un proyecto HTML5 en 15 minutos con Initialzr.</p>
        </a>

        <a href="#" class="list-group-item">
          <h4 class="list-group-item-heading">Como hacer una plantilla básica con PHP (templates)</h4>
          <p class="list-group-item-text">LoremAprende como transformar tu diseño web en una plantilla dinámica con PHP.</p>
        </a>

        <a href="#" class="list-group-item">
          <h4 class="list-group-item-heading">Como cambiar el cursor de tu sitio web con propiedad CSS</h4>
          <p class="list-group-item-text">Aprende como cambiar el cursor de los elementos de tu sitio web con CSS.</p>
        </a>
      </aside>
    </div>
  </section>

  <footer>
    <div class="container">
      <div class="row">
        <div class="col-xs-6">
          <p>Carlos Arturo - FalconMasters</p>
        </div>
        <div class="col-xs-6">
          <ul class="list-inline text-right">
            <li><a href="#">Inicio</a></li>
            <li><a href="#">Cursos</a></li>
            <li><a href="#">Contacto</a></li>
          </ul>
        </div>
      </div>
    </div>
  </footer>



  @endsection