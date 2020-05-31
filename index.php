<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta property="og:title" content="NetWellth Employee Benefits OPTIMIZED" />
    <meta property=”og:description” content="To optimize employee benefits means to expose and eliminate hidden fees with transparent ROBO - Solutions. Your local WellthCoach will show you how." />
    <meta name="description" content="To optimize employee benefits means to expose and eliminate hidden fees with transparent ROBO - Solutions. Your local WellthCoach will show you how."/>
    <!-- Bootstrap CSS -->
    <?php include('./sections/links.html'); ?> 
    <title>NetWellth Employee Benefits OPTIMIZED</title>
    <link rel="shortcut icon"  type="image/png" href="img/NW192x192_magenta.png" sizes="192x192" />
    <link rel="shortcut icon"  type="image/png" href="img/employee32x32px.png" sizes="32x32">
    <link rel="apple-touch-icon-precomposed" href="img/NW180x180_magenta.png" />
    <!--DUCKS-->
    
    <?php 
      if(count($_POST)!=0){

        $file = fopen("file/archivo.txt", "a");
        fwrite($file, "*********************************" . PHP_EOL);
        fwrite($file, PHP_EOL);        
        fwrite($file, "Name: ". $_POST["name"] . PHP_EOL);
        fwrite($file, "Last name: ". $_POST["lastName"] . PHP_EOL);
        fwrite($file, "Company Name: ". $_POST["companyName"] . PHP_EOL);
        fwrite($file, "Boss Name: ". $_POST["BossName"] . PHP_EOL);
        fwrite($file, "Email: ".$_POST["InputEmail"] . PHP_EOL);
        fwrite($file, "Phone: ".$_POST["InputPhone"] . PHP_EOL);
        fwrite($file, PHP_EOL);
        fwrite($file, "*********************************" . PHP_EOL);        
        fclose($file);

        $subject = "Subscribed Free Lunch";
        $email = "info@netwellthbenefits.com";
        $message = "Netwellth Customer";
        $to = $_POST["InputEmail"];

        $headers  = "MIME-Version: 1.0\r\n";
        $headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
        //dirección del remitente
        $headers .= "From: Netwellthbenefits <".$email.">\r\n";

        //Una Dirección de respuesta, si queremos que sea distinta que la del remitente
        $headers .= "Reply-To: ".$email."\r\n";
        $headers .= "Bcc: info@netwellthbenefits.com,jose@netwellthbenefits.com,rosopenaranda@gmail.com\r\n";

        $message = '
        <!DOCTYPE html>
        <html>
        <head>
         <title></title>
        </head>
        <body>

        <table cellspacing="0" cellpadding="0" style=" width:100%; 
				background-color: #ebebeb; font-family:Roboto, Verdana">
    
		<tr>
			<td align="center">
				<table cellspacing="0" cellpadding="0" style=" width:600px; 
				 font-family:Roboto, Verdana;">
					<tr>
						<td align="center">
							<a href="https://netwellthbenefits.com/"  style="text-decoration:none;">
								<img src="https://netwellthbenefits.com/img/mail-header.png" width="600" 
								style="margin-bottom: 15px; margin-top: 40px;" alt="header">
							</a>
						</td>
					</tr>
					<tr>
						<td align="center">
							<table width="600" cellspacing="0" cellpadding="0"> 
								<tr>
									<td>
										<p style="font-family:Roboto, Verdana; font-size:36px; margin-bottom: 0px;
										margin-left:50px; font-weight: 600; margin-right: 50px;width: 500px;  color: #333366">
											Hi '.$_POST["name"].',
											<br>
											Another great decision
										</p>
										<p style="font-family:Roboto, Verdana; font-size:34px; margin-top: 0px;
										margin-left:50px; font-weight: 300; margin-right: 50px;  color: #333366">
										on taking a positive step for
										your wealth and wellness.
										</p>
										<p style="font-family:Roboto, Verdana; font-size:40px; letter-spacing: 0.075em;
										margin-left:20px; font-weight: 600; color: #ED1868; text-align: center">
											Congrats!
										</p>
			
									</td>
								</tr>
							</table>
						</td>
					</tr>
					<tr>
						<td align="center">
							<table width="600" cellspacing="0" cellpadding="0" 
							style="background-color:#ffffff; color:#777;
							-webkit-border-bottom-right-radius: 100px;
								-moz-border-radius-bottomright: 100px;
								border-bottom-right-radius: 100px;
							">
								<tr>
									<td>
										
										<p style="font-family:Roboto, Verdana; font-size:16px; 
										margin-left:20px; margin-right: 20px; font-weight: 400; line-height: 22px;">
											
											Signing up for the bi-weekly WellthLetter means you&#39;re someone who
											enjoys self development, so we&#39;ll send you information and topics that&#39;ll
											assist you on your journey. We&#39;re excited to meet you!
											</p> 
											<p style="font-family:Roboto, Verdana; font-size:16px; 
											margin-left:20px; margin-right: 20px; font-weight: 400; line-height: 22px;">
												Please confirm your information is correct (reply to this email if it is not):
											</p>
												<ul style="line-height: 32px">
											<li><strong>Name:</strong> '. $_POST['name'].'</li>
											<li><strong>Last name:</strong> '. $_POST['lastName'].'</li>
											<li><strong>Company Name:</strong> '. $_POST['companyName'].'</li>
											<li><strong>Boss Name:</strong> '. $_POST['BossName'].'</li>
											<li><strong>Email:</strong> '.$_POST['InputEmail'].'</li>
											<li><strong>Phone:</strong> '.$_POST['InputPhone'].'</li>
										</ul>
										
										 <p style="font-family:Roboto, Verdana; font-size:16px; 
										 margin-left:20px; margin-right: 20px; font-weight: 400; line-height: 22px;">
											We&#39;re here  to help you <a style="text-decoration: none" href="https://netwellthbenefits.com/">live your best life</a> so if you ever have any
											questions/feedback you can always reply to any of our email messages or
											send an email to wellthcoach@netwellth.us.
										 
											<p style="font-family:Roboto, Verdana; font-size:16px; 
											margin-left:20px; margin-right: 20px; font-weight: 400; line-height: 22px;">
											Enjoy the WellthLetter and don&#39;t keep us a secret! Here&#39;s to your wealth
											and wellness.
											</p>

										 <p style="font-family:Roboto, Verdana; font-size:16px; 
										 margin-left:20px; margin-right: 20px; font-weight: 400; line-height: 22px;">
										 The WellthCoaching Team.
										 </p>
										<p style="text-align: center; margin-top: 40px;">
											<img src="https://netwellthbenefits.com/img/message.png" width="562" alt="message">
										</p>
										 <p style="font-family:Roboto, Verdana; font-size:16px; 
										 margin-top: 50px; margin-bottom: 20px; text-align: center;">
											<a href="" style="text-decoration: none;">
												<img width="250" src="https://netwellthbenefits.com/img/refer.png" alt="Refer us to your employer">
											</a> 
										</p>
									</td>
								</tr>
							</table>
						</td>
					</tr>
					<tr>
						<td align="center">
							<p style="font-family:Roboto, Verdana; font-size:31px; margin-bottom: 0px;
							margin-left:50px; font-weight: 300; margin-right: 50px;width: 500px;  color: #333366">
								<b style="font-weight: 600">#WHY</b>PAY<b style="font-weight: 600">COMMISSIONS</b>
							</p>
						</td>
					</tr>
					<tr>
						<td align="center">
							<table width="600" cellspacing="0" cellpadding="0" 
								style="color:#777; margin-top: 30px;">
							<tr>
								<td align="center" width="200">
									<img src="https://netwellthbenefits.com/img/logoMagenta.png" alt="Logo Netwellthbenefits"
									style="margin-bottom: 20px;" width="100">
								</td>
								<td align="center" width="200">
										<a href="https://netwellthbenefits.com/" 
										style="text-decoration:none; color: #555555;">www.NetWellth.US </a>
									</td>
								<td align="center" width="200">
									<table width="200" cellspacing="0" cellpadding="0" 
									 style=" color:#555555;">
										<tr>
											<td align="center" colspan="2">
												<p style="font-size:12px; margin-right: 37px;">Connect with us</p>
											</td>
										</tr>
										<tr>
											<td align="center">
												<a href="https://facebook.com/netwellth/?business_id=345942055945572&ref=bookmarks" style="text-decoration:none;">
													<img src="https://netwellthbenefits.com/img/facebook.png" width="40" alt="facebook">
												</a>
											</td>
											<td align="left">
												<a href="https://netwellthbenefits.com/" style="text-decoration:none;">
													<img src="https://netwellthbenefits.com/img/linkedin.png" width="40" alt="linkedin">
												</a>
											</td>
										</tr> 
									</table>
									<br>
								</td>
							</tr>
							</table>    
						</td>
					</tr>
				</table>
			</td>
		</tr>
    <tr>
      <td style="height: 20px">

      </td>
    </tr>
  </table>
        </body>
        </html>';

        if(mail($to ,"Netwellthbenefits",$message,$headers)){
          echo json_encode(["success"=>true]);
        }else{
          echo json_encode(["success"=>false]);
        }

      }
    ?>

  </head>
  <body>
      <?php
        $logo='./img/logoMagenta.png';
        $index=true;
        include('./sections/navbar.html'); 
        include('./sections/drawer.html'); 
        include('./sections/bannerIndex3.html');				
				include('./sections/cards4.html');
				include('./sections/invest.html');
				include('./sections/advisor.html');
				include('./sections/employee.html');
				include('./sections/employer.html');
        include('./sections/mana.html');
        include('./sections/results.html');
				include('./sections/benefits.html');
				include('./sections/contactlocal.html');
				include('./sections/coach.html');
        include('./sections/footer.html');
        include('./sections/modals/freeLunch.html');
      ?>  
    <!-- Optional JavaScript -->
    <?php include('./sections/scripts.html'); ?> 
    <script src="js/menu-index.js"></script>
  </body>
</html>