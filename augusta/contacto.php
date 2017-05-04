<!DOCTYPE html>
<html>
<head lang="es">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto consequatur dignissimos doloremque dolores dolorum ducimus expedita facilis illo in ipsa labore modi nemo nulla obcaecati, perspiciatis qui quo soluta temporibus">
    <meta name="keywords" content="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto consequatur dignissimos doloremque dolores dolorum ducimus expedita facilis illo in ipsa labore modi nemo nulla obcaecati, perspiciatis qui quo soluta temporibus">

    <link rel="canonical" href="http://augustabosquereal.com/contacto.php" />

    <!-- Facebook Open Graph -->
    <meta property="og:locale" content="es_MX"/>
    <meta property="og:site_name" content="Augusta"/>
    <meta property="og:title" content="Augusta bosque real"/>
    <meta property="og:url" content="http://augustabosquereal.com/contacto.php"/>
    <meta property="og:type" content="website"/>
    <meta property="og:description" content="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto consequatur digni"/>
    <meta property="og:image" content="http://augustabosquereal.com/img/logo-augusta-dorado.png"/>


    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="css/main.css"/>


    <title>Augusta | Contacto</title>
</head>
<body>




<?php include 'header.php';
dibujarHead(''); ?>


            <div class="view-content container_90 contacto">


                <h2>Contacto</h2>

                <div class="container">
                    <p class="txt-introduction">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab aliquid deleniti deserunt dolores ducimus earum excepturi fugit in inventore iste maxime molestiae numquam quam quasi quidem sequi similique, tenetur vitae!</p>

                </div>

                <div class="row">

                    <div class="col-md-8">
                        <form method="POST" action="enviar.php" accept-charset="UTF-8" id="contacto_form" class="contacto-formulario custom-form clearfix" >



                            <div class="form-group col-md-6">
                                <label for="name" class="form-label">Nombre *</label>
                                <div class="controls">
                                    <i class=""></i>

                                    <input class="form-control" required="required" name="name" type="text" id="name" aria-required="true" placeholder="Nombre completo">
                                    <div class="error-msj"></div>
                                </div>

                            </div>


                            <div class="form-group col-md-6">
                                <label for="email" class="form-label">Email *</label>
                                <div class="controls">
                                    <i class=""></i>

                                    <input class="form-control" required="required" name="email" type="text" id="email" aria-required="true" placeholder="nombre@email.com">
                                    <div class="error-msj"></div>
                                </div>

                            </div>



                            <div class="form-group col-md-12">
                                <label for="comments" class="form-label">Comentarios *</label>
                                <div class="controls">
                                    <i class=""></i>

                                    <textarea class="form-control" required="required" name="comments" cols="30" rows="3" id="comments" aria-required="true"></textarea>
                                    <div class="error-msj"></div>
                                </div>

                            </div>


                            <div class="hidden">
                                <input type="text" name="verificacion"/>
                            </div>


                            <div class="col-md-12 submit">

                                <img src="img/monograma.png" alt="monograma" class="pull-left"/>


                                <input class="btn btn-default enviarForm pull-right" id="enviar" type="submit" value="ENVIAR FORMULARIO">


                            </div>


                            <div class="col-md-12">
                                <div id="response"></div>
                            </div>


                        </form>

                    </div>

                    <div class="col-md-4">

                        <ul class="iconos-contacto">
                            <li>
                                <div class="icon">
                                    <i class="fa fa-phone"></i>
                                </div>
                                <div class="icon-txt">
                                    <b>LLÁMANOS</b><br/>
                                    (55) 2624 3396
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <i class="fa fa-envelope"></i>
                                </div>
                                <div class="icon-txt">
                                    <b>ESCRÍBENOS</b><br/>
                                    info@augustabosquereal.com
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <i class="fa fa-map-marker"></i>
                                </div>
                                <div class="icon-txt">
                                    <b>VISÍTANOS</b><br/>
                                    Bosque Real Lote #43, Manzana X
                                    Huixquilucan, Estado de México
                                    CP 20100, México.
                                </div>
                            </li>
                        </ul>

                    </div>


                </div>

            </div>


<?php include 'footer.php';
dibujarFooter(''); ?>

<script src="js/jquery.validate.js"></script>
<script src="js/jquery.form.js"></script>

<script>


    $(function() {


//Validate the form contact
        $("#contacto_form").validate({
            rules: {
                email: {
                    required: true,
                    email: true
                }
            },
            messages: {
                required: "Campo Obligatorio"
            },
            submitHandler: function (form) {
                $('#contacto_form').ajaxSubmit({
                    beforeSubmit: function() {
                        $("#response").html("");
                        $('#enviar').attr({
                            disabled: true,
                            value: "ENVIANDO..."
                        });

                    },
                    complete: function (objAJAX) {
                        $('#enviar').attr({
                            disabled: true,
                            value: "ENVIADO"
                        });

                        $("#response").html(objAJAX.responseText);

                    },
                    resetForm: true
                });
            }
        });
    });


</script>



</body>
</html>