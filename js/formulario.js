function GetCampos(){

 var formulario = document.getElementById("myForm");
 var CamposImput = formulario.getElementsByTagName("input"); 
 var labels = formulario.getElementsByTagName("label");

 var focusInput = function(){
  this.parentElement.children[0].className = "icono-usuario-1 active-label"; 
  /*this.parentElement.children[2].className = this.parentElement.children[2].className.replace("error", "");
  this.parentElement.children[0].className = this.parentElement.children[0].className + " active-icono"*/


 }


 var blurInput = function(){
    

  if (this.value <= 0) {
      this.parentElement.children[0].className = "icono-usuario-1";
      /*this.parentElement.children[2].className = "input error";*/
  }
 }
/*-------------------------------------------------------------------------------------------*/
var focusInput2 = function(){
  this.parentElement.children[0].className = "icono-clave-1 active-label2"; 
  /*this.parentElement.children[2].className = this.parentElement.children[2].className.replace("error", "");
  this.parentElement.children[0].className = this.parentElement.children[0].className + " active-icono"*/


 }


 var blurInput2 = function(){
    

  if (this.value <= 0) {
      this.parentElement.children[0].className = "icono-clave-1";
      /*this.parentElement.children[2].className = "input error";*/
  }
 }



  for(var i=0; i< CamposImput.length; i++) {  
  // Si el tipo de campo es una caja de texto
      if(CamposImput[i].type == "text") { 
        CamposImput[i].addEventListener("focus", focusInput); 
        CamposImput[i].addEventListener("blur", blurInput);
      }

      if (CamposImput[i].type == "password") {
       CamposImput[i].addEventListener("focus", focusInput2); 
        CamposImput[i].addEventListener("blur", blurInput2);  

      }
  }







}
