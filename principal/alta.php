<?php include "../includes/header.php"; ?>
<div class="container">
    <!-- Default form login -->
    <form class="text-center border border-light p-5 mt-5" method="POST" id="altaPost" @submit.prevent="alta">
        <p class="h4 mb-4">Alta </p>


        <input type="text" id="titulo" name="titulo" class="form-control mb-4" placeholder="Título del snipets" require>
        <textarea name="codigo" id="codigo" cols="10" rows="5" class="form-control mb-4" placeholder="Escribe tu código"></textarea>

        <textarea name="descripcion" id="descripcion" cols="10" rows="5" class="form-control mb-4" placeholder="Escribe tu descripcion"></textarea>

        <select class="browser-default custom-select" name="categoria">
            <option selected disabled>- - Selecciona categoría - -</option>
            <option value="php">PHP</option>
            <option value="css">CSS</option>
            <option value="js">JS</option>
        </select>

        <button class="btn btn-info btn-block my-4" type="submit">Guardar</button>

    </form>
    
    <!-- Default form login -->
</div>

<?php include "../includes/footer.php"; ?>