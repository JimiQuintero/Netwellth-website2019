<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <?php include('./sections/linksempl.html'); ?>
    <link rel="stylesheet" href="./css/learnmore.css" /> 
    <title>NetWellth Employee Benefits OPTIMIZED</title>
    <link rel="icon" type="image/x-icon" href="img/favicon.png">
    
  </head>

  <body>

  <?php
        $logo='./img/logoBlack.png';
        include('./sections/navbar.html'); 
        include('./sections/drawer.html'); 
        include('./sections/learnmore/header2.html');              
        include('./sections/learnmore/accordion.php');
        include('./sections/learnmore/shedule.html');        
        include('./sections/letter.html');
        include('./sections/footer.html'); 
      ?> 
  
    <!-- Optional JavaScript -->  
    <?php include('./sections/scripts.html'); ?> 
  </body>
</html>