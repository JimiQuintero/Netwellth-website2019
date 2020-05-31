<?php
$selectedOptions = $_POST['selectedOptions'];
$selectedOptions = implode(" ",$selectedOptions);
$email = $_POST['email'];
$message = $_POST['message'];
$to = "info@netwellthbenefits.com,rosopenaranda@gmail.com";




    if(isset($_POST['selectedOptions'])){
        $message = '
        <!DOCTYPE html>
        <html>
        <head>
         <title></title>
        </head>
        <body>
        '.$selectedOptions.'
        <br>
        <br>
        '.$message.'
        </body>
        </html>';

        //para el envío en formato HTML
        $headers  = "MIME-Version: 1.0\r\n";
        $headers .= "Content-type: text/html; charset=iso-8859-1\r\n";

        //dirección del remitente
        $headers .= "From: Netwellthbenefits <".$_POST['email'].">\r\n";

        //Una Dirección de respuesta, si queremos que sea distinta que la del remitente
        $headers .= "Reply-To: ".$_POST['email']."\r\n";

        //Direcciones que recibián copia
        //$headers .= "Cc: servicioalcliente@lavaya.com.co\r\n";

        //direcciones que recibirán copia oculta
        //$headers .= "Bcc: ejemplo3@yahoo.com\r\n";

      if(mail($to ,"Netwellthbenefits",$message,$headers)){
    		echo json_encode(["success"=>true]);
    	}else{
    		echo json_encode(["success"=>false]);
    	}
    }
?>
     