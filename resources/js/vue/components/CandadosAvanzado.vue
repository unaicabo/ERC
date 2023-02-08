<template>
    <div class="w-50 progreso-candados">
        <i class="fa-solid fa-lock" id="faCandado"></i>
        <div class="cajaProgresoCandados">
<<<<<<< HEAD
            <div class="cajaLetra bg-primary text-white text-center display-6">{{ numUno }}</div>
            <div class="cajaLetra bg-primary text-white text-center display-6">{{ numDos }}</div>
            <div class="cajaLetra bg-primary text-white text-center display-6">{{ numTres }}</div>
            <div class="cajaLetra bg-primary text-white text-center display-6">{{ numCuatro }}</div>
            <div class="cajaLetra bg-primary text-white text-center display-6"></div>
=======
            <div class="cajaLetra bg-danger text-white text-center display-6"><p>{{ numUno }}</p></div>
            <div class="cajaLetra bg-danger text-white text-center display-6"><p>{{ numDos }}</p></div>
            <div class="cajaLetra bg-danger text-white text-center display-6"><p>{{ numTres }}</p></div>
            <div class="cajaLetra bg-danger text-white text-center display-6"><p></p></div>
>>>>>>> 89e87fa65e7aa43af1b08db81b07c13541a6b7dd
        </div>
    </div>
</template>

<script>
   export default {
    props: ['numUno','numDos','numTres','numCuatro']
   }
</script>

<style>

<<<<<<< HEAD
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
=======
#faCandado {
    font-size: 10rem;
    margin-bottom: 10px;
    color: lightcoral;
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
p {
    font-size: 3rem;
}
</style>
>>>>>>> 89e87fa65e7aa43af1b08db81b07c13541a6b7dd
