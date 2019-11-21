<!DOCTYPE html>
<html>
<head> 
        <?php
         include 'db.php';  
         $sql = "SELECT tipo, nombreproducto, precioproducto,condicion,vendedor,ciudad,email,image,imagepath from producto";
        $result = $conn->query($sql);
        $divhtml="";
        
         
        if ( $result->fetch_assoc()!==false) 
         { 
            $divhtml.=   '<div class="content_instance">';
            $divhtml.=  '<h1 style=" color:    rgb(197, 48, 22);text-align:center"; >"No se encontraron registros"</h1>';
            $divhtml.= '</div>';
         }
         while($row = $result->fetch_assoc()) {
              
                  $divhtml.=   '<div class="content_instance">';
                  $divhtml.=  '<img src="'.$row['imagepath'].$row['image'].'"/>';
                  $divhtml.=  '<div class="content_right">';
                  $divhtml.=  '<h1 style="  color:    rgb(197, 48, 22);">' .$row['nombreproducto'].'</h1>';
                  $divhtml.=  '<h2 style="  color:    rgb(35, 38, 201);">' .$row['tipo'].'</h2>';
                  $divhtml.=  '<h2 style="  color:    rgb(79, 197, 212);"> Precio :'.' $'    .$row['precioproducto'].'</h2>';
                  $divhtml.=  '<h2 style="  color:    rgb(113, 22, 197);"> Condicion : ' .$row['condicion'].'</h2>';
                  $divhtml.=  '<h2 style="  color:    rgb(168, 22, 197);"> Estado : ' .$row['ciudad'].'</h2>';
                  $divhtml.=  '<h2 style="  color:    rgb(95, 82, 9);"> Vendedor : ' .$row['vendedor'].'</h2>';
                  $divhtml.= '<h2 style="   color:    rgb(22, 197, 95);"> Contacto : '. $row['email'].'</h2>';
                  $divhtml.= '</div>';
                  $divhtml.= '</div>';
              }
              
              $divhtml.=  '</div';
            
              ?>

              
<link rel='shortcut icon' type='image/x-icon' href='favicon.ico' />
<link rel="stylesheet" type="text/css" href="stylecomprar.css" /> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script type="text/javascript" src="scriptindex.js"></script>
<script > 
$(document).ready(function(){
 var colors = ["rgb(216, 216, 38)","#9e15c0"]; 
var market = $(".title")[0]; 
var currentColor = 0;
setInterval(function(){
    if( currentColor === colors.length) currentColor = 0;
    market.style.color = colors[currentColor];
    currentColor++;
},1000);
});   
</script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Nintendo's Oddysey</title>

</head>

<body> 

        
 
 <div id="page">
        <div id="header">
        	<img align="right"src="cappy.png" alt="logo" />
          <h1 class="title">Consolas y videojuegos en venta</h1>
   </div>
        
   <div class="dotted_line"></div>
   
        
        <div id="content"> 

        	<div class="content_top">
            	<h1>Market</h1> 
            </div> 

            <?php echo $divhtml;?>

           
</body>
</html>
