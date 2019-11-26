 <!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Recuperar Contraseña</title>
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
            <h1>Recuperar Contraseña</h1>

            <?php session_start() ?>
            <?php if(!isset($_SESSION['mensaje'])){ ?>
              <form role="form" method="POST" action="../controlador/Usuario_Login_Validar.php">
                <?php //session_start() ?>
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
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div>
                  <input type="text" class="form-control" name="Email" placeholder="E-mail" required="" />
                  <input type="text" class="form-control" name="Pregunta" placeholder="Pregunta" required="" />
                  <input type="text" class="form-control" name="Respuesta" placeholder="Respuesta" required="" />
                </div>
                <div>
                  <center>
                    <input type="submit" hidden="" id=>
                    <button class="btn btn-default submit">Verificar</button>
                  </center>
                </div>
              </form>
              <?php unset($_SESSION['mensaje']); ?>
            <?php } ?>

            <?php //session_start() ?>
            <?php if(isset($_SESSION['mensaje'])){ ?>
              <form role="form" method="POST" action="../controlador/Usuario_Login_Recuperar.php">
                <br>
                <?php //session_start() ?>
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
                <div>
                  <input type="hidden" class="form-control" name="Email" placeholder="E-mail" value="<?php echo $_SESSION['email'] ?>"/>
                  <input type="text" class="form-control" name="Contraseña1" placeholder="Contraseña" required="" />
                  <input type="password" class="form-control" name="Contraseña2" placeholder="Repita Contraseña" required="" />
                </div>
                <div>
                  <center>
                    <input type="submit" hidden="" id=>
                    <button class="btn btn-default submit">Recuperar contraseña</button>
                  </center>
                </div>
              </form>

              <?php unset($_SESSION['email']) ?>
              <?php unset($_SESSION['mensaje']); ?>
            <?php } ?>


            <div class="clearfix"></div>
            <div class="separator">
              <div class="clearfix"></div>
              <br>
              <div>
                <p>Universidad Nacional de Trujillo</p>
                <p>Sol de Laredo</p>
              </div>
            </div>
          </section>
        </div>
        <!--
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
        -->
      </div>
    </div>
  </body>
</html>
