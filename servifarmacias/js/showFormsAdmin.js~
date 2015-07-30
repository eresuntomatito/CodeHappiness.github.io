document.getElementById("form1").style.display = "none";
document.getElementById("form2").style.display = "none";

document.getElementById("form3").style.display = "none";
function hideOrShowElement(imgNo) {
	if(imgNo === 1){
		if(document.getElementById("form1").style.display === "none"){
			document.getElementById("form1").style.display = "block";
			document.getElementById("form2").style.display = "none";
			document.getElementById("form3").style.display = "none";
		}
	}else if(imgNo === 2){
		if(document.getElementById("form2").style.display === "none"){
			document.getElementById("form1").style.display = "none";
			document.getElementById("form2").style.display = "block";
			document.getElementById("form3").style.display = "none";
		}
	}else{
		if(document.getElementById("form3").style.display === "none"){
			document.getElementById("form1").style.display = "none";
			document.getElementById("form2").style.display = "none";
			document.getElementById("form3").style.display = "block";
		}
	}

}

document.getElementById("imagen1").addEventListener("click", function() {
	hideOrShowElement(1);
});
document.getElementById("imagen2").addEventListener("click", function() {
	hideOrShowElement(2);
});
document.getElementById("imagen3").addEventListener("click", function() {
	hideOrShowElement(3);
});
