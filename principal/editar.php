<?php include "../includes/header.php"; ?>
<div class="container">
    <!-- Default form login -->
    <p class="h4 text-center">Editar </p>
    <form class="text-center  p-2 mt-2" method="POST" id="editarPost" @submit.prevent="editar">
        <input type="text" id="titulo" name="titulo" class="form-control mb-4" :value="formEditar.titulo" v-if="formEditar.user==userPost">
        <textarea name="codigo" id="codigo" cols="10" rows="30" class="form-control mb-4" :value="formEditar.codigo" ></textarea>

        <textarea name="descripcion" id="descripcion" cols="10" rows="5" class="form-control mb-4" :value="formEditar.descripcion" v-if="formEditar.user==userPost"></textarea>

        <select class="browser-default custom-select" name="categoria" v-if="formEditar.user==userPost">
            <option selected :value="formEditar.categoria" v-text="formEditar.titulo"></option>
            <option value="php">PHP</option>
            <option value="css">CSS</option>
            <option value="js">JS</option>
        </select>
        <input type="hidden" name="id" :value="formEditar.id">
        <button class="btn btn-info btn-block my-4" type="submit">Editar</button>

    </form>

    <!-- Default form login -->
</div>

<?php include "../includes/footer.php"; ?>