<?php 
  require_once('partials/head.php');
?>
  <body class="bg-light px-2">
      <?php 
        require_once('partials/header.php');
      ?>

      <div class="container faq p-2 d-flex flex-wrap">
        <div class="row">
          <div class="col-12 col-md-4 sidebar">
            <h3>Centro de ayuda</h3>
            <ul>
              <li><a href="#">Cómo comprar</a>
                <ul>
                  <li><a href="#" class="btn" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">¿Cómo encuentro un producto?</a></li>
                  <li><a href="#" class="btn" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">Comprar en PhoneHouse es muy fácil</a></li>
                  <li><a href="#" class="btn" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">Productos relacionados</a></li>
                </ul>
              </li>
            </ul>
            <ul>
              <li><a href="#">Estado de mi pedido</a>
                <ul>
                  <li><a href="#" class="btn" data-toggle="collapse" data-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">¿Cuál es el estado de mi compra?</a></li>
                  <li><a href="#" class="btn" data-toggle="collapse" data-target="#collapseFive" aria-expanded="true" aria-controls="collapseFive">Tengo un problema con mi compra</a></li>
                </ul>
              </li>
            </ul>
          </div>
          <main class="col-12 col-md-8 content">
            <section>
              <h3>Cómo comprar</h3>
              <div class="accordion" id="accordionExample">
                <div class="card">
                  <div class="card-header" id="headingOne">
                    <h2 class="mb-0">
                      <button class="btn" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        ¿Cómo encuentro mi producto?
                      </button>
                    </h2>
                  </div>

                  <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                    <div class="card-body">
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque sequi reiciendis sit doloremque vitae cupiditate, laboriosam recusandae, commodi eos illum unde, distinctio, consectetur eveniet excepturi! Alias sint quis, nam quibusdam!
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-header" id="headingTwo">
                    <h2 class="mb-0">
                      <button class="btn collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        Comprar en PhoneHouse es muy facil
                      </button>
                    </h2>
                  </div>
                  <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                    <div class="card-body">
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus impedit molestiae, quisquam alias non repellat quia, modi voluptatibus qui reprehenderit et recusandae, quos, quidem cum. Quis modi in esse similique.
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-header" id="headingThree">
                    <h2 class="mb-0">
                      <button class="btn collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        Productos relacionados
                      </button>
                    </h2>
                  </div>
                  <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                    <div class="card-body">
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente, odio cupiditate nam et soluta enim sunt quidem illum quaerat quibusdam laboriosam eaque, reiciendis. Est maxime eveniet, labore maiores excepturi voluptatum.
                    </div>
                  </div>
                </div>
              </div>
            </section>
            <section>
              <h3>Estado de mi pedido</h3>
              <div class="accordion" id="accordionExample">
                <div class="card">
                  <div class="card-header" id="headingOne">
                    <h2 class="mb-0">
                      <button class="btn" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
                        ¿Cuál es el estado de mi compra?
                      </button>
                    </h2>
                  </div>

                  <div id="collapseFour" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                    <div class="card-body">
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque sequi reiciendis sit doloremque vitae cupiditate, laboriosam recusandae, commodi eos illum unde, distinctio, consectetur eveniet excepturi! Alias sint quis, nam quibusdam!
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-header" id="headingTwo">
                    <h2 class="mb-0">
                      <button class="btn collapsed" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                        Tengo un problema con mi compra
                      </button>
                    </h2>
                  </div>
                  <div id="collapseFive" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                    <div class="card-body">
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus impedit molestiae, quisquam alias non repellat quia, modi voluptatibus qui reprehenderit et recusandae, quos, quidem cum. Quis modi in esse similique.
                    </div>
                  </div>
                </div>
              </div>
            </section>

          </main>
        </div>
      </div>
    <footer>

      <div id="suscriptions">
        <div class="container">

        </div>
      </div>

      <hr>

      <div id="benefits">

      </div>

    </footer>


    <!-- Fontawesome -->
    <script src="https://kit.fontawesome.com/b7a3dbb7f0.js"></script>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
