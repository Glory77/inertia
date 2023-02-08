<template>
    <Head :title="title" />
    <div>
        <nav>
            <Link :href="route('home')" :class="{ 'active': $page.component === 'Home' }">Home</Link>
            <Link :href="route('about')" :class="{ 'active': $page.component === 'About' }">About</Link>
            <Link :href="route('posts.index')" :class="{ 'active': $page.component === 'Posts/Index' }">Posts</Link>
            <Link :href="route('login')" :class="{ 'active': $page.component === 'Auth/Login' }" v-if="!$page.props.user.email">Login</Link>
            <Link :href="route('logout')" method="post" v-if="$page.props.user.email">Logout</Link>
        </nav>
        <div v-if="$page.props.flash.message">
            {{ $page.props.flash.message }}
        </div>
        <slot/>
    </div>
</template>

<script setup>
import { Link, Head } from '@inertiajs/vue3'

defineProps({
    title: String
})
</script>

<style scoped>
.active {
    font-weight: bold;
}
</style>
