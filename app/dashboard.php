<?php 

include_once 'modules/solicitudPrestamos/controller/solicitudPrestamoController.php';

$sltPrestamos = new solicitudController();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>dashboard</title>
    <link rel="stylesheet" href="../public/assets/css/main.css">
    <link rel="stylesheet" href="../public/assets/libraries/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../public/assets/css/prestamos/solicitudPrestamos.css">
    <link rel="stylesheet" href="../public/assets/css/prestamos/consultPrestamos.css">
    
</head>
<body class="">

<div class="d-flex justify-content-center align-items-center" style="height: 90vh;">

<div class="container-sm">
    <?php 
    /**
     * 
     * leer árticulo y aplicar. 
     * https://guiaphp.com/desarrollo/patron-singleton-en-php-garantizando-una-unica-instancia/
     */
    //TODO: Implementar patron singleton.
    if ($sltPrestamos instanceof solicitudController) {
     $sltPrestamos::prestamos('solicitud');
    }
    ?>
</div>
</div>
<footer class="bg-info text-white text-center ">
<?php 
include_once '../public/partials/footer.php';
?>

</footer>

</body>
</html>