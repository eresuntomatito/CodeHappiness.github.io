document.getElementById("form1").style.display = "none";
document.getElementById("form2").style.display = "none";
document.getElementById("form3").style.display = "none";
document.getElementById("form4").style.display = "none";
document.getElementById("form5").style.display = "none";
function hideOrShowElement(imgNo) {
	if(imgNo === 1){
		if(document.getElementById("form1").style.display === "none"){
			document.getElementById("form1").style.display = "block";
			document.getElementById("form2").style.display = "none";
			document.getElementById("form3").style.display = "none";
			document.getElementById("form4").style.display = "none";
			document.getElementById("form5").style.display = "none";
		}
	}else if(imgNo === 2){
		if(document.getElementById("form2").style.display === "none"){
			document.getElementById("form1").style.display = "none";
			document.getElementById("form2").style.display = "block";
			document.getElementById("form3").style.display = "none";
			document.getElementById("form4").style.display = "none";
			document.getElementById("form5").style.display = "none";
		}
	}else if(imgNo === 3){
		if(document.getElementById("form3").style.display === "none"){
			document.getElementById("form1").style.display = "none";
			document.getElementById("form2").style.display = "none";
			document.getElementById("form3").style.display = "block";
			document.getElementById("form4").style.display = "none";
			document.getElementById("form5").style.display = "none";
		}
	}else if(imgNo === 4){
		if(document.getElementById("form4").style.display === "none"){
			document.getElementById("form1").style.display = "none";
			document.getElementById("form2").style.display = "none";
			document.getElementById("form3").style.display = "none";
			document.getElementById("form4").style.display = "block";
			document.getElementById("form5").style.display = "none";
		}
	}else{
		if(document.getElementById("form5").style.display === "none"){
			document.getElementById("form1").style.display = "none";
			document.getElementById("form2").style.display = "none";
			document.getElementById("form3").style.display = "none";
			document.getElementById("form4").style.display = "none";
			document.getElementById("form5").style.display = "block";
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
document.getElementById("imagen4").addEventListener("click", function() {
	hideOrShowElement(4);
});
document.getElementById("imagen5").addEventListener("click", function() {
	hideOrShowElement(5);
});
