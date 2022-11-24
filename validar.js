function validar(){
    var nombre,apellidos,correo,usuario,clave,telefono, ercorreo,ernombre,erapellidos,erusuario,erclave;
    nombre = document.getElementById("nombre").value;
    apellidos=document.getElementById("apellidos").value;
    correo=document.getElementById("correo").value;
    usuario =document.getElementById("usuario").value;
    clave= document.getElementById("clave").value;
    telefono =document.getElementById("telefono").value;}
    ercorreo = /\W+@[A-Za-z]+\.[a-z]{2,3} /;
     erusuario = /W[A-Za-z0-9_-]{5,20}$/;
     ernombre = /([A-Z]+[a-z])\w+/;
     erapellidos = /^[A-Za-z]+[A-Za-z]+$/;
     erclave = /^(?=.*[a-z])(?=.[A-Z])(?=.*\d)(?=.*[$@$!%?&])[A-Za-z\d$@$!%?&]|[^]{5,10}\w+/;

    if(nombre==="" || apellidos==="" || correo ==="" || usuario==="" || clave==="" ||telefono===""){
        alert ("todos los campos son obligatorios");
        return false; 
     }
     else if(nombre.leght >10){
        alert("el nombre es demasiado largo")
        return false
     }
     if(!ercorreo.test(correo)){
        alert("el formato de  correo es incorrecto")
     }
     if(!erusuario.test(usuario)){
        alert("el formato de  usuario es incorrecto")
     }
     if(!ernombre.test(nombre)){
        alert("el formato de  nombre es incorrecto")
     }
     if(!erapellidos.test(apellidos)){
        alert("el formato de  apellidos  es incorrecto")
     }
     if(!erclave.test(clave)){
        alert("el formato de  clave  es incorrecto")
     }
   if(nombre ===""){
    alert ("Favor de ingresar su nombre  SU NOMBRE ")
    return false
    }
    if(apellidos ===""){
        alert ("Favor de ingresar su nombre  SU apellido ")
        return false
    }
    if(correo ===""){
        alert ("Favor de ingresar su nombre  SU CORREO ")
        return false
    }
    if(usuario ===""){
        alert ("Favor de ingresar su nombre  SU USUARIO ")
        return false
    }
    if(clave ===""){
        alert ("Favor de ingresar su nombre  SU clave ")
        return false
    }
    if(telefono ===""){
        alert ("Favor de ingresar su nombre  SU telefono ")
        return false
    }