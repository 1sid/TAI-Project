
<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

include 'yhteys.php'; 

$kt = $_SESSION["kt"];



if ($kt <> '')
{ 
  $haku = $conn->prepare("SELECT id, username FROM $db.userinfo where id=:rivi");
  $haku->execute(array(':rivi' =>$kt));
  $c=0;
 $ha = $haku->fetch(PDO::FETCH_ASSOC);

    $c_username = $ha['username'];
    
  

 ?>  

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Smart Integration</title>
    <script type="text/javascript" src="https://www.youtube.com/player_api"></script>
    <script src="js/script.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/styles.css">
  </head>
  <body>
    <header>
      <nav id="header-nav" class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container" id="custom-container">
            <div class="navbar-header" id="navbar-header-custom">
                  <a href="index.html" class="float-left d-none d-lg-block"> 
                    <div id="logo-img" alt="Logo Image"></div>
                   </a>

                   <a class="navbar-brand" href="index.html"><h1>Smart Integration</h1></a>
                   <ul class="login-after">
                          <script>
                            $(document).ready(function() { }
                           </script>
                    
                          <?php
                         echo "<h3> Welcome:&nbsp".$c_username."</h3>";}?>
                    <li><a href="index.html">Logout</a></li>
                     
                   </ul>
                   

                   

                  <button class="navbar-toggler custom-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon button-custom"></span>
                  </button>
                  
                  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                        <div class="navbar-nav navbar-custom">
                         <a class="nav-item nav-link active " href="#">Home <span class="sr-only">(current)</span></a>
                           <a class="nav-item nav-link" href="#"> About Us</a>
                           <a class="nav-item nav-link" href="#">What we do</a>
                                   <a class="nav-item nav-link" href="#">More</a>

                          </div>
                  </div>  
                     
            </div>
        </div>
      </nav>
   </header>
    <div id="main-content" class="container">
          <div id="video-tile" class="row">

              <div class="col-lg-8 col-md-10 col-sm-12 padding-reset">

                <iframe id="player" width=100% height="400" src="https://www.youtube.com/embed/19Z6oGoslXs?rel=0&wmode=Opaque&enablejsapi=1;showinfo=0;controls=0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

              </div>

              <div class="col-lg-4 col-md-2 col-sm-12 overflow-auto" id="video-scroll">

                <iframe id="player2" width=100%  src="https://www.youtube.com/embed/rGItpuZFGg4?rel=0&wmode=Opaque&enablejsapi=1;showinfo=0;controls=0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

                <iframe id="player3" width=100%  src="https://www.youtube.com/embed/BZJb_S96Q7w?rel=0&wmode=Opaque&enablejsapi=1;showinfo=0;controls=0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

                <iframe id="player4" width=100% src="https://www.youtube.com/embed/khMzXxZvryw?rel=0&wmode=Opaque&enablejsapi=1;showinfo=0;controls=0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

                <iframe width=100% src="https://www.youtube.com/embed/wFMz-AZjaBI" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

              </div>
          </div>
      

          <div class="row" id="address-map">
              <div class="col-lg-3 col-md-4 col-sm-12">
                        <p class="address" id="address"><h2>Address</h2>aslkdjaoidna ioapjflkasdnfklds <br> sdalfjsdlkfnlaksjfslkfmalskjfl
                          <br> sakmfslödafmlksdj
                        </p>
              </div>

              <div class="col-lg-9 col-md-8 col-sm-12">
                      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1967.1561267794439!2d22.255277492231105!3d60.4591456523163!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x963a196363e9ec5!2sMidsommarkullens%20skolhus%20%7C%20%C3%85bo%20yrkesinstitut!5e0!3m2!1sen!2sfi!4v1575816018196!5m2!1sen!2sfi" width="100%" height="200px" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
              </div>
          </div>
            
          <div class="row" id="custom-text">
                  <div class="col-lg-12">
                        <p>
                          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididuntlabore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullalaboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderitvoluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidanon proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        </p>
                    </div>
          </div> 

      </div>

            <footer class="panel-footer">
          <div class="container">
            <div class="row">
              <section id="hours" class="col-sm-4">
                <span>Opening Hours:</span><br>
                Monday-Fri: 9am - 4pm<br>
                Saturday : 11:15am - 2:30pm<br>
                Sunday Closed
                <hr class="visible-xs">
              </section>
              <section id="" class="col-sm-4">
                <span>Contact Us:</span><br>
               Juhannuskukkula<br>
                Turku, 20750
                
                <hr class="visible-xs">
              </section>
              
            </div>
            <div class="text-center">&copy; Copyright Amicus 2019</div>
          </div>
        </footer>

          <div class="icon_wrapper">
            <a href="https://www.facebook.com">
              <img src="images/facebook.svg">
            </a>
            <a href="https://www.youtube.com">
              <img src="images/youtube.svg">
            </a>
            <a href="https://www.linkedin.com">
              <img src="images/linkedin.svg">
            </a>

      
          </div>


      

      <!-- jQuery (Bootstrap JS plugins depend on it) -->
      <script src="js/jquery-3.4.1.min.js"></script>
      <script src="js/bootstrap.min.js"></script>
      <script src="js/script.js"></script>
      <script src="//code.tidio.co/foeyk4fjkngjivnwve7myducgmanmdfy.js" async> </script>
 </body>
</html>