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
    <form class="bg-white border row mx-md-5 mx-3 my-5 p-5-md p-3 py-4 rounded" action="" method="POST">
      <div class="col-12 col-md-6">
        <div class="form-group">
          <label for="exampleInputEmail1">Nombre</label>
          <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Ingresa tu email..." value="<?= isset($name) ? $name : ''?>">
          <?php if (isset($errors['name'])) : ?>
          <p><?= $errors['name'];?></p>
          <?php endif ?>
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Apellido</label>
          <input type="text" name="lastName" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Ingresa tu email..." value="<?= isset($lastName) ? $lastName : ''?>">
          <?php if (isset($errors['lastName'])) : ?>
          <p><?= $errors['lastName'];?></p>
          <?php endif ?>
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">DNI</label>
          <input type="text" name="dni" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Ingresa tu DNI..." value="<?= isset($dni) ? $dni : ''?>">
          <?php if (isset($errors['dni'])) : ?>
          <p><?= $errors['dni'];?></p>
          <?php endif ?>
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Email</label>
          <input type="text" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Ingresa tu email..." value="<?= isset($email) ? $email : ''?>">
          <?php if (isset($errors['email'])) : ?>
          <p><?= $errors['email'];?></p>
          <?php endif ?>
        </div>
      </div>
      <div class="col-12 col-md-6">
        <div class="form-group">
          <label for="exampleInputPassword1">Telefono</label>
          <input type="text" name="phone" class="form-control" id="exampleInputPassword1" placeholder="Ingresa tu numero de telefono..." value="<?= isset($phone) ? $phone : ''?>">
          <?php if (isset($errors['phone'])) : ?>
          <p><?= $errors['phone'];?></p>
          <?php endif ?>
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Contraseña</label>
          <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Ingresa tu contraseña..." value="<?= isset($name) ? '' : ''?>">
          <?php if (isset($errors['password'])) : ?>
          <p><?= $errors['password'];?></p>
          <?php endif ?>
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Confirmar Contraseña</label>
          <input type="password" name="passwordConfirm" class="form-control" id="exampleInputPassword1" placeholder="Ingresa tu contraseña nuevamente...">
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
      <button type="submit" class="btn btn-dark col-6 mx-auto mt-3">¡Registrarme!</button>
    </form>
    <!-- Fontawesome -->
    <script src="https://kit.fontawesome.com/b7a3dbb7f0.js"></script>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
