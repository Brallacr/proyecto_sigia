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
    <link rel="stylesheet" href="../public/assets/css/prestamos/prestamos.css">
</head>
<body>

<div class="container">
    <?php $sltPrestamos::prestamos(); ?>
</div>
    
</body>
</html>