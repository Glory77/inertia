<template>
    <AppLayout title="Edit Post">
        <h1>Edit Post</h1>
        <form @submit.prevent="submit">
            <input v-model="post.title" type="text" placeholder="Title">
            <div v-if="errors.title" class="">{{ errors.title }}</div>
            <textarea v-model="post.content" placeholder="Content"></textarea>
            <div v-if="errors.content">{{ errors.content }}</div>
            <button>Submit</button>
        </form>
    </AppLayout>
</template>

<script setup>
import AppLayout from '@/Layouts/AppLayout.vue'
import {router} from "@inertiajs/vue3";
import {reactive, toRefs} from "vue";

const props = defineProps({
    post: Object,
    errors: Object
})

const { post } = toRefs(props);

function submit() {
    router.put(route('posts.update', post.value.id), post.value)
}
</script>

<style scoped>
button,
textarea {
    display: block;
    margin-top: 20px;
}
</style>
