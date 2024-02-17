<?php   
    $salida = "";
    $query = 'SELECT * FROM canciones';

    if(isset($_POST['consulta'])) {
        $q = $con->con->real_escape_string($_POST['consulta']);
        $query = "SELECT * FROM canciones
        WHERE NOMBRE LIKE '%".$q."%' OR BPM LIKE '%".$q."%' OR ARTISTA LIKE '%" . $q . "%'";
    }

    $resultado = $con->con->query($query);

    if($resultado->num_rows > 0) {
        $i = 0;
        # Importante!! No olvidar poner el ID como un td en hidden
        while($fila = $resultado->fetch_assoc()) {
            $i++;
            $salida .= '<tr class="shadow p-3 mb-5 bg-body rounded">';
            $salida .= '<th scope="row" class="ps-4">';
            # $salida .= '<div class="form-check font-size-16"><input type="checkbox" class="form-check-input"/><label class="form-check-label" for=""></label></div>';
            $salida .= '</th>';
            $salida .= '<td>' . $i . '</td>';
            $salida .= '<td>' . $fila['NOMBRE'] . '</td>';
            $salida .= '<td>' . $fila['ARTISTA'] . '</td>';
            $salida .= '<td>' . $fila['BPM'] . '</td>';
            $salida .= '<td>';
            $salida .= '<a onclick="return setearBpmIdCancion('.$fila['BPM'].')" class="btn btn-success rounded-circle mx-1">Play</a>' . '</td>';
            $salida .= '</td>';
            /* Acciones */
            $salida .= '<td>';
            $salida .= '<ul class="list-inline mb-0">';
            $salida .= '<li class="list-inline-item">';
            $salida .= '<a href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top" title="Editar Mascota" class="px-2 text-primary editarProductoJS"><i class="bx bx-pencil font-size-18"></i></a>';
            $salida .= '</li>';
            $salida .= '<li class="list-inline-item">';
            $salida .= '<a href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top" title="Eliminar Mascota" class="px-2 text-danger"><i class="bx bx-trash-alt font-size-18"></i></a>';
            $salida .= '</li>';
            $salida .= '<li class="list-inline-item dropdown">';
            $salida .= '<a class="text-muted dropdown-toggle font-size-18 px-2" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true"><i class="bx bx-dots-vertical-rounded"></i></a>';
            $salida .= '<div class="dropdown-menu dropdown-menu-end">';
            $salida .= '<a class="dropdown-item" href="#">Action</a><a class="dropdown-item" href="#">Another action</a><a class="dropdown-item" href="#">Something else here</a>';
            $salida .= '</div>';
            $salida .= '</li>';
            $salida .= '</ul>';
            $salida .= '</td>';
            $salida .= '</tr>';
        }
    } else {
        $salida .= '<tr>';
        $salida .= '<td colspan="5">Sin resultados</td>';
        $salida .= '</tr>';
    }

    echo $salida;
?>