<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta property="og:title" content="NetWellth, Employee Benefits OPTIMIZED 401(k) and Self-Funded Healthcare OPTIMIZED for Cost and Service Efficiency" />
    <meta property=”og:description” content="NetWellth, Employee Benefits OPTIMIZED 401(k) and Self-Funded Healthcare OPTIMIZED for Cost and Service Efficiency." />

    <!-- Bootstrap CSS -->
    <?php include('./sections/linkscontac.html'); ?> 
    <title>NetWellth Employee Benefits OPTIMIZED</title>
    <link rel="icon" type="image/x-icon" href="img/favicon.png">
  </head>
  <body>
    
      <?php
        $logo='./img/logoBlack.png';
        include('./sections/navbar.html'); 
        include('./sections/drawer.html');
      ?>  
    <main>  
      <div class="container">
        <div class="row">
          <div class="col-12">
          <h1>Contact</h1>
          <hr>
          </div>
        </div>
        <div class="row">
          <div class="col text-lg-left">
            <div class="schedule d-none d-md-block">
              <strong>Schedule</strong> <br>  &nbsp; a <u>Meeting!</u>
            </div>
            <p class="p1">
            Rather than earn commissions for product sales, Net<strong>Wellth</strong>
            empowers clients by making their objectives, the measure of 
            our compensation... 
            </p>
            
            <p class="hashtag">
            <strong>We only benefit when employees benefit!</strong>
            <br><span class="nomore">#nomorecommissions</span>  
            </p>
            <button type="button" class="btn url-content" data-toggle="modal" data-target="#freeLunch">
              Refer This to Your Employer  
            </button>
          </div>
          <div class="col-12 text-center d-block d-md-none">
            <img class="jason" src="img/jasonmobil.png" alt="wellthCoach">
          </div>
            <div class="col calendario text-center ">
                <!-- Calendly inline widget begin -->
                  <div class="calendly-inline-widget "
                    data-url="https://calendly.com/netwellth/meetnw?hide_event_type_details=1" 
                    style="min-width:350px;height:500px;">
                  </div>
                  <script type="text/javascript" src="https://assets.calendly.com/assets/external/widget.js"></script>
                <!-- Calendly inline widget end -->
              </div>
          
          <div class="col d-none d-md-block text-left">
            <img class="jason" src="img/jason.png" alt="wellthCoach">
          </div>
        </div>
      </div>
    </main>
    <section class="numbers">
      <div class="container">
        <div class="row">
          <div class="col">
            <div class="d-md-flex flex-row justify-content-center">
              <img src="img/e.png" alt="">
              <span>info@NetWellth.us</span>
            </div>
          </div>
        </div>
      </div>
    </section>
    <?php 
      include('./sections/letter.html'); 
      include('./sections/footer.html');
      include('./sections/modals/freeLunch.html');
    ?>
    <!-- Optional JavaScript -->
    <?php include('./sections/scripts.html'); ?> 
  </body>
</html>