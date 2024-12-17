<script setup>

</script>
<template>
    <Head :title="` | ${$page.component}`" />
    <h1>Bienvenido {{ $page.props.user }}</h1>
    <Link class=" mt-56 -mb-0 block" href="/" preserve-scroll>Refrescar</Link>
</template> 