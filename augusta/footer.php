<?php

function dibujarFooter($rutaRelativa){

    $footer = '

            <footer class="footer clearfix">

                <div class="container_90">

                    <div class="pull-left">

                        <div class="item-footer"><a href="'.$rutaRelativa.'acerca_de.php">Acerca de...</a></div>
                        <div class="item-footer"><a href="http://www.augustabosquereal.com/aviso-de-privacidad.pdf" target="_blank" rel="nofollow">Aviso de privacidad</a></div>


                    </div>


                    <div class="pull-right">

                        <div class="item-footer"><a href="http://online.fliphtml5.com/nvjo/dahg/#p=1" rel="nofollow" target="_blank">Brochure</a></div>
                        <div class="item-footer"><a href="http://online.fliphtml5.com/nvjo/nmay/#p=5" rel="nofollow" target="_blank">Brochure Incerto</a></div>
                        <div class="item-footer"><a href="'.$rutaRelativa.'recorrido.php" rel="nofollow">Recorrido Virtual</a></div>


                    </div>


                </div>



            </footer>



        </div>




    </div>

</div>


<script type="text/javascript" src="'.$rutaRelativa.'js/jquery-1.11.2.min.js"></script>
<script type="text/javascript" src="'.$rutaRelativa.'js/animsition.min.js"></script>
<script type="text/javascript" src="'.$rutaRelativa.'js/velocity.min.js"></script>
<script type="text/javascript" src="'.$rutaRelativa.'js/main.js"></script>

    ';

    echo $footer;

}

?>