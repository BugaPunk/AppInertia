<script setup>

</script>
<template>
    <Head :title="` | ${$page.component}`" />
    <h1>Bienvenido {{ $page.props.user }}</h1>
    <h1>Pagina de Inicio</h1>
    <Link class="block" href="/" preserve-scroll>Refrescar</Link>
</template> 