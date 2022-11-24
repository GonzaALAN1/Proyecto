<?php
include 'cn.php';
$nombre = $_POST["nombre"];
$apellidos = $_POST["apellidos"];
$correo = $_POST["correo"];
$usuario = $_POST["usuario"];
$clave = $_POST["clave"];
$telefono = $_POST["telefono"];
$comentario = $_POST["comentario"];

$insertar = "INSERT INTO usuario(nombre,apellidos , correo,clave, usuario, telefono,comentario)
VALUES ('$nombre','$apellidos','$correo', '$clave','$usuario', '$telefono' , '$comentario')";
$verficar_usuario =mysqli_query($conexion, "SELECT * FROM usuario WHERE usuario ='$usuario'");
if(mysqli_num_rows ($verficar_usuario) > 0){
 echo '<script languaje = "javascript">
alert("el usuario ya existe");
window.history.go(-1);
</script>';
exit;
}

$verficar_correo = mysqli_query($conexion," SELECT * FROM usuario  WHERE  correo ='$correo'");
if(mysqli_num_rows ($verficar_correo) > 0){
    echo '<script languaje = "javascript">
    alert("el correo ya existe");
    window.history.go(-1);
    </script>';
    exit;
    }

if(isset($_POST['boton']))
{
    if(empty($nombre))
    {
        echo '<script languaje="javascript">alert("Agrega tu nombre");
        window.history.go(-1);
        </script>';
        exit; //Para que no se guarde los datos
    }
}
if(isset($_POST['boton'])){
    if(empty($apellidos)){
        echo '<script languaje="javascript">alert("Agrega tu Apellidos");
    window.history.go(-1);
    </script>';
    exit; //Para que no se guarde los datos
    }
}
if(isset($_POST['boton'])){
    if(empty($correo)){
        echo '<script languaje="javascript">alert("Agrega tu correo");
    window.history.go(-1);
    </script>';
    exit; //Para que no se guarde los datos
    }
}
if(isset($_POST['boton'])){
    if(empty($usuario)){
        echo '<script languaje="javascript">alert("Agrega tu usuario");
    window.history.go(-1);
    </script>';
    exit; //Para que no se guarde los datos
    }
}
if(isset($_POST['boton'])){
    if(empty($clave)){
        echo '<script languaje="javascript">alert("Agrega tu clave");
    window.history.go(-1);
    </script>';
    exit; //Para que no se guarde los datos
    }
}
if(isset($_POST['boton'])){
    if(empty($telefono)){
        echo '<script languaje="javascript">alert("Agrega tu telefono");
    window.history.go(-1);
    </script>';
    exit; //Para que no se guarde los datos
    }
}
//validacion longitud
if(isset($_POST['boton'])){
    if(strlen($nombre >10)){
        echo '<script languaje="javascript">
    alert("el nombre es demasiado largo");
    window.history.go(-1);
    </script>';
    exit; //Para que no se guarde los datos
    }
}
if(isset($_POST['boton'])){
    if(strlen($apellidos >100)){
        echo '<script languaje="javascript">
    alert("los apellidos es demasiado largo");
    window.history.go(-1);
    </script>';
    exit; //Para que no se guarde los datos
    }   
}
if(isset($_POST['boton'])){
    if(strlen($correo>100)){
        echo '<script languaje="javascript">
    alert("el correo es demasiado largo");
    window.history.go(-1);
    </script>';
    exit; //Para que no se guarde los datos
    }   
}
if(isset($_POST['boton'])){
    if(strlen($usuario >20)){
        echo '<script languaje="javascript">
    alert("el usuario es demasiado largo");
    window.history.go(-1);
    </script>';
    exit; //Para que no se guarde los datos
    } 
}
if(isset($_POST['boton'])){
    if(strlen($clave >10)){
        echo '<script languaje="javascript">
    alert("La clave  es demasiado largo");
    window.history.go(-1);
    </script>';
    exit; //Para que no se guarde los datos
    } 
}   
if(isset($_POST['boton'])){
    if(strlen($telefono)>10){
        echo '<script languaje="javascript">
    alert("el telefono  es demasiado largo");
    window.history.go(-1);
    </script>';
    exit; //Para que no se guarde los datos
    } 
}     


$resultado = mysqli_query($conexion, $insertar);
if($resultado){
    echo '<script languaje="javascript">
    alert("Usuario registrado exitosamente");
    window.history.go(-1);
    </script>';
    exit; //Para que no se guarde los datos
}
else if(!$resultado){
    echo '<script languaje="javascript">
    alert("Error al registrar el usuario");
    window.history.go(-1);
    </script>';
    exit; //Para que no se guarde los datos
}
 mysqli_close ($conexion);