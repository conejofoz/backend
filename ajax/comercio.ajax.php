<?php

require_once "../controladores/comercio.controlador.php";
require_once "../modelos/comercio.modelo.php";

class AjaxComercio{
    /*
     * CAMBIAR EL LOGOTIPO
     */
    public $imagenLogo;
    public function ajaxCambiarLogotipo(){
       $item = "logo";
       $valor = $this->imagenLogo;
       $respuesta = ControladorComercio::ctrActualizarLogoIcono($item, $valor);
       echo $respuesta;
    }
    /*
     * CAMBIAR EL ICONO
     */
    public $imagenIcono;
    public function ajaxCambiarIcono(){
       $item = "icono";
       $valor = $this->imagenIcono;
       $respuesta = ControladorComercio::ctrActualizarLogoIcono($item, $valor);
       echo $respuesta;
    }
}






/*
 * CAMBIAR LOGOTIPO 
 */
if(isset($_FILES["imagenLogo"])){
    $logotipo = new AjaxComercio();
    $logotipo->imagenLogo = $_FILES["imagenLogo"];
    $logotipo->ajaxCambiarLogotipo();
}
/*
 * CAMBIAR ICONO 
 */
if(isset($_FILES["imagenIcono"])){
    $icono = new AjaxComercio();
    $icono->imagenIcono = $_FILES["imagenIcono"];
    $icono->ajaxCambiarIcono();
}