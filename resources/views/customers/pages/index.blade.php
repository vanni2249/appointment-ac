<x-customers.app-layout>
    <div class="space-y-24">
        <section>
            <x-slot name="hero">
                <section class="bg-blue-100">
                    <div class="container mx-auto p-4">
                        <div
                            class="flex flex-col pt-24 lg:pt-0 lg:flex-row min-h-screen items-center justify-center gap-4">
                            <div class="w-full lg:w-1/2 text-center">
                                <div class="w-3/12 mx-auto">
                                    <img src="{{ asset('svg/air-conditioner.svg') }}" alt="">

                                </div>
                                <h1 class="text-3xl md:text-5xl  font-extrabold leading-relaxed md:leading-relaxed">
                                    Instalación,
                                    reparación y limpieza de<span class="text-blue-600"> aire acondicionado.</span>
                                </h1>
                                <h3 class="text-blue-500">
                                    Si quieres evitar las altas facturas de energía y garantizar el máximo rendimiento
                                    de tu
                                    aire acondicionado, nuestro servicio de mantenimiento regular es justo lo que
                                    necesitas.
                                </h3>
                                <a href="#service"
                                    class="bg-blue-500 inline-block px-4 py-2 mt-4 text-white text-sm rounded-full">Solicitar
                                    servicio</a>
                            </div>
                        </div>
                    </div>
                </section>

            </x-slot>
        </section>
        <section id="service">
            <div class="container mx-auto text-center">
                <h2 class="block text-xs font-bold text-blue-400">¿EN QUE TE PODEMOS AYUDAR?</h2>
                <h1 class="text-2xl font-extrabold">Que servicios ofrecemos</h1>
            </div>
        </section>
        <section>
            <div class="container mx-auto">
                <div class="">
                    <div class="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-4 gap-4">
                        <div class="text-center flex flex-col  bg-gray-200 rounded">
                            <img src="{{ asset('images/services/sale.jpg') }}" alt="">
                            <div class="flex flex-col h-full justify-between p-4">

                                <h2 class="font-extrabold">Venta e instalación</h2>
                                <p class="text-sm text-gray-600 py-8">
                                    Ofrecemos un servicio completo de venta e instalación de
                                    sistemas de aire acondicionado de alta calidad para hogares y negocios.
                                </p>
                                <div class="flex flex-col space-y-4">
                                    <a href="{{ route('customers.products.show',['product'=>'split']) }}"
                                        class=" bg-blue-500 py-2 px-4 rounded-full text-sm text-white">Ver
                                        productos</a>
                                    <a href="#install"
                                        class="block text-sm text-gray-500b border border-blue-500 text-blue-500 py-2 rounded-full">Mas
                                        detalles</a>

                                </div>
                            </div>
                        </div>
                        <div class="text-center flex flex-col  bg-gray-200 rounded">
                            <img src="{{ asset('images/services/maintenance.jpg') }}" alt="" class="">
                            <div class="flex flex-col h-full justify-between p-4">
                                <h2 class="font-extrabold">Servicio de limpieza</h2>
                                <p class="text-sm text-gray-600 py-8">
                                    Ofrecemos un servicio de limpieza de aire acondicionado
                                    completo y eficiente para hogares y negocios.
                                </p>
                                <div class="flex flex-col space-y-4">
                                    <a href="{{ route('customers.services.maintenance.create') }}"
                                        class="inline-block bg-blue-500 py-2 px-4 rounded-full text-sm text-white">Solicitar</a>
                                    <a href="#clean"
                                        class="block text-sm text-gray-500b border border-blue-500 text-blue-500 py-2 rounded-full">Mas
                                        detalles</a>

                                </div>
                            </div>
                        </div>
                        <div class="text-center flex flex-col bg-gray-200 rounded">
                            <img src="{{ asset('images/services/repair.jpg') }}" alt="">
                            <div class="flex flex-col h-full justify-between p-4">
                                <h2 class="font-extrabold">Servicio de diagnóstico y reparación</h2>
                                <p class="text-sm text-gray-600 py-8">
                                    Ofrecemos un servicio de diagnóstico y reparación de aire
                                    acondicionado confiable y eficiente para hogares y negocios.
                                </p>
                                <div class="flex flex-col space-y-4">
                                    <a href="{{ route('customers.services.diagnoses.create') }}"
                                        class="inline-block bg-blue-500 py-2 px-4 rounded-full text-sm text-white">Solicitar</a>
                                    <a href="#diagnostic"
                                        class="block text-sm text-gray-500b border border-blue-500 text-blue-500 py-2 rounded-full">Mas
                                        detalles</a>
                                </div>
                            </div>
                        </div>
                        <div class="text-center flex flex-col bg-gray-200 rounded">
                            <img src="{{ asset('images/services/callcenter.jpg') }}" alt="">
                            <div class="flex flex-col h-full justify-between p-4">
                                <h2 class="font-extrabold">Servicio de consulta</h2>
                                <p class="text-sm text-gray-600  py-8">
                                    Ofrecemos un servicio de consultas de aire acondicionado
                                    para
                                    ayudarte a tomar decisiones informadas sobre la selección, mantenimiento y
                                    reparación de
                                    sistemas de aire acondicionado.
                                </p>
                                <div class="flex flex-col space-y-4">
                                    <a href="{{ route('customers.services.consultations.create') }}"
                                        class="inline-block bg-blue-500 py-2 px-4 rounded-full text-sm text-white">Solicitar</a>
                                    <a href="#consult"
                                        class="block text-sm text-gray-500b border border-blue-500 text-blue-500 py-2 rounded-full">Mas
                                        detalles</a>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="install">
            <div class="container mx-auto text-center">
                <h2 class="block text-xs font-bold text-blue-400">Venta e instalacion</h2>
                <h1 class="text-2xl font-extrabold">Sistemas de aire acondicionado de
                    alta calidad</h1>
            </div>
        </section>
        <section>
            <div class="container mx-auto">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-4">
                    <div>
                        <img src="{{ asset('images/services/sale.jpg') }}" alt="" class="w-full">
                    </div>
                    <div class="space-y-4">
                        <h2 class="text-2xl">Venta e instalacion</h2>
                        <p class="text-sm text-gray-600">
                            Ofrecemos un servicio completo de venta e instalación de sistemas de aire acondicionado de
                            alta calidad para hogares y negocios. Nuestro equipo de expertos está altamente capacitado
                            para ayudarte a encontrar el sistema de aire acondicionado adecuado para tus necesidades,
                            así como para proporcionar una instalación rápida y eficiente. Trabajamos con los
                            principales fabricantes de aire acondicionado para ofrecer a nuestros clientes una amplia
                            variedad de opciones para elegir. Además, ofrecemos garantías y planes de mantenimiento para
                            asegurarnos de que su sistema de aire acondicionado funcione de manera óptima durante años.
                            ¡Confía en nosotros para obtener el servicio de venta e instalación de aire acondicionado
                            que necesitas!
                        </p>
                        <div>
                            <a href="{{ route('customers.products.show',['product'=>'split']) }}"
                                class="bg-blue-500 py-2 px-4 rounded-full text-sm text-white">Ver
                                productos</a>

                        </div>
                    </div>
                </div>

            </div>
        </section>
        <section id="clean">
            <div class="container mx-auto text-center">
                <h2 class="block text-xs font-bold text-blue-400">Servicio de limpieza</h2>
                <h1 class="text-2xl font-extrabold">Servicio de limpieza de aire acondicionado completo</h1>
            </div>
        </section>
        <section>
            <div class="container mx-auto">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-4">
                    <div class="lg:order-last">
                        <img src="{{ asset('images/services/maintenance.jpg') }}" alt="" class="w-full">
                    </div>
                    <div class="space-y-4">
                        <h2 class="text-2xl">Servicio de limpieza</h2>
                        <p class="text-sm text-gray-600">
                            Ofrecemos un servicio de limpieza de aire acondicionado completo y eficiente para
                            hogares y
                            negocios. Nuestro equipo de expertos utiliza técnicas especializadas y equipos de
                            limpieza
                            de alta calidad para eliminar la suciedad, el polvo y otros contaminantes del sistema de
                            aire acondicionado. Además, nuestros servicios de limpieza pueden ayudar a mejorar la
                            calidad del aire en tu hogar o negocio, reducir las facturas de energía y prolongar la
                            vida
                            útil del sistema de aire acondicionado. Confía en nosotros para proporcionarte un
                            servicio
                            de limpieza de aire acondicionado eficiente y de alta calidad.
                        </p>
                        <div>
                            <a href="{{ route('customers.services.maintenance.create') }}"
                                class="inline-block bg-blue-500 py-2 px-4 rounded-full text-sm text-white">Solicitar</a>

                        </div>

                    </div>
                </div>
            </div>
        </section>
        <section id="diagnostic">
            <div class="container mx-auto text-center">
                <h2 class="block text-xs font-bold text-blue-400">Servicio de diagnóstico y reparación</h2>
                <h1 class="text-2xl font-extrabold">Diagnóstico y reparación de aire acondicionado confiable y eficiente
                </h1>
            </div>
        </section>
        <section>
            <div class="container mx-auto">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-4">
                    <div class="">
                        <img src="{{ asset('images/services/repair.jpg') }}" alt="" class="w-full">
                    </div>
                    <div class="space-y-4">
                        <h2 class="text-2xl">Servicio de diagnóstico y reparación</h2>
                        <p class="text-sm text-gray-600">
                            Ofrecemos un servicio de diagnóstico y reparación de aire acondicionado confiable y
                            eficiente para hogares y negocios. Nuestros técnicos están altamente capacitados para
                            detectar y resolver problemas de aire acondicionado de manera rápida y eficiente. Ofrecemos
                            servicios de reparación para todos los modelos y marcas de sistemas de aire acondicionado, y
                            utilizamos solo piezas de repuesto de alta calidad para garantizar la satisfacción de
                            nuestros clientes. Además, ofrecemos servicios de mantenimiento preventivo para ayudar a
                            prevenir futuras fallas del sistema y maximizar la eficiencia energética. Confía en nosotros
                            para proporcionarte un servicio de diagnóstico y reparación de aire acondicionado confiable
                            y de alta calidad.
                        </p>
                        <div>
                            <a href="{{ route('customers.services.diagnoses.create') }}"
                                class="inline-block bg-blue-500 py-2 px-4 rounded-full text-sm text-white">Solicitar</a>

                        </div>
                    </div>
                </div>

            </div>
        </section>
        <section id="consult">
            <div class="container mx-auto text-center">
                <h2 class="block text-xs font-bold text-blue-400">Servicio de consulta</h2>
                <h1 class="text-2xl font-extrabold">Informacion sobre la selección, mantenimiento y reparación de
                    sistemas de aire acondicionado</h1>
            </div>
        </section>
        <section>
            <div class="container mx-auto">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-4">
                    <div class="lg:order-last">
                        <img src="{{ asset('images/services/maintenance.jpg') }}" alt="" class="w-full">
                    </div>
                    <div class="space-y-4">
                        <h2 class="text-2xl">Servicio de consulta</h2>
                        <p class="text-sm text-gray-600">
                            Ofrecemos un servicio de consultas de aire acondicionado para ayudarte a tomar
                            decisiones informadas sobre la selección, mantenimiento y reparación de sistemas de aire
                            acondicionado. Nuestro equipo de expertos está altamente capacitado para responder
                            cualquier pregunta o inquietud que puedas tener sobre tu sistema de aire acondicionado,
                            y puede proporcionarte recomendaciones personalizadas para satisfacer tus necesidades
                            específicas. Ya sea que necesites asesoramiento sobre la selección de un nuevo sistema
                            de aire acondicionado o sobre cómo mejorar la eficiencia energética de tu sistema
                            actual, podemos ayudarte. Confía en nosotros para proporcionarte un servicio de
                            consultas de aire acondicionado confiable y de alta calidad.
                        </p>
                        <div>
                            <a href="{{ route('customers.services.consultations.create') }}"
                                class="inline-block bg-blue-500 py-2 px-4 rounded-full text-sm text-white">Solicitar</a>

                        </div>

                    </div>
                </div>
            </div>
    </div>
    </section>
    <section>
        <div class="flex flex-row justify-center py-16">
            <div class="w-full sm:w-1/2 md:w-1/2 lg:w-1/3 xl:w-1/4">
                <div class="flex flex-col text-center">
                    <h2 class="text-xs font-bold text-blue-400">¿TIENES ALGUNA PREGUNTA?</h2>
                    <h1 class="text-2xl font-extrabold">Contactenos</h1>

                </div>
                <form action="#" class="flex flex-col space-y-4 py-16 ">
                    <input type="text" placeholder="Su nombre"
                        class="bg-gray-200 text-xs text-gray-500 rounded p-2 border-none border-transparent focus:border-transparent focus:ring-0">
                    <input type="text" placeholder="Su correo electronico"
                        class="bg-gray-200 text-xs rounded p-2 border-none border-transparent focus:border-transparent focus:ring-0">
                    <textarea name="" id="" cols="30" rows="10"
                        class="bg-gray-200 text-xs rounded p-2 border-none border-transparent focus:border-transparent focus:ring-0"
                        placeholder="Escriba su mensaje aqui..."></textarea>
                    <button type="submit" class="bg-blue-500 text-white px-4 py-1 rounded-full">Enviar</button>
                </form>

            </div>

        </div>
    </section>
    </div>

</x-customers.app-layout>