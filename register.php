  <?php
  require_once('controllers/registerController.php');
?>

<?php 
  require_once('partials/head.php');
?>
  <body id="register">
    <?php 
      require_once('partials/header.php');
    ?>
    <div class="container">
      <h1 style="margin: 0 auto; margin: 30px; text-align: center;">Ingresa tus datos para completar el registro</h1>
      <form class="bg-white border row my-5 p-5-md p-3 py-4 rounded" action="" method="POST">
        <div class="col-12 col-md-6">
          <div class="form-group">
            <label for="exampleInputEmail1">Nombre</label>
            <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Ingresa tu nombre" value="<?= isset($name) ? $name : ''?>">
            <?php if (isset($errors['name'])) : ?>
            <p><?= $errors['name'];?></p>
            <?php endif ?>
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Apellido</label>
            <input type="text" name="lastName" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Ingresa tu apellido" value="<?= isset($lastName) ? $lastName : ''?>">
            <?php if (isset($errors['lastName'])) : ?>
            <p><?= $errors['lastName'];?></p>
            <?php endif ?>
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">DNI</label>
            <input type="text" name="dni" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Ingresa tu DNI" value="<?= isset($dni) ? $dni : ''?>">
            <?php if (isset($errors['dni'])) : ?>
            <p><?= $errors['dni'];?></p>
            <?php endif ?>
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Email</label>
            <input type="text" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Ingresa tu email" value="<?= isset($email) ? $email : ''?>">
            <?php if (isset($errors['email'])) : ?>
            <p><?= $errors['email'];?></p>
            <?php endif ?>
          </div>
        </div>
        <div class="col-12 col-md-6">
          <div class="form-group">
            <label for="exampleInputPassword1">Telefono</label>
            <input type="text" name="phone" class="form-control" id="exampleInputPassword1" placeholder="Ingresa tu numero de telefono" value="<?= isset($phone) ? $phone : ''?>">
            <?php if (isset($errors['phone'])) : ?>
            <p><?= $errors['phone'];?></p>
            <?php endif ?>
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Contraseña</label>
            <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Ingresa tu contraseña" value="<?= isset($name) ? '' : ''?>">
            <?php if (isset($errors['password'])) : ?>
            <p><?= $errors['password'];?></p>
            <?php endif ?>
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Confirmar Contraseña</label>
            <input type="password" name="passwordConfirm" class="form-control" id="exampleInputPassword1" placeholder="Ingresa tu contraseña nuevamente">
            <?php if (isset($errors['passwordConfirm'])) : ?>
            <p><?= $errors['passwordConfirm'];?></p>
            <?php endif ?>
          </div>
          <div class="form-group mt-4">
            <input type="checkbox" name="news"> Quiero recibir novedades y promociones por mail.
            <br>
            <input type="checkbox" name="terms" style="margin-top: 15px;"> Acepto los terminos y condiciones.
            <?php if (isset($errors['terms'])) : ?>
            <p style="margin-top: 0;"><?= $errors['terms'] ?></p>
            <?php endif ?>
            
          </div>
        </div>
        <button type="submit" class="btn btn-dark col-8 mx-auto mt-2">¡Registrarme!</button>
        <div class="fb-login col-xs-7 col-md-5 mx-auto rounded mt-3">
          <span>
            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
            width="30" height="30"
            viewBox="0 0 172 172"
            style=" fill:#000000; margin-right: 10px;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g fill="#ffffff"><path d="M103.48974,10.75c-21.18825,0 -33.61474,11.19167 -33.61474,36.69067v22.43433h-26.875v26.875h26.875v64.5h26.875v-64.5h21.5l5.375,-26.875h-26.875v-17.88867c0,-9.60513 3.13237,-14.36133 12.14624,-14.36133h14.72876v-25.77271c-2.54775,-0.344 -9.97113,-1.10229 -20.13526,-1.10229z"></path></g></g></svg>
            <span>Registrarme con Facebook</span>
          </span>
        </div>
        <div class="google-login col-xs-7 col-md-5 mx-auto rounded mt-3 rounded border">
          <span>
            <img style="width: 28px; margin-right: 15px;" src="https://img.icons8.com/color/48/000000/google-logo.png">
            <span>Registrarme con Google</span>
          </span>
        </div>
      </form>
    </div>
    <!-- Fontawesome -->
    <script src="https://kit.fontawesome.com/b7a3dbb7f0.js"></script>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
