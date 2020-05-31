<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="css/qrconf.css">
  <title>QR-Zone!</title>

<?php 
  $powerby='img/logo-july.png';
  switch ($_GET['id']) {
    case '1':
      $empresa = "PETE MOORE CHEVROLET";
      $img = "img/qr-zone-logo_pete-moore.png";    
      break;

    case '2':
      $empresa = "PRESTON HOOD CHEVROLET";
      $img = "img/qr-zone-logo_preston-hood.png";
      break;

    case '3':
    $empresa = "RELIABLE CADILLAC";
    $img = "img/qr-zone-logo_reliable.png";
    break; 
    
    case '4':
      $empresa = "KING ACURA";
      $img = "img/qr-zone-logo_king-acura.png";
      break;
    
    case '5':
    $empresa = "ADAMSON FORD";
    $img = "img/qr-zone-logoAsset_adamson-ford.png";
    $powerby='img/logo-vestwell.png';
    break;

    case '6':
      $empresa = "FIBERBUILT UMBRELLAS";
      $img = "img/qr-zone-logo_fiberbuilt.png";
      break;

    case '7':
    $empresa = "HARBOR NISSAN";
    $img = "img/qr-zone-logo_harbor-nissan.png";
    break;

    default:
    break;
  }
?>


</head>

