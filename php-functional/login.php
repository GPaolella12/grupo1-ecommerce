<?php 
require_once('controllers/loginController.php');
?>

<?php 
  require_once('partials/head.php');
?>
  <body id="login">
    <?php 
      require_once('partials/header.php');
    ?>
    <div class="row d-flex justify-content-center align-self-center rounded" style="margin-top: 70px; height: 500px;">
      <div class="col-md-4 login-image d-md-none d-lg-block">
      </div>
      <form class="bg-white border col-10 col-lg-4 py-4 p-3-sm mt-xs-5" method="POST">
        <h2 style="color: #666666; text-align: center;">Ingresa a tu cuenta</h1>
        <br>
        <div class="form-group">
          <label for="exampleInputEmail1">Email</label>
          <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Ingresa tu email..." value="<?= isset($userLogin['email']) ? $userLogin['email'] : ''?>">
          <?php if (isset($errors['email'])) : ?>
          <p><?= $errors['email'];?></p>
          <?php endif ?>
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Contraseña</label>
          <input type="password" name="pass" class="form-control" id="exampleInputPassword1" placeholder="Ingresa tu contraseña...">
          <?php if (isset($errors['pass'])) : ?>
          <p><?= $errors['pass'];?></p>
          <?php endif ?>
        </div>
        <div class="form-group form-check">
          <input type="checkbox" name="save" class="form-check-input" id="exampleCheck1">
          <label class="form-check-label" for="exampleCheck1">Recordame</label>
        </div>
        <button style="width: 100%;" type="submit" class="btn btn-dark">Iniciar Sesión</button>
        <br>
        <div class="row">
          <div class="fb-login col-12 rounded mt-3">
            <span>
              <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
              width="30" height="30"
              viewBox="0 0 172 172"
              style=" fill:#000000; margin-right: 10px;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g fill="#ffffff"><path d="M103.48974,10.75c-21.18825,0 -33.61474,11.19167 -33.61474,36.69067v22.43433h-26.875v26.875h26.875v64.5h26.875v-64.5h21.5l5.375,-26.875h-26.875v-17.88867c0,-9.60513 3.13237,-14.36133 12.14624,-14.36133h14.72876v-25.77271c-2.54775,-0.344 -9.97113,-1.10229 -20.13526,-1.10229z"></path></g></g></svg>
              <span>Continuar con Facebook</span>
            </span>
          </div>
          <div class="google-login col-12 rounded mt-3 rounded border">
            <span>
              <img style="width: 28px; margin-right: 15px;" src="https://img.icons8.com/color/48/000000/google-logo.png">
              <span>Continuar con Google</span>
            </span>
          </div>
        </div>
      </form>
    </div>

    <!-- Fontawesome -->
    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v4.0&appId=378796089500962&autoLogAppEvents=1"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>
    <script src="https://kit.fontawesome.com/b7a3dbb7f0.js"></script>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
