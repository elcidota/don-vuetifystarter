<script setup>

// reference: https://inertiajs.com/forms#form-helper
import { useForm } from '@inertiajs/vue3'
import FormInput from '@/components/form/input.vue'
import Layout from '@/layouts/guest.vue'

const form = useForm({
    email: '',
    password: ''
})

defineOptions({
    layout: Layout,
})

</script>
<template>
    <v-container fluid class="fill-height pa-0">
        <v-row class="fill-height">
            <v-col cols="12" sm="6" class="bg-indigo-darken-1"></v-col>
            <v-col cols="12" sm="6" class="d-flex align-center">
                <v-card max-width="400" flat class="flex-grow-1">
                    <v-card-text>
                        <v-form @submit.prevent="form.post(route('login'))">
                            <form-input label="Email" id="email" name="email" type="email" v-model="form.email"
                                :error-messages="form.errors.email"></form-input>

                            <form-input label="Password" id="password" name="password" type="password"
                                v-model="form.password" :error-messages="form.errors.password"
                                class="mt-4"></form-input>

                            <div class="button-group mt-8">
                                <v-btn color="primary" width="100%" type="submit" :disabled="form.processing">
                                    {{ form.processing ? 'Logging in...' : 'Login' }}
                                </v-btn>
                            </div>
                        </v-form>
                    </v-card-text>
                </v-card>
            </v-col>
        </v-row>
    </v-container>
</template>
