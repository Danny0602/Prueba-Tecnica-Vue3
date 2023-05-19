
<script setup>
import { Head, Link } from '@inertiajs/vue3';
import { Inertia } from '@inertiajs/inertia';
import AppLayout from '@/Layouts/AppLayout.vue';

defineProps({
  hoteles: Array,
});



function deleteHotel(id) {
  Inertia.post(`/api/hotel/${id}`).then((response) => {
    // Verificar la respuesta JSON
    if (response.message === 'Registro eliminado correctamente') {
      // Realizar la redirección si la eliminación fue exitosa
      window.location.href = route('hoteles.index');
    } else {
      // Manejar otros casos de respuesta JSON
      console.error(response.error);
    }
  }).catch((error) => {
    // Manejar el error en caso de que la eliminación falle
    console.error(error);
  });
}
</script>

<template>
  <AppLayout title="Dashboard">
    <template #header>
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        Lista de Hoteles
      </h2>
    </template>

    <div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
          <section class="text-gray-600 body-font">
            <div class="container px-5 py-24 mx-auto">
              <div class="flex justify-center">
                <a :href="route('hotel.create')"
                  class="p-3 rounded-lg text-white uppercase  bg-green-600 hover:bg-green-700">Agregar nuevo hotel</a>
              </div>
              <!-- <div class="flex flex-col text-center w-full mb-20">
                    <h1>adadad  </h1>
                  </div> -->
              <div class="flex flex-wrap mt-10">
                <div class="p-4 lg:w-1/4 md:w-1/2 border border-black" v-for="hotel in hoteles" :key="hotel.id">
                  <div class="h-full flex flex-col items-center text-center">
                    <img alt="hotel.Image"
                      class="flex-shrink-0 rounded-lg flex-1 w-full h-56 object-cover object-center mb-4"
                      :src="hotel.Image">
                    <div class="w-full">
                      <h2 class="title-font font-medium text-lg text-gray-900 flex-1">{{ hotel.Name }}</h2>
                      <h3 class="text-gray-500 mb-3 flex-1">{{ hotel.City }}</h3>
                      <h3 class="text-gray-500 mb-3 flex-1">${{ hotel.Price_per_night }} MXN</h3>
                      <span class="inline-flex flex-1">
                        <a :href="'/hotel/' + hotel.id + '/edit'"
                          class="p-2 text-white rounded uppercase mx-2 hover:bg-blue-900 bg-blue-600">Editar</a>
                        <button @click="deleteHotel(hotel.id)"
                          class="p-2 text-white rounded uppercase mx-2 hover:bg-red-900 bg-red-600">Eliminar</Button>

                      </span>
                    </div>

                  </div>
                </div>
              </div>
            </div>
          </section>
        </div>
      </div>
    </div>
  </AppLayout>
</template>