$(document).on("ready",configurarApp);
function configurarApp()

{
	var canvas = document.getElementById('miCanvas')
	var ctx = canvas.getContext("2d");
	canvas.width =screen.availWidth;
	dibujafooter(canvas,ctx)
}

function dibujafooter(canvas,contexto)
{
contexto.fillStyle = "rgba(0,0,0,0.7)";
contexto.moveTo(0,0);
contexto.quadraticCurveTo(0,-50,canvas.width-100,canvas.height-50)
contexto.fill();
}