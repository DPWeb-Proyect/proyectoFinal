<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">  
    <title>Document</title>
</head>
<body>
<?php
        include("./Conex.php");
        $i=$_POST["Boton"];        
        $query;
        switch($i){
            case 1:                
                $query="INSERT INTO `users`(`iduser`, `NOM_USER`, `APE_USER`, `TEL_USER`, `DIR_USER`, `CORREO_USER`, `PASS`) 
                VALUES (null,'".$_POST["Nombre"]."','".$_POST["Apellido"]."','".$_POST["Telefono"]."','".$_POST["Direccion"]."','".$_POST["Correo"]."','".$_POST["Pass"]."')";
                echo "<br>$query<br> ";
                if(!mysqli_query($conex,$query)){
                    echo "Error: ".$conex->erno;
                    
                }else{
                    echo "Registro ingresado";
                }
                $conex->close;
            break;
            case 2:
                
            break;
        }
?>
</body>
</html>