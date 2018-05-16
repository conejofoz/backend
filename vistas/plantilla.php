<?php
session_start();
?>        
<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Tienda Online | Panel de Control</title>


        <!-- Tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

        <!--===============================================
        PLUGINS CSS
        ================================================-->
        <link rel="stylesheet" href="vistas/bower_components/bootstrap/dist/css/bootstrap.min.css">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="vistas/bower_components/font-awesome/css/font-awesome.min.css">
        <!-- Ionicons -->
        <link rel="stylesheet" href="vistas/bower_components/Ionicons/css/ionicons.min.css">
        <!-- Theme style -->
        <link rel="stylesheet" href="vistas/dist/css/AdminLTE.min.css">
        <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
              page. However, you can choose any other skin. Make sure you
              apply the skin class to the body tag so the changes take effect. -->
        <link rel="stylesheet" href="vistas/dist/css/skins/skin-blue.min.css">
        <!-- iCheck -->
        <link rel="stylesheet" href="vistas/plugins/iCheck/square/blue.css">
        <!-- Morris chart -->
        <link rel="stylesheet" href="vistas/bower_components/morris.js/morris.css">

        <!-- jvectormap -->
        <link rel="stylesheet" href="vistas/bower_components/jvectormap/jquery-jvectormap.css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!-- Google Font -->
        <link rel="stylesheet"
              href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
        <!-- Bootstrap Color Picker -->
        <link rel="stylesheet" href="vistas/bower_components/bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css">



        <!--===============================================
        CSS PERSONALIZADO
        ================================================-->
        <link rel="stylesheet" href="vistas/css/plantilla.css">
        <link rel="stylesheet" href="vistas/css/slide.css">



        <!--===============================================
        PLUGINS DE JAVASCRIPT
        ================================================-->

        <!-- jQuery 3 -->
        <script src="vistas/bower_components/jquery/dist/jquery.min.js"></script>
        <!-- jQuery UI 1.11.4 -->
        <script src="vistas/bower_components/jquery-ui/jquery-ui.min.js"></script>
        <!-- Bootstrap 3.3.7 -->
        <script src="vistas/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
        <!-- AdminLTE App -->
        <script src="vistas/dist/js/adminlte.min.js"></script>

        <!-- Optionally, you can add Slimscroll and FastClick plugins.
             Both of these plugins are recommended to enhance the
             user experience. -->



        <!-- iCheck -->
        <script src="vistas/plugins/iCheck/icheck.min.js"></script>


        <!-- Morris.js charts -->
        <script src="vistas/bower_components/raphael/raphael.min.js"></script>
        <script src="vistas/bower_components/morris.js/morris.min.js"></script>
        <!-- jQuery Knob Chart -->
        <script src="vistas/bower_components/jquery-knob/dist/jquery.knob.min.js"></script>
        <!-- jvectormap -->
        <script src="vistas/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
        <script src="vistas/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>   
        <!-- ChartJS -->
        <script src="vistas/bower_components/Chart.js/Chart.js"></script>
        <!-- SweetAlert 2 https://sweetalert2.github.io/-->
        <script src="vistas/plugins/sweetalert2/sweetalert2.all.js"></script>
        <!-- bootstrap color picker https://farbelous.github.io/bootstrap-colorpicker/v2/-->
        <script src="vistas/bower_components/bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js"></script>

        <!-- Bootstrap slider http://seiyria.com/bootstrap-slider/-->
        <script src="vistas/plugins/bootstrap-slider/bootstrap-slider.js"></script>

    </head>

    <body class="hold-transition skin-blue sidebar-collapse sidebar-mini login-page">
        <?php
        //session_start();

        if (isset($_SESSION["validarSesionBackend"]) && $_SESSION["validarSesionBackend"] === "ok") {

            echo '<div class="wrapper">';

            /* =============================================
              CABEZOTE
              ============================================= */

            include "modulos/cabezote.php";

            /* =============================================
              LATERAL
              ============================================= */

            include "modulos/lateral.php";

            /* =============================================
              CONTENIDO
              ============================================= */

            if (isset($_GET["ruta"])) {

                if ($_GET["ruta"] == "inicio" ||
                        $_GET["ruta"] == "comercio" ||
                        $_GET["ruta"] == "slide" ||
                        $_GET["ruta"] == "categorias" ||
                        $_GET["ruta"] == "subcategorias" ||
                        $_GET["ruta"] == "productos" ||
                        $_GET["ruta"] == "banner" ||
                        $_GET["ruta"] == "ventas" ||
                        $_GET["ruta"] == "visitas" ||
                        $_GET["ruta"] == "usuarios" ||
                        $_GET["ruta"] == "mensajes" ||
                        $_GET["ruta"] == "perfiles" ||
                        $_GET["ruta"] == "perfil" ||
                        $_GET["ruta"] == "salir") {


                    include "modulos/" . $_GET["ruta"] . ".php";
                }
            }

            /* =============================================
              FOOTER
              ============================================= */

            include "modulos/footer.php";


            echo '</div>';
        } else {

            include "modulos/login.php";
        }
        ?>
















        <!--=======================================
        JS PERSONALIZADO
        =========================================-->
        <script src="vistas/js/plantilla.js"></script>
        <script src="vistas/js/gestorComercio.js"></script>
        <script src="vistas/js/gestorSlide.js"></script>

    </body>
</html>