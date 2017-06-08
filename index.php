<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <script src="jquery/jquery-3.2.1.min.js" type="text/javascript"></script>
        <title></title>
    </head>
    <body>
        <form>
            <input type="text" name="nomusuario" id="nomusuario">
            <input type="password" name="clave" id="clave">
            <input id="enviar" type="button" onclick="" value="enviar">
            
            
        </form>
        
    </body>
    <script>
        $(document).ready(function(){
    $("#enviar").click(function(){
        $("form").hide();
        alert("cuidao todo cambio que hagas se va a ir a la concha de la madre");
    }); 
   });
   </script>
</html>
