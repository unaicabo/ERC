<template>
    <div class="w-50 progreso-candados">
        <i class="fa-solid fa-lock" id="faCandado"></i>
        <div class="cajaProgresoCandados">
            <div class="cajaLetra bg-primary text-white text-center display-6"><p>{{ numUno }}</p></div>
            <div class="cajaLetra bg-primary text-white text-center display-6"><p>{{ numDos }}</p></div>
            <div class="cajaLetra bg-primary text-white text-center display-6"><p>{{ numTres }}</p></div>
            <div class="cajaLetra bg-primary text-white text-center display-6"><p></p></div>
        </div>
    </div>
</template>

<script>
   export default {
    props: ['numUno','numDos','numTres']
   }
</script>

<style>

    #faCandado {
        font-size: 10rem;
        margin-bottom: 10px;
        color: lightblue;
    }

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
        height: 40px;
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