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
import { useForm } from "@inertiajs/vue3"
import Button from "../../components/Button/Index.vue";
import { ref } from "vue";
defineProps ({
    data: Array
})

let errors =  ref({})
let user = useForm({
    title: '',
})
const onSubmit = () => {
    user.submit("post", "/todo", {
        onSuccess: () => user.reset("title"),
        onError: (err) => (errors.value = err)
    });

}
</script>

<style lang="scss" scoped>

</style>