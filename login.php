<?php 
  require_once('partials/head.php');
?>
  <body id="login">
    <?php 
      require_once('partials/header.php');
    ?>
    <div class="row d-flex justify-content-center align-self-center rounded p-4" style="margin-top: 70px;">
      <div class="col-md-4 login-image">
      </div>
      <form class="bg-white border col-10 col-lg-4 p-4 p-3-sm" action="" method="POST">
        <div class="form-group">
          <label for="exampleInputEmail1">Email</label>
          <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Ingresa tu email...">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Contraseña</label>
          <input type="password" name="pass" class="form-control" id="exampleInputPassword1" placeholder="Ingresa tu contraseña...">
        </div>
        <div class="form-group form-check">
          <input type="checkbox" name="save" class="form-check-input" id="exampleCheck1">
          <label class="form-check-label" for="exampleCheck1">Recordame</label>
        </div>
        <button type="submit" class="btn btn-dark">Iniciar Sesion</button>
      </form>
    </div>

    <!-- Fontawesome -->
    <script src="https://kit.fontawesome.com/b7a3dbb7f0.js"></script>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
