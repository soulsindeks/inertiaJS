<template>
   <div class="card relative bg-slate-600 mx-auto my-44 flex flex-col w-44 h-44 border-red-950 border-4 rounded-lg ">
        <div class="title pl-12 pt-4">
            {{title}}
        </div>
        <div class="content pl-12 py-6">
            <slot></slot>
        </div>
       <div class="border w-28 mx-auto border-red-950"></div>
        <div class="footer absolute inset-x-0 bottom-0 pl-12 pb-3">
            {{footer}}
        </div>
   </div>
</template>

<script setup>
    defineProps({
        title: {
            type: String,
            default: "title"
        },
        footer: {
            type: String,
            default: "footer"
        },
    })
</script>

<style lang="scss" scoped>

</style>