<script setup>
defineProps({
    sample_data: String
});
</script>
<template>
    <div>
        <p>private!</p>
        <p v-if="sample_data">{{ sample_data }}</p>
    </div>
</template>
