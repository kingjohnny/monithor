<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Monithor - uptime service monithor</title>
  <meta name="description" content="Uptime service monithor!">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="/assets/css/warpaint.css">
  <link rel="stylesheet" href="/assets/css/main.css">
  <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css">
  <link rel="icon" type="image/png" href="favicon.png"/>

</head>
<body>
  <header class="hero">
    <div class="container">
      <div class="row center-center">
        <div class="column-4">
          <img src="assets/img/monithor-logo.svg" alt="logo">
          <div>
          </div>
        </div>
      </header>
      <!-- <div class="row loading-icon sk-three-bounce">
        <div class="sk-child sk-bounce1"></div>
        <div class="sk-child sk-bounce2"></div>
        <div class="sk-child sk-bounce3"></div>
      </div> -->
      <main class="container center-center" id="dashboard">
        <div class="column-6 stack site-block">
          <?php
          $sites = array( "http://thinktomorrow.be"=>"Think Tomorrow",
                          "http://kingjohnny.be"=>"Kingjohnny",
                          "http://muva.be" => "Muva",
                          "http://google.io/" => "Google.io",
                          // "http://batistehair.be" => "Batistehair",
                          // "http://factor.bnpparibasfortis.be" => "bnpparibas-factoring",
                          // "http://thatspositivenergy.be" => "Energizer - thatspositivenergy.be",
                          // "http://fixall.be" => "Fixall",
                          // "http://flowcreators.be" => "Flowcreators",
                          // "http://hebeco.be" => "hebeco",
                          // "http://hezemeer.be" => "hezemeer",
                          // "http://hydrationatwork.be" => "Hydrationatwork",
                          // "http://ijsboerke.be" => "IJsboerke",
                          // "http://niquitin.be" => "Niquitin",
                          // "http://optifisk.be" => "optifisk",
                          // "http://optiphar.be" => "Optiphar",
                          // "http://parrothon.be" => "parrothon",
                          // "http://davitamon.be"=>"Davitamon",
                        );
            foreach($sites as $url => $sitename) {
            ?>
            <div class="row squished domain">
              <?php
              echo '<span class="site-title"><i class="lnr lnr-eye"></i>' . $sitename .'</span>'; // Shows the site from the array
              ini_set("default_socket_timeout","05");
              set_time_limit(5);
              $ping_url=fopen($url,"r");
              $return_ping=fread($ping_url,1000);
              fclose($ping_url);
              if(strlen($return_ping)>1) {
                echo("<span class='online' data-title='online'><i class='lnr lnr-cloud-check'></i></span>");
              }
              else {
                echo("<span class='offline' data-title='offline'><i class='lnr lnr-cloud-download'></i></span>");
              }
              ?>
            </div>
            <?php
          }
          ?>
        </div>
      </div>
    </main>

    <footer class="center-center inset">
      <svg class="footer__logo stack-s" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 310.1 466.1" enable-background="new 0 0 310.1 466.1">
        <path class="st0" d="M135.6 230.4c0-10.7-8.6-19.3-19.2-19.3-33 0-59.9 26.9-59.9 59.9 0 20.1 16.4 36.5 36.5 36.5h2.8c21.9 0 39.8-17.9 39.8-39.8v-37.3zm-15.5 37.3c0 13.4-10.9 24.3-24.3 24.3h-2.9c-11.6 0-21-9.4-21-21 0-24.5 19.9-44.4 44.4-44.4 2.1 0 3.8 1.7 3.8 3.8v37.3zM296.3 225.1v-2.7c0-18.9-3.7-37.2-11-54.4-7.1-16.6-17.1-31.6-30-44.4-12.8-12.8-27.8-22.9-44.4-30-6.7-2.8-13.5-5.1-20.5-6.9 6.5-7.3 13-18 14.9-27.7.6-3-.4-5.9-2.4-7.8-1.2-1.2-2.7-2-4.4-2.4-4.9-1-9.8-1.3-14.6-.9 1.5-12.9-.7-26-6.7-38-.4-.8-1-1.6-1.6-2.3-.9-.9-2.1-1.7-3.4-2.1-2.2-.7-4.6-.6-6.6.5-6.6 3.3-12.6 7.6-17.7 12.7-17.5 17.5-23.8 42.8-17.5 65.8-10.6 1.8-21 4.8-31 9.1-16.7 7-31.6 17.1-44.4 30-12.9 12.8-23 27.8-30 44.4-7.3 17.2-11 35.6-11 54.4v2.7c0 29.8 9.3 58.3 26.8 82.4l1.8 2.4-1.9 2.3c-4.5 5.5-7 12.5-7 19.7v.5c0 11 5.7 20.7 14.4 26.3v10.2c-22.7 25.5-21.9 64.8 2.6 89.2 1.7 1.7 3.9 2.6 6.2 2.6 2.3 0 4.6-.9 6.2-2.6 24.5-24.5 25.4-63.7 2.6-89.3v-5.1h17l6.9 40.2c.7 4 4.2 6.9 8.2 6.9h20l-.1 6.9c0 3.8 2.8 7.1 6.5 7.6l.9.1c4.2.1 7.6-3.3 7.6-7.4l.1-7.2h14.7l-.1 6.9c0 3.8 2.8 7.1 6.5 7.6l.9.1c4.2.1 7.6-3.3 7.6-7.4l.1-7.2h14.7l-.1 6.9c0 3.8 2.8 7.1 6.5 7.6l.9.1c4.2.1 7.6-3.3 7.6-7.4l.1-7.2h20.2c4.1 0 7.5-2.9 8.2-6.9l7-40.2h16.9v5.1c-22.7 25.6-21.9 64.8 2.6 89.3 1.7 1.7 3.9 2.6 6.2 2.6 2.3 0 4.6-.9 6.2-2.6 24.5-24.5 25.3-63.7 2.6-89.2v-10.1c8.7-5.6 14.5-15.3 14.5-26.4v-.5c0-7.2-2.5-14.2-7-19.7l-1.9-2.3 1.8-2.4c17.6-24.1 26.8-52.6 26.8-82.4zm-111.3-159.9c-2.9 5.6-7.1 10.4-12.5 14-2.3 1.5-4.6 2.7-7.1 3.7-3-.2-5.9-.3-8.9-.3h-.3c6.3-10 16.9-16.6 28.8-17.4zm-24.9-34.2c1.6-1.6 3.3-3.1 5.1-4.4 2.4 8.4 2.5 17.3.3 25.9-7.8 3.5-14.7 8.8-20.1 15.6-.4-13.6 4.7-27 14.7-37.1zm-103.2 406.9c-10.2-15.6-10.2-36 0-51.7 10.2 15.7 10.2 36.1 0 51.7zm196.4.1c-10.2-15.7-10.2-36.1 0-51.7 10.2 15.6 10.2 36 0 51.7zm-4-132c-1.7 2-2.4 4.5-1.9 7.1.5 2.6 2.1 4.7 4.4 5.9 4.9 2.5 8 7.5 8 13v.5c0 8-6.5 14.5-14.5 14.5h-24.7c-4.1 0-7.5 2.9-8.2 6.9l-7 40.2h-13l.1-6.6c.1-4.2-3.2-7.6-7.4-7.7-4.2-.1-7.6 3.3-7.6 7.4l-.1 6.9h-14.7l.1-6.6c.1-4.2-3.2-7.6-7.4-7.7-4.2-.1-7.6 3.3-7.6 7.4l-.1 6.9h-14.7l.1-6.6c.1-4.2-3.2-7.6-7.4-7.7-4.2-.1-7.6 3.3-7.6 7.4l-.1 6.9h-13.2l-6.9-40.2c-.7-4-4.2-6.9-8.2-6.9h-24.7c-8 0-14.5-6.5-14.5-14.5v-.5c0-5.5 3.1-10.5 8-13 2.3-1.2 3.9-3.3 4.4-5.9.5-2.5-.2-5.2-1.9-7.1-19.5-22.4-30.3-51.1-30.3-80.9v-2.7c0-32.9 12.8-63.8 36.1-87.1 23.3-23.3 54.2-36.1 87.1-36.1h2.7c32.9 0 63.8 12.8 87.1 36.1s36.1 54.2 36.1 87.1v2.7h-.2c0 29.8-10.8 58.5-30.3 80.9zM145.4 299.7c-4.1-.5-7.9 2.4-8.4 6.6l-3.8 30.3c-.5 4.1 2.4 7.9 6.6 8.4l.9.1c3.8 0 7-2.8 7.5-6.6l3.8-30.3c.5-4.2-2.5-8-6.6-8.5zM193.4 211.1c-10.6 0-19.2 8.6-19.2 19.3v37.3c0 21.9 17.9 39.8 39.8 39.8h2.8c20.1 0 36.5-16.4 36.5-36.5 0-33-26.9-59.9-59.9-59.9zm23.4 80.9h-2.9c-13.4 0-24.3-10.9-24.3-24.3v-37.3c0-2.1 1.7-3.8 3.8-3.8 24.5 0 44.4 19.9 44.4 44.4 0 11.6-9.4 21-21 21zM166.2 197.1c11.9-3.7 21.4-13.1 25-25 5.6-.5 10.1-5.2 10.1-11s-4.4-10.5-10.1-11c-3.7-11.9-13.1-21.4-25-25-.5-5.6-5.3-10.1-11-10.1-5.8 0-10.5 4.4-11 10.1-11.9 3.7-21.4 13.1-25 25-5.6.5-10.1 5.3-10.1 11 0 5.8 4.4 10.5 10.1 11 3.7 11.9 13.1 21.4 25 25 .5 5.6 5.3 10.1 11 10.1 5.8 0 10.5-4.4 11-10.1zm-11.1-12.1c-.5 0-.9 0-1.4.1-12.2-.7-22-10.5-22.7-22.7.1-.4.1-.9.1-1.4s0-.9-.1-1.4c.7-12.2 10.5-22 22.7-22.7.4.1.9.1 1.4.1s.9 0 1.4-.1c12.2.7 22 10.5 22.7 22.7-.1.4-.1.9-.1 1.4s0 .9.1 1.4c-.7 12.2-10.5 22-22.7 22.7-.4-.1-.9-.1-1.4-.1zM173.2 306.3c-.5-4.1-4.3-7.1-8.4-6.6-4.1.5-7.1 4.3-6.6 8.4l3.8 30.3c.5 3.8 3.7 6.6 7.5 6.6.3 0 .6 0 .9-.1 4.2-.4 7.2-4.2 6.6-8.3l-3.8-30.3z"></path>
      </svg>
      <small>Build with proud on <a href="http://warpaint.thinktomorrow.be" target="_blank">Warpaint</a> ground.</small>
    </footer>

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="/assets/js/main.js"></script>
  </body>
  </html>
