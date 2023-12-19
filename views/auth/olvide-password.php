<h1 class="nombre-pagina">Olvidé la contraseña</h1>
<p class="descripcion-pagina">Restrablece tu contraseña escribiendo tu email a continuación.</p>

<?php include_once __DIR__ . "/../templates/alertas.php" ?>

<form class="formulario" action="/olvide" method="post">
    <div class="campo">
        <label for="email">Tu Email</label>
        <input type="email" name="email" id="email" placeholder="Tu Email">
    </div>
    <input type="submit" class="boton" value="Enviar Instrucciones">
</form> 

<div class="acciones">
    <a href="/">¿Ya tienes una cuenta? Inicia sesión.</a>
    <a href="/crear-cuenta">¿Aún no tienes una cuenta? Crear una.</a>
</div>