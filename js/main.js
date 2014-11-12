$(document).on('ready', inicio);
function inicio()
{	
	$('#LogIn').on('click', logIn);
	$('#Register').on('click', PreRegister);	
	$('.usuario img').on('click', mostrarOpcionesUsuario);
	$('.previo').on('click', chatear);
	$('.chatAmigo .titulo').on('click', listaDeChats);
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
function admin()
{
	window.location = '/'
}
function redireccionar()
{
	window.location = '/'
}
function ocultar()
{
	console.log('se ejecuto ocultar');
	$('#respuestaLogin').slideToggle();
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
	var url = "/php/login.php";

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
	var url = "/php/insPreRegistro.php";

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
