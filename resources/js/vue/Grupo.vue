<<<<<<< HEAD
<template>
    <form action="" method="POST" id="formRegister">

        <h1>Crear nuevo grupo</h1>

        <div id="formIkaslea" class="signUpForm">
            <input type="text" name="nombre" placeholder="Nombre del grupo *" id="nombreIrakaslea"/>
            <p id="integrantes"></p>
        </div>
    </form>



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
=======
>>>>>>> 46d83cc8a863bc5f744400c868835f419258dcf2
