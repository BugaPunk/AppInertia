<script setup>
import { reactive } from 'vue';


const form = reactive({
    name: '',
    email: '',
    password: '',
    password_confirmation: ''
})

const submit = () => {
    console.log(form);
};

</script>
<template>
    <Head title="Registro" />
    <section class="bg-white dark:bg-gray-900 p-0 m-0">
        <div class="lg:grid lg:min-h-screen lg:grid-cols-12">
            <aside class="relative block h-16 lg:order-last lg:col-span-5 lg:h-full xl:col-span-6">
                <img alt=""
                    src="https://images.unsplash.com/photo-1605106702734-205df224ecce?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80"
                    class="absolute inset-0 h-full w-full object-cover" />
            </aside>

            <main
                class="flex items-center justify-center px-8 py-8 sm:px-12 lg:col-span-7 lg:px-16 lg:py-12 xl:col-span-6">
                <div class="max-w-xl lg:max-w-3xl">

                    <h1 class="mt-6 text-2xl font-bold text-gray-900 sm:text-3xl md:text-4xl dark:text-white">
                        Cree una cuenta
                    </h1>

                    <form @submit.prevent="submit" class="mt-8 grid grid-cols-6 gap-6">
                        <div class="col-span-6">
                            <label for="name" class="block text-sm font-medium text-gray-700 dark:text-gray-200">
                                Nombre Completo
                            </label>

                            <input type="text" id="name" name="name"
                                class="mt-1 p-3 w-full rounded-md border-gray-200 bg-white text-sm text-gray-700 shadow-sm dark:border-gray-700 dark:bg-gray-800 dark:text-gray-200" v-model="form.name"/>
                        </div>

                        <div class="col-span-6">
                            <label for="Email" class="block text-sm font-medium text-gray-700 dark:text-gray-200">
                                Email
                            </label>

                            <input type="email" id="Email" name="email"
                                class="mt-1 p-3 w-full rounded-md border-gray-200 bg-white text-sm text-gray-700 shadow-sm dark:border-gray-700 dark:bg-gray-800 dark:text-gray-200" v-model="form.email"/>
                        </div>

                        <div class="col-span-6 sm:col-span-3">
                            <label for="Password" class="block text-sm font-medium text-gray-700 dark:text-gray-200">
                                Password
                            </label>

                            <input type="password" id="Password" name="password"
                                class="mt-1 p-3 w-full rounded-md border-gray-200 bg-white text-sm text-gray-700 shadow-sm dark:border-gray-700 dark:bg-gray-800 dark:text-gray-200" v-model="form.password"/>
                        </div>

                        <div class="col-span-6 sm:col-span-3">
                            <label for="PasswordConfirmation"
                                class="block text-sm font-medium text-gray-700 dark:text-gray-200">
                                Password Confirmation
                            </label>

                            <input type="password" id="PasswordConfirmation" name="password_confirmation"
                                class="mt-1 p-3 w-full rounded-md border-gray-200 bg-white text-sm text-gray-700 shadow-sm dark:border-gray-700 dark:bg-gray-800 dark:text-gray-200" v-model="form.password_confirmation"/>
                        </div>

                        <div class="col-span-6 sm:flex sm:items-center sm:gap-4">
                            <button
                                class="inline-block shrink-0 rounded-md border border-blue-600 bg-blue-600 px-12 py-3 text-sm font-medium text-white transition hover:bg-transparent hover:text-blue-600 focus:outline-none focus:ring active:text-blue-500 dark:hover:bg-blue-700 dark:hover:text-white">
                                Crear Cuenta
                            </button>

                            <p class="mt-4 text-sm text-gray-500 sm:mt-0 dark:text-gray-400">
                                ¿Ya tienes una cuenta?
                                <a href="#" class="text-gray-700 underline dark:text-gray-200">Ingrese</a>.
                            </p>
                        </div>
                    </form>
                </div>
            </main>
        </div>
    </section>
</template>