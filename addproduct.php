 
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
  $imagepath*/ 
 
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
 

//CREAR TABLA EN SQL 
include 'db.php';  

$stmt = $conn->prepare("INSERT INTO Producto (tipo, nombreproducto, precioproducto,condicion,vendedor,ciudad,email,image,imagepath) 
VALUES (?,?,?,?,?,?,?,?,?)");
$stmt->bind_param("sssssssss", $tipo, $nombreproducto, $precioproducto, $condicion, $vendedor, $ciudad, $email, $image, $imagepath);
$stmt->execute();
$stmt->close();


?>