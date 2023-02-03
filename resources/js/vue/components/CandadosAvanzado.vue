<template>
    <div class="w-50 progreso-candados">
        <h2>Progreso de candado:</h2>
        <div class="cajaProgresoCandados">
            <div class="cajaLetra bg-primary text-white text-center display-6">{{ numUno }}</div>
            <div class="cajaLetra bg-primary text-white text-center display-6">{{ numDos }}</div>
            <div class="cajaLetra bg-primary text-white text-center display-6">{{ numTres }}</div>
            <div class="cajaLetra bg-primary text-white text-center display-6">{{ numCuatro }}</div>
            <div class="cajaLetra bg-primary text-white text-center display-6"></div>
        </div>
    </div>
</template>

<script>
   export default {
    props: ['numUno','numDos','numTres','numCuatro']
   }
</script>

<style>

    .progreso-candados{
        width: 100% !important;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        border-bottom: 1px solid grey;
        padding: 50px 0;
        margin-bottom: 50px;
    }

    .img-candado{
        width: 20%;
        max-width: 300px;
    }

    .img-candado img{
        width: 100%;
        opacity: 0.8;
    }

    .cajaProgresoCandados {
        height: 50px;
        width: 200px;
        display: flex;
        justify-content: center;
    }
    .cajaProgresoCandados .cajaLetra {
        margin: 3px;
        height: 40px;
        width: 50px;
        background-color: none;
        display: flex;
        justify-content: center;
        align-items: center;
    }

</style>