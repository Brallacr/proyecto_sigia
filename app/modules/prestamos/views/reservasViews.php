<form action="" method="#">
    <input type="number" name="" id="cedula" placeholder="Identificación...">
    <input type="text" name="" id="nombre" placeholder="Nombre...">
    <input type="text" name="" id="apellido" placeholder="Apellido...">
    <input type="number" min="0" name="" id="telefono" placeholder="telefono...">
    <input type="email" name="" id="email" placeholder="Correo electronico...">
    <input type="text" name="" id="apellido" placeholder="Apellido...">
    <input type="text" name="" id="apellido" placeholder="Apellido...">
    <select name="" id="">
        <option value="">---</option>
        <option value="">Multimedia</option>
        <option value="">Fotografía</option>
        <option value="">Audiovisuales</option>
        <option value="">Salas Mac</option>
        <option value="">General</option>
    </select>
    <!-- fechaSolicitud = esta fecha se establece automáticamente. -->

    <!-- Fecha entrega -->
    <input type="date" name="" id="">
    <!-- Fecha devolución -->
    <input type="date" name="" id="">

    <!-- aca iria la tabla o en su defecto un include. -->
    <?php include_once 'tablaElementosViews.php'; ?>

<button type="submit">Reservar</button>
</form>