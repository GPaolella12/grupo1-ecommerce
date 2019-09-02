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
        <button style="width: 100%;" type="submit" class="btn btn-dark">Iniciar Sesion</button>
        <br>
        <div class="row" style="margin: 0;">
          <div style="margin: 25px 0; width: 50%;" class="fb-login-button col-xs-12 col-md-6" data-width="" data-size="large" data-button-type="continue_with" data-auto-logout-link="false" data-use-continue-as="false"></div>
          <div style="margin: 25px 0;" class="btn col-xs-12 col-md-6 border">
            <a style="color: black;" href="/users/google-oauth/" style="text-transform:none">
            <div class="left">
              <img width="20px" alt="Google &quot;G&quot; Logo" src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/53/Google_%22G%22_Logo.svg/512px-Google_%22G%22_Logo.svg.png"/>
            Continuar con Google
            </div>
            </a>
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
