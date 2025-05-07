<?php 


/* if(isset($_POST['enviar'])){
    if(!empty($_POST['name']) &&  !empty($_POST['email']) && !empty($_POST['asunto']) && !empty($_POST['mensaje'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $asunto = $_POST['asunto'];
        $mensaje = $_POST['mensaje'];
        $header = "From: kemen95@hotmail.com" . "\r\n";
        $header .= "Reply-To: kemen95@hotmail.com" . "\r\n";
        $header.= "X-Mailer: PHP/". phpversion();
        $email = @mail($email, $asunto,$mensaje,$header);
        if ($email) {
           echo "<h4>el mensaje se envio correctamente  </h4>";
        }
    }
} */


/* $destinatario = 'kevindeveloper95@hotmail.com';

$name = $_POST['name'];
$email = $_POST['email'];
$mensaje = $_POST['message'];


$header = "enviado desde el portafolio de Kevin";
$mensajecompleto = $mensaje . "\nAtentamente:" .  $name;

mail($destinatario, $mensaje,$mensajecompleto,$header);



echo "<script>
const alerta = document.querySelector('#alert')
alerta.addEventListener('submit', aplicar)



function aplicar(){
    Swal.fire(
        'Mensaje enviado!',
        'You clicked the button!',
        'success'
        
      )
      setTimeout(function(){
        window.location.href = 'index.php'; },4000);
   
     

}
 

  </script>";
  
   */


