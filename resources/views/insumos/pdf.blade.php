<!DOCTYPE html>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <style>
        h1 {
            text-align: center;
            text-transform: uppercase;
        }

        .contenido {
            font-size: 20px;
        }

        #primero {
            background-color: #ccc;
        }

        #segundo {
            color: #44a359;
        }

        #tercero {
            text-decoration: line-through;
        }
    </style>
</head>

<body>
    <h1>LISTA DE INSUMOS</h1>
    <hr>
    <div class="contenido">
        <table class="table">
            <thead>
                <tr>
                    <th class="border px-4 py-2">ID</th>
                    <th class="border px-4 py-2">DESCRIPCION</th>
                    <th class="border px-4 py-2">CANTIDAD</th>
                    <th class="border px-4 py-2">IMAGEN</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                @foreach ($insumos as $insumo)
                    <tr>
                        <td class="border px-4 py-2">{{$insumo->id}}</td>
                        <td class="border px-4 py-2">{{$insumo->descripcion}}</td>
                        <td class="border px-4 py-2">{{$insumo->cantidad}}</td>
                        <td  class="border px-14 py-1">
                            <img src="http://localhost/odontologia/public/imagen/{{$insumo->imagen}}" width="60%">
                        </td>
                    </tr>
                    @endforeach   
                </tr>
            </tbody>
        </table>
    </div>
</body>

</html>