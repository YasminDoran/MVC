<html>
        <span style="color:#3F4534;"><h1><center>Proyecto de Calificaciones </center></h1></span>
    <br>
			<center>
                <h1>Inicia Sesi&oacute;n</h1>
            </center>
    <br>
        <center>
            <form name=alumno action=axsv.php method=Post>
                <div class="CSS_Table_Example" >
                    <table border=1>
                            <tr><td><center> Bienvenido al Sistema</center></td></tr>
                            <tr>
                                <td  align='right'>Usuario:<input type='text' name='user' placeholder='Usuario' required/></td>
                            </tr>
                            <tr>
                                <td align='right'>Contrase&ntilde;a: <input type='password' name='psw' align='right' cols="75" rows="80"  placeholder='Contrase&ntilde;a' required/></td>
                            </tr>
                            <tr>
                                <a href ='axsv.php'><td><center><input type=submit name=submit value=ACCESO /></center></td></a>
                            </tr>
                    </table>
                </div>
            </form>
        </center>
<html>
<?php
require ('axsc.php');
$compAcx = new compAcx();
$mensaje = $compAcx->msg;
if ($mensaje != '')
{
    echo $mensaje ;
}
?>
<?php
require('template/footer.php');
?>