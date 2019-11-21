<?php   

include 'db.php'; 

$sql = "CREATE TABLE Producto (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    tipo VARCHAR(30) NOT NULL,
    nombreproducto VARCHAR(30) NOT NULL,
    precioproducto VARCHAR(30),
    condicion VARCHAR(30),
    vendedor VARCHAR(30), 
    ciudad VARCHAR(30),
    email VARCHAR(50), 
    image VARCHAR(30),
    imagepath VARCHAR(50)
    )";
    if (mysqli_query($conn, $sql)) {
        echo "Table producto created successfully";
    } else {
        echo "Error creating table: " . mysqli_error($conn);
    }
    
    mysqli_close($conn);
?>