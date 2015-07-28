function validateEntry(formID){
//aqui se va a leer el archivo de registro para ver si ya esta registrado el ticket
	return true;	

}

function registerEntry(formID){
	var form1 = document.getElementById(formID);
//aqui se va a escribir el nuevo registro
	window.requestFileSystem(window.TEMPORARY, 1024*1024, writeFile);
	//clean form
	form1.folio.value = "";
	form1.monto.value = "";
	form1.correo.value = "";
	form1.telefono.value = "";
}

function loaded() {
	document.getElementById("rifaForm").addEventListener("submit",
		function(event) {
			event.preventDefault();
			if(validateEntry(this.id)) {
				registerEntry(this.id);
				document.getElementById("resultadoRifa").innerHTML = "Ya fue registrado en la rifa. ¡Suerte!";
			}else{
				document.getElementById("resultadoRifa").innerHTML = "El ticket que usted registro no es valido";
			}
		},
		false);
}
//filewriting
function writeFile(fs){
	fs.root.getFile('registroRife.txt', {create: false}, function(fileEntry) {
		fileEntry.createWriter(function(fileWriter){
			fileWriter.seek(fileWriter.length);
			fileWriter.write("new Entry");
		});
	});
}

window.addEventListener("load", loaded, false);
