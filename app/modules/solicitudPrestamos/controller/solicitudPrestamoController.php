<?php 

include_once __DIR__ . '/../../../helpers/renderView.php';

class solicitudController{

    /**
     * Summary of prestamos
     * Función que me permitirá renderizar la vista de prestamos.
     * @return void
     */
    public static function prestamos(String $vista = ''){

        $render = new RenderView();
        if (!isset($render)) return;


        switch ($vista) {
            case 'solicitud':
                $render::renderView('solicitudPrestamosView.php');
                break;
            case 'consulta':
                $render::renderView('consultarSolicitudView.php');
                break;
            default:
                // en caso de que no se envie algun parámetro, lo ideal sería mostrar el index principal.
                break;
        }

    }
}

?>