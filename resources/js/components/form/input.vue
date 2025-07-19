<script setup>
const model = defineModel()
defineProps({
    label: String,
    id: String,
    name: String,
    errorMessages: Array | String,
    type: String,
})
</script>
<template>
    <div class="form-group">
        <v-label v-if="label" :for="id">{{ label }}</v-label>
        <v-text-field :id="id || name" :name="name" v-model="model" variant="outlined" density="compact" :type="type"
            :error-messages="errorMessages" hide-details="auto" required></v-text-field>
    </div>
</template>
