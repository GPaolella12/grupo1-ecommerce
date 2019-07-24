<?php 
  require_once('partials/head.php');
?>
  <body id="register">
    <?php 
        require_once('partials/header.php');
    ?>
    
    <main>
      <div class="contact-container row rounded">
        <div class="col-12 col-md-6 contact-text">
          <h4>CONTACTO</h4>
          <div class="contact-options-section">
            <ul class="contact-options">
              <li>
                <a href="">
                  <i class="fab fa-instagram"></i>
                  <span class="ml-1">phone_house</span>
                </a>
              </li>
              <li>
                <a href="">
                  <i class="fab fa-facebook-square"></i>
                  <span class="ml-1">phone_house</span>
                </a>
              </li>
              <li>
                <a href="">
                  <i class="fab fa-linkedin"></i>
                  <span class="ml-1">phone_house</span>
                </a>
              </li>
              <li>
                <a href="">
                  <i class="fab fa-twitter"></i>
                  <span class="ml-1">phone_house</span>
                </a>
              </li>
            </ul>
            <ul class="contact-options">
              <li class="p-m">
                <i class="fas fa-phone-square-alt"></i>
                <span class="ml-1">(+54) 11 XXXX-XXXX / XXXX</span>
              </li>
              <li class="mr-0 p-m">
                <i class="fas fa-envelope"></i>
                <span class="ml-1">ventas@phonehouse.com / soporte@phonehouse.com</span>
                <span></span>
              </li>
            </ul>
          </div>
        </div>
        <div class="contact-form col-12 col-md-6 bg-white rounded">
          <h4 class="text-center my-4">Hacenos tu consulta para que nos pongamos en contacto.</h6>
          <form class="mx-auto my-auto p-3 p-md-4 rounded" style="margin-top: 10px">
            <div class="form-group">
              <label for="exampleInputEmail1">Nombre</label>
              <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Ingresa tu nombre...">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Apellido</label>
              <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Ingresa tu apellido...">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Email</label>
              <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Ingresa tu email...">
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Telefono</label>
              <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Ingresa tu numero de telefono...">
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Comentario</label>
              <input type="textarea" class="form-control" id="exampleInputPassword1" placeholder="Ingresa tu comentario...">
            </div>
            <button type="submit" class="btn btn-dark">Enviar!</button>
          </form>
        </div>
      </div>     
    </main>
    <!-- Fontawesome -->
    <script src="https://kit.fontawesome.com/b7a3dbb7f0.js"></script>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
