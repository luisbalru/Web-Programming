// FUNCIÓN DE VALIDACIÓN DE FORMULARIOS

function validate_alta_usuario()
{
    if(document.alta_usuario.nombre.value == "" || document.alta_usuario.nombre.value.length > 30)
    {
      alert("Nombre requerido");
      document.alta_usuario.nombre.focus();
      return false;
    }

    if(document.alta_usuario.apellidos.value == "" || document.alta_usuario.apellidos.value.length > 30)
    {
      alert("Apellidos requeridos");
      document.alta_usuario.apellidos.focus();
      return false;
    }

    if(document.alta_usuario.dni.value == "" || document.alta_usuario.dni.value.length > 9)
    {
      alert("DNI requerido");
      document.alta_usuario.dni.focus();
      return false;
    }

    if(document.alta_usuario.passwd.value == "" || document.alta_usuario.passwd.value.length > 30)
    {
      alert("Contraseña requerida");
      document.alta_usuario.passwd.focus();
      return false;
    }

    if(document.alta_usuario.email.value == "" || document.alta_usuario.email.value.length > 30)
    {
      alert("Email requerido");
      document.alta_usuario.email.focus();
      return false;
    }

    if(document.alta_usuario.numero.value == "" || document.alta_usuario.numero.value.length > 12)
    {
      alert("Número requerido");
      document.alta_usuario.numero.focus();
      return false;
    }

    if(tiene_numeros(document.alta_usuario.nombre.value))
    {
      alert("No introduzca números en el nombre");
      return false;
    }

    if(tiene_numeros(document.alta_usuario.apellidos.value))
    {
      alert("No introduzca números en el apellidos");
      return false;
    }

    if(tiene_letras(document.alta_usuario.telefono.value))
    {
      alert("No introduzca letras en el teléfono");
      return false;
    }

    validateEmail();
    validateTel();
}


function validateEmail()
      {
         var emailID = document.alta_usuario.email.value;
         atpos = emailID.indexOf("@");
         dotpos = emailID.lastIndexOf(".");

         if (atpos < 1 || ( dotpos - atpos < 2 ))
         {
            alert("Por favor, introduce un email válido");
            document.email.email.focus() ;
            return false;
         }
         return( true );
      }

  function tiene_numeros(texto){
    var numeros = "0123456789";
     for(i=0; i<texto.length; i++){
        if (numeros.indexOf(texto.charAt(i),0)!=-1){
           return 1;
        }
     }
     return 0;
  }

  function tiene_letras(texto){
    var letras = "abcdefghyjklmnñopqrstuvwxyz";
    texto = texto.toLowerCase();
    for(i=0; i<texto.length; i++){
      if (letras.indexOf(texto.charAt(i),0)!=-1){
         return 1;
      }
    }
    return 0;
  }

  function validar_login(){
    if(document.login.usuario.value.indexOf(";")!=(-1) || document.login.passwd.value.indexOf(";")!=(-1))
    {
      alert("Caracter prohibido en el login");
      return false;
    }
    return true;
  }
