<?php
/* * Template name: Resume (Bootstrap 3)
* */
?>

  <!DOCTYPE html>
  <html lang="en">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ahmed Mohamed | Resume</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
    <style>
      * {
        font-family: 'Quicksand', 'sans-serif';
      }
      
      *::selection {
        background-color: yellow;
        color: #404040;
      }
      
      *::-moz-selection {
        background-color: yellow !important;
        color: #404040;
      }
      
      .flex {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        min-height: 100%;
        vertical-align: center;
      }
      
      .slide {
        min-height: 100vh;
        margin: 0;
        padding: 20px;
      }
      
      #education-slide {
        background-color: #404040;
        color: #e6e6e6;
      }
      
      .padded {
        padding: 50px;
      }
      
      .hr-normal {
        height: 5px;
        color: white;
        background-color: black;
        width: 25%;
        border: 0;
      }
      
      .more-button {
        font-size: 4rem;
        cursor: pointer;
        text-decoration: none;
        color: black;
        animation: bounce 1s ease-in-out infinite alternate;
      }
      
      .section-title {
        margin-bottom: 50px;
      }
      
      .more-button:hover {
        text-decoration: none;
        color: orange;
      }
      
      .education-icon {
        font-size: 6rem;
        margin-top: 20px;
      }
      
      .education-card {
        min-height: 300px;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        background-color: #e6e6e6;
        color: #404040;
        border-color: #e6e6e6;
        box-shadow: 0 15px 20px -15px rgba(0, 0, 0, 0.3), 0 35px 50px -25px rgba(0, 0, 0, 0.3), 0 85px 60px -25px rgba(0, 0, 0, 0.1);
      }
      
      .work-icon {
        font-size: 6rem;
        margin-top: 20px;
      }
      
      .cv-nav {
        cursor: pointer;
      }
      
      .work-card {
        min-height: 350px;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        color: #e6e6e6;
        background-color: #404040;
        border-color: #404040;
        box-shadow: 0 15px 20px -15px rgba(0, 0, 0, 0.3), 0 35px 50px -25px rgba(0, 0, 0, 0.3), 0 85px 60px -25px rgba(0, 0, 0, 0.1);
      }
      
      .main-nav {
        margin: 20px;
        font-size: 4rem;
      }
      
      @keyframes bounce {
        0% {
          transform: translateY(0);
        }
        50% {
          transform: translateY(-20px);
        }
        100% {
          transform: translateY(0);
        }
      }
    </style>
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

    <style>

    </style>
  </head>

  <body>
    <div class="jumbotron slide flex text-center" id="intro-slide">
      <div class="container-fluid text-center">
        <h1>Hello, I am <a href=<?php echo get_bloginfO('wpurl'); ?>>Ahmed Mohamed!</a></h1>
        <h3>Mechanical engineer, and a self taught programmer and web developer
</h3>
        <h4><i>Interested in job opportunities in the mechanical
engineering field, feel free to contact me.</i></h4>

      </div>
      <div class="row padded"></div>
      <div>
        <a class="more-button glyphicon glyphicon-chevron-down cv-nav" id="to-education" data-target="#education-slide"></a>
      </div>
    </div>
    <div class="jumbotron slide flex" id="education-slide">
      <div class="container text-center">
        <div class="row section-title">
          <h1>Education and Courses</h1>
          <hr class="hr-normal">
          <h3>I have a spent a lot of time learning:</h3>
        </div>
        <div class="row">
          <div class="col-xs-12 col-md-6 col-lg-4">
            <div class="thumbnail education-card">
              <div class="glyphicon glyphicon-bookmark education-icon"></div>
              <div class="education-title">
                <h3>IGCSE Graduate</h3>
              </div>
              <div class="education-period">
                <h4>2006-2009</h4>
              </div>
            </div>
          </div>
          <div class="col-xs-12 col-md-6 col-lg-4">
            <div class="thumbnail education-card">
              <div class="glyphicon glyphicon-star education-icon"></div>
              <div class="education-title">
                <h3>BSc Mechanical Engineering</h3>
                <h6>Helwan University, Cairo, Egypt</h6>
              </div>
              <div class="education-period">
                <h4>2009-2014</h4>
              </div>
            </div>
          </div>
          <div class="col-xs-12 col-md-6 col-lg-4">
            <div class="thumbnail education-card">
              <div class="glyphicon glyphicon-asterisk education-icon"></div>
              <div class="education-title">
                <h3>MSc Mechanical Engineering, Aerodynamics</h3>
                <h6>Helwan University, Cairo, Egypt</h6>
              </div>
              <div class="education-period">
                <h4>2016-2018(expected)</h4>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="jumbotron slide flex" id="work-slide">
      <div class="container text-center">
        <div class="row section-title">
          <h1>Employment</h1>
          <hr class="hr-normal">
          <h3>"The reason a lot of people do not recognize opportunity is because it usually goes around
wearing overalls looking like hard work."
</h3>
          <h5><i>-Thomas Edison</i></h5>
        </div>
        <div class="row">
          <div class="col-xs-12 col-md-6 col-lg-4">
            <div class="thumbnail work-card">
              <div class="glyphicon glyphicon-asterisk work-icon"></div>
              <div class="work-title">
                <h3>Orascom Construction</h3>
                <h6><i>Mechanical Technical Office Engineer, ERC Refinery Project,
Mostord, Cairo</i></h6>
                <hr>
                <h5>Piping Engineer. Responsible for as built drawings and control of
    isometrics, joints and material.</h5>
              </div>
              <div class="work-period">
                <h4>2016-current</h4>
              </div>
            </div>
          </div>
          <div class="col-xs-12 col-md-6 col-lg-4">
            <div class="thumbnail work-card">
              <div class="glyphicon glyphicon-asterisk work-icon"></div>
              <div class="work-title">
                <h3>10H Safety &amp; Health for Construction Industry Training</h3>
                <h6><i>Petro Aseel Center for QHSE training and
        consultation</i></h6>
                <hr>
              </div>
              <div class="work-period">
                <h4>2017</h4>
              </div>
            </div>
          </div>
          <div class="col-xs-12 col-md-6 col-lg-4">
            <div class="thumbnail work-card">
              <div class="glyphicon glyphicon-asterisk work-icon"></div>
              <div class="work-title">
                <h3>Trainee Mechanical Engineer</h3>
                <h6><i>British Petroleum Relocation Project (New Cairo) - MEP
    Works</i></h6>
                <hr>
                <h5>MEP Works - Design and Construction</h5>
              </div>
              <div class="work-period">
                <h4>2016 - 3 Months</h4>
              </div>
            </div>
          </div>
          <div class="col-xs-12 col-md-6 col-lg-4">
            <div class="thumbnail work-card">
              <div class="glyphicon glyphicon-asterisk work-icon"></div>
              <div class="work-title">
                <h3>Freelance Programmer</h3>
                <h6><i>Windows programming and web design</i></h6>
                <hr>
                <h5>Wordpress, C#, Python, php, jQuery, Bootstrap, Entity Framework
    </h5>
              </div>
              <div class="work-period">
                <h4>2015 - current</h4>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <h4><i>For more details, please download the full c.v. in pdf
    format</i></h4>
          <h6><i><a class="cv-nav" id="to-top" data-target=
    "#intro-slide">back to top</a> &nbsp :: &nbsp  <a href=<?php echo get_bloginfO('wpurl'); ?>>home</a></i></h6>
        </div>
      </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js">
    </script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/trianglify/0.4.0/trianglify.min.js">
    </script>
    <script>
      function triangle() {
        var element = document.getElementById('intro-slide');
        var dim = element.getClientRects()[0];
        var pattern = Trianglify({
          width: dim.width,
          height: dim.height,
          x_colors: 'Spectral',
          cell_size: 75
        });
        element.style['background-image'] = 'url(' + pattern.png() + ')';
      }
      triangle();
      window.onresize = function() {
        triangle();
      }

      $(document).ready(function() {
        $(window).scrollTop(0);

        $(".cv-nav").click(function() {
          var target = $($(this).attr("data-target"));
          $("html, body").animate({
            scrollTop: target.offset().top
          }, 700);
          return false;
        });

      });
    </script>
  </body>

  </html>