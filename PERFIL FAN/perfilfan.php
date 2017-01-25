<html>
    <head>
        <title>perfilfan</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="perfilfan.css" rel="stylesheet" type="text/css"/>
    </head>
    <header>
        <div>
        <div id="primerdiv">
          <img id="logotipo" src="logo.PNG"
                     alt="music"
                     title="music"/>  
          </div>
                    <input id="botondedesconxion" type="button" value="desconectar" onClick="location.href = 'registro.php'" />
              
         
    </header>
     
    
            <div class="clear">
                <div class="barra"> <input type="button" value="INICIO" onClick="location.href = 'index.html'" /></div>
                <div class="barra"> <input type="button" value="PERFIL" onClick="location.href = 'perfil.html'" /></div>
                <div class="barra"> <input type="button" value="CONTACTO" onClick="location.href = 'contacto.html'" /></div>
                <div class="barra"> <input type="button" value="BUSCADOR" onClick="location.href = 'dirección'" /></div>
            </div>
     
    <body>
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
