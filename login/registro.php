<?php include "../includes/header.php"; ?>
<div class="container">
    <div class="row">
        <div class="col col-md-12 col-lg-12">
            <!-- Default form login -->
            <form class="text-center border border-light p-5 mt-5" method="POST" id="formRegistro" autocomplete="off" @submit.prevent="registro" enctype="multipart/form-data">
                <p class="h4 mb-4">Resgistrarse</p>
                <!-- nombre de usuario -->
                <input type="text" name="usuario" id="usuario" v-model="usuario" class="form-control mb-4" placeholder="Nombre de usuario">
                <!-- Email -->
                <input type="email" id="email" v-model="correo" name="email" class="form-control mb-4" @blur="validarCorreo" placeholder="E-mail">

                <!-- Password -->
                <input type="password" id="pass" v-model="pass" name="pass" class="form-control mb-4" placeholder="Contraseña" pattern="[A-Za-z0-9]{8,15}">
                <!-- repit Password -->
                <input type="password" id="pass" v-model="passC" name="pass" class="form-control mb-4" placeholder="Confimar Contraseña" pattern="[A-Za-z0-9]{8,15}">

                <!-- imagen -->
                <div class="input-group">
                    <input type="file" name="foto" id="foto" class="form-control mb-4">
                </div>

                <!-- Sign in button -->
                <button class="btn-block btn btn-info my-4" disabled="true" ref="btnDisabled" type="submit">Registrarse</button>
                <!-- Register -->
                <p>
                    Ir al <a href="index.php" class="stretched-link">Log in</a>
                </p>
            </form>
            <!-- Default form login -->

        </div>
    </div>
</div>
<?php include "../includes/footerLogin.php"; ?>