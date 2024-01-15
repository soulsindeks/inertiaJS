<template>
    <section>
    <form @submit.prevent="onSubmit">
        <input v-model="user.title" class="border border-1 border-pink-950" type="text">
        <Button type="submit">submit</Button>
    </form>
    <h1 v-for="(item, index) in data" :key="index">{{ item.title }}</h1>


    <Card title="uhuy" footer="Rp. 20000">Haikal</Card>
    <Card title="ahay" footer="Rp. 30000">Zikra</Card>
    </section>
</template>

<script setup>
import { useForm } from "@inertiajs/vue3"
import Button from "../../components/Button/Index.vue";
import Card from "../../components/Card/Index.vue";
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