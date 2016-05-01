
  <!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>




    <body class="#2196f3 blue">
      <!--Import jQuery before materialize.js-->
        <div class="container">
        <div class="col s12">

        <div class="card z-depth-3">
          <div class="card-content center-align">
              <img src="1.jpg" alt="" class="circle responsive-img" style="width:400px;height:auto;"><br> <!-- notice the "circle" class -->
              <span class="card-title">Fabrizio Pezzella<br>
              Via Don Luigi Sturzo 4, 80025 Casandrino<br>
              fabri.pezzella@gmail.com<br>
              +39 345 123 1691<br>
              10/10/1990</span>
          </div>
        </div>
      </div>

        <div class="col s12">
        
          <div class="card z-depth-3">

            <div class="card-content">
            <ul class="tabs">
              <li class="tab"><a class="active" href="#test1">Italian</a></li>
                <li class="tab"><a class="disabled" href="#test2">English</a></li></ul>
                

<!--ITALIANO_________________________________________________________________-->
                
                <div id="test1">
                  <span class="card-title">Italiano</span>
                  <p>I am a very simple card. I am good at containing small bits of information.
                  I am convenient because I require little markup to use effectively.I am a very simple card. I am good at containing small bits of information.
                  I am convenient because I require little markup to use effectively.I am a very simple card. I am good at containing small bits of information.
                  I am convenient because I require little markup to use effectively.I am a very simple card. I am good at containing small bits of information.
                  I am convenient because I require little markup to use effectively.</p>
                </div>
<!--INGLESE__________________________________________________________________-->

                <div id="test2">
                  <span class="card-title">Inglese</span>
                    <p>Italiano cooos</p>
                </div>
            

            </div>
            </div>
            
            </div><!--End Col card-->
        </div>

      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
    </body>
  </html>
        