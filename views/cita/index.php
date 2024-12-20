<h1 class="nombre-pagina">Nueva Cita</h1>
<p class="descripcion-pagina">Elige tus servicios a continuación</p>

<?php include_once __DIR__.'/../template/barra.php' ?>


<div id="app">
    <nav class="tabs">
        <button type="button" class="actual" data-paso="1">Servicios</button>
        <button type="button" data-paso="2">Información Cita</button>
        <button type="button" data-paso="3">Resumen</button>
    </nav>
    <div id="paso-1" class="seccion">
        <h2>Servicios</h2>
        <p class="text-center">Elige tus servicios a continuación</p>
        <div id="servicios" class="listado-servicios">

        </div>
    </div>
    <div id="paso-2" class="seccion">
        <h2>Tus datos y cita</h2>
        <p class="text-center">Coloca tus datos y fecha de tu cita</p>
        <form class="formulario" method="post">
            <div class="campo">
                <label for="nombre">Nombre</label>
                <input value="<?php echo $nombre ?>" disabled type="text" id="nombre" name="nombre">
                <input value="<?php echo $id ?>" disabled type="hidden" id="id" name="id">

            </div>

            <div class="campo">
                <label for="fecha">Fecha</label>
                <input value="" type="date" id="fecha" min="<?php echo date('Y-m-d', strtotime('+1 day')) ?>" name="fecha">

            </div>
            <div class="campo">
                <label for="hora">Hora</label>
                <input value="" type="time" id="hora" name="hora">

            </div>
        </form>

    </div>
    <div id="paso-3" class="seccion contenido-resumen">
        <h2>Resumen</h2>
        <p class="text-center">Verifica que la información sea correcta</p>
    </div>
    <div class="paginacion">
        <button id="anterior" class="boton">&laquo; Anterior</button>
        <button id="siguiente" class="boton">Siguiente &raquo;</button>
    </div>
</div>

<?php $script = "
    <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
    <script src='build/js/app.js'></script>
";
?>