<h1 id="menuTitle">Registrar solicitud</h1>

<form action="" method="post" id="formSolicitudPrestamo">
    <div class="inputForm cedula">
        <label for="cedula">Cédula: *</label>
        <input type="number" name="cedula" id="cedula" placeholder="Identificación...">
    </div>

    <div class="inputForm nombre">
        <label for="nombre">Nombre: *</label>
        <input type="text" name="nombre" id="nombre" placeholder="Nombre...">
    </div>

    <div class="inputForm apellido">
        <label for="apellido">Apellido: *</label>
        <input type="text" name="apellido" id="apellido" placeholder="Apellido...">
    </div>

    <div class="inputForm telefono">
        <label for="telefono">Teléfono: *</label>
        <input type="tel" name="telefono" id="telefono" placeholder="Teléfono...">
    </div>

    <div class="inputForm email">
        <label for="email">Email:</label>
        <input type="email" name="email" id="email" placeholder="Correo electrónico...">
    </div>

    <div class="inputForm areaDestino">
        <label for="areaDestino">Área de destino: *</label>
        <select name="areaDestino" id="areaDestino">
            <option value="">---</option>
            <option value="multimedia">Multimedia</option>
            <option value="fotografia">Fotografía</option>
            <option value="audiovisuales">Audiovisuales</option>
            <option value="salas_mac">Salas Mac</option>
            <option value="general">General</option>
        </select>
    </div>

    <div class="inputForm fechaReserva">
        <label for="fechaReserva">Fecha Reserva: *</label>
        <input type="date" name="fechaReserva" id="fechaReserva">
    </div>

    <div class="inputForm horaInicioFin">
        <div class="horaInicio">
            <label for="inicio">Hora inicio:</label>
            <input type="time" id="inicio" name="inicio">
        </div>
        <div class="horaFin">
            <label for="fin">Hora fin:</label>
            <input type="time" id="fin" name="fin">
        </div>
    </div>

    <div class="inputForm fechaDevolucion">
        <label for="fechaDevolucion">Fecha Devolución: *</label>
        <input type="date" name="fechaDevolucion" id="fechaDevolucion">
    </div>

    <div class="inputObservaciones">
        <label for="observaciones">Observaciones</label>
        <textarea name="observaciones" id="observaciones" placeholder="Digite una observación en caso de que sea requerida."></textarea>
    </div>

    <div class="tableView">
        <?php include_once 'tablaElementosView.php'; ?>
    </div>

    <div class="inputBtn">
        <button type="submit" id="btnSubmit">Reservar</button>
    </div>
</form>