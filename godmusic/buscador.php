<?php
 
      $buscar = $_POST['x'];
       
      if(!empty($buscar)) {
            buscar($buscar);
      }
       
      function buscar($buscar) {
            $con = mysql_connect('localhost','root', 'root');
            mysql_select_db('godmusic', $con);
       
            $sql = mysql_query("SELECT * FROM usuario WHERE nombre LIKE '%".$buscar."%'",$con);
             
            $contar = mysql_num_rows($sql);
             
            if($contar == 0){
                  echo "No se han encontrado resultados para '<b>".$buscar."</b>'.";
            }else{
                  while($row=mysql_fetch_array($sql)){
                        $nombre = $row['nombre_usuario'];
                        $id = $row['idusuario'];
                         
                        echo $id." - ".$nombre."<br /><br />";    
                  }
            }
      }
      function buscador(){
    $con = conectar("godmusic");
    $query = "SELECT * FROM usuario WHERE nombre LIKE '%".$buscar."%';;
    $resultado = mysqli_query($con, $query);
     $contar = mysql_num_rows($sql);
             
            if($contar == 0){
                  echo "No se han encontrado resultados para '<b>'.$buscar.'0</b>'.";
            }else{
                  while($row=mysql_fetch_array($sql)){
                        $nombre = $row['nombre_usuario'];
                        $id = $row['idusuario'];
                         
                        echo $id." - ".$nombre."<br /><br />";    
                  }
            }
    desconectar($con);
    return $resultado;
}
       
?>