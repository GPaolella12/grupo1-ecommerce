<?php 
  require_once('partials/head.php');
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
                <li class="breadcrumb-item active" aria-current="page">Mis Datos Personales</li>
              </ol>
            </nav>
        </div>

        <div class="mobile-menu account-menu col-md-3 col-xs-12" id="account-menu" "column">
          <div class="item-section" >
          <ul class="icon-menu">
            <li class="item-submenu">
              <a class="item-link" href="">
              <span class="icon"></span>
              <span>Mis pedidos</span>
              </a>
            </li>
            <li class="item-submenu">
            <a class="item-link" href="">
              <span class="icon"></span>
              <span>Mis Resenias</span>
                </a>
              </li>
            <li class="item-submenu">
              <a class="item-link" href="">
              <span class="icon"></span>
              <span>Mis cupones</span>
              </a>
            </li>
            <li class="item-submenu">
              <a class="item-link" href="">
              <span class="icon"></span>
              <span>mis datos personales</span>
              </a>
              </li>
            <li class="item-submenu">
              <a class="item-link" href="">
              <span class="icon"></span>
              <span>mis direcciones</span>
              </a>
              </li>
              <li class="item-submenu">
                <a class="item-link" href="">
                <span class="icon"></span>
                <span>cerrar cesion</span>
                </a>
                </li>
          </ul>
        </div>
      </div>

      <div class="title-section col-md-9 col-xs-12 " "column">
            <h4 class="section-title">MIS DATOS PERSONALES</h4>
            <br>
            <br>


          <div class="profile-data row">
            <form class="row col-md-12 col-xs-12">
              <div class="form-row col-md-12 col-xs-12">
                <div class="col-md-6 col-xs-12">
                  <input type="text" class="form-control" placeholder="First name">
                </div>
                <div class="col-md-6 col-xs-12">
                  <input type="text" class="form-control" placeholder="Last name">
              </div>
              </div>
            </div>
    </form>
              <br>
              <form class="row col-md-12 col-xs-12">
              <div class="form col-md-6 col-xs-12">
              <label class="form-label form-row col-md-12 col-xs-12">Sexo</label>

              </div>
              <div class="form-row col-md-6 col-xs-12">
                <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" id="customRadioInline1" name="customRadioInline1" class="custom-control-input">
                    <label class="custom-control-label" for="customRadioInline1">Femenino</label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                  <input type="radio" id="customRadioInline2" name="customRadioInline1" class="custom-control-input">
                  <label class="custom-control-label" for="customRadioInline2">Masculino</label>
                </div>

                </div>




              <!-- ver el action del formulario !-->
                  <div class="row col-md-12 col-xs-12">
                  <div class="form col-md-6 col-xs-12">
                <label class="form-label  form-row col-md-9 col-xs-12">Fecha Nacimiento</label>
                  </div>
                  <input class="row col-xs-12 col-md-6" type="date" name="dia" min="2000-01-01" max="2014-12-31">
                    </div>


              <div class="row col-md-4 col-xs-12">
                <input type="text" class="form-control" placeholder="Telefono">
              </div>


                <div class="row col-xs-12 col-md-12">
                  <div class="row col-xs-12 col-md-6">
                    <label class="form-label Required" for="porfile_update_email">Email</label>
                      <input type="email" id=profile_update_email  name="profile_update[email]" required=required class="form-control form-control-sm" autocomplete="email" value="">
                  </div>
                    <div class="col-xs-12 col-md-6">
                        <a href=""   class ="btn btn-sn btn-default-online btn-inside-form">Cambar email </a>

                    </div>
                </div>
                  <br>
                  <div class="row col-md-4 col-xs-12">
                  <div class="col-xs-12 col-md-12">
                    <button type="submit" class="btn btn-primary btn-sm col-xs-12" name="button">Guardar Cambios</button>
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