<body>
  <!--header-->
  <header class="shadow-sm">
    <div class="container">
      <div class="row pt-3 pb-1">
        <div class="col text-center">
          <img id="logo" src="img/logoMagenta.png" alt="logo">
        </div>
      </div>
    </div>
  </header>
  <div class="container">
    <div class="row">
      <div class="col">
        <div class="d-flex flex-row justify-content-center text-center align-items-center content">
          <h1><?php echo $empresa; ?></h1>
        </div>
      </div>
    </div>
    <div class="row mt-5">
      <div class="col">
        <div class="d-flex flex-row justify-content-center align-items-center">
          <img src="<?php echo $img; ?>" alt="<?php echo $empresa;?>" class="logo">
          <p class="congr">
            Congratulations <br>
            and Welcome!
          </p>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col">
        <a class="text-decoration-none" href="https://401k.julyservices.com/enrollinplan.aspx" target="_blank" >
          <div class="d-flex bg-blue pt-3 flex-row justify-content-around align-items-center url-content">
              <img src="img/image-button2.png" alt="calculator">
              <div class="texto">
                <p>
                  401(k) <br>
                  <strong>Registration</strong>
                </p>
                <p class=" float-right pow">Powered by <img src=<?php echo $powerby;?> alt="invive"></p>
              </div>
            </div>
        </a>
      </div>
    </div>
    <div class="row">
      <div class="col">
        <a href="https://login.invibed.com/netwellth" class="text-decoration-none" target="_blank" >
            <div class="d-flex bg-magenta pt-3 flex-row justify-content-around align-items-center url-content">
                <img src="img/image-button1.png" alt="calculator">
                <div class="texto">
                  <p>
                    Your Financial <br>
                    <strong>Dashboard</strong>
                  </p>
                  <p class=" float-right pow">Powered by <img src="img/logo_invibed.png" alt="invive"></p>
                </div>
              </div>
        </a>
      </div>
    </div>
    <div class="row">
      <div class="col">
       <a class="text-decoration-none" href="https://netwellthbenefits.com/wellthletter.php" target="_blank" >
       <div class="d-flex bg-gold pt-3 pb-3 flex-row justify-content-around align-items-center url-content">
          <img src="img/image-button3.png" alt="calculator">
          <div class="texto">
            <p>
              Wellth<strong>Letters</strong><sup>SM</sup> <br>
              <strong>Library</strong>
            </p>
          </div>
        </div>
      </a>
      </div>
    </div>
    <div class="row">
      <div class="col">
       <a class="text-decoration-none" href="https://zoom.us/download" target="_blank" >

        <div class="d-flex bg-white flex-row justify-content-around align-items-center url-content">
            <img src="img/image-button4.png" alt="calculator">
            <div class="zoom">
              <p>
                zoom
              </p>
            </div>
        </div>
      </a>  
      </div>
    </div>
    <div class="row">
      <div class="col">
        <br>
        <hr>
        <div class="d-flex flex-row justify-content-around align-items-center content">
          <img src="img/image-news_and_press.png" alt="calculator">
          <p class="news">News and <br>
            Press</p>
        </div>
        <hr>
      </div>
    </div>
    <div class="row">
      <div class="col">
        <div class="d-flex flex-row justify-content-around align-items-center content">
         
          <img src="img/fool-icon.png" alt="calculator">
          <p class="news-text">
              <a href="https://netwellthbenefits.com/signatureNews.php?id=2" target="_blank"> How Does Your 401(k) Compare to The Average?
              </a>  
          </p>
        
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col">
        <div class="d-flex flex-row justify-content-around align-items-center content">
          <img src="img/wsj-icon.png" alt="calculator">
          <p class="news-text">
            <a href="https://netwellthbenefits.com/signatureNews.php?id=1" target="_blank" rel="noopener noreferrer">
              The Deception Behind Those
              In-Network Health Discounts
            </a>
          </p>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col">
        <div class="d-flex flex-row justify-content-around align-items-center content">
          <img src="img/cnbc-icon.png" alt="calculator">
          <p class="news-text">
            <a href="https://netwellthbenefits.com/signatureNews.php?id=3" target="_blank" rel="noopener noreferrer">
              What to do if you have a crummy
              401(k) plan
            </a>
          </p>
        </div>
        <hr>
      </div>
    </div>
    <div class="row">
      <div class="col text-center">
        <img id="amirPng" src="img/amir.png" alt="Amir-logo">
        <p class="text-center mb-0 texto" id="cargo"><strong>Amir Shah</strong>, ChFC</p>
        <p class="text-center mt-0 texto" id="wellthCoach">
          Wellth<strong>Coach</strong><sup>SM</sup>
        </p>
      </div>
    </div>
    <div class="row">
      <div class="col text-center">
        <div class=" d-flex flex-row justify-content-around align-items-center content conect">
          <strong>Connect with me | Schedule a Call</strong>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col text-center">
        <div class=" d-flex flex-row justify-content-around align-items-center content">
          <a href="https://hangouts.google.com/chat/person/110392969972544856706" target="_blank">
            <img class="social2" src="img/hangouts2.png" alt="hangouts">
          </a>
          <a href="https://www.linkedin.com/in/amirshah-chfc/" target="_blank">
            <img class="social2" src="img/linkedin.png" alt="linkedin">
          </a>
          <a href="http://m.me/amirshah83" target="_blank">
            <img class="social2" src="img/messenger2.png" alt="messenger">
          </a>
          <a href="https://www.calendly.com/netwellth/gameon" target="_blank">
            <img class="social2" src="img/calendly2.png" alt="calendly">
          </a>
        </div>
      </div>
    </div>
    <div class="row mt-5">
    </div>
    <div class="row">
      <div class="col">
        <div class="d-flex flex-row justify-content-left aling-intems-center content">
          <img class="icon" src="img/w.png" alt="">
          <p class="contact"><a href="/" target="_blank">
              www.NetWellth.us</a>
          </p>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col">
        <div class="d-flex flex-row justify-content-start aling-intems-center content">
          <a href="https://www.netwellthbenefits.com/learnmore.php" target="_blank">
            <img class="learn" src="img/learn.png" alt="Learn More">
          </a>
        </div>
      </div>
    </div>
    <div class="row mt-4 mb-4">
      <div class="col">
        <div class="d-flex flex-row justify-content-center aling-intems-center content">
          <img class="aling" src="img/AlingInterest.png" alt="">
        </div>
      </div>
    </div>
    <div class="row  mb-5">
      <div class="col">
        <div class="d-flex flex-row justify-content-center aling-intems-center content">
          
          <a href="file/amirvcard.vcard" download>
            <img class="addme" src="img/addme.png" alt="addme">
          </a>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col text-center">
        <div class=" d-flex flex-row justify-content-around align-items-center content">
          <a href="https://m.facebook.com/netwellth/?business_id=345942055945572&ref=bookmarks" target="_blank">
            <img class="social2" src="img/facebook.png" alt="Facebook">
          </a>
          <a href="https://www.linkedin.com/in/amirshah-chfc/" target="_blank">
            <img class="social2" src="img/linkedin.png" alt="linkedin">
          </a>
        </div>
      </div>
    </div>
  </div>
<footer class="mt-4">
<section class="magenta-line">
</section>
<div class="container"> 
      <div class="row">
        <div class="col text-center ">
          <div class=" d-flex flex-row  align-items-center content">
            
            <p class="p-3 mt-2 text-center">
              © 2019 NetWellth Benefits, LLC. All
                Rights Reserved. NetWellth marks
                used herein are trademarks of
                NetWellth, LLC. Other product and
                company names mentioned herein
                are the property of their respective
                owners.
              </p>
              </div>
        </div>
      </div>
</div>
</footer>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
  </script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
  </script>
</body>

</html>