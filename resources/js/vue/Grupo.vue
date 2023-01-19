<template>
    <form action="" method="POST" id="formRegister">

        <h1>Crear nuevo grupo</h1>

        <div id="formIkaslea" class="signUpForm">
            <input type="text" name="nombre" placeholder="Nombre del grupo *" id="nombreIrakaslea"/>
            <!-- <input type="text" name="integrantes" placeholder="Integrantes del grupo *" id="integrantes"/> -->
            <p id="integrantes"></p>
            <!--input type="file" placeholder="Argazkia" id="fotoIrakaslea" name="fotoIrakaslea" accept="image/png, image/jpeg, image/jpg" -->

            <button type="submit" id="btnIrakaslea" @click="register">Entrar</button>
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
