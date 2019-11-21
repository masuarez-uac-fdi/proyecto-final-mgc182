
 <?php
 $iddelete=  $_POST['iddelete'];
 var_dump($iddelete);

 include 'db.php';  
$stmt = $conn->prepare("DELETE FROM producto WHERE id = ?");
$stmt->bind_param("i" , $iddelete);
$stmt->execute();
$stmt->close();
 

?>