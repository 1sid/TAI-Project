<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
      <html lang="fi">
     <link rel="stylesheet" href="css/profile.css">
    </head>
  <body>
     <script>
        // tämä suoritetaan, kun sivu on latautunut kokonaan
        $(document).ready(function()
        {
         
         $("#save").click(function() {
            
            var username = $("#username").val();
                    }
                     
        });
        </script>
 

    <div class="container">
            
        <a href="index.php"><img src="logo.jpg"></a> 
        <h3>Create your Amicus account</h3>

          <div id="form-layout">                

             <form method="post" class="form1" action="ohjaus.php">       
              
                  <input  type="text" name="firstname" placeholder="First name" required>
                  
                  <input  type="text" name="lastname" placeholder="Last name" required><br>          
                   
                  <div id="label">
                    <text>you can use letters, numbers & periods</text>
                    <input  type="text" name="username" placeholder='User name' required>
                  </div>   
                       
                
                  
                  <div id="rest">
                    <input type="Email" name="email" placeholder="Email" required>
                  
                  
                  <input type="phone" name="phone" placeholder="Phone number" required>
                  <br>
                  
                  <input type="text" name="password" placeholder="Password" value=""required>
                  <input type="text" name="password" placeholder="Confirm Password" value=""required>

                  <input id="button" type="submit" name="save" id="save" value="Signup">

                   
                   </div>
                        
              </form>

            </div>  
                 
           <a href="login.php" >Sign in instead</a> 

           <div class="icon_wrapper">
               <a href="https://www.facebook.com">
               <img src="facebook.svg"></a>
               <a href="https://www.youtube.com">
               <img src="youtube.svg"></a>
               <a href="https://www.linkedin.com">
               <img src="linkedin.svg"> </a>
           </div>

      
          
            
      </div>
          

  </body>
</html>
