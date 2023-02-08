<template>
    <AppLayout>
        <h1>{{ post.title }}</h1>
        <p>{{ post.content }}</p>
        <Link :href="route('posts.index')">Back</Link>
    </AppLayout>
</template>

<script setup>
import { Link } from "@inertiajs/vue3";
import AppLayout from "@/Layouts/AppLayout.vue"

defineProps({
    post: Object
})
</script>

<style scoped>

</style>
