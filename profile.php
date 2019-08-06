<?php
  require_once('partials/head.php');
  require_once('functions.php');
?>
  <body>
    <?php 
      require_once('partials/header.php');
    ?>
    <!-- carrusell -->
    <main class="container-fluid ">
      <div class="account-container-fluid row">

        <div class="mobile-menu account-menu col-md-12 col-xs-12">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Inicio</a></li>
                <li class="breadcrumb-item"><a href="#">Mi Cuenta</a></li>
                <li class="breadcrumb-item active" aria-current="page">Mis Datos</li>
              </ol>
            </nav>
        </div>

        <div class="mobile-menu account-menu col-md-3 col-xs-12" id="account-menu" "column">
          <div class="item-section" >
          <ul class="icon-menu">
            <li class="item-submenu">
              <a class="item-link" href="">
              <span class="icon"></span>
              <span>Mis datos</span>
              </a>
            </li>
            <li class="item-submenu">
              <a class="item-link" href="">
              <span class="icon"></span>
              <span>Mis pedidos</span>
              </a>
            </li>
            <li class="item-submenu">
              <a class="item-link" href="">
              <span class="icon"></span>
              <span>Pagos y direcciones</span>
              </a>
              </li>
              <li class="item-submenu">
                <a class="item-link" href="login.php">
                <span class="icon"></span>
                <span>Cerrar sesion</span>
                </a>
              </li>
          </ul>
        </div>
      </div>

      <div class="title-section col-md-9 col-xs-12">
            <h4 class="section-title">MIS DATOS PERSONALES</h4>
            <br>
            <br>


          <div class="profile-data row">
            <form class="row col-md-12 col-xs-12 d-flex ">
              <div class="form-row col-md-12 col-xs-12">
                <div class="col-md-6 col-xs-12 pb-4 pr-4">
                  <label class="form-label">NOMBRE</label>
                  <input type="text" class="form-control mt-2">
                </div>
                <div class="col-md-6 col-xs-12 pb-4 pr-4">
                  <label class="form-label">APELLIDO</label>
                  <input type="text" class="form-control mt-2">
                </div>
                <div class="col-md-6 col-xs-12 pb-4 pr-4">
                  <label class="form-label">EMAIL</label>
                  <input type="text" class="form-control mt-2">
                </div>
                <div class="col-md-6 col-xs-12 pb-4 pr-4">
                  <label class="form-label">TELEFONO</label>
                  <input type="text" class="form-control mt-2">
                </div>
                <div class="col-md-6 col-xs-12 pb-4 pr-4">
                  <label class="form-label">SEXO</label>
                  <select name="sexo" class="form-control mt-2">
                    <option>Hombre</option>
                    <option>Mujer</option>
                    <option>Prefiero no decirlo</option>
                  </select>
                </div>
                <div class="col-md-6 col-xs-12 pb-4 pr-4">
                  <label class="form-label">FECHA DE NACIMIENTO</label>
                  <input type="date" class="form-control mt-2">
                </div>
                <div class="col-md-6 col-xs-12 pb-4 pr-4">
                  <label class="form-label">DNI</label>
                  <input type="text" class="form-control mt-2">
                </div>
                <div class="col-md-6 col-xs-12 pt-2">
                  <label for=""> </label>
                  <button class="form-control btn-primary">GUARDAR CAMBIOS</button>
                </div>
              </div>
              
            </form>

        </div>

    </div>
    </main>





    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
