<template>
    <div class="w-50 progreso-candados">
        <h4>Progreso de candado:</h4>
        <div class="cajaProgresoCandados">
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

    .cajaProgresoCandados {
        height: 50px;
        width: 200px;
        display: flex;
        justify-content: center;
    }
    .cajaProgresoCandados .cajaLetra {
        margin: 3px;
        height: 100%;
        width: 25%;
        background-color: none;
        border-radius: 5px;
    }
    
</style>