<template>
    <i class="fa-solid fa-lock-open" id="faCandadoAbierto"></i>
    <div class="cajaProgresoCandados">
        <div class="cajaLetra bg-primary text-white text-center display-6"><p>S</p></div>
        <div class="cajaLetra bg-primary text-white text-center display-6"><p>7</p></div>
        <div class="cajaLetra bg-primary text-white text-center display-6"><p>P</p></div>
        <div class="cajaLetra bg-primary text-white text-center display-6"><p>B</p></div>
    </div>

    <Botones/>
</template>

<script setup>
    import Botones from './components/BotonesCandadoFnl.vue';
</script>

<style>
    #faCandadoAbierto {
        width: 100%;
        margin: 150px auto auto 35px;
        color: lightblue;
        font-size: 28rem;
        text-align: center;
    }

    .cajaProgresoCandados {
        margin: auto;
        margin-top: 20px;
        display: flex;
        justify-content: center;
        max-width: 380px;
    }

    .cajaProgresoCandados .cajaLetra {
        margin: 3px;
        width: 25%;
        background-color: none;
        border-radius: 5px;
    }

    .cajaProgresoCandados .cajaLetra p {
        font-size: 6rem;
    }
</style>