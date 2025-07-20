<script setup>
import NavLink from '@/components/nav/link.vue'

defineProps({
    icon: {
        type: String,
        default: ''
    },
    to: String,
})
</script>
<template>
    <v-list-item link :active="route().current(to)" active-class="bg-indigo-darken-1">
        <nav-link :href="route(to)" :icon="icon" :color="route().current(to) ? 'text-white' : undefined">
            <slot />
        </nav-link>
    </v-list-item>
</template>
