function va(){
  var nom = document.getElementById("nombre-completo").value;
  var tel = document.getElementById("telefono").value;
  var correo = document.getElementById("email").value;
  var empresa = document.getElementById("empresa").value;
  var plat = $('input[name=redes]:checked', '#formu').val();
  var caso = $('input[name=caso]:checked', '#formu').val();
  var seva = $('input[name=radio-grp]:checked', '#formu').val();
  no = /[a-zA-Z]/
  console.log($("#formu").serialize());
  no = /[a-zA-Z]/
  if(nom == "" || tel == "" || correo == "" || empresa == "" || plat == "" || caso == "" || seva == ""){
    swal("Error!", "Creo que olvidaste llenar algun dato", "error");
  }else{
       if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3,4})+$/.test(correo)){
         swal("Error!", "Parece que no ingresaste un correo valido", "error");
       }else{
         if(tel.length != 10){
           swal("Error!", "El numero "+tel+", No contiene 10 caracteres", "error");
         }else{
               if (!/^([0-9])*$/.test(tel)){
                 swal("Error!", "El numero "+tel+", No es un numero valido", "error");
               }
               else{
                 if(correo.length<16){
                    swal("Error!", "¿En verdad "+correo+", es tu correo?, por favor intenta con otro", "error");
                 }
                 else{
                   if (!no.test(nom)){
                     swal("Error!", nom+" Contiene caracteres especiales, por favor ingresa un nombre valido", "error");
                   }else{
                     if(nom.length<10){
                       swal("Error!", nom+" no es tu nombre completo, por favor ingresa tu nombre completo", "error");
                     }else{
                       if(!no.test(empresa)){
                         swal("Error!", empresa+" Contiene caracteres especiales, por favor intentalo de nuevo", "error");
                       }else{
                         $.ajax({
                                 type: "POST",
                                  url: "php/mail.php",
                                  data: $("#formu").serialize(),
                                  error: function(){alert("erro1r");},
                                  success: function(data)
                                  {
                                    if(data==0){
                                    swal("Error!", "Lo siento "+nom+" estamos teniendo problemas, por favor intentalo más tarde", "error");
                                  }
                                  if(data==1){
                                    swal("Se envio con exito", "nos pondremos en contacto lo más pronto posible.", "success")
                                    .then((value) => {
                                      location.reload();
                                    });
                                  }
                                  }
                              });
                       }
                     }
                   }
                 }
               }
         }
       }
  }
}
function dos(){
  var nom = document.getElementById("contact_nom").value;
  var empresa = document.getElementById("empresan_nom").value;
  var correo = document.getElementById("contact_email").value;
  var mensaje = document.getElementById("contact_message").value;
  no = /[a-zA-Z]/
  console.log($("#fomrdo").serialize());
  no = /[a-zA-Z]/
  if(nom == "" || mensaje=="" || correo == "" || empresa == ""){
    swal("Error!", "Creo que olvidaste llenar algun dato", "error");
  }else{
    if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3,4})+$/.test(correo)){
      swal("Error!", "Parece que no ingresaste un correo valido", "error");
    }else{
      if(mensaje.length < 10){
        swal("Error!", "Por favor ingresa un mensaje de almenos 10 dijitos", "error");
      }else{
          if(correo.length<16){
             swal("Error!", "¿En verdad "+correo+", es tu correo?, por favor intenta con otro", "error");
          }else{
            if (!no.test(nom)){
              swal("Error!", nom+" Contiene caracteres especiales, por favor ingresa un nombre valido", "error");
            }else{
              if(nom.length<10){
                swal("Error!", nom+" no es tu nombre completo, por favor ingresa tu nombre completo", "error");
              }else{
                if(!no.test(empresa)){
                  swal("Error!", empresa+" Contiene caracteres especiales, por favor intentalo de nuevo", "error");
                }else{
                  $.ajax({
                          type: "POST",
                           url: "php/dos.php",
                           data: $("#fomrdo").serialize(),
                           error: function(){alert("erro2r");},
                           success: function(data)
                           {
                             if(data==0){
                             swal("Error!", "Lo siento "+nom+" estamos teniendo problemas, por favor intentalo más tarde", "error");
                           }
                           if(data==1){
                             swal("Se envio con exito", "nos pondremos en contacto lo más pronto posible.", "success")
                             .then((value) => {
                               location.reload();
                             });
                           }
                           }
                       });
                }
              }
            }
          }
        }
      }
    }
  }
