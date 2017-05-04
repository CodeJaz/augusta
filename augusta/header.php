<?php

function dibujarHead($rutaRelativa){

    $menu = '



    <div class="container-fluid">


        <div class="row">

		  <header class="header">

       <div class="container_90">

           <div class="logo">

            <a href="home.php"><h1 class="logo">Augusta bosque real</h1></a>

           </div>


           <div class="pull-right">

               <div class="item-head ">
                   <a href="'.$rutaRelativa.'ubicacion.php" title="Ubicación - Augusta en Bosque Real"><i class="fa fa-map-marker"></i> Ubicación</a>
               </div>
               <div class="item-head ">
                   <a href="'.$rutaRelativa.'contacto.php" title="Contacto - Augusta en Bosque Real"><i class="fa fa-envelope"></i> Contacto</a>
               </div>


               <nav>


                    <ul class="cd-primary-nav">
                        <li><img src="'.$rutaRelativa.'img/logo-augusta-blanco.png" alt="logo-augusta-bosque-real" /></li>
                        <li><a href="'.$rutaRelativa.'home.php">Augusta</a></li>
                        <li><a href="'.$rutaRelativa.'acerca_de.php">SMA & AUGUSTA LAND</a></li>
                        <li><a href="'.$rutaRelativa.'departamentos.php">Departamentos</a></li>
                        <li><a href="'.$rutaRelativa.'plantas.php">Plantas</a></li>
                        <li><a href="'.$rutaRelativa.'amenidades.php">Amenidades</a></li>
                        <li><a href="'.$rutaRelativa.'galeria.php">Galería</a></li>
                        <li><a href="'.$rutaRelativa.'ubicacion.php">Ubicación</a></li>
                        <li><a href="'.$rutaRelativa.'contacto.php">Contacto</a></li>
                        <li></li>
                        <li><span>Síguenos en facebook:</span><br/>  <a href="https://www.facebook.com/augustabosquereal/?fref=ts"> <i class="fa fa-facebook"></i></a></li>
                    </ul>
                </nav>

                <div class="cd-overlay-nav">
                    <span></span>
                </div> <!-- cd-overlay-nav -->

                <div class="cd-overlay-content">
                    <span></span>
                </div> <!-- cd-overlay-content -->


               <a href="#0" class="cd-nav-trigger">Menu<span class="cd-icon"></span></a>



           </div>


       </div>

    </header>

    <div class="animsition-overlay">



	';

    echo $menu;

}

?>