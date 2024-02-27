<?php
require '../require/addcita.php';
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Solicitud de cita</title>
    <link rel="icon" type="image/png" href="../img/icono.png">
    <link href="../dist/styles.css" rel="stylesheet">
    <style>
        .bg-navy {
            background-color: pink;
        }

        .opacity-50 {
            opacity: 0.2;
        }
    </style>
</head>

<body class="bg-navy">

    <header class="px-4 py-2 flex items-center bg-white text-pink-500 sticky top-0 w-full justify-between z-30">
        <!-- logo -->
        <a href="#" class="flex flex-grow basis-0">
            <img src="../img/icono.png" alt="Logo" class="h-10">
            <span class="text-2xl text-pink-200 font-bold">ISENA</span>
        </a>

        <!-- navigation -->
        <nav class="xl:block">
            <a href="index.html" class="py-2 px-4 lg:text-lg font-medium hover:text-pink-900">Inicio</a>
            <a href="nosotros.html" class="py-2 px-4 lg:text-lg font-medium hover:text-pink-900">Nosotros</a>
            <a href="servicios.html" class="py-2 px-4 lg:text-lg font-medium  hover:text-pink-900">Servicios</a>
            <a href="faq.html" class="py-2 px-4 lg:text-lg font-medium hover:text-pink-900">FAQ</a>
            <a href="contacto.html" class="py-2 px-4 lg:text-lg font-medium hover:text-pink-900">Contacto</a>
        </nav>
    </header>

    <a href="https://wa.me/584126104481" target="_blank" class="fixed z-30 right-0 bottom-0 m-4">
        <img src="../assets/whatsapp.svg" alt="WhatsApp" class="w-12 h-12">
    </a>

    <section class="bg-pink-100 p-8">
        <form id="formulario_cita" action="../require/addcita.php" method="POST" class="space-y-12 mx-20">
            <h2 class="text-2xl text-center uppercase font-bold text-violet-700 my-2">Solicitud de Cita</h2>
            <p class="text-center text-red-500">Para solicitar una cita llene el formulario que sigue a continuación.
                Los campos marcados con ❗ son necesarios para procesar correctamente la solicitud.</p>

            <?php if ($message) : ?>
                <div class="flex flex-col justify-center bg-blue-500 text-white uppercase text-center px-6 py-4 mb-4 rounded-md text-md">
                    <?php echo $message; ?>
                </div>
            <?php endif; ?>

            <div class="flex-grow overflow-auto">
                <div class="grid grid-cols-2 gap-12">

                    <div class="h-auto col-span-1">

                        <fieldset class="space-y-2">
                            <legend class="text-lg text-center font-semibold uppercase text-pink-600 my-4">Datos de la
                                Paciente</legend>
                            <label for="nombres" class="block text-sm font-medium text-gray-700">❗ Nombres:</label>
                            <input id="nombres" name="nombres" class="w-full p-2 border border-pink-300 rounded" type="text" placeholder="Primer y segundo Nombre" required>
                            <label for="apellido_paterno" class="block text-sm font-medium text-gray-700">❗ Apellido
                                Paterno:</label>
                            <input id="apellido_paterno" name="apellido_paterno" class="w-full p-2 border border-pink-300 rounded" type="text" placeholder="Apellido Paterno" required>
                            <label for="apellido_materno" class="block text-sm font-medium text-gray-700">❗ Apellido
                                Materno:</label>
                            <input id="apellido_materno" name="apellido_materno" class="w-full p-2 border border-pink-300 rounded" type="text" placeholder="Apellido Materno" required>
                            <label for="fecha_nacimiento" class="block text-sm font-medium text-gray-700">❗ Fecha de
                                nacimiento:</label>
                            <input id="fecha_nacimiento" name="fecha_nacimiento" class="w-40 p-2 border border-pink-300 rounded" type="date" required>
                            <label for="edad" class="block text-sm font-medium text-gray-700">❗ Edad:</label>
                            <input id="edad" name="edad" class="w-20 p-2 border border-pink-300 rounded" type="number" placeholder="Edad" required>
                            <label for="cedula" class="block text-sm font-medium text-gray-700">❗ Cédula:</label>
                            <input id="cedula" name="cedula" class="w-40 p-2 border border-pink-300 rounded" type="text" placeholder="Cédula" required>
                            <p class="text-red-500">❗ <strong>Importante:</strong> Coloque un número de celular y un
                                correo electrónico válido, los mismos son necesarios para el futuro contacto.</p>
                            <label for="telefono_casa" class="block text-sm font-medium text-gray-700">❗ Teléfono de
                                casa:</label>
                            <input id="telefono_casa" name="telefono_casa" class="w-40 p-2 border border-pink-300 rounded" type="tel" placeholder="Teléfono de Casa" required>
                            <label for="celular_uno" class="block text-sm font-medium text-gray-700">❗ Número de celular
                                primario:</label>
                            <input id="celular_uno" name="celular_uno" class="w-40 p-2 border border-pink-300 rounded" type="tel" placeholder="Celular 1" required>
                            <label for="celular_dos" class="block text-sm font-medium text-gray-700">Número de celular
                                secundario
                                (opcional):</label>
                            <input id="celular_dos" name="celular_dos" class="w-40 p-2 border border-pink-300 rounded" type="tel" placeholder="Celular 2">
                            <label for="email" class="block text-sm font-medium text-gray-700">❗ Correo
                                electrónico:</label>
                            <input id="email" name="email" class="w-full p-2 border border-pink-300 rounded" type="email" placeholder="Email">
                        </fieldset>
                    </div>

                    <div class="h-auto col-span-1">
                        <fieldset class="space-y-2">
                            <legend class="text-lg text-center font-semibold uppercase text-pink-600 my-4">Datos de la
                                cita</legend>
                            <label for="servicio" class="block text-sm font-medium text-gray-700">❗ Selecciona un
                                Servicio:</label>
                            <select id="servicio" name="servicio" class="w-full p-2 border border-pink-300 rounded" required>
                                <option value="" selected disabled>Selecciona un Servicio</option>
                                <option value="Mamografía">Mamografía</option>
                                <option value="Ecografía">Ecografía</option>
                                <option value="Radiografía">Mamografía</option>
                            </select>
                            <label for="descripcion_malestar" class="block text-sm font-medium text-gray-700">Descripción del
                                malestar:</label>
                            <textarea id="descripcion_malestar" name="descripcion_malestar" class="w-full p-2 border border-pink-300 rounded" rows="3" placeholder="Descripción del Malestar"></textarea>
                            <label for="fecha_deseada" class="block text-sm font-medium text-gray-700">Fecha
                                deseada:</label>
                            <p>(Opción a función de cupos médicos disponibles)</p>
                            <label for="dia" class="block text-sm font-medium text-gray-700">Día:</label>
                            <input id="dia" name="dia" class="w-40 p-2 border border-pink-300 rounded" type="text">
                            <label for="turno" class="block text-sm font-medium text-gray-700">Turno:</label>
                            <select id="turno" name="turno" class="w-60 p-2 border border-pink-300 rounded">
                                <option selected disabled>Selecciona un Turno</option>
                                <option value="Mañana">Mañana</option>
                                <option value="Tarde">Tarde</option>
                            </select>
                        </fieldset>
                    </div>
                </div>
            </div>
            <input id="formulario_completado" type="submit" class="cursor-pointer w-full p-2 bg-pink-600 text-white font-bold rounded hover:bg-pink-700" name="solicitar" value="Solicitar Cita">
        </form>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.10.5/dist/sweetalert2.all.min.js"></script>

    <script>
        document.getElementById('formulario_cita').addEventListener('submit', function(e) {
            if (sessionStorage.getItem("message")) {
                e.preventDefault(); // Previene el envío del formulario
            }
        });

        document.getElementById('fecha_nacimiento').addEventListener('change', function() {
            const fechaNacimiento = new Date(this.value);
            const hoy = new Date();
            let edad = hoy.getFullYear() - fechaNacimiento.getFullYear();
            const mes = hoy.getMonth() - fechaNacimiento.getMonth();
            if (mes < 0 || (mes === 0 && hoy.getDate() < fechaNacimiento.getDate())) {
                edad--;
            }
            document.getElementById('edad').value = edad;
        });
    </script>
</body>

</html>