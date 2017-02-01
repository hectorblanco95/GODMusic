<html>
    <head>
        <title>Perfil Fan</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="perfilfan.css" rel="stylesheet" type="text/css"/>
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
