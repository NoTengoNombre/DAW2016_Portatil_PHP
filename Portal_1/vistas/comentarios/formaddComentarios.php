<!--
    @Created on : 27-nov-2016, 20:16:32
    @Author     : RVS - N.F.N.D - Home
    @Pag        :
    @version    :
    @TODO       :
-->
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title></title>
  </head>
  <body>
    <form method="get" action="../../Controlador.php">
      <fieldset>
        <legend>Añadir Comentarios</legend>
        <!-- <label>Id Comentarios</label>
             <input type="text" name="id_comentarios" value="">
             <br>-->
        <label>Texto</label>
        <input type="text" name="texto" value="">
        <br>
        <label>Fecha Creacion</label>
        <input type="datetime" name="fecha_creacion" value="">
        <br>
        <label>Votaciones</label>
        <input type="number" name="votaciones" value="">
        <br>
        <label>Alerta </label>
        <input type="number" name="alerta" value="">
        <br>
        <input type="hidden" name="do" value="formulario_comentarios">
        <!--<input type="submit" name="">-->
        <input type="submit" value="enviar">
      </fieldset>
    </form> 
  </body>
</html>



