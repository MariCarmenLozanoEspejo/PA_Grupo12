<html>
    <body>
        <form>
            Nombre proceso: <input type="text" name="nombreProceso" value=""> <br> <br>
            Parámetros de entrada: <input type="number" name="parametrosEntrada" value=""/>  <br> <br>
            Parámetros del proceso: <input type="number" name="parametrosProceso" value=""/>
            <br><br>
            <input type="checkbox" id="sp1" value="sp1">Log con resumen de la ejecución.<br>
            <input type="checkbox" id="sp2" value="sp2">Fichero con resumen de la ejecución.<br>
            <input type="checkbox" id="sp2" value="sp2">Envío de email con resumen de la ejecución.<br>
            <br>
            <input type="submit" value="envio" name="envio" />
        </form>
        <?php
        if(isset($_POST['envio'])){
            
        }
        ?>
    </body>
</html>


