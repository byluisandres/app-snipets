<?php include "../includes/header.php"; ?>
<div class="container">
    <div class="row">
        <div class="col col-md-12 col-lg-12">
            <!-- Default form login -->
            <form class="text-center border border-light p-5 mt-5" method="POST" id="formRegistro" autocomplete="off" @submit.prevent="registro" enctype="multipart/form-data">
                <p class="h4 mb-4">Resgistrarse</p>
                <!-- nombre de usuario -->
                <input type="text" name="usuario" id="usuario" class="form-control mb-4" placeholder="Nombre de usuario">
                <!-- Email -->
                <input type="email" id="email" name="email" class="form-control mb-4" placeholder="E-mail">

                <!-- Password -->
                <input type="password" id="pass" v-model="pass" name="pass" class="form-control mb-4" placeholder="Contraseña" pattern="[A-Za-z0-9]{8,15}">
                <!-- repit Password -->
                <input type="password" id="pass" v-model="passC" name="pass" class="form-control mb-4" placeholder="Confimar Contraseña" pattern="[A-Za-z0-9]{8,15}">

                <!-- imagen -->
                <div class="input-group">
                    <input type="file" name="foto" id="foto" class="form-control mb-4">
                </div>

                <!-- Sign in button -->
                <button class="btn btn-info btn-block my-4" type="submit">Registrarse</button>
                <!-- Register -->
                <p>
                    <a href="index.php">Login</a>
                </p>
            </form>
            <!-- Default form login -->

        </div>
    </div>
</div>
<h5>RES: {{respuesta}}</h5>
<?php include "../includes/footerLogin.php"; ?>