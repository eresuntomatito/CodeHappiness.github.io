function escogerGanador(){
	var pIntegrantes = document.getElementById("integrantes").innerHTML;
	var pGanador = document.getElementById("ganador");
	var Integrantes_array = pIntegrantes.split("<br>");
	var ganador = Math.floor(Math.random() * (Integrantes_array.length-1) );
	
	pGanador.innerHTML += Integrantes_array[ganador] + "<br>";
	
}
