<template>
    <AppLayout title="Posts">
        <h1>Posts</h1>
        <Link :href="route('posts.create')">New post</Link>
        <p v-for="post in posts" :key="post.id">
            <Link :href="route('posts.show', post.id)">{{ post.title }}</Link>
            <Link :href="route('posts.edit', post.id)">Edit</Link>
            <button @click.prevent="destroy(post.id)">Delete</button>
        </p>
    </AppLayout>
</template>

<script setup>
import AppLayout from '@/Layouts/AppLayout.vue'
import {Link, router} from '@inertiajs/vue3'

defineProps({
    posts: Object
})

function destroy(id) {
    router.delete(route('posts.destroy', id), {preserveScroll: true})
}
</script>

<style scoped>

</style>
