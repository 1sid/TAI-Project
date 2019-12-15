<!DOCTYPE html>
<html>
    
    <head>
        <title></title>
        <link rel="stylesheet" type="text/css" href="css/login.css">
    </head>
    
    <body>
        <div class="container">
            <div id="custom-log">
               <a href="index.html"><img src="images/logo.jpg"> </a>
               <h3>Sign in to Amicus</h3>
                <div id="outer-box">              
                <div id="content">
                    <form method="post" action="ohjaus.php">
            
                   Username: <br>
                      <input type="text" class="input" name="kayttajatunnus" maxlength="30" required> <br>
                    
                    Password: <br>
                      <input type="password" class="input" name="salasana" maxlength="50" required>     <br>
                       
                      <input  type="submit" id="button" name="nappi" value="Login"> <br>
                        <a href="tunnukset.php">Forgot password?</a><br>
                                     
                    </form> 
                 </div>  
                 </div>  
                 <a href="signup.php" >Signup instead ?</a> 
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
            </div>
        </div>
    </body>

</html>