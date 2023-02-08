<script setup>
import AuthLayout from '@/Layouts/AuthLayout.vue';
import {useForm} from "@inertiajs/vue3";

defineProps({
    errors: Object
})

const form = useForm({
    email: '',
    password: '',
});
</script>

<template>
    <AuthLayout>
        <form @submit.prevent="form.post(route('login.post'))">
            <div>
                <label for="email" value="Email" />
                <input
                    id="email"
                    v-model="form.email"
                    type="email"
                    class="mt-1 block w-full"
                    required
                    autofocus
                />
            </div>

            <div class="mt-4">
                <label for="password" value="Password" />
                <input
                    id="password"
                    v-model="form.password"
                    type="password"
                    class="mt-1 block w-full"
                    required
                />
            </div>

            <div class="flex items-center justify-end mt-4">
                <button class="ml-4">
                    Log in
                </button>
            </div>
        </form>
    </AuthLayout>
</template>
