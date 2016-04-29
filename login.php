<!DOCTYPE html>
<html lang="es">
    <head>

        <meta charset="utf-8">
        <title>Login</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <meta name="apple-mobile-web-app-capable" content="yes">

        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600" rel="stylesheet">
        <link href="css/font-awesome.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <link href="css/pages/signin.css" rel="stylesheet" type="text/css">

        <script language="javascript" type="text/javascript" src="js/full-calendar/jquery.min.js"></script>
        <script language="javascript" type="text/javascript" src="js/bootstrap.js"></script>
        <script language="javascript" type="text/javascript" src="js/validar.js"></script>

    </head>
    <body>

        <div class="account-container">

            <div class="content clearfix">

                <form action="source/Ajax/ValidarLogin.php" method="post" id="login">
                    <a href="http://www.solucionescrv.com"><img align="center" src="img/logo-crv.png" class="img-responsive" alt="CRV | Soluciones Software"/></a>
                    <h1>Miembros</h1>		
                    <div class="login-fields">
                        <p>Ingrese sus datos</p>
                        <div class="field">
                            <label for="username">Nombre de usuario</label>
                            <input type="text" id="username" name="username" value="" placeholder="Nombre de usuario" class="login username-field" />
                        </div> <!-- /field -->
                        <div class="field">
                            <label for="password">Contraseña:</label>
                            <input type="password" id="password" name="password" value="" placeholder="Contraseña" class="login password-field"/>
                        </div>
                    </div>
                    <div class="login-actions">
                        <!--
                                                <span class="login-checkbox">
                                                    <input id="Field" name="Field" type="checkbox" class="field login-checkbox" value="First Choice" tabindex="4" />
                                                    <label class="choice" for="Field">Keep me signed in</label>
                                                </span>
                        -->
                        <button class="button btn btn-success btn-large">Iniciar Sessión</button>

                    </div> <!-- .actions -->



                </form>

            </div> <!-- /content -->

        </div> <!-- /account-container -->



        <div class="login-extra">
            <a href="#">Reiniciar contraseña</a>
        </div> <!-- /login-extra -->
        <script src="js/signin.js"></script>

    </body>

</html>
