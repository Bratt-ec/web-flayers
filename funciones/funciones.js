$(document).ready(function(){

    
$("#btnRegistrarse").click(function(event){
  valor= validarcedula($("#txtCedula").val());
			if (valor == false)
			{
			alert("Cédula Incorrecta");
			}
			else
			{
				  registro_usuario();
			}

});

$("#btnComprar").click(function(event){
   var total = $("#txttotal").val();
   var cedula = $("#txtcedula").val();
   var data = 'txtcedula='+cedula+'&txttotal='+total;
   $.ajax({
      type: 'post',
      url: 'funciones/funciones.php?op=comprar',
      data: data,
      success:function(resp){
         alert(resp);
         if(resp == 1 )
         alert("¡Compra exitosa!");      
         if(resp == 0)
             alert("¡Error inesperado! No se ha podido registrar");
        if(resp == 2)
        alert("¡Ud. ya compró!");
      }
   });
});

$("#btnProducto1").click(function(event){
   var producto = $("#Producto1").val(); 
   var data = 'Producto1='+producto;
   $.ajax({
      type:'post',
      url: 'funciones/funciones.php?op=carrito1',
      data: data,
      success:function(resp){   
         alert(resp);
         if(resp == 1 )
         alert("¡Agregado al carrito!");      
         if(resp == 0)
             alert("¡Error inesperado! No se ha podido registrar");
        if(resp == 2)
        alert("¡Ya selecciono este diseño!");
      }   
   });
});

$("#btnProducto2").click(function(event){
   var producto = $("#Producto2").val(); 
   var data = 'Producto2='+producto;
   $.ajax({
      type:'post',
      url: 'funciones/funciones.php?op=carrito2',
      data: data,
      success:function(resp){    
        alert(resp);
         if(resp == 1 )
         alert("¡Agregado al carrito!");      
         if(resp == 0)
             alert("¡Error inesperado! No se ha podido registrar");
        if(resp == 2)
        alert("¡Ya selecciono este diseño!");
      }   
   });
});

$("#btnProducto3").click(function(event){
   var producto = $("#Producto3").val(); 
   var data = 'Producto3='+producto;
   $.ajax({
      type:'post',
      url: 'funciones/funciones.php?op=carrito3',
      data: data,
      success:function(resp){        
         if(resp == 1 )
         alert("¡Agregado al carrito!");      
         if(resp == 0)
             alert("¡Error inesperado! No se ha podido registrar");
        if(resp == 2)
        alert("¡Ya selecciono este diseño!");
      }   
   });
});

$("#btnProducto4").click(function(event){
   var producto = $("#Producto4").val(); 
   var data = 'Producto4='+producto;
   $.ajax({
      type:'post',
      url: 'funciones/funciones.php?op=carrito4',
      data: data,
      success:function(resp){         
      if(resp == 1 )
       alert("¡Agregado al carrito!");      
       if(resp == 0)
           alert("¡Error inesperado! No se ha podido registrar");
      if(resp == 2)
      alert("¡Ya selecciono este diseño!");
      }  
   });
});

$("#btnProducto5").click(function(event){
   var producto = $("#Producto5").val(); 
   var data = 'Producto5='+producto;
   $.ajax({
      type:'post',
      url: 'funciones/funciones.php?op=carrito5',
      data: data,
      success:function(resp){     
         if(resp == 1 )
         alert("¡Agregado al carrito!");      
         if(resp == 0)
             alert("¡Error inesperado! No se ha podido registrar");
        if(resp == 2)
        alert("¡Ya selecciono este diseño!");
      } 

   });
});

$("#btnProducto6").click(function(event){
   var producto = $("#Producto6").val(); 
   var data = 'Producto6='+producto;
   $.ajax({
      type:'post',
      url: 'funciones/funciones.php?op=carrito6',
      data: data,
      success:function(resp){     
         if(resp == 1 )
         alert("¡Agregado al carrito!");      
         if(resp == 0)
             alert("¡Error inesperado! No se ha podido registrar");
        if(resp == 2)
        alert("¡Ya selecciono este diseño!");
      }   
   });
});


$("#btnLogin").click(function(event)
{
	iniciar_sesion();
});

$("#btnCarrito").click(function(event)
{
	window.location.href = 'http://localhost/webflyer/carrito.php';
});


});//Termina el formulario

function registro_usuario(){ 
    var cedula= $("#txtCedula").val(); 
     var nombre = $("#txtNombre").val();
     var apellido = $("#txtApellido").val();  
     var edad = $("#txtEdad").val();
     var clave = $("#txtClave").val();
     var dataen= 'txtCedula='+cedula+'&txtNombre='+nombre+'&txtApellido='+apellido+'&txtEdad='+edad+'&txtClave='+clave;   
     $.ajax({
       type:'post',
       url: 'funciones/funciones.php?op=registrar',
       data: dataen,
       success:function(resp){
       //alert(resp);         
       if(resp == 1 ){
        alert("¡Usuario Registrado!");
        limpiar_campos(); 
        }
         else
            alert("¡Error inesperado! No se ha podido registrar");
       }   
     });
   }


   function limpiar_campos(){
    $("#txtCedula").val(''); 
    $("#txtNombre").val('');
    $("#txtApellido").val('');  
    $("#txtEdad").val('');
    $("#txtClave").val('');
   }

   function soloLetras(e){
    key = e.keyCode || e.which;
    tecla = String.fromCharCode(key).toLowerCase();
    letras = "_ abcdefghijklmnñopqrstuvwxyz";
    especiales = "8-37-39-46";

    tecla_especial = false
    for(var i in especiales){
         if(key == especiales[i]){
             tecla_especial = true;
             break;
         }
     }

     if(letras.indexOf(tecla)==-1 && !tecla_especial){
         return false;
     }
}

function soloNumeros(e){
    key = e.keyCode || e.which;
    tecla = String.fromCharCode(key).toLowerCase();
    letras = "1234567890.";
    especiales = "8-37-39-46";

    tecla_especial = false
    for(var i in especiales){
         if(key == especiales[i]){
             tecla_especial = true;
             break;
         }
     }

     if(letras.indexOf(tecla)==-1 && !tecla_especial){
         return false;
     }
}

   function validarcedula(cedula)
{         
   
      numero = cedula;
    /* alert(numero); */
      var suma = 0;      
      var residuo = 0;      
      var pri = false;      
      var pub = false;            
      var nat = false;      
      var numeroProvincias = 22;                  
      var modulo = 11;
                  
      /* Verifico que el campo no contenga letras */                  
      var ok=1;
      for (i=0; i<numero.length && ok==1 ; i++){
         var n = parseInt(numero.charAt(i));
         if (isNaN(n)) ok=0;
      }
      if (ok==0){
         //alert("No puede ingresar caracteres en el número");         
         return false;
      }
                  
      if (numero.length < 10 ){              
         //alert('El número ingresado no es válido');                  
         return false;
      }
     
      /* Los primeros dos digitos corresponden al codigo de la provincia */
      provincia = numero.substr(0,2);      
      if (provincia < 1 || provincia > numeroProvincias){           
         //alert('El código de la provincia (dos primeros dígitos) es inválido');
     return false;       
      }
      /* Aqui almacenamos los digitos de la cedula en variables. */
      d1  = numero.substr(0,1);         
      d2  = numero.substr(1,1);         
      d3  = numero.substr(2,1);         
      d4  = numero.substr(3,1);         
      d5  = numero.substr(4,1);         
      d6  = numero.substr(5,1);         
      d7  = numero.substr(6,1);         
      d8  = numero.substr(7,1);         
      d9  = numero.substr(8,1);         
      d10 = numero.substr(9,1);                
         
      /* El tercer digito es: */                           
      /* 9 para sociedades privadas y extranjeros   */         
      /* 6 para sociedades publicas */         
      /* menor que 6 (0,1,2,3,4,5) para personas naturales */ 
      if (d3==7 || d3==8){           
         //alert('El tercer dígito ingresado es inválido');                     
         return false;
      }         
         
      /* Solo para personas naturales (modulo 10) */         
      if (d3 < 6){           
         nat = true;            
         p1 = d1 * 2;  if (p1 >= 10) p1 -= 9;
         p2 = d2 * 1;  if (p2 >= 10) p2 -= 9;
         p3 = d3 * 2;  if (p3 >= 10) p3 -= 9;
         p4 = d4 * 1;  if (p4 >= 10) p4 -= 9;
         p5 = d5 * 2;  if (p5 >= 10) p5 -= 9;
         p6 = d6 * 1;  if (p6 >= 10) p6 -= 9; 
         p7 = d7 * 2;  if (p7 >= 10) p7 -= 9;
         p8 = d8 * 1;  if (p8 >= 10) p8 -= 9;
         p9 = d9 * 2;  if (p9 >= 10) p9 -= 9;             
         modulo = 10;
      }         
      /* Solo para sociedades publicas (modulo 11) */                  
      /* Aqui el digito verficador esta en la posicion 9, en las otras 2 en la pos. 10 */
      else if(d3 == 6){           
         pub = true;             
         p1 = d1 * 3;
         p2 = d2 * 2;
         p3 = d3 * 7;
         p4 = d4 * 6;
         p5 = d5 * 5;
         p6 = d6 * 4;
         p7 = d7 * 3;
         p8 = d8 * 2;            
         p9 = 0;            
      }         
         
      /* Solo para entidades privadas (modulo 11) */         
      else if(d3 == 9) {           
         pri = true;                                   
         p1 = d1 * 4;
         p2 = d2 * 3;
         p3 = d3 * 2;
         p4 = d4 * 7;
         p5 = d5 * 6;
         p6 = d6 * 5;
         p7 = d7 * 4;
         p8 = d8 * 3;
         p9 = d9 * 2;            
      }
                
      suma = p1 + p2 + p3 + p4 + p5 + p6 + p7 + p8 + p9;                
      residuo = suma % modulo;                                         
      /* Si residuo=0, dig.ver.=0, caso contrario 10 - residuo*/
      digitoVerificador = residuo==0 ? 0: modulo - residuo;                
      /* ahora comparamos el elemento de la posicion 10 con el dig. ver.*/                         
      if (pub==true){           
         if (digitoVerificador != d9){                          
            alert('El ruc de la empresa del sector público es incorrecto.');            
            return false;
         }                  
         /* El ruc de las empresas del sector publico terminan con 0001*/         
         if ( numero.substr(9,4) != '0001' ){                    
            //alert('El ruc de la empresa del sector público debe terminar con 0001');
            return false;
         }
      }         
      else if(pri == true){         
         if (digitoVerificador != d10){                          
            //alert('El ruc de la empresa del sector privado es incorrecto.');
            return false;
         }         
         if ( numero.substr(10,3) != '001' ){                    
            //alert('El ruc de la empresa del sector privado debe terminar con 001');
            return false;
         }
      }      
      else if(nat == true){         
         if (digitoVerificador != d10){                          
            //alert('El número de cédula de la persona natural es incorrecto.');
            return false;
         }         
         if (numero.length >10 && numero.substr(10,3) != '001' ){                    
            //alert('El ruc de la persona natural debe terminar con 001');
            return false;
         }
      }      
      return true;   
} 
	
