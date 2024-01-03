<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Producto</title>
</head>
<body>

    <h1>Crear Producto</h1>

    @if(session('success'))
        <div style="color: green;">{{ session('success') }}</div>
    @endif

    @if(session('error'))
        <div style="color: red;">{{ session('error') }}</div>
    @endif

    <form action="{{ route('productos.store') }}" method="post">
        @csrf
        <label for="pro_nombre">Nombre:</label>
        <input type="text" name="pro_nombre" required>

        <label for="pro_precio">Precio:</label>
        <input type="number" name="pro_precio" step="1" required>

        <label for="pro_stock">Stock:</label>
        <input type="number" name="pro_stock" required>

        <label for="cat_id">Categoría ID:</label>
        <input type="number" name="cat_id" required>

        <!-- Otros campos según tu estructura -->

        <button type="submit">Guardar Producto</button>
    </form>

</body>
</html>