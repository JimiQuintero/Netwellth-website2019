<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta property="og:title" content="NetWellth Employee Benefits OPTIMIZED"/>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
      integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
		<link rel="stylesheet" href="./css/burger.css" />
		<link href="css/sidebar.css" rel="stylesheet">
		<link href="css/footer.css" rel="stylesheet">
    <link rel="stylesheet" href="./css/managerStyles.css" /> 
    <title>NetWellth Employee Benefits OPTIMIZED</title>
    <link rel="icon" type="image/x-icon" href="img/favicon.png">
    
  </head>

  <body>

  <?php
      include('./sections/manager/manageForms.php'); 
      $logo='./img/logoBlack.png';
        include('./sections/navbar.html'); 
        include('./sections/drawer.html'); 
        include('./sections/manager/header.html'); 
        include('./sections/manager/formOne.html'); 

        include('./sections/manager/formTwo.html');
//        include('./sections/footer.html'); 
      ?> 
  
    <!-- Optional JavaScript -->  
    <?php include('./sections/scripts.html'); ?> 
  </body>
</html>