<template>
    <button class="w-max p-2 bg-slate-600">
            {{ label }}
    </button>
</template>

<script setup>
    defineProps({
        label: {
            type: String,
            default: "bajingan"
        }
    })
</script>

<style lang="scss" scoped>

</style>