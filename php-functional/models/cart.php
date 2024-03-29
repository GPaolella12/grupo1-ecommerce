<?php 
  require_once('partials/head.php');
?>
  <body>
    <?php 
        require_once('partials/header.php');
    ?>

    <main class="container-fluid">
      <div class="row">
        <div class="full-container row">
          <div class="cart-item-section col-xs-12 col-lg-8">
            <h4 class="title-section" style="color: #f50; ">
              Carrito de Compras
            </h4>
            <div class="cart-item row">
              <div class="cart-item row">
                <div class="img-container col-xs-2">
                  <a href="">
                    <img class="px-auto" src="https://i.linio.com/p/858c27baf5181f0f7583979585117dd1-product.jpg" alt="">
                  </a>
                </div>
                <div class="item-title col-xs-10 col-sm-11 col-lg-12">
                  <span>Celular SmartPhone Xiaomi Redmi Note 7 4GB+64GB 4G-Negro</span>
                  <div class="item-condition">
                    <span>NUEVO</span>
                  </div>
                </div>
                <!-- <div class="delete-section col-xs-1">
                  <i class="fas fa-minus-circle"></i>
                </div> -->
                <div class="col-xs-8 col-lg-5 d-flex justify-content-center">
                  <div class="price-section">
                    <div class="discount-container">
                      <span class="original-price">$28.766,00</span>
                      <span class="discount">- 42%</span>

                    </div>
                    <div class="main-price">
                      <span>$16.730,00</span>
                    </div>
                  </div>
                  <div class="amount-section col-xs-4 col-lg-3">                  
                    <p class="text-dark">Cantidad:</p>
                    <select class="form-control form-control-sm" name="" selected>
                      <option value="1">1</option>
                      <option value="2">2</option>
                      <option value="3">3</option>
                      <option value="4">4</option>
                      <option value="5">5</option>
                      <option value="6">6</option>
                      <option value="7">7</option>
                      <option value="8">8</option>
                    </select>
                  </div>
                </div>
                <div class="delivery-section col-xs-12 col-lg-5 float-left ml-3">
                  <div class="badge-international-shipping mx-auto">
                    <i class="fas fa-plane pr-2"></i>
                    Envío Internacional
                    <span>
                      <i class="far fa-question-circle pl-2" style="color: #aaa"></i>
                    </span>
                  </div>
                  <p class="text-center">Enviado y vendido por Phone House</p>
                </div>
              </div>

            </div>
          </div>
          <div class="summary-section col-xs-12 col-lg-4">
            <div class="summary-container">
              <h4 class="title-summary">resumen de tu pedido</h4>
              <ul class="summary">
                <li>
                  Subtotal (1)
                  <span class="main-price float-right" style="position: relative; bottom: .3rem;">$16.730,00</span>
                </li>
                <li>
                  Envío
                </li>
                <li>
                  <p><a class="link-low" data-toggle="collapse" data-target="#cp" aria-expanded="false" href="">Calcular envío</a></p>
                  <div class="row bg-white" id="cp" data-toggle="false">
                    <form class="summary-form" method="POST">
                      <div class="col-lg-12 p-1">
                        <label class="form-label">
                          <p>Código Postal</p>
                        </label>
                        <input class="form-control bg-light" type="text" name="postcode" required>
                      </div>
                    </form>
                  </div>
                </li>
                <li>
                  <p><a class="link-low" data-toggle="collapse" data-target="#cupon" href="">Aplicar cupón</a></p>
                  <div class="row bg-white" id="cupon">
                    <form class="summary-form" method="POST">
                      <div class="col-lg-12 p-1">
                        <input class="form-control bg-light" type="text" name="postcode" required placeholder="Ingresa el código">
                        <button class="btn btn-sm">
                          <h4>aplicar</h4>
                        </button>
                      </div>
                    </form>
                  </div>
                </li>
              </ul>
              <div class="ups-container row">
                <div class="safe-buy">
                  <img src="images/compra-segura.png" alt="">
                </div>
                <ul class="ups-extras">
                  <li>
                    <i class="fas fa-undo"></i>
                    <span>devoluciones gratis</span>
                  </li>
                  <li>
                    <i class="fas fa-dolly"></i>
                    <span>rastreá tu pedido</span>
                  </li>
                  <li>
                    <i class="far fa-credit-card"></i>
                    <span>pagá en cuotas o en efectivo</span>
                  </li>
                  <li>
                    <i class="fas fa-headset"></i>
                    <span>¿necesitas ayuda para comprar?</span>
                  </li>
                </ul>
              </div>
              <section class="summary-total-pay row">
                <li class="summary-total">
                  <h4>
                    total
                    <span class="main-price float-right">$16.730,00</span>
                  </h4>
                </li>
                <li class="summary-pay row">
                  <a href="" class="btn">procesar compra</a>
                </li>
              </section>
            </div>
          </div>
        </div>
      </div>
    </main>
    
    <?php
      require_once('partials/footer.php');
    ?>