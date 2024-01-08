<x-customers.app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-600 leading-tight">
            {{ __('Split') }}
        </h2>
    </x-slot>
    <section class="container mx-auto space-y-4">
        <h2 class="text-xl inline-block">
            Ofrecemos sistemas de aire acondicionado de alta calidad marca  <span class="font-semibold">brand</span> para hogares y negocios.

        </h2>
        
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-4">
            <div class="border">
                <img src="{{ asset('/images/air-conditioner.jpg') }}" alt="">
            </div>
            <div>
                <div class="grid grid-cols-4 lg:grid-cols-2 gap-4 h-full">
                    <div class="border flex">
                        <img src="{{ asset('/images/air-conditioner.jpg') }}" alt="" class="self-center">
                    </div>
                    <div class="border">
                        <img src="{{ asset('/images/condenser-unit.jpg') }}" alt="">
                    </div>
                    <div class="border flex">
                        <img src="{{ asset('/images/remote-control.jpg') }}" alt=""class="self-center w-full">
                    </div>
                    <div class="border">
                        <img src="{{ asset('/images/air-conditioner-2.jpg') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-4 gap-4">
            <div class="bg-gray-200 p-4 rounded ">
                <div class="uppercase tracking-wide text-sm text-gray-800 font-semibold">Aire acondicionado split 12,000 BTU</div>
                  <div class="mt-2 text-gray-700">Especificaciones:</div>
                  <ul class="mt-2 text-gray-600 list-disc list-inside text-sm">
                    <li>Capacidad de enfriamiento: 12,000 BTU</li>
                    <li>Efficiency: 15 SEER</li>
                    <li>Cooling Area: 350-450 sq.ft</li>
                    <li>Noise Level: 32-42 dB</li>
                    <li>Función de deshumidificación</li>
                    <li>Filtro de aire lavable</li>
                    <li>Control remoto incluido</li>
                  </ul>
                  <div class="mt-4">
                    <span class="block mt-1 text-lg leading-tight font-medium text-black">$450</span>
                    <span class="block mt-1 text-xs font-medium text-black">+$150 instalacion</span>
                    <a href="#" class="inline-block px-4 py-2 bg-blue-500 hover:bg-blue-600 text-white rounded-lg mt-4">Anadir a factura</a>
                  </div>
            </div>
            <div class="bg-gray-200 p-4 rounded ">
                <div class="uppercase tracking-wide text-sm text-gray-800 font-semibold">Aire acondicionado split 18,000 BTU</div>
                  <div class="mt-2 text-gray-700">Especificaciones:</div>
                  <ul class="mt-2 text-gray-600 list-disc list-inside text-sm">
                    <li>Capacidad de enfriamiento: 18,000 BTU</li>
                    <li>Efficiency: 17 SEER</li>
                    <li>Cooling Area: 550-700 sq.ft</li>
                    <li>Noise Level: 32-42 dB</li>
                    <li>Función de deshumidificación</li>
                    <li>Filtro de aire lavable</li>
                    <li>Control remoto incluido</li>
                  </ul>
                  <div class="mt-4">
                    <span class="block mt-1 text-lg leading-tight font-medium text-black">$650</span>
                    <span class="block mt-1 text-xs font-medium text-black">+$175 instalacion</span>
                    <a href="#" class="inline-block px-4 py-2 bg-blue-500 hover:bg-blue-600 text-white rounded-lg mt-4">Anadir a factura</a>
                  </div>
            </div>
            <div class="bg-gray-200 p-4 rounded ">
                <div class="uppercase tracking-wide text-sm text-gray-800 font-semibold">Aire acondicionado split 24,000 BTU</div>
                  <div class="mt-2 text-gray-700">Especificaciones:</div>
                  <ul class="mt-2 text-gray-600 list-disc list-inside text-sm">
                    <li>Capacidad de enfriamiento: 24,000 BTU</li>
                    <li>Efficiency: 19 SEER</li>
                    <li>Cooling Area: 750-850 sq.ft</li>
                    <li>Noise Level: 32-42 dB</li>
                    <li>Función de deshumidificación</li>
                    <li>Filtro de aire lavable</li>
                    <li>Control remoto incluido</li>
                  </ul>
                  <div class="mt-4">
                    <span class="block mt-1 text-lg leading-tight font-medium text-black">$850</span>
                    <span class="block mt-1 text-xs font-medium text-black">+$200 instalacion</span>
                    <a href="#" class="inline-block px-4 py-2 bg-blue-500 hover:bg-blue-600 text-white rounded-lg mt-4">Anadir a factura</a>
                  </div>
            </div>
            <div class="bg-gray-200 p-4 rounded ">
                <div class="uppercase tracking-wide text-sm text-gray-800 font-semibold">Aire acondicionado split 36,000 BTU</div>
                  <div class="mt-2 text-gray-700">Especificaciones:</div>
                  <ul class="mt-2 text-gray-600 list-disc list-inside text-sm">
                    <li>Capacidad de enfriamiento: 36,000 BTU</li>
                    <li>Efficiency: 21 SEER</li>
                    <li>Cooling Area: 950-1150 sq.ft</li>
                    <li>Noise Level: 32-42 dB</li>
                    <li>Función de deshumidificación</li>
                    <li>Filtro de aire lavable</li>
                    <li>Control remoto incluido</li>
                  </ul>
                  <div class="mt-4">
                    <span class="block mt-1 text-lg leading-tight font-medium text-black">$1150</span>
                    <span class="block mt-1 text-xs font-medium text-black">+$250 instalacion</span>
                    <a href="#" class="inline-block px-4 py-2 bg-blue-500 hover:bg-blue-600 text-white rounded-lg mt-4">Anadir a factura</a>
                  </div>
            </div>
        </div>
        <div class="grid grid-cols-1 xl:grid-cols-2 gap-4 pb-8">
            {{-- <div class="p-4 bg-gray-100 flex rounded">
                <div class="bg-white flex-grow p-4 rounded">
                    <h2 class="text-2xl">Política de compra de equipo:</h2>
                    <p class="text-md italic">
                        En nuestra empresa, nos comprometemos a ofrecer equipos de aire acondicionado de alta calidad y durabilidad. A continuación, se detallan los términos y condiciones de compra de nuestros equipos.
                    </p>
                    <ul class="py-8 space-y-4">
                        <li class="flex flex-col">
                            <span class="font-black text-lg">
                                Precios y formas de pago:
                            </span>
                            <span>
                                Todos los precios de nuestros equipos se detallan en nuestra lista de precios actual y están sujetos a cambios sin previo aviso. Aceptamos pagos en efectivo, tarjetas de crédito y débito, transferencias bancarias y otros métodos de pago electrónicos.
        
                            </span>
        
                        </li>
                        <li class="flex flex-col">
                            <span class="font-black text-lg">
                                Garantía del equipo:
                            </span>
                            <span>
                                Todos nuestros equipos están respaldados por una garantía limitada que cubre defectos en materiales y mano de obra. La duración de nuestra garantía varía según el equipo, pero ofrecemos una garantía estándar de 1 año para piezas y mano de obra y una garantía extendida de 5 años en compresores para algunos modelos seleccionados. Para más detalles sobre nuestra garantía, consulte nuestra política de garantía.
        
                            </span>
                        </li>
                        <li class="flex flex-col">
                            <span class="font-black text-lg">
                                Entrega del equipo:
                            </span>
                            <span>
                                La entrega del equipo se realizará según la disponibilidad del equipo y los términos acordados con el cliente. El tiempo de entrega puede variar según el modelo del equipo y la ubicación de entrega. Nos comprometemos a hacer todo lo posible para cumplir con los plazos de entrega acordados, pero no nos hacemos responsables por retrasos en la entrega causados por factores externos, como el clima o problemas de transporte.
        
                            </span>
                        </li>
                        <li class="flex flex-col">
                            <span class="font-black text-lg">
                                Devoluciones y cancelaciones:
                            </span>
                            <span>
                                Si el equipo no cumple con sus expectativas o si se produce un problema con el equipo entregado, comuníquese con nuestro departamento de atención al cliente para procesar una devolución o cancelación. Las devoluciones y cancelaciones están sujetas a términos y condiciones adicionales, que se detallan en nuestra política de devoluciones y cancelaciones.
        
                            </span>
                        </li>
                        
                    </ul>
                    <p>
                        Esta política de garantía es solo un resumen. Se pueden aplicar términos y condiciones adicionales, por lo que se recomienda revisar cuidadosamente la garantía completa antes de realizar una compra.
                    </p>
    
                </div>
            </div> --}}
            {{-- <div class="p-4 bg-gray-100 rounded">
                <div class="bg-white p-4 rounded">
                    <h2 class="text-2xl">Política de garantía:</h2>
                    <p class="text-md italic">
                        Esta política de compra de equipo es solo un resumen. Se pueden aplicar términos y condiciones adicionales, por lo que se recomienda revisar cuidadosamente nuestra política completa antes de realizar una compra.
                    </p>
                    <ul class="py-8 space-y-4">
                        <li class="flex flex-col">
                            <span class="font-black text-lg">
                                Duración de la garantía:
                            </span>
                            <span>
                                La duración de nuestra garantía varía según el producto. Ofrecemos una garantía de 1 año para piezas y mano de obra para todos nuestros equipos de aire acondicionado, y una garantía extendida de 5 años en compresores para algunos modelos seleccionados.
        
                            </span>
        
                        </li>
                        <li class="flex flex-col">
                            <span class="font-black text-lg">
                                Cobertura de la garantía:
                            </span>
                            <span>
                                Nuestra garantía cubre defectos de fabricación en los materiales y la mano de obra utilizados en la fabricación del equipo de aire acondicionado. También cubre los costos de reparación o reemplazo de piezas defectuosas. Sin embargo, la garantía no cubre daños causados por mal uso, negligencia, modificación no autorizada, desgaste normal o condiciones ambientales extremas.
        
                            </span>
                        </li>
                        <li class="flex flex-col">
                            <span class="font-black text-lg">
                                Condiciones de la garantía:
                            </span>
                            <span>
                                La garantía solo es válida si el equipo de aire acondicionado se utiliza y mantiene de acuerdo con las instrucciones del fabricante. Se requiere que se realice el mantenimiento adecuado del equipo, incluyendo la limpieza regular de los filtros y la inspección periódica de las piezas. Además, solo se deben utilizar piezas y accesorios originales del fabricante durante la reparación.
        
                            </span>
                        </li>
                        <li class="flex flex-col">
                            <span class="font-black text-lg">
                                Procedimiento de reclamo:
                            </span>
                            <span>
                                Si cree que su equipo de aire acondicionado tiene un defecto cubierto por nuestra garantía, debe comunicarse con nosotros para obtener instrucciones sobre cómo presentar un reclamo. Es posible que se le solicite que proporcione detalles sobre la naturaleza del problema, así como pruebas de compra y evidencia del mantenimiento adecuado del equipo.
        
                            </span>
                        </li>
                        <li class="flex flex-col">
                            <span class="font-black text-lg">
                                Responsabilidad del cliente:
                            </span>
                            <span>
                                El cliente es responsable de proporcionar un entorno adecuado para el equipo de aire acondicionado, incluida la instalación adecuada del equipo y la realización de mantenimiento regular. El mal uso o negligencia del equipo por parte del cliente invalidará la garantía.
        
                            </span>
                        </li>
                        <li class="flex flex-col">
                            <span class="font-black text-lg">
                                Responsabilidad del proveedor:
                            </span>
                            <span>
                                Somos responsables de reparar o reemplazar el equipo de aire acondicionado cubierto por nuestra garantía en caso de defectos en materiales o mano de obra. Cualquier reparación o reemplazo se realizará sin costo para el cliente, siempre que la garantía sea válida.
        
                            </span>
                        </li>
                    </ul>
                    <p>
                        Esta política de garantía es solo un resumen. Se pueden aplicar términos y condiciones adicionales, por lo que se recomienda revisar cuidadosamente la garantía completa antes de realizar una compra.
                    </p>
    
                </div>
            </div> --}}

        </div>
    </section>
</x-customers.app-layout>