$(document).ready(function() { 

    $('#files').inputFileText( { text: 'Archivo' } ); //cambiar texto del boton default
});


function enviardata() { 
 
event.preventDefault();
var tp=$("select[name='tipo']").val();
console.log(tp);
var con=$("select[name='condicion']").val();
console.log(con);
var np=$("input[name='nombreproducto']").val();
console.log(np);
var pp=$("input[name='precioproducto']").val();
console.log(pp);
var v=$("input[name='vendedor']").val();
console.log(v);
var c=$("input[name='ciudadv']").val();
console.log(c);
var e=$("input[name='emailv']").val();
console.log(e);
var p=$("input[name='picture']").val();
console.log(p);
var json=$('#formulario').serializeJSON();
console.log(json); 

if (!tp || !con || !np || !pp || !v || !c || !e || !p)
 { 
   
    alert('Uno o mas campos estan vacios');

 }

 else
 {  

  

   var formData= new FormData($("form#formulario")[0]); 

    

 $.ajax({
    url: 'addproduct.php',
    type: 'POST',
    data: formData,
    async: true,
    cache: false,
    contentType: false,
    processData: false,
    success: function () {
      
     alert("¡Se ha agregado el producto a la base de datos!");
    }
  });     
}  
}
function modificardata() { 
 
   event.preventDefault();
   var tp=$("select[name='tipo']").val();
   console.log(tp);
   var con=$("select[name='condicion']").val();
   console.log(con);
   var np=$("input[name='nombreproducto']").val();
   console.log(np);
   var pp=$("input[name='precioproducto']").val();
   console.log(pp);
   var v=$("input[name='vendedor']").val();
   console.log(v);
   var c=$("input[name='ciudadv']").val();
   console.log(c);
   var e=$("input[name='emailv']").val();
   console.log(e);
   var p=$("input[name='picture']").val();
   console.log(p);
   var id= $("input[name='idmodify']").val();
   
   if (!tp || !con || !np || !pp || !v || !c || !e || !p || !id)
    { 
      
       alert('Uno o mas campos estan vacios');
   
    }
   
    else
    {  
   
       var formData= new FormData($("form#formulario")[0]); 
   
    $.ajax({
       url: 'modifyproduct.php',
       type: 'POST',
       data: formData,
       async: true,
       cache: false,
       contentType: false,
       processData: false,
       success: function () {
         
        alert("¡Se modificado el registro!");
       }
     });     
   }
}
function borrardata() { 
 
   event.preventDefault();
   var id= $("input[name='iddelete']").val();
   
   if ( !id)
    { 
      
       alert('El campo de id esta vacio');
   
    }
   
    else
    {  
      var formData= new FormData($("form#formulario")[0]); 
   
    $.ajax({
       url: 'deleteproduct.php',
       type: 'POST',
       data: formData,
       async: true,
       cache: false,
       contentType: false,
       processData: false,
       success: function (response) {
         alert(response);
        //alert("¡Se ha borrado el registro!");
       }
     });     
   }
}

