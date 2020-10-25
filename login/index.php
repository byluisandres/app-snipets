<?php
include "../includes/header.php"; ?>
<div class="container">
    <div class="row">
        <div class="col col-md-12 col-lg-12">
            <!-- Default form login -->
            <form class="text-center border border-light p-5 mt-5" action="" method="POST" id="inicioSesion" autocomplete="off" @submit.prevent="login">
                <p class="h4 mb-4">Login</p>
                <!-- Email -->
                <input type="email" id="email" name="email" class="form-control mb-4" placeholder="E-mail">

                <!-- Password -->
                <input type="password" id="pass" name="pass" class="form-control mb-4" placeholder="Contraseña" pattern="[A-Za-z0-9]{8,15}">
                <!-- Sign in button -->
                <button class="btn btn-info btn-block my-4" type="submit">Entrar</button>
                <!-- Register -->
                <p>
                    ¿Aún no tienes cuenta? <a href="registro.php">Registrarse</a>
                </p>
            </form>
            <!-- Default form login -->
            <p>RES:{{respuesta}}</p>
        </div>
    </div>
</div>

<?php include "../includes/footerLogin.php"; ?>