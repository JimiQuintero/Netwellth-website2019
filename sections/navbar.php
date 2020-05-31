<?php 
error_reporting(E_ALL); ini_set('display_errors', '1');

  function navbar($logo){
    return
      "<div id='menu2' class='navbar navbar-blue sticky-top'> \n
          <ul class='nav navbar-nav'> \n
            <li class='nav-item'> \n
              <!--  <img id='logo' class='logoIni' src='./img/logowithe.png' alt='logo' /> --> \n
              <div> \n
                <a href='index.php'>\n
                  <img id='logo' src={$logo}   alt='NetwellthLogo' /> \n
                </a> \n
              </div> \n
            </li> \n
          </ul> \n
          <span class='sr-only'>Toggle drawer</span> \n
          <div class='burger text-center btn'> \n
            <div class='burger-top'></div> \n
            <div class='burger-midel'></div> \n
            <div class='burger-bottom'></div> \n
          </div> \n
        </div>";
    
  }
?>