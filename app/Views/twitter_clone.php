<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Twitter Bootsrap v4 Clone</title>
  
  <script src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" data-auto-replace-svg="nest"></script>
  <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.6/css/bootstrap.min.css'>
  <!-- <link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css'> -->
  <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/octicons/4.4.0/font/octicons.min.css'>
  <!-- Custom css-->
  <link rel="stylesheet" href="<?= base_url() ?>/assets/css/style.css">

  
</head>

<body>
  <style>
    .pidgen{
      display: none;
    } 
  </style>
  <!-- Fixed top navbar -->
<nav class="navbar navbar-toggleable-md fixed-top">
  <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse container">
    <!-- Navbar navigation links -->
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#"><i class="octicon octicon-home" aria-hidden="true"></i> Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#"><i class="octicon octicon-zap"></i> Moments</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#"><i class="octicon octicon-bell"></i> Notifications</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#"><i class="octicon octicon-inbox"></i> Messages</a>
      </li>
    </ul>
    <!-- END: Navbar navigation links -->
    <!-- Navbar Search form -->
    <form class="navbar-form" role="search">
      <div class="input-group">
        <input type="text" class="form-control input-search" placeholder="Search Twitter" name="srch-term" id="srch-term">
        <div class="input-group-btn">
          <button class="btn btn-default btn-search" type="submit"><i class="octicon octicon-search navbar-search-icon"></i></button>
        </div>
      </div>
    </form>
    <!-- END: Navbar Search form -->
    <!-- Navbar User menu -->
    <div class="dropdown navbar-user-dropdown">
      <button class="btn btn-secondary dropdown-toggle btn-circle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></button>
      <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
        <a class="dropdown-item" href="#">Action</a>
        <a class="dropdown-item" href="#">Another action</a>
        <a class="dropdown-item" href="#">Something else here</a>
      </div>
    </div>
    <!-- END: Navbar User menu -->
    <!-- Navbar Tweet button -->
    <button class="btn btn-search-bar">Tweet</button>
  </div>
