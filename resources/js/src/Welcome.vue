<template>
    <div class="bg-pink-100">
        tes
        {{ name }}
    </div>
    <Link href="/todo">
        <Button label="jingan"></Button>
    </Link>
    
        <Button @click="goTo('/todo')" label="jingan"></Button>
</template>

<script setup>
import { Link } from '@inertiajs/vue3'
import { router } from '@inertiajs/vue3'
import Button from "./components/Button/Index.vue"
const goTo = (url) => {
    router.visit(url, {method: 'get'})
}

defineProps({
    name: String
})
</script>

<style lang="scss" scoped>

</style>