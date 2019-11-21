 
 <?php

/* VARIABLES 
 $tipo 
 $nombreproducto 
 $precioproducto
 $condicion
 $vendedor
 $ciudad
 $email
 $image
 $imagepath
 $id*/ 
 

 //RECIBIR DATOS
$tipo=''; 
if ($_POST['tipo']=='0') {  $tipo='Consola'; } 
else if ($_POST['tipo']=='1')  {  $tipo='Videojuego';} 

$nombreproducto = $_POST['nombreproducto'];
$precioproducto = $_POST['precioproducto']; 

$condicion ='';

if ($_POST['condicion']=='0') { $condicion='Nuevo'; } 
else if ($_POST['condicion']=='1'){  $condicion='Usado';}

$vendedor = $_POST['vendedor'];
$ciudad= $_POST['ciudadv'];
$email= $_POST['emailv'];

$target_path="imagenesp/";
$image= $_FILES['picture']['name']; 
$imagepath=$target_path;

$target_path = $target_path.basename( $_FILES['picture']['name']);   
move_uploaded_file($_FILES['picture']['tmp_name'], $target_path);

$id=  $_POST['idmodify'];


//MODIFICAR TABLA  SQL 
include 'db.php';  

$stmt = $conn->prepare("UPDATE Producto SET tipo=?, nombreproducto=?, precioproducto=?, condicion=? , vendedor=?, ciudad=?, email=?, image=?, imagepath=? WHERE id=?");
$stmt->bind_param("sssssssssi", $tipo, $nombreproducto, $precioproducto, $condicion, $vendedor, $ciudad, $email, $image, $imagepath,$id);
$stmt->execute();
$stmt->close();


?>