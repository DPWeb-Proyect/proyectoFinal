<?php
session_start();
include("./Conex.php");          
            if(!isset($_SESSION['User']) || (trim($_SESSION['User']) == '')){
            $x=0;            
                                 
            }else{   
            $user_check=$_SESSION["User"];
            $query="SELECT NOM_USER from users where CORREO_USER = '$user_check' ";
            $result=mysqli_query($conex,$query);        
	        $rows=mysqli_fetch_array($result);
            $u=$rows['NOM_USER'];
            $x=1;                                                    
            }                      
            $conex->close;

?>