 <!DOCTYPE html>
<html lang="es">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Login</title>

    <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="login">
    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>
      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
            <form role="form" method="POST" action="../controlador/Usuario_Login_Ingresar.php">
              <h1>Iniciar Sesion</h1>
              <?php session_start() ?>
              <?php if(isset($_SESSION['error'])){ ?>
                <div class="row">
                  <div class="col-md-2"></div>
                  <div class="col-md-8">
                    <div class="alert alert-danger">
                      <p><?php echo $_SESSION['error']; ?></p>
                    </div>
                  </div>
                  <div class="col-md-2"></div>
                </div>
                <?php unset($_SESSION['error']); ?>
              <?php } ?>
              <!--<input type="hidden" name="_token" value="{{ csrf_token() }}">-->
              <div>
                <input type="text" class="form-control" placeholder="E-mail" name="Email" required="" value="jnavez@unitru.edu.pe"/>
                <input type="password" class="form-control" placeholder="Contraseña" name="Contraseña" required="" value="jnavez"/>
              </div>
              <div>
                <input type="submit" class="btn btn-default submit" value="Ingresar">
                <a class="reset_pass" href="Usuario_Recuperar.php">Olvidé mi contraseña</a>
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <div class="clearfix"></div>
                <br>
                <div>
                  <p>Universidad Nacional de Trujillo</p>
                  <p>Sol de Laredo</p>
                </div>
              </div>
            </form>
          </section>
        </div>

        <div id="register" class="animate form registration_form">
          <section class="login_content">
            <form>
              <h1>Create Account</h1>
              <div>
                <input type="text" class="form-control" placeholder="Username" required="" />
              </div>
              <div>
                <input type="email" class="form-control" placeholder="Email" required="" />
              </div>
              <div>
                <input type="password" class="form-control" placeholder="Password" required="" />
              </div>
              <div>
                <a class="btn btn-default submit" href="index.html">Submit</a>
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">Already a member ?
                  <a href="#signin" class="to_register"> Log in </a>
                </p>

                <div class="clearfix"></div>
                <br />

                <div>
                  <h1><i class="fa fa-paw"></i> Gentelella Alela!</h1>
                  <p>©2016 All Rights Reserved. Gentelella Alela! is a Bootstrap 3 template. Privacy and Terms</p>
                </div>
              </div>
            </form>
          </section>
        </div>
      </div>
    </div>
  </body>
</html>
