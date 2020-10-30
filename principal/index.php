<?php include "../includes/header.php"; ?>

<div class="container-fluid">
    <div class="row">
        <div class="col col-md-10">
            <div class="card my-3" v-for="item in datosFiltrados">
                <!-- Card content -->
                <div class="card-body">
                    <!-- Title -->
                    <div class="cabecera">
                        <h4 class="card-title">{{item.titulo}}</h4>
                        <span class="badge badge-pill badge-info">{{item.categoria}}</span>
                        <hr>
                    </div>
                    <!-- Text -->

                    <div class="card-text grey lighten-5 codigo">
                        <p class="p-1">Editado el: {{item.fecha_editado}} por {{item.user_edit}}</p>
                        <div class="row">
                            <div class="col col-md-11">
                                <div class="p-2 grey lighten-5" :id="'copy' + item.id">
                                    {{item.codigo}}
                                </div>

                            </div>
                            <div class="col col-md-1">
                                <ul class="list-unstyled list-inline font-small ml-2 list-option  grey lighten-3">
                                    <li class="list-inline-item pr-2">
                                        <a :href="'./editar.php?id='+item.id" class="black-text">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                    </li>
                                    <li class="list-inline-item pr-2" v-if="item.user==userPost">
                                        <a @click="eliminar(item.id)" class="black-text">
                                            <i class="fas fa-trash-alt"></i>
                                        </a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="#" class="black-text copiar" :data-clipboard-target="'#copy'+item.id">
                                            <i class="fas fa-copy"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>

                        </div>
                    </div>
                    <p>{{item.descripcion}}</</p> </div> <!-- Card footer -->
                        <div class="grey darken-3 p-3 d-flex  justify-content-between footer-card">
                            <span class="white-text">
                                <img class="card-img-top" :src="item.foto_user" alt="Card image cap" style="width: 35px" class="img-fluid rounded-circle ">
                                {{item.user.toUpperCase()}}
                            </span>
                            <div class="text-white fecha">
                                Creado el: {{item.fecha_creado}}
                            </div>

                        </div>
                </div>

            </div>
            <div class="col col-md-2">
                <div class="mt-3 border">
                    <h2 class="text-center">Categorías</h2>
                </div>
            </div>
        </div>

    </div>

    <?php include "../includes/footer.php"; ?>