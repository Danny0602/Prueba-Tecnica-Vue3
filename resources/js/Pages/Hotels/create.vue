
<script setup>
import { Head, Link, useForm } from '@inertiajs/vue3';
import AppLayout from '@/Layouts/AppLayout.vue';



const form = useForm({
    Name: '',
    Rating: '',
    City: '',
    Price_per_night: '',
    Image: '',

})


function submit() {
    form.post('/hotel')
}
defineProps({
    hoteles: Array,
});

</script>

<template>
    <AppLayout title="Dashboard">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Agregar Hotel
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    <section class="text-gray-600 body-font">
                        <div class="container px-5 py-24 mx-auto">
                            <div class="flex justify-center">




                                <form @submit.prevent="submit()">

                                    <div class="mt-5">
                                        <label class="" for="Name">Nombre Hotel</label>
                                        <input v-model="form.Name" class="w-full mt-2 rounded-lg" type="text" id="Name">
                                    </div>
                                    <div class="mt-5">
                                        <label class="" for="City">Ciudad del Hotel</label>
                                        <input v-model="form.City" class="w-full mt-2 rounded-lg" type="text" id="City">
                                    </div>

                                    <div class="mt-5">
                                        <label class="" for="Rating">Estrellas del Hotel</label>
                                        <input  v-model="form.Rating" class="w-full mt-2 rounded-lg" type="text" id="Rating">
                                    </div>
                                    <div class="mt-5">
                                        <label class="" for="Price">Precio por noche del Hotel</label>
                                        <input v-model="form.Price_per_night" class="w-full mt-2 rounded-lg" type="text" id="Price">
                                    </div>
                                    <div class="mt-5">
                                        <label class="" for="Image">Imagen del Hotel</label>
                                        <input v-model="form.Image" class="w-full mt-2 rounded-lg" type="text" id="Image">
                                    </div>


                                    <div class="mt-8 flex justify-center">
                                        <button type="submit"
                                            class="p-3  rounded-lg text-white uppercase  bg-green-600 hover:bg-green-700">añadir
                                            hotel</button>
                                    </div>
                                </form>
                            </div>


                            <!-- <div class="flex flex-wrap mt-10">
              
                                              </div> -->
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </AppLayout>
</template>