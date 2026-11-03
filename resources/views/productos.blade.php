
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>El Cactus - Productos</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 p-5">

    <div class="pt-3 sm:pt-5">
        <h2 class="text-lg font-medium text-gray-900">
            Inventario de productos 🌵
        </h2>

        <p class="mt-4 text-sm text-gray-600">
            Hola causas, aquí está nuestra lista de productos.
        </p>

        <div class="mt-5 overflow-x-auto rounded-lg shadow">
            <table class="w-full bg-white text-sm text-left">
                <thead class="bg-green-600 text-white">
                    <tr>
                        <th class="p-3">#</th>
                        <th class="p-3">Producto</th>
                        <th class="p-3">Categoría</th>
                        <th class="p-3">Precio</th>
                        <th class="p-3">Stock</th>
                        <th class="p-3">Estado</th>
                    </tr>
                </thead>

                <tbody>
                    <tr class="border-b">
                        <td class="p-3">1</td>
                        <td class="p-3 font-medium">Laptop HP</td>
                        <td class="p-3">Tecnología</td>
                        <td class="p-3">S/ 2,500.00</td>
                        <td class="p-3">15</td>
                        <td class="p-3">
                            <span class="rounded-full bg-green-100 px-2 py-1 text-green-700">
                                Disponible
                            </span>
                        </td>
                    </tr>

                    <tr class="border-b">
                        <td class="p-3">2</td>
                        <td class="p-3 font-medium">Mouse Logitech</td>
                        <td class="p-3">Accesorios</td>
                        <td class="p-3">S/ 45.00</td>
                        <td class="p-3">30</td>
                        <td class="p-3">
                            <span class="rounded-full bg-green-100 px-2 py-1 text-green-700">
                                Disponible
                            </span>
                        </td>
                    </tr>

                    <tr class="border-b">
                        <td class="p-3">3</td>
                        <td class="p-3 font-medium">Teclado Mecánico</td>
                        <td class="p-3">Accesorios</td>
                        <td class="p-3">S/ 180.00</td>
                        <td class="p-3">8</td>
                        <td class="p-3">
                            <span class="rounded-full bg-yellow-100 px-2 py-1 text-yellow-700">
                                Stock bajo
                            </span>
                        </td>
                    </tr>

                    <tr class="border-b">
                        <td class="p-3">4</td>
                        <td class="p-3 font-medium">Monitor Samsung</td>
                        <td class="p-3">Tecnología</td>
                        <td class="p-3">S/ 850.00</td>
                        <td class="p-3">0</td>
                        <td class="p-3">
                            <span class="rounded-full bg-red-100 px-2 py-1 text-red-700">
                                Agotado
                            </span>
                        </td>
                    </tr>

                    <tr class="border-b">
                        <td class="p-3">5</td>
                        <td class="p-3 font-medium">Audífonos Sony</td>
                        <td class="p-3">Audio</td>
                        <td class="p-3">S/ 220.00</td>
                        <td class="p-3">12</td>
                        <td class="p-3">
                            <span class="rounded-full bg-green-100 px-2 py-1 text-green-700">
                                Disponible
                            </span>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

</body>
</html>
