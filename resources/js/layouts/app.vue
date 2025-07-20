<script setup>
import { useForm, Link, usePage } from '@inertiajs/vue3'
import NavLink from '@/components/nav/link.vue'
import NavItemLink from '@/components/nav/item-link.vue'
const form = useForm()
const page = usePage()

const title = page.props.title || 'App'
const app_name = page.props.app_name || 'Vuetify Starter'
</script>
<template>
    <v-layout class="rounded rounded-md fill-height">
        <v-navigation-drawer>
            <template #prepend>
                <v-list nav class="bg-indigo text-white">
                    <v-list-item link>
                        <Link :href="route('welcome')" class="d-block text-h6 text-decoration-none text-white">{{
                            app_name
                        }}
                        </Link>
                    </v-list-item>
                </v-list>
            </template>
            <v-list nav density="compact" class="me-auto">
                <nav-item-link icon="mdi-home" to="welcome">Home</nav-item-link>
                <nav-item-link icon="mdi-account-alert" to="private">Private</nav-item-link>
                <nav-item-link icon="mdi-account-alert" to="private.edit">Private 2</nav-item-link>
            </v-list>
            <template #append>
                <v-list nav density="compact">
                    <v-list-item>version: 1.0.0</v-list-item>
                </v-list>
            </template>
        </v-navigation-drawer>

        <v-app-bar :title="title" color="indigo-darken-1">

            <v-form @submit.prevent="form.post(route('logout'))">
                <v-btn type="submit" :disabled="form.processing">
                    {{ form.processing ? 'Logging out...' : 'Logout' }}
                </v-btn>
            </v-form>
        </v-app-bar>

        <v-main>
            <v-container fluid fill-height>
                <!-- v-sheet border="dashed md" color="surface-light" height="200" rounded="lg" width="100%"></v-sheet -->
                <slot />
            </v-container>
        </v-main>
    </v-layout>
</template>
