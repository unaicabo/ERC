const moveToRegistrar = {
	methods: {
		moveRegistrar(){
			$('#container').addClass("right-panel-active");
		}
	}
}
Vue.createApp(moveToRegistrar).mount('#moveToRegistro');

const moveToLogin = {
	methods: {
		moveLogin(){
			$('#container').removeClass("right-panel-active");
		}
	}
}
Vue.createApp(moveToLogin).mount('#moveToLogin');

const formularioRegister = {
	data() {
		return {
			nombre: '',
			apellidos: '',
			usuario: '',
			email: '',
			contraseina: '',
			contraseina2: '',
			imagen: '',
		}
	},
	methods: {
		register(event){
			event.preventDefault();
			const regexSoloLetras = /^[a-zA-Z]+$/;
			const regexEmail = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;

			if(this.nombre == '' || this.apellidos == '' || this.usuario == '' || this.email == '' || this.contraseina == '' || this.contraseina2 == ''){
				$('#msgErrorRegister').html('<i class="fa-solid fa-triangle-exclamation"></i> Introduce todos los datos');
			} else if(this.contraseina != this.contraseina2) {
				$('#msgErrorRegister').html('<i class="fa-solid fa-triangle-exclamation"></i> Contraseñas no coinciden');
			} else if(!regexSoloLetras.test(this.nombre)) {
				$('#msgErrorRegister').html('<i class="fa-solid fa-triangle-exclamation"></i> El nombre solo puede contener letras');
			} else if(!regexSoloLetras.test(this.apellidos)) {
				$('#msgErrorRegister').html('<i class="fa-solid fa-triangle-exclamation"></i> El apellido solo puede contener letras');
			} else if(!regexEmail.test(this.email)) {
				$('#msgErrorRegister').html('<i class="fa-solid fa-triangle-exclamation"></i> El email tiene que ser un email');
			} else {
				$('#msgErrorRegister').html('');
				console.log('Entro aquí');
				document.getElementById('formRegister').submit();
			}
		}
	}
}
Vue.createApp(formularioRegister).mount('#formRegister');

const formularioLogin = {
	data() {
		return {
			usuario: '',
			contraseina: ''
		}
	},
	methods: {
		login(event) {
			event.preventDefault();

			if(this.usuario == '' || this.contraseina == '') {
				$('#msgError').html('<i class="fa-solid fa-triangle-exclamation"></i> Rellena todos los campos')
			} else {
				$('#msgError').html('');
				document.getElementById('formLogin').submit();
			}
		}
	} 
}
Vue.createApp(formularioLogin).mount('#formLogin');










/*var savedFileBase64='';
var filename='';

function verifyPhoto(event) {
	preventClick(event);

	var file= this.files[0];
	var reader  = new FileReader();

	filename = file.name;
	filesize= file.size;

	if((file.size/ 1024/1024) > 512 ){
		alert("Argazkia gehiegi okupatzen du");
		this.value = "";
	} else{
		reader.onloadend = function () {
			savedFileBase64 = reader.result;   
		}
		if (file) {reader.readAsDataURL(file)} 
	}
}*/