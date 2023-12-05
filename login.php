<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" /> -->
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" /> -->
    <meta name="viewport" content="width=device-width,initial-scale=1.0">

    <link rel="stylesheet" href="login/StyleLogin.css" />
    <script src="login/script.js"></script>
    <title>pramWeb</title>
  </head>
  <body>

    <header>
      <!-- <h2 class="De Prambanan Tour"></h2>
      <nav class="navigation">
        <a href="Prambanan2.html">HOME</a> -->
        <!-- <a href="#">LOGIN</a> -->
       
      </nav>
    </header>
    
            <div class="wrapper">
              <!-- <span class="icon-close">
                <ion-icon name="close"></ion-icon>
              </span> -->
              <div class="form-box login">
                <h2>Login</h2>
                <form action="login_p.php" method="post">
                  <div class="input-box">
                    <input type="text" class="form-control" placeholder="Username" name="username">
                    <label for="">Username</label>
                  </div>
                  <div class="input-box">
                    <input type="text" class="form-control" placeholder="Password" name="password">
                    <label for="">Password</label>
                  </div> 
                  <!-- <div class="remember-forgot">
                    <label for=""><input type="checkbox" />Remember me</label>
                    <a href="#">Forgot Password</a>
                  </div>  -->
                   <button type="submit" class="btn"><b>Login</b></button>
                </form>
              </div>
            </div>

    <script src="login/script.js"></script>
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script> -->
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
  </body>
</html>
