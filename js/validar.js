function validar() {


var todoCorrecto = true;
var formulario = document.formularioContacto;
for (var i=0; i<formulario.length; i++) {
   if(formulario[i].type =='text' || formulario[i].type =='number' 
   	|| formulario[i].type =='date' || formulario[i].type =='time') {
      if (formulario[i].value == null || formulario[i].value.length == 0 || /^\s*$/.test(formulario[i].value)){
         alert (formulario[i].name+ ': complete los campos');
           todoCorrecto=false;
           return false;
       }
      }
    }
if (todoCorrecto ==true) {
	alert("operacion ejecutada");
	formulario.submit();}
}



