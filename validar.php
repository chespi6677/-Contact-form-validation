<?php
$name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$message=$_POST['message'];   

//validamos si los datos llegan vacios
if($name==""|| $email==""||$phone==""||$message==""){
     $error=true;
     $msj="Fields cannot be empty";
     $to_show=true;
    header("Location: index.php?Error=$error&ToShow=$to_show&Message=$msj");
    exit();    
}
/*variables del nombre */
$strName=$name;
//validamos si el nombre es valido por la expresion regular de solo letras y espacios
$patternName='/^[a-zA-ZáéíóúÁÉÍÓÚ\s]+$/i';
$resultadoName= preg_match($patternName,$strName);
$erroresName=0;
$validoName=1;
/*variables del email  */
$strEmail=$email;
//validamos si el email es valido por la expresion regular de solo letras y espacios
$patternEmail='/^[-\w.%+]{1,64}@(?:[A-Z0-9-]{1,63}\.){1,125}[A-Z]{2,63}$/i';
$resultadoEmail= preg_match($patternEmail,$strEmail);
$erroresEmail=0;
$validoEmail=1;
/*variables del telefono */
$strPhone=$phone;
//validamos si el phone es valido por la expresion regular de solo letras y espacios
$patternPhone='/^(\([0-9]{3}\)\s*|[0-9]{3}\-)[0-9]{3}-[0-9]{4}$/i';
$resultadoPhone=preg_match($patternPhone,$strPhone);
$erroresPhone=0;
$validoPhone=1;
/*variables del mensaje */
$strMessage = $message;
//validamos si el mensaje es valido por la expresion regular de solo letras y espacios
$patternMessage = '/^[a-zA-ZáéíóúÁÉÍÓÚ\s]+$/i';
$resultadoMessage= preg_match($patternMessage, $strMessage);
$erroresMessage=0;
$validoMessage=1;



if($validoMessage==$resultadoMessage && $validoName==$resultadoName && $validoEmail==$resultadoEmail && $validoPhone==$resultadoPhone){
    $error=$resultadoMessage;
    $to_show=false;
    $messagesValido= "Message sent successfully";
    header("Location: index.php?Error=$error&ToShow=$to_show&Message=$messagesValido");
    
}
if($erroresMessage==$resultadoMessage || $erroresName==$resultadoName || $erroresEmail==$resultadoEmail || $erroresPhone==$resultadoPhone){
    $error=$resultadoMessage;
    $to_show=true;
    $messages= "Correct the invalid fields.";
    header("Location: index.php?Error=$error&ToShow=$to_show&Message=$messages");
    
   
}






?> 