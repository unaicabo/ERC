<template>



    <!-- <button @click="aniadirIntegranteArray()">+</button> -->
</template>

<script>


    export default {
        methods: {
            aniadirIntegrante() {
                let select = document.createElement('select');
                let option = document.createElement('option');
                select.appendChild(option);

                document.getElementById('formIkaslea').appendChild(select);
            }

        }
    }
</script>
