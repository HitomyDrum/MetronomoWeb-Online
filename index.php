<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>Metronomo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/boxicons/2.1.0/css/boxicons.min.css" integrity="sha512-pVCM5+SN2+qwj36KonHToF2p1oIvoU3bsqxphdOIWMYmgr4ZqD3t5DjKvvetKhXGc/ZG5REYTT6ltKfExEei/Q==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/5.3.45/css/materialdesignicons.css" integrity="sha256-NAxhqDvtY0l4xn+YVa6WjAcmd94NNfttjNsDmNatFVc=" crossorigin="anonymous" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

</head>
<body>
    <header class="bg-dark p-2 d-flex">
        <h1 class="text-white border-bottom border-primary">Squadron Rock</h1><span class="text-white mt-4 mx-1 px-2 border border-success">Set List Completo</span>
    </header>
    <div class="container border border-primary mt-4">
        <section id="metronomo" class="text-center mt-5 mx-auto p-3 border border-2 shadow border-warning" style="max-width: 15rem">
            <!-- Informacion -->
            <h1 id="ppm"></h1>
            <h2>BPM</h2>
            <!-- Controles -->
            <div>
                <p class="d-flex justify-content-between gap-1">
                    <!-- Botones para variar los PPM (Pulsaciones por minutos) -->
                    <button id="boton-decrecer-5-ppm" class="btn btn-secondary flex-grow-1 rounded-circle">-5</button>
                    <button id="boton-decrecer-1-ppm" class="btn btn-secondary flex-grow-1 rounded-circle">-</button>
                    <button id="boton-crecer-1-ppm" class="btn btn-secondary flex-grow-1 rounded-circle">+</button>
                    <button id="boton-crecer-5-ppm" class="btn btn-secondary flex-grow-1 rounded-circle">+5</button>
                </p>
                <p>
                    <!-- Boton para iniciar o pausar -->
                    <button id="boton-reproducir" class="d-block btn btn-primary w-100 rounded-pill shadow">Empezar</button>
                </p>
            </div>
            <!-- Reproductor (será invisible) -->
            <audio id="audio-metronomo">
                <!-- Para conseguir la mayor compatibilidad, se usa tanto OGG como MP3 -->
                <source src="https://programadorwebvalencia.com/videos/blog/2019/11/tick.ogg" type="audio/ogg">
                <source src="https://programadorwebvalencia.com/videos/blog/2019/11/tick.mp3" type="audio/mpeg">
            </audio>
        </section>
        <script src="./js/metro.js"></script>
        <!-- TABLA NUEVA -->
        <div class="row align-items-center">
            <div class="col-md-6">
                <div class="mb-3">
                    <?php
                        // Crear una conexión a la base de datos
                        $conn = new mysqli("localhost", "root", "", "squadron");

                        // Verificar la conexión
                        if ($conn->connect_error) {
                            die("Error de conexión: " . $conn->connect_error);
                        }
                        // Consulta SQL para obtener el total de registros
                        $sql = "SELECT COUNT(*) as total FROM canciones";
                        $result = $conn->query($sql);

                        // Verificar si se obtuvo algún resultado
                        if ($result->num_rows > 0) {
                            // Obtener el resultado como un arreglo asociativo
                            $row = $result->fetch_assoc();
                            // Obtener el total de registros
                            $totalRegistros = $row["total"];
                        } else {
                            $totalRegistros = 0;
                        }

                        // Cerrar la conexión a la base de datos
                        $conn->close();
                    ?>
                    <h5 class="card-title">Lista de Canciones <span class="text-muted fw-normal ms-2">(<?php echo $totalRegistros;?>)</span></h5>
                </div>
            </div>
            <div class="col-md-6">
                <div class="d-flex flex-wrap align-items-center justify-content-end gap-2 mb-3">
                    <div>
                        <ul class="nav nav-pills">
                            <li class="nav-item">
                                <a
                                    aria-current="page"
                                    href="#"
                                    class="router-link-active router-link-exact-active nav-link active"
                                    data-bs-toggle="tooltip"
                                    data-bs-placement="top"
                                    title=""
                                    data-bs-original-title="List"
                                    aria-label="List"
                                >
                                    <i class="bx bx-list-ul"></i>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Grid" aria-label="Grid"><i class="bx bx-grid-alt"></i></a>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <a href="#" data-bs-target="#exampleModal" data-bs-toggle="modal" data-bs-target=".add-new" class="btn btn-primary d-flex justify-content-center align-items-center"><i class="bx bx-plus me-1"></i> Add New</a>
                    </div>
                    <div class="dropdown">
                        <a class="btn btn-link text-muted py-1 font-size-16 shadow-none dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="bx bx-dots-horizontal-rounded"></i></a>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <label for="caja_busqueda_canciones">Buscar por BPM, Nombre o Artista: </label>
            <input type="text" name="caja_busqueda_canciones" id="caja_busqueda_canciones" class="form-control">
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="">
                    <div class="table-responsive">
                        <table class="table project-list-table table-nowrap align-middle table-borderless">
                            <thead>
                                <tr>
                                    <th scope="col" class="ps-4" style="width: 50px;">
                                        <div class="form-check font-size-16"><input type="checkbox" class="form-check-input" id="contacusercheck" /><label class="form-check-label" for="contacusercheck"></label></div>
                                    </th>
                                    <th scope="col">N°</th>
                                    <th scope="col">Canción</th>
                                    <th scope="col">Artista</th>
                                    <th scope="col">BPM</th>
                                    <th scope="col" style="width: 200px;">Play BPM</th>
                                    <th scope="col" style="width: 200px;">Acciones</th>
                                </tr>
                            </thead>
                            <tbody id="datos">

                            </tbody>
                            <script src="./js/jquery.min.js"></script>
                            <script src="./js/main-buscador.js"></script>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
        crossorigin="anonymous"></script>
</body>
</html>