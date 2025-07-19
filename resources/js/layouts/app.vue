<script setup>
import { useForm, Link } from '@inertiajs/vue3'
const form = useForm()
</script>
<template>
    <v-layout class="rounded rounded-md fill-height">
        <v-navigation-drawer>
            <v-list nav>
                <v-list-item link>
                    <Link :href="route('welcome')" class="d-block">Home</Link>
                </v-list-item>
                <v-list-item link>
                    <Link :href="route('private')" class="d-block">Private</Link>
                </v-list-item>
            </v-list>
        </v-navigation-drawer>

        <v-app-bar title="Application bar">

            <v-form @submit.prevent="form.post(route('logout'))">
                <v-btn type="submit" color="primary" :disabled="form.processing">
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