</nav>
<!-- END: Fixed top navbar -->
<div class="main-container">
  <!-- Profile background large image -->
  <div class="row profile-background">
    <div class="container">
	  <!-- User main avatar -->
      <div class="avatar-container">
        <div class="avatar">

        </div>
      </div>
    </div>
  </div>

  <nav class="navbar profile-stats">
    <div class="container">
      <div class="row">
        <div class="col">

        </div>
        <div class="col-6">
          <ul>
            <li class="profile-stats-item-active">
              <a>
                <span class="profile-stats-item profile-stats-item-label">Tweets</span>
                <span class="profile-stats-item profile-stats-item-number">51</span>
              </a>
            </li>
            <li>
              <a>
                <span class="profile-stats-item profile-stats-item-label">Following</span>
                <span class="profile-stats-item profile-stats-item-number">420</span>
              </a>
            </li>
            <li>
              <a>
                <span class="profile-stats-item profile-stats-item-label">Followers</span>
                <span class="profile-stats-item profile-stats-item-number">583</span>
              </a>
            </li>
            <li>
              <a>
                <span class="profile-stats-item profile-stats-item-label">Likes</span>
                <span class="profile-stats-item profile-stats-item-number">241</span>
              </a>
            </li>
          </ul>
        </div>
        <div class="col">

        </div>
      </div>
    </div>
  </nav>
  <div class="container main-content">
    <div class="row">
      <div class="col profile-col">
        <!-- Left column -->
        <div class="profile-header">
          <!-- Header information -->
          <h3 class="profile-fullname"><a>Ibukun Oyinlola<a></h3>
          <h2 class="profile-element"><a>@euniceibk</a></h2>
          <a class="profile-element profile-website" hrerf=""><i class="octicon octicon-link"></i>&nbsp;euniceibk.com</a>
          <a class="profile-element profile-website" hrerf=""><i class="octicon octicon-location"></i>&nbsp; Lagos, Nigeria</a>
          <h2 class="profile-element"><i class="octicon octicon-calendar"></i>Joined November 2012</h2>
          <button class="btn btn-search-bar tweet-to-btn">Tweet to Ibukun Oyinlola</button>
          <a class="profile-element profile-website" hrerf=""><i class="octicon octicon-file-media"></i>1,142 Photos and videos</a>
          <div class="pic-grid">
            <!-- Image grid -->
            <div class="row">
              <div class="col pic-col"><img src="<?= base_url() ?>/assets/img/ibk1.jpeg" height="73px" class=""></div>
              <div class="col pic-col"><img src="<?= base_url() ?>/assets/img/ibk1.jpeg" height="73px" class=""></div>
              <div class="col pic-col"><img src="<?= base_url() ?>/assets/img/ibk2.jpeg" height="73px" class=""></div>
            </div>
            <!-- End: row -->
            <div class="row">
              <div class="col pic-col"><img src="<?= base_url() ?>/assets/img/ibk2.jpeg" height="73px" class=""></div>
              <div class="col pic-col"><img src="<?= base_url() ?>/assets/img/ibk1.jpeg" height="73px" class=""></div>
              <div class="col pic-col"><img src="<?= base_url() ?>/assets/img/ibk2.jpeg" height="73px" class=""></div>
            </div>
            <!-- End: row -->
          </div>
          <!-- End: image grid -->
        </div>
      </div>
      <!-- End; Left column -->
      <!-- Center content column -->
      <div class="col-6">
        <ol class="tweet-list">
          <li class="tweet-card">
            <div class="tweet-content">
              <div class="tweet-header">
                <span class="fullname">
                  <strong>Ibukun Oyinlola</strong>
                </span>
                <span class="username">@euniceibk</span>
                <span class="tweet-time">- Jul 18</span>
              </div>
              <a>
                <img class="tweet-card-avatar" src="<?= base_url() ?>/assets/img/ibk1.jpeg" alt="">
              </a>
              <div class="tweet-text">
                <p id="e1" lang="es" data-aria-label-part="0"> 
                  How do we know that Jehovah’s Witnesses have God’s spirit ?
                </p>
                <p id="p1" class="pidgen" > 
                  How we take know sey Jehovah Witness people get holy spirit ?
                </p>
              </div>
              <div class="tweet-footer">
                <a class="tweet-footer-btn">
                  <i class="octicon octicon-comment" aria-hidden="true"></i><span> 18</span>
                </a>
                <!-- <a class="tweet-footer-btn">
                  <i class="octicon octicon-sync" aria-hidden="true"></i><span> 64</span>
                </a> -->
                <a class="tweet-footer-btn">
                  <i class="octicon octicon-heart" aria-hidden="true"></i><span> 202</span>
                </a>
                <a class="tweet-footer-btn">
                  <img id="b1" src="<?= base_url() ?>/assets/img/english.png" height="20px" alt="english-to-pidgen" />
                  <img id="b1" class="pidgen" src="<?= base_url() ?>/assets/img/english.png" height="20px" alt="english-to-pidgen" />
                </a>
                <a class="tweet-footer-btn">
                  <i class="fas fa-volume-up"></i> <span style="background-color: #eceeef; padding: 3px;" onclick="speak( document.getElementById('e1').innerHTML )" > English </span> <span style="background-color: #eceeef; padding: 3px;" onclick="speak( document.getElementById('p1').innerHTML )"> Pidgin </span>
                </a>
              </div>
            </div>
          </li>
          <li class="tweet-card">
            <div class="tweet-content">
              <div class="tweet-header">
                <span class="fullname">
                  <strong>Ibukun Oyinlola</strong>
                </span>
                <span class="username">@euniceibk</span>
                <span class="tweet-time">- Jul 18</span>
              </div>
              <a>
                <img class="tweet-card-avatar" src="<?= base_url() ?>/assets/img/ibk1.jpeg" alt="">
              </a>
              <div class="tweet-text">
                <p id="e2" class="" lang="es" data-aria-label-part="0"> 
                  What counsel did Jesus give to help us handle differences in a spirit of love
                </p>
                <p id="p2" class="pidgen" >
                  Which advice Jesus give wey fit help us use love settle quarrel ?
                <p>
              </div>
              <div class="tweet-footer">
                <a class="tweet-footer-btn">
                  <i class="octicon octicon-comment" aria-hidden="true"></i><span> 18</span>
                </a>
                <!-- <a class="tweet-footer-btn">
                  <i class="octicon octicon-sync" aria-hidden="true"></i><span> 64</span>
                </a> -->
                <a class="tweet-footer-btn">
                  <i class="octicon octicon-heart" aria-hidden="true"></i><span> 202</span>
                </a>
                <a class="tweet-footer-btn">
                  <img id="b2" src="<?= base_url() ?>/assets/img/english.png" height="20px" alt="english-to-pidgen" />
                </a>
                <a class="tweet-footer-btn">
                  <i class="fas fa-volume-up"></i> <span style="background-color: #eceeef; padding: 3px;" onclick="speak( document.getElementById('e2').innerHTML )"> English </span> <span style="background-color: #eceeef; padding: 3px;" onclick="speak( document.getElementById('p2').innerHTML )"> Pidgin </span>
                </a>
              </div>
            </div>
          </li>
          <li class="tweet-card">
            <div class="tweet-content">
              <div class="tweet-header">
                <span class="fullname">
                  <strong>Ibukun Oyinlola</strong>
                </span>
                <span class="username">@euniceibk</span>
                <span class="tweet-time">- Jul 18</span>
              </div>
              <a>
                <img class="tweet-card-avatar" src="<?= base_url() ?>/assets/img/ibk1.jpeg" alt="">
              </a>
              <div class="tweet-text">
                <p id="e3" class="" lang="es" data-aria-label-part="0">
                  What methods did Jesus and his disciples use to preach ?
                </p>
                <p id="p3" class="pidgen" >
                  How Jesus and im disciple dem take preach ? 
                <p>
              </div>
              <div class="tweet-footer">
                <a class="tweet-footer-btn">
                  <i class="octicon octicon-comment" aria-hidden="true"></i><span> 18</span>
                </a>
                <!-- <a class="tweet-footer-btn">
                  <i class="octicon octicon-sync" aria-hidden="true"></i><span> 64</span>
                </a> -->
                <a class="tweet-footer-btn">
                  <i class="octicon octicon-heart" aria-hidden="true"></i><span> 202</span>
                </a>
                <a class="tweet-footer-btn">
                  <img id="b3" src="<?= base_url() ?>/assets/img/english.png" height="20px" alt="english-to-pidgen" />
                </a>
                <a class="tweet-footer-btn">
                  <i class="fas fa-volume-up"></i> <span style="background-color: #eceeef; padding: 3px;" onclick="speak( document.getElementById('e3').innerHTML )"> English </span> <span style="background-color: #eceeef; padding: 3px;" onclick="speak( document.getElementById('p3').innerHTML )"> Pidgin </span>
                </a>
              </div>
            </div>
          </li>
          <li class="tweet-card">
            <div class="tweet-content">
              <div class="tweet-header">
                <span class="fullname">
                  <strong>Ibukun Oyinlola</strong>
                </span>
                <span class="username">@euniceibk</span>
                <span class="tweet-time">- Jul 18</span>
              </div>
              <a>
                <img class="tweet-card-avatar" src="<?= base_url() ?>/assets/img/ibk1.jpeg" alt="">
              </a>
              <div class="tweet-text">
                <p id="e4" class="" lang="es" data-aria-label-part="0">
                  How can the three steps outlined at Matthew 18 : 15 - 17 be used to resolve some conflicts ?
                </p>
                <p id="p4" class="pidgen" > 
                  How the three things wey Jesus talk for Matthew 18 : 15 - 17 fit help us settle quarrel ?
                </p>
              </div>
              <div class="tweet-footer">
                <a class="tweet-footer-btn">
                  <i class="octicon octicon-comment" aria-hidden="true"></i><span> 18</span>
                </a>
                <!-- <a class="tweet-footer-btn">
                  <i class="octicon octicon-sync" aria-hidden="true"></i><span> 64</span>
                </a> -->
                <a class="tweet-footer-btn">
                  <i class="octicon octicon-heart" aria-hidden="true"></i><span> 202</span>
                </a>
                <a class="tweet-footer-btn">
                  <img id="b4" src="<?= base_url() ?>/assets/img/english.png" height="20px" alt="english-to-pidgen" />
                </a>
                <a class="tweet-footer-btn">
                  <i class="fas fa-volume-up"></i> <span style="background-color: #eceeef; padding: 3px;" onclick="speak( document.getElementById('e4').innerHTML )"> English </span> <span style="background-color: #eceeef; padding: 3px;" onclick="speak( document.getElementById('p4').innerHTML )"> Pidgin </span>
                </a>
              </div>
            </div>
          </li>
        </ol>
        <!-- End: tweet list -->
      </div>
      <!-- End: Center content column -->
      <div class="col right-col">
        <div class="content-panel">
          <div class="panel-header">
            <h4>Who to follow</h4><small><a href="">Refresh</a></small><small><a href="">View all</a></small>
          </div>
          <!-- Who to Follow panel -->
          <div class="panel-content">
            <!--Follow list -->
            <ol class="tweet-list">
              <li class="tweet-card">
                <div class="tweet-content">
                  <img class="tweet-card-avatar" src="<?= base_url() ?>/assets/img/ibk1.jpeg" alt="">
                  <div class="tweet-header">
                    <span class="fullname">
                  <strong>Ibukun Oyinlola</strong>
                </span>
                    <span class="username">@euniceibk</span>
                  </div>

                  <button class="btn btn-follow">Follow</button>
                </div>
              </li>
              <li class="tweet-card">
                <div class="tweet-content">
                  <img class="tweet-card-avatar" src="<?= base_url() ?>/assets/img/ibk1.jpeg" alt="">
                  <div class="tweet-header">
                    <span class="fullname">
                  <strong>Ibukun Oyinlola</strong>
                </span>
                    <span class="username">@euniceibk</span>
                  </div>

                  <button class="btn btn-follow">Follow</button>
                </div>
              </li>
              <li class="tweet-card">
                <div class="tweet-content">
                  <img class="tweet-card-avatar" src="<?= base_url() ?>/assets/img/ibk1.jpeg" alt="">
                  <div class="tweet-header">
                    <span class="fullname">
                  <strong>Ibukun Oyinlola</strong>
                </span>
                    <span class="username">@euniceibk</span>
                  </div>

                  <button class="btn btn-follow">Follow</button>
                </div>
              </li>
            </ol>
            <!--END: Follow list -->
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src='https://npmcdn.com/tether@1.2.4/dist/js/tether.min.js'></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.6/js/bootstrap.min.js'></script>
  <script>
    //Init SpeechSynth API
    const synth = window.speechSynthesis;

    var b1 = document.getElementById("b1");
    var b2 = document.getElementById("b2");
    var b3 = document.getElementById("b3");
    var b4 = document.getElementById("b4");

    //Browser identifier
    // Firefox 1.0+
    var isFirefox = typeof InstallTrigger !== 'undefined';

    // Chrome 1+
    var isChrome = !!window.chrome && !!window.chrome.webstore;

    const voices = synth.getVoices();
    // console.log(voices);

    p1.style.display = "none"; p2.style.display = "none"; p3.style.display = "none"; p4.style.display = "none";

    function speak(text){
        // Check if speaking
        if (synth.speaking) {
            console.error('Already speaking...');
            return;
        }

        if (text !== '') {
            // Get speak text
            var text_to_speak = new SpeechSynthesisUtterance(text);

            // Speak end
            text_to_speak.onend = e => {
                console.log('Done speaking...');
            };

            // Speak error
            text_to_speak.onerror = e => {
                console.error('Something went wrong');
                // console.log(e);
                console.log(text_to_speak);
            };

            // Speak
            synth.speak(text_to_speak);
            // console.log(text_to_speak);
        }

    }

    b1.onclick = function(event) {
        var p1 = document.getElementById("p1");
        var e1 = document.getElementById("e1");
        if( p1.style.display === "none" ) {
            p1.style.display = "block";
            e1.style.display = "none";
            b1.src="<?= base_url() ?>/assets/img/pidgen.png";
        } else {
            p1.style.display = "none";
            e1.style.display = "block";
            b1.src="<?= base_url() ?>/assets/img/english.png";
        }
    }

    b2.onclick = function(event) {
        var p2 = document.getElementById("p2");
        var e2 = document.getElementById("e2");
        if( p2.style.display === "none" ) {
            p2.style.display = "block";
            e2.style.display = "none";
            b2.src="<?= base_url() ?>/assets/img/pidgen.png";
        } else {
            p2.style.display = "none";
            e2.style.display = "block";
            b2.src="<?= base_url() ?>/assets/img/english.png";
        }
    }

    b3.onclick = function(event) {
        var p3 = document.getElementById("p3");
        var e3 = document.getElementById("e3");
        if( p3.style.display === "none" ) {
            p3.style.display = "block";
            e3.style.display = "none";
            b3.src="<?= base_url() ?>/assets/img/pidgen.png";
        } else {
            p3.style.display = "none";
            e3.style.display = "block";
            b3.src="<?= base_url() ?>/assets/img/english.png";
        }
    }

    b4.onclick = function(event) {
        var p4 = document.getElementById("p4");
        var e4 = document.getElementById("e4");
        if( p4.style.display === "none" ) {
            p4.style.display = "block";
            e4.style.display = "none";
            b4.src="<?= base_url() ?>/assets/img/pidgen.png";
        } else {
            p4.style.display = "none";
            e4.style.display = "block";
            b4.src="<?= base_url() ?>/assets/img/english.png";
        }
    }
  </script>
  
</body>
</html>