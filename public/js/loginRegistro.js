$(document).ready(load)

function load() {
    $('#login').click(loggin);

	$('#btnIrakaslea').on('click', validateIrakaslea);
	$('#btnIkaslea').on('click', validateIkaslea);
	$('#fotoIrakaslea').on('change', verifyPhoto);
	$('#fotoIkaslea').on('change', verifyPhoto);


}





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















function preventClick(event) {
    event.preventDefault();
    event.stopPropagation();
}



function validateIkaslea(event) {
	preventClick(event);

	let contraseina2 = $('#contraseina2Ikaslea').val()
	
	let usuario = { 'nombre':$('#nombreIkaslea').val() , 
			'apellidos':$('#apellidosIkaslea').val(),
			'usuario':$('#usuarioIkaslea').val(), 
			'contraseina':$('#contraseinaIkaslea').val(),
			'telefono' : $('#telefonoIkaslea').val(),
			'email' : $('#emailIkaslea').val(),
			'foto' : filename,
			'fechaNacimiento' : $('#nacimientoIkaslea').val(),
			'instituto' : $('#institutoIkaslea').val(),
			'curso' : $('#cursoIkaslea').val(),
			'aino' : $('#ainoIkaslea').val(),
			'grupo' : $('#codigoIkaslea').val(),
			'rol' : "alumno",
			'savedFileBase64':savedFileBase64
		}

	if(usuario['nombre'] && usuario['apellidos'] && usuario['usuario'] && usuario['contraseina']
	&& usuario['telefono'] && usuario['email'] && usuario['fechaNacimiento'] && usuario['instituto']
	&& usuario['curso'] && usuario['aino'] && usuario['grupo']) {
		register(usuario, contraseina2, 'Ikaslea');
	} else {
		$('#msgErrorRegister').html('<i class="fa-solid fa-triangle-exclamation"></i> Sartu datu guztiak mesedez');
	}

}
var savedFileBase64='';
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
}

function validateIrakaslea(event) {
	preventClick(event);
	let contraseina2 = $('#contraseina2Irakaslea').val();
	
	let usuario = { 'nombre':$('#nombreIrakaslea').val() , 
			'apellidos':$('#apellidosIrakaslea').val(),
			'usuario':$('#usuarioIrakaslea').val(), 
			'contraseina':$('#contraseinaIrakaslea').val(),
			'telefono' : $('#telefonoIrakaslea').val(),
			'email' : $('#emailIrakaslea').val(),
			'foto' : filename,
			'fechaNacimiento' : $('#nacimientoIrakaslea').val(),
			'instituto' : $('#institutoIrakaslea').val(),
			'rol' : "profesor",
			'savedFileBase64':savedFileBase64
	}

	if (usuario['nombre'] && usuario['apellidos'] && usuario['usuario'] && usuario['contraseina']
	&& usuario['email'] && usuario['instituto']) {
		register(usuario, contraseina2, 'Irakaslea');
	} else {
		$('#msgErrorRegister').html('<i class="fa-solid fa-triangle-exclamation"></i> Sartu datu guztiak mesedez');
	}
}

function register(data, contra2, rol) {
	var url = "controller/controllerRegister.php";

	$('#msgErrorRegister').html();

	if ($('#terminos' + rol).is(':checked')) {
		if (data['contraseina']==contra2) {

			fetch(url, {
				method: 'POST', 
				body: JSON.stringify(data), 
				headers:{'Content-Type': 'application/json'}  
				})
				.then(res => res.json()).then(result => {

					switch (result.error) {
						case 0:
							$('#msgErrorRegister').html('<i class="fa-solid fa-triangle-exclamation"></i> Arazo bat gertatu da, saiatu berriro geroago.');
							break;
						case 1:
							$('#msgErrorRegister').html('<i class="fa-solid fa-triangle-exclamation"></i> Badago kontu bat izen horrekin.');
							break;
						case 2:
							$('#msgErrorRegister').html('<i class="fa-solid fa-triangle-exclamation"></i> Badago kontu bat helbide elektroniko horrekin.');
							break;
						case 3:
							location.reload();
							break;
						case 4:
							$('#msgErrorRegister').html('<i class="fa-solid fa-triangle-exclamation"></i> Ezin izan da kontua sortu.');
							break;
						default:
							break;
					}
				})
				.catch(error => console.error('Error status:', error));	
		} else {
			$('#msgErrorRegister').html('<i class="fa-solid fa-triangle-exclamation"></i> Pasahitzak ez dira berdinak');
		}
	} else {
		$('#msgErrorRegister').html('<i class="fa-solid fa-triangle-exclamation"></i> Erantzunkisuna sinatu mesedez');
	}
}

function loggin(event) {
    preventClick(event);

	if($('#usuarioLogin').val()!='' && $('#contraseinaLogin').val()!=''){	
		var url = "controller/controllerLogin.php";
		var data = {'usuario':$('#usuarioLogin').val(), 'contraseina':$('#contraseinaLogin').val()};
		fetch(url, {
		method: 'POST', 
		body: JSON.stringify(data), 
		headers:{'Content-Type': 'application/json'}  
		})
		.then(res => res.json()).then(result => { 
			switch (result.error) {
				case "0":
					$('#msgError').html('<i class="fa-solid fa-triangle-exclamation"></i> Kontua ez dago aktibatuta horaindik')
					break;
				case "1":
					window.location.href = "index.html";
					break;
				case "2":
					$('#msgError').html('<i class="fa-solid fa-triangle-exclamation"></i> Sartutako datuak ez dira zuzenak')
					break;
			}
		})
		.catch(error => console.error('Error status:', error));	
	}else{
		$('#msgError').html('<i class="fa-solid fa-triangle-exclamation"></i> Sartu datu guztiak')

	}
}