$(document).on('ready', inicio);
function inicio()
{	
	$('#btnBuscarDominio').on('click', consultaDominio);
	$('#LogIn').on('click', logIn);
	$('#btnContacto').on('click', insContacto);


	$('#Register').on('click', PreRegister);	
	$('.usuario img').on('click', mostrarOpcionesUsuario);
	$('.previo').on('click', chatear);
	$('.chatAmigo .titulo').on('click', listaDeChats);
	$('#confirmarCuenta').on('click', confirmarCuenta);
	$('.botonNuevo').on('click', nuevoUsuario);
	$('.cerrarPopups').on('click', cerrarPopups);
	$('#botonNuevoMenu').on('click', nuevoMenu);
}
function funcando()
{
	alert('estoy funcando');
}
function insContacto()
{
	var url = "/querys/insContacto.php";

	$.ajax({
		type: "POST",
		url: url,
		data: $("#formContacto").serialize(),
		success: function(data){
			$("#respuestaContacto").html(data);
			}
	});
	$('.vaciar').val('');
	return false;
}
function consultaDominio()
{
	
	var url = "/querys/consultaDominio.php";

	$.ajax({
		type: "POST",
		url: url,
		data: $("#formDominio").serialize(),
		success: function(data){
			$("#respuestaDominios").html(data);
			}
	});
	$('.vaciar').val('');
	return false;
}
function nuevoMenu()
{
	console.log('Insertado nuevo cliente');
	$('.popMenus').slideToggle();
	var url = "../php/insNuevoMenu.php";
	$.ajax({
		type: "POST",
		url: url,
		data: $("#nuevoMenu").serialize(),
		success: function(data){
			$("#respuesta").html(data);
			}
	});
	$('.vaciar').val('');
	setTimeout ("location.reload()", 3000);
	return false;
}
function asignarMenu(obj)
{
	console.log('Mostrar formulario para asignarMenu');
	var disparador = obj;
	var idUsuario = $(disparador).parents('.tarjeta').children('#idUsuario').html();
	$('#inputIdUsuario').val(idUsuario);
	$('.popMenus').slideToggle();
}
function cerrarPopups()
{
	$('.popup').css('display', 'none');
}
function nuevoUsuario()
{
	console.log('Nuevo Usuario')
	$('.popNuevoUsuario').slideToggle();
}
function listaDeChats()
{
	$('.previo').removeClass('inactivo');
	$('.previo').addClass('activo');
	$('.chatAmigo').removeClass('activo');
	$('.chatAmigo').addClass('inactivo');		
}
function chatear()
{
	$('.previo').removeClass('activo');
	$('.previo').addClass('inactivo');
	$('.chatAmigo').removeClass('inactivo');
	$('.chatAmigo').addClass('activo');
	
}
function confirmarCuenta()
{
	var url = "../php/confirmarCuenta.php";

	$.ajax({
		type: "POST",
		url: url,
		data: $("#formConfirmarCuenta").serialize(),
		success: function(data){
			$("#respuestaConfirmacionCuenta").html(data);
			}
	});
	$('#respuestaConfirmacionCuenta').slideToggle();
	$('.vaciar').val('');
	return false;
}
function admin()
{
	window.location = '../'
}
function redireccionar()
{
	window.location = '../panel'
}
function ocultar()
{
	console.log('se ejecuto ocultar');
	$('#respuestaLogin').slideToggle();
	$('#respuestaConfirmacionCuenta').slideToggle();
}
function timeOcultar()
{
	setTimeout ("ocultar()", 3000);
}
function logueado()
{
	console.log('se ejecuto login');
	setTimeout ("redireccionar()", 5000);
}
function mostrarOpcionesUsuario()
{
	console.log('estoy funcando')
	$('.opcionesUsuario').slideToggle();
}
function mostarMenu()
{
	console.log('estoy funcando')
	$('.opcionesUsuario').animate({
            width: "toggle",
            opacity: "toggle"
        });    
}
function logIn()
{
	var url = "../querys/login.php";

	$.ajax({
		type: "POST",
		url: url,
		data: $("#formLogIn").serialize(),
		success: function(data){
			$("#respuestaLogin").html(data);
			}
	});
	$('#respuestaLogin').slideToggle();
	return false;
}
function PreRegister()
{
	console.log('usuario pre registrado');
	$('.popNuevoUsuario').slideToggle();
	var url = "../php/insPreRegistro.php";

	$.ajax({
		type: "POST",
		url: url,
		data: $("#formRegister").serialize(),
		success: function(data){
			$("#respuestaRegister").html(data);
			}
	});
	$('.vaciar').val('');
	return false;
}