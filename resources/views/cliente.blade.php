
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clientes</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 p-5">

    <div class="pt-3 sm:pt-5">
        <h2 class="text-lg font-medium text-gray-900">
            Registro de clientes 🌵
        </h2>

        <p class="mt-4 text-sm text-gray-600">
            Hola causas, aquí está nuestra lista de clientes.
        </p>

        <div class="mt-5 overflow-x-auto rounded-lg shadow">
            <table class="w-full bg-white text-sm text-left">
                <thead class="bg-green-600 text-white">
                    <tr>
                        <th class="p-3">#</th>
                        <th class="p-3">Cliente</th>
                        <th class="p-3">DNI</th>
                        <th class="p-3">Correo</th>
                        <th class="p-3">Teléfono</th>
                        <th class="p-3">Ciudad</th>
                        <th class="p-3">Estado</th>
                    </tr>
                </thead>

                <tbody>
                    <tr class="border-b">
                        <td class="p-3">1</td>
                        <td class="p-3 font-medium">Juan Pérez</td>
                        <td class="p-3">12345678</td>
                        <td class="p-3">juan@gmail.com</td>
                        <td class="p-3">987654321</td>
                        <td class="p-3">Lima</td>
                        <td class="p-3">
                            <span class="rounded-full bg-green-100 px-2 py-1 text-green-700">
                                Activo
                            </span>
                        </td>
                    </tr>

                    <tr class="border-b">
                        <td class="p-3">2</td>
                        <td class="p-3 font-medium">María López</td>
                        <td class="p-3">87654321</td>
                        <td class="p-3">maria@gmail.com</td>
                        <td class="p-3">912345678</td>
                        <td class="p-3">Arequipa</td>
                        <td class="p-3">
                            <span class="rounded-full bg-green-100 px-2 py-1 text-green-700">
                                Activo
                            </span>
                        </td>
                    </tr>

                    <tr class="border-b">
                        <td class="p-3">3</td>
                        <td class="p-3 font-medium">Carlos Torres</td>
                        <td class="p-3">45678912</td>
                        <td class="p-3">carlos@gmail.com</td>
                        <td class="p-3">923456789</td>
                        <td class="p-3">Cusco</td>
                        <td class="p-3">
                            <span class="rounded-full bg-red-100 px-2 py-1 text-red-700">
                                Inactivo
                            </span>
                        </td>
                    </tr>

                    <tr class="border-b">
                        <td class="p-3">4</td>
                        <td class="p-3 font-medium">Ana Rodríguez</td>
                        <td class="p-3">78912345</td>
                        <td class="p-3">ana@gmail.com</td>
                        <td class="p-3">934567890</td>
                        <td class="p-3">Trujillo</td>
                        <td class="p-3">
                            <span class="rounded-full bg-green-100 px-2 py-1 text-green-700">
                                Activo
                            </span>
                        </td>
                    </tr>

                    <tr class="border-b">
                        <td class="p-3">5</td>
                        <td class="p-3 font-medium">Pedro Sánchez</td>
                        <td class="p-3">32145678</td>
                        <td class="p-3">pedro@gmail.com</td>
                        <td class="p-3">945678123</td>
                        <td class="p-3">Piura</td>
                        <td class="p-3">
                            <span class="rounded-full bg-yellow-100 px-2 py-1 text-yellow-700">
                                Pendiente
                            </span>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

</body>
</html>
