<template>
    <div id="botonesFinal">
        <a class="btnFinal" :href="route('principal')">
            <button class="btn">Inicio</button>
        </a>
        <a class="btnFinal" :href="route('perfil')">
            <button class="btn">Perfil</button>
        </a>
    </div>
</template>

<script setup>
    import route from 'ziggy';
</script>

<style>
    #botonesFinal {
        display: flex;
        justify-content: space-around;
        margin-top: 30px;
    }

    .btnFinal {
        margin-inline: 40px;
    }
</style>