<style type="text/css">
    .cart{
        /* background-color: yellow; */
        position: relative;
    }

    .cart__badge{
        position: absolute;
        top: -6px;
        left: 30px;
    }
</style>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top" role="navigation">
    <div class="container">
        <div class="navbar-brand">
            <i class="fas fa-store-alt"></i>
            Renshoes
        </div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbar">
            <ul class="navbar-nav ml-auto">
                <?php
                    if(isset($this->session->carrito)){
                ?>
                    <li class="nav-item">
                        <a class="btn btn-outline-danger" href="/renshoes/Principal/destruir">Vaciar carrito</a>
                    </li>
                <?php
                    }
                ?>
                <li class="nav-item">
                    <a class="nav-link" href="/renshoes/Principal">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/renshoes/Principal/todos_los_productos">Productos</a>
                </li>
                <li class="nav-item">
                    <div class="dropdown">
                        <button class="btn btn-outline-warning cart" type="button" id="dropCart" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-shopping-cart"></i>
                        </button>
                        <span class="badge badge-danger cart__badge">
                            <?php echo isset($this->session->carrito) ? array_sum($this->session->carrito) : 0?>
                            <!-- <?php var_dump(array_sum($this->session->carrito)) ?> -->
                        </span>
                        <div class="dropdown-menu" aria-labelledby="dropCart">
                            
                            <?php
                                if(isset($this->session->carrito)){
                                    for($i = 0; $i < array_sum($this->session->carrito); $i++){
                            ?>
                                    <a class="dropdown-item" href="#">elemento <?= $i+1 ?></a>
                            <?php
                                }}else{
                            ?>
                                <a class="dropdown-item" href="#">Compra algo por favor :(</a>
                            <?php
                                }
                            ?>
                        </div>
                    </div>
                </li>
                <li class="nav-item">
                    <button type="button" class="btn btn-outline-warning mt-2 mt-lg-0 ml-lg-2" data-toggle="modal" data-target="#modalContactUs" href="">Contactanos</button>
                </li>
            </ul>
        </div>
    </div>
</nav>