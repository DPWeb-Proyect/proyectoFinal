
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
	include("./Conex.php");
	$mycorreo="DepWeb@mail.utec";
	$pass="aDMIN123";
    $query="SELECT * FROM users WHERE CORREO_USER='".$mycorreo."' and PASS='".$pass."'";
	$result=mysqli_query($conex,$query);	
	$count=mysqli_num_rows($result);
    echo "<p>datos </p>".$count;
    $rows=mysqli_fetch_array($result);
    echo "Usuario".$rows['NOM_USER'];
    $myusername=$rows['NOM_USER'];
    echo $myusername;
    if ($count==1){       
        $rows=mysqli_fetch_array($result);		              
        $myusername=$rows['NOM_USER'];
        echo $myusername;
        header("Location:index.php");	
        exit;	
    }else{
		$error="Your Login Name or Password is invalid";
		
    }     
    $conex->close; 
    echo ($error);  
    
?>


</body>
</html>