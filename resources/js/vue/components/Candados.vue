<template>
    <div class="w-50">
        <h4>Progreso de candado:</h4>
        <div class="cajaProgesoCandados">
            <div class="cajaLetra bg-primary text-white text-center display-6">{{ numUno }}</div>
            <div class="cajaLetra bg-primary text-white text-center display-6">{{ numDos }}</div>
            <div class="cajaLetra bg-primary text-white text-center display-6"></div>
        </div>
    </div>
</template>

<script>
   export default {
    props: ['numUno','numDos']
   }
</script>

<style>
    .cajaProgesoCandados {
        height: 50px;
        width: 200px;
        display: flex;
    }

    .cajaProgesoCandados .cajaLetra {
        margin-inline: 2px;
        height: 100%;
        width: 25%;
    }
</style>