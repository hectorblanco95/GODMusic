<html>
    <head>
    
        <title>Registro</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <link href="registro.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div id="cua">
            <header class="complet">
                <div class="top">
                    <img id="logo" src="../img/logo.PNG"
                         alt="music"
                         title="music"/>  
                </div>
                <div class="top2">    
                  <div class="cd">
                        <div class="button">Iniciar Sesión</div>
                        <form class="hd">
                            <label for="inputNombre">Nombre de usuario:</label>
                            <input name="nombre" id="inputNombre" type="text">
                            <label for="inputPass">Contraseña:</label>
                            <input name="pass" id="pass" type="password">
                            <input id="submit" type="submit"  value="Iniciar Sesión">
                        </form>
                    </div>
                
                    
                <div >
                    <input id="botonderegistro" class="sep" type="button" value="Registrarse" onClick="location.href = 'registro.php'" />
                </div>
                </div>    
            </header>
            <div class="clear">
                <div class="barra"><img class="imgbarra" src="../img/inicio.png" alt="inicio"/></div>               
                <div class="barra"><img class="imgbarra" src="../img/perfil.png" alt="perfil"/></div>   
                <div class="barra"><img class="imgbarra" src="../img/contacto.png" alt="contacto"/></div>   
                <div class="barra"><input id="cent" type="text" placeholder="Buscar..."/></div>
                <div class="barra"><img class="imgbarra" src="../img/buscar.png" alt="buscar"/></div>  
            </div>
        </div>
               
          <h1>Registrarse</h1>
          <div id="posicionar">
              <div class="number">
                      <h2>Fan</h2>
                      <div>Nombre de usuario:<input name="perfil" placeholder="Nombre de usuario" type="text" required/></div>
                      <div>Contraseña:<input name="pass" placeholder="Contraseña" type="password" required/></div>
                      <div> Confirmar contraseña:<input name="pass" placeholder="Confirmar contaseña" type="password" required/></div>
                      <div> Email:<input name="mail" placeholder="Dirección de correo electronico" type="email" required/></div>
                      <div><input value="Registrarse" type="submit" required id="registro"/></div>
              </div>
                <div class="number">       
                      <h2>Local</h2>
                      <div>Nombre de usuario:<input name="perfil" placeholder="Nombre de usuario" type="text" required/></div>
                      <div>Contraseña:<input name="pass" placeholder="Contraseña" type="password" required/></div>
                      <div> Confirmar contraseña:<input name="pass" placeholder="Confirmar contaseña" type="password" required/></div>
                      <div> Email:<input name="mail" placeholder="Dirección de correo electronico" type="email" required/></div>
                      <div><input value="Registrarse" type="submit" required id="registro"/></div>
                </div>
              <div class="number">
                      <h2>Musico</h2>
                      <div>Nombre de usuario:<input name="perfil" placeholder="Nombre de usuario" type="text" required/></div>
                      <div>Contraseña:<input name="pass" placeholder="Contraseña" type="password" required/></div>
                      <div> Confirmar contraseña:<input name="pass" placeholder="Confirmar contaseña" type="password" required/></div>
                      <div> Email:<input name="mail" placeholder="Dirección de correo electronico" type="email" required/></div>
                      <div><input value="Registrarse" type="submit" required id="registro"/></div>
          
                </div>
          </div>
    <footer>
        <nav><a class="linkbarra" href="index.html" >Informacion de contacto</a></nav>
        
    </footer>
          
        </body>

</html>