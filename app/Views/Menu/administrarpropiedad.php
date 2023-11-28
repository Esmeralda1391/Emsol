<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Inmobiliaria Emsol</title>
    <style>
        body {
            background-color: #fff;
        
        }

        .navbar {
            background-color: #87CEEB;
            
        }

        .navbar-brand {
            color: #fff;
            
            font-size: 24px;
            
            font-weight: bold;
           
        }

        .navbar .navbar-brand i {
            margin-right: 10px;
           
        }

        .card {
            border-radius: 15px;
            
            margin: 20px;
        }

        .mi-tabla {
            border-collapse: collapse;
            width: 100%;
        }

        .mi-tabla th,
        .mi-tabla td {
            border: 1px solid #dddddd;
            padding: 8px;
            text-align: left;
        }

        .mi-tabla th {
            background-color: #007bff;
            color: white;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light fixed-top">
        <div class="container">
            <a class="navbar-brand mx-auto" href="#"> 
                <i class=""></i> Administrar Propiedades
            </a>
            <div>

                <button class="btn btn-danger">Regresar</button>

            </div>
        </div>
    </nav>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <div class="container mt-5">
        <table class="mi-tabla">
            <tbody>
                </tr>
                <th>id</th>
                <th>ruta_imagen</th>
                <th>Título</th>
                <th>Estado</th>
                <th>Municipio</th>
                <th>Localidad</th>
                <th>Tipo Propiedad</th>
                <th>Metros cuadrados</th>
                <th>Costo</th>
                <th>Nombre Propietario</th>
                <th>Correo Electronico</th>
                <th>Telefono</th>
                <th>Acciones</th>
                </tr>
                </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>RutaImagen1.jpg</td>
                    <td>Propiedad 1</td>
                    <td>Puebla</td>
                    <td>Acajete</td>
                    <td>San Juan</td>
                    <td>Casa</td>
                    <td>150</td>
                    <td>$200,000</td>
                    <td>Esmeralda Garces</td>
                    <td>jmgarces810@gmail.com</td>
                    <td>233-132-6845</td>
                    <td>
                        <a href="#" class="btn btn-primary">Actualizar</a>
                        <a href="#" class="btn btn-danger">Eliminar</a>
                    </td>
                </tr>
            </tbody>
        </table>
        <br>

        <center><button class="btn btn-success">Agregar propiedad</button></center>


    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>