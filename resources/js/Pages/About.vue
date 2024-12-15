<script setup>
defineProps({
    user: String
})
</script>
<template>
    <Head title=" | Acerca"/>
    <div>
        <h1>Acerca de {{ user }}</h1>
    </div>
</template>