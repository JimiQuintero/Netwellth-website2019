<?php error_reporting(E_ALL); ini_set('display_errors', '1'); ?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta property="og:title" content="NetWellth, Employee Benefits OPTIMIZED 401(k) and Self-Funded Healthcare OPTIMIZED for Cost and Service Efficiency" />
    <meta property=”og:description” content="NetWellth, Employee Benefits OPTIMIZED 401(k) and Self-Funded Healthcare OPTIMIZED for Cost and Service Efficiency." />

    <!-- Bootstrap CSS -->
    <?php include('./sections/linksNews.html'); ?>
    <title>NetWellth Employee Benefits OPTIMIZED</title>
    <link rel="icon" type="image/x-icon" href="img/favicon.png">
    
  </head>

  <body>

  <?php

        $logo='./img/logoBlack.png';
        include('./sections/navbar.html'); 
        include('./sections/drawer.html'); 
        if($_GET["id"]==1){
          include('./sections/signatureNews1.html'); 
        }else if($_GET["id"]==2){
          include('./sections/signatureNews2.html'); 
        }else if($_GET["id"]==3){
          include('./sections/signatureNews3.html'); 
        }else{
          header('Location: index.html');
        }
        include('./sections/footer.html');
      ?> 
  
    <!-- Optional JavaScript -->  
    <?php include('./sections/scripts.html'); ?> 
  </body>
</html>