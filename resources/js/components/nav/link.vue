<script setup>
import { Link } from '@inertiajs/vue3'

defineProps({
    href: String,
    icon: {
        type: String,
        default: ''
    },
    color: {
        type: String,
        default: 'text-blue-grey-darken-4'
    },
})

</script>
<template>
    <Link :href="href" :class="[
        `d-flex align-center ga-5 text-decoration-none`,
        color,
    ]">
    <v-icon :icon="icon"></v-icon>
    <slot />
    </Link>
</template>
