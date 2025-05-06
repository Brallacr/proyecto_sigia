<?php 

include_once __DIR__ . '/../../../helpers/renderView.php';

class solicitudController{

    /**
     * Summary of prestamos
     * Función que me permitirá renderizar la vista de prestamos.
     * @return void
     */
    public static function prestamos(){

        $render = new RenderView();
        $render::renderView('solicitudPrestamosView.php');
    }
}

?>