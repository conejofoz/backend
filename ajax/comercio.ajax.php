<?php

require_once "../controladores/comercio.controlador.php";
require_once "../modelos/comercio.modelo.php";

class AjaxComercio {
    /*
     * CAMBIAR EL LOGOTIPO
     */

    public $imagenLogo;

    public function ajaxCambiarLogotipo() {
        $item = "logo";
        $valor = $this->imagenLogo;
        $respuesta = ControladorComercio::ctrActualizarLogoIcono($item, $valor);
        echo $respuesta;
    }

    /*
     * CAMBIAR EL ICONO
     */

    public $imagenIcono;

    public function ajaxCambiarIcono() {
        $item = "icono";
        $valor = $this->imagenIcono;
        $respuesta = ControladorComercio::ctrActualizarLogoIcono($item, $valor);
        echo $respuesta;
    }

    /* =============================================
      CAMBIAR COLORES
      ============================================= */

    public $barraSuperior;
    public $textoSuperior;
    public $colorFondo;
    public $colorTexto;

    public function ajaxCambiarColor() {

        $datos = array("barraSuperior" => $this->barraSuperior,
            "textoSuperior" => $this->textoSuperior,
            "colorFondo" => $this->colorFondo,
            "colorTexto" => $this->colorTexto);

        $respuesta = ControladorComercio::ctrActualizarColores($datos);

        echo $respuesta;
    }

}




/*
 * 
 * 
 * FIM DA CLASSE
 */




/*
 * CAMBIAR LOGOTIPO 
 */
if (isset($_FILES["imagenLogo"])) {
    $logotipo = new AjaxComercio();
    $logotipo->imagenLogo = $_FILES["imagenLogo"];
    $logotipo->ajaxCambiarLogotipo();
}
/*
 * CAMBIAR ICONO 
 */
if (isset($_FILES["imagenIcono"])) {
    $icono = new AjaxComercio();
    $icono->imagenIcono = $_FILES["imagenIcono"];
    $icono->ajaxCambiarIcono();
}



/* =============================================
  CAMBIAR COLORES
  ============================================= */

if (isset($_POST["barraSuperior"])) {

    $colores = new AjaxComercio();
    $colores->barraSuperior = $_POST["barraSuperior"];
    $colores->textoSuperior = $_POST["textoSuperior"];
    $colores->colorFondo = $_POST["colorFondo"];
    $colores->colorTexto = $_POST["colorTexto"];
    $colores->ajaxCambiarColor();
}