<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Productos</title>
</head>
<body>

    <h1>Lista de Productos</h1>
    <a href="{{ url("/productos/create") }}"><button>Agregar Producto</button></a>


   
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Precio</th>
                    <th>Stock</th>
                </tr>
            </thead>
            <tbody>
                @foreach($productos as $producto)
                    <tr>
                        <td>{{ $producto['pro_id'] }}</td>
                        <td>{{ $producto['pro_nombre'] }}</td>
                        <td>{{ $producto['pro_precio'] }}</td>
                        <td>{{ $producto['pro_stock'] }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>


</body>
</html>