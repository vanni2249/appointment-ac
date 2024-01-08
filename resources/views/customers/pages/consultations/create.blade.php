<x-customers.app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-600 leading-tight">
            {{ __('Solicitar consulta') }}
        </h2>
    </x-slot>
    <section class="container mx-auto px-4 md:px-0 space-y-4 pb-6">
       <h2 class="text-xl inline-block">
        Ofrecemos un servicio de consultas de aire acondicionado para ayudarte a tomar decisiones informadas sobre la selección, mantenimiento y reparación de sistemas de aire acondicionado.
       </h2>
       <p class="text-gray-500">
        Nuestro equipo de expertos está altamente capacitado para responder cualquier pregunta o inquietud que puedas tener sobre tu sistema de aire acondicionado, y puede proporcionarte recomendaciones personalizadas para satisfacer tus necesidades específicas. Ya sea que necesites asesoramiento sobre la selección de un nuevo sistema de aire acondicionado o sobre cómo mejorar la eficiencia energética de tu sistema actual, podemos ayudarte. Confía en nosotros para proporcionarte un servicio de consultas de aire acondicionado confiable y de alta calidad.
       </p>
       <div class="flex flex-col w-full md:w-96">
        <label for="">Cual es la razon?</label>
        <select name="" id="" class="w-auto">
            <option value="">Selccionar</option>
            <option value="">Venta e instalación</option>
            <option value="">Servicio de limpieza</option>
            <option value="">Servicio de diagnóstico y reparación</option>
            <option value="">Otra razon</option>
        </select>
       </div>
       <button class="bg-blue-500 py-2 px-4 text-white rounded hover:bg-blue-700">Solicitar consulta</button>
    </section>
</x-customers.app-layout>