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
			contraseina: '',
			contraseina2: '',
			terminos: false,
		}
	},
	methods: {
		register(event){
			event.preventDefault();
			const regexSoloLetras = /^[a-zA-Z]+$/;

			if(this.nombre == '' || this.apellidos == '' || this.usuario == '' || this.contraseina == '' || this.contraseina2 == ''){
				$('#msgErrorRegister').html('<i class="fa-solid fa-triangle-exclamation"></i> Introduce todos los datos');
			} else if(!this.terminos) {
				$('#msgErrorRegister').html('<i class="fa-solid fa-triangle-exclamation"></i> Hay que aceptar los terminos');
			} else if(this.contraseina != this.contraseina2) {
				$('#msgErrorRegister').html('<i class="fa-solid fa-triangle-exclamation"></i> Contraseñas no coinciden');
			} else if(!regexSoloLetras.test(this.nombre)) {
				$('#msgErrorRegister').html('<i class="fa-solid fa-triangle-exclamation"></i> El nombre solo puede contener letras');
			} else if(!regexSoloLetras.test(this.apellidos)) {
				$('#msgErrorRegister').html('<i class="fa-solid fa-triangle-exclamation"></i> El apellido solo puede contener letras');
			} else {
				$('#msgErrorRegister').html('');
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