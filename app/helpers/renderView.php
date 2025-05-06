<?php 

//Este archivo se va a encargar de extraer los nombres de los documentos que tenemos en ciertas carpetas para poder mostrar las vistas.

class RenderView{


    //Función para devolver la vista.
    public static function renderView(String $file){
        $path = __DIR__ . "/../modules/solicitudPrestamos/views/$file";

        if (!$file) {
            return;
        }

        if (file_exists($path)) {
            include_once $path;
        }

    }

    //Función para mapear los documentos.
    public static function mapFiles(){
        $relativePath = __DIR__ . '/../modules/prestamos/views/';
        $nameFiles = [];

        $fle = glob($relativePath . '*',GLOB_MARK);

        //var_dump($fle);

        foreach ($fle as $files) {
            $prestamosFiles = basename($files);
            $nameFiles[] = $prestamosFiles;
            //var_dump($nameFiles);
        }

    }

    
}


//RenderView::mapFiles();

?>