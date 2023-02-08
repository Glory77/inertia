<template>
    <AppLayout title="New Post">
        <h1>New Post</h1>
        <form @submit.prevent="submit">
            <input v-model="form.title" type="text" placeholder="Title">
            <div v-if="errors.title" class="">{{ errors.title }}</div>
            <textarea v-model="form.content" placeholder="Content"></textarea>
            <div v-if="errors.content">{{ errors.content }}</div>
            <button>Submit</button>
        </form>
    </AppLayout>
</template>

<script setup>
import AppLayout from '@/Layouts/AppLayout.vue'
import {router} from "@inertiajs/vue3";
import {reactive} from "vue";

defineProps({
    errors: Object
})

const form = reactive({
    title: '',
    content: '',
})

function submit() {
    router.post(route('posts.store'), form)
}

</script>

<style scoped>
button,
textarea {
    display: block;
    margin-top: 20px;
}
</style>
