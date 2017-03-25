<!DOCTYPE html>
<html lang="en">
<head>
 
  <title>LE REFUGE</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="./css/style.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="js/script.js"></script>
</head>
<body >

    <div class="container">
    <div class="row">
    <div class="col-xs-4 logo-accueil"><img src="./images/logo.png" alt="Une maison d'accueil"></div>
    <div class="col-xs-4 col-xs-offset-4 welcome">Bienvenue sur Refuhelp !</div>
    </div>
    
    <div class="row su-select">
    <div class="col-xs-6 col-sm-3 left">
            <h4 class="choose-lang">Choisissez une langue</h4>
            <a class="btn btn-success btn-select">
                <input type="hidden" class="btn-select-input" id="" name="" value="" />
                <span class="btn-select-value">Select an Item</span>
                <span class='btn-select-arrow glyphicon glyphicon-chevron-down'></span>
                <ul>
                    <li>Français</li>
                    <li class="selected">English</li>
                    <li>عربي</li>
                </ul>
            </a>
        </div>
        <div class="col-xs-6 col-sm-3 col-xs-offset-4 right">
            <h4 class="choose-count">Choisissez le pays d'arrivée</h4>
            <a class="btn btn-warning btn-select">
                <input type="hidden" class="btn-select-input" id="" name="" value="" />
                <span class="btn-select-value">Select an Item</span>
                <span class='btn-select-arrow glyphicon glyphicon-chevron-down'></span>
                <ul>
                    <li>Austria</li>
                    <li class="selected">France</li>
                    <li>England</li>
                    <li>Sweden</li>
                    <li>Greece</li>
                    <li>Italia</li>
                    <li>USA</li>
                </ul>
            </a>
        </div>
        </div>
    <div class="row su-btn">
    <div class="col-xs-6 col-sm-3 start-here"><a href="./pages/main.php" class="btn btn-lg btn-success"><span class="glyphicon glyphicon-hand-right"></span>COMMENCER ICI</a></div>

      <div class="col-xs-6 col-sm-3 col-xs-offset-4  view-video medium-paragraph">
        <a href="#" class="launch-modal btn btn-lg btn-info" data-modal-id="modal-video">
        <span class="glyphicon glyphicon glyphicon-play"></span>
          <span class="video-link-text">VOIR LA VIDEO</span> 
        </a>
      </div>
    </div>
    </div>

    <!-- MODAL: How it works -->
        <div class="modal fade" id="modal-video" tabindex="-1" role="dialog" aria-labelledby="modal-video-label">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <div class="modal-video">
                  <div class="embed-responsive embed-responsive-16by9">
                          <iframe class="embed-responsive-item" src="https://player.vimeo.com/video/138453279?title=0&amp;byline=0&amp;portrait=0&amp;badge=0&amp;color=e89a3e" 
                                webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                      </div>
                    </div>
              </div>
            </div>
          </div>
        </div>

  </div>

</body>
</html>
