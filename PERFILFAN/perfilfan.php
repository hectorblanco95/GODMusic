<!DOCTYPE html>
<html>
<head>
  <title>Perfil Fan</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link href="homepage.css" rel="stylesheet" type="text/css"/>
</head>

    <body>
        <div id="cua">
            <header class="complet">
                <div class="top">
                    <img id="logo" src="../img/logo.PNG"
                         alt="music"
                         title="music"/>  
                </div>
            </header>

            <div id="registro" class="modal fade" role="dialog">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Registrarse</h4>
                        </div>
                        <div class="modal-body">
                            <p>
                                Nombre de usuario: <input name="perfil" placeholder="Nombre de usuario" type="text" required/><br>
                                Contraseña: <input name="pass" placeholder="Contraseña" type="password" required/><br>
                                Confirmar contraseña: <input name="pass" placeholder="Confirmar contaseña" type="password" required/><br>
                                Email: <input name="mail" placeholder="Correo electronico" type="email" required/><br>
                                Confirmar Email: <input name="mail" placeholder="Correo electronico" type="email" required/><br>
                                Fan <input id='fan' type='radio'/>
                                Musico <input id='musico' type='radio'/>
                                Local <input id='local' type='radio'/><br>
                                <input value="Registrarse" type="submit" id="registro"/>
                            </p>
                        </div>                       
                    </div>
                </div>
            </div>
            
            <div id="inicio" class="modal fade" role="dialog">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Iniciar Sesión</h4>
                        </div>
                        <div class="modal-body">
                            <p>
                                <label for='inputNombre'>Nombre de usuario:</label>
                                <input name='nombre' id='inputNombre' type='text'><br>
                                <label for='inputPass'>Contraseña:</label>
                                <input name='pass' id='pass' type='password'><br>
                                <input id='submitinicio' type='submit' value='Iniciar Sesión'>
                            </p>
                        </div>                       
                    </div>
                </div>
            </div>
            
            <div class="clear">
            <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">GODMusic</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Pagina Principal</a></li>
      <li><a href="#">Perfil</a></li>
      <li><a href="#">Contacto</a></li>
    </ul>
     <ul class="nav navbar-nav navbar-right">
      <li><a href="#"><button<span type="button" class="glyphicon glyphicon-user" data-toggle="modal" data-target="#registro"></span></button> Sign Up</a></li>
      <li><a href="#"><button<span type="button" class="glyphicon glyphicon-log-in" data-toggle="modal" data-target="#inicio"></span></button> Login</a></li>
    </ul>
    <form class="navbar-form navbar-left">
      <div class="input-group">
        <input type="text" class="form-control" placeholder="Buscar">
        <div class="input-group-btn">
          <button class="btn btn-default" type="submit">
            <i class="glyphicon glyphicon-search"></i>
          </button>
        </div>
      </div>
    </form>
  </div>
</nav>
</div>
        </div>
        
        <div id="sinomevennoexisto">
            <u> <h1>Modificar perfil<h1></u>
        <div class="primario">
       <div>Telefono:<input name="telefono" placeholder="Numero de telefono" type="text" /></div>
                      <div>Contraseña:<input name="pass" placeholder="Contraseña" type="password" /></div>
                      <div> Confirmar contraseña:<input name="pass2" placeholder="Confirmar contaseña" type="password" /></div>
                      <div> Email:<input name="mail" placeholder="Dirección de correo electronico" type="email" /></div>
                      <div> Estilos de musica que te interesan:</div><div> Rap<input name="mail"  type="radio"/></div>
                    <div>  Trap<input name="mail"  type="radio" /></div>
                    <div>  house<input name="mail"  type="radio" /></div>
                    <div> Rock<input name="mail"  type="radio" /></div>
                    <div> Reggae<input name="mail"  type="radio" /></div>
                     <div><input id="cuarentaysientecomados" value="Modificar" type="submit"/></div>
    </div>
        <div id="primario">
          
             <div>Foto de perfil:<form action="demo_form.asp">
  <input type="file" name="pic" accept="image/*">
  <input type="submit">
</form>
             </div>
        </div>
        </div>
    </div>
       
        <footer>
            Pie de Pagina
        </footer>
    </body>
</html>
