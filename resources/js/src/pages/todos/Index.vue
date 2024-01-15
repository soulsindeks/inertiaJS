<template>
<section>

</section>
    <form @submit.prevent="onSubmit">
        <input v-model="user.title" class="border border-1 border-pink-950" type="text">

        <Button type="submit">submit</Button>
    </form>
    <h1 v-for="(item, index) in data" :key="index">{{ item.title }}</h1>
</template>

<script setup>
import Button from "../../components/Button/Index.vue";
import { ref } from "vue";
defineProps ({
    data: Array
})

let user =  ref({})
const onSubmit = () => {
    console.log(user.value.title);
    console.log('submit');
}
</script>

<style lang="scss" scoped>

</style>