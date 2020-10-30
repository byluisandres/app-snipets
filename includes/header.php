<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>App Snipets</title>
    <!-- Font Awesome -->
    <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.8.2/css/all.css'>
    <!-- Bootstrap core CSS -->
    <link href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css' rel='stylesheet'>
    <!-- Material Design Bootstrap -->
    <link href='https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css' rel='stylesheet'>
    <!-- Sweetalert -->
    <script src='https://cdn.jsdelivr.net/npm/sweetalert2@10'></script>
    <!-- css -->
    <link rel="stylesheet" href="../css/estilos.css">
    <!-- editor -->
    <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">

</head>

<body>
    <main id="app">
        <!--Navbar -->
        <nav class="mb-1 navbar navbar-expand-lg navbar-dark red darken-4">
            <a class="navbar-brand" href="index.php">App snipets</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-555" aria-controls="navbarSupportedContent-555" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent-555">
                <!-- buscar -->
                <form class="form-inline " v-if="menu==true">
                    <input class="form-control" type="search" placeholder="Buscar" v-model="buscar" aria-label="Search">
                </form>
                <ul class="navbar-nav ml-auto nav-flex-icons" v-if="menu==true">
                    <li class="nav-item">
                        <a class="nav-link waves-effect waves-light" href="alta.php">
                            <i class="fas fa-plus"></i>
                        </a>
                    </li>
                    <li>
                        <a href="../login/salir.php" class="btn red darken-1 nav-link p-2 text-white">Salir</a>
                    </li>
                    <li class="nav-item avatar">
                        <a class="nav-link p-2" href="index.php">
                            <img :src="imgUser" class="rounded-circle z-depth-0" alt="avatar image" height="35">
                            <p style="display: inline-block;">{{userPost}}</p>
                        </a>
                    </li>
                </ul>
            </div>
        </nav>