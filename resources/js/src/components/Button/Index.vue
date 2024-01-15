<template>
    <button type="type" class="w-max p-2 bg-slate-600">
            {{ label }}
    </button>
</template>

<script setup>
    defineProps({
        label: {
            type: String,
            default: "bajingan"
        },

        type: {
            type: String,
            default: "submit"
        }
    })
</script>

<style lang="scss" scoped>

</style>