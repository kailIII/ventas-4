<div align="center">
<form action="<?php echo $this->Html->url(array("controller" => "Usuarios","action" => "index"));?>" method="post" style="width:350px">
<fieldset style="border-style:groove; border-color:#333">
	<table align="center">
		<tr>
            <td colspan="2" style="color:#E89900; font-family:Arial; font-size:16px; padding-top:5px"><b>Login Usuario</b></td>  
         </tr>        
		<tr >
			<td style="font-family:Arial; font-size:12px; padding-top:10px">Usuario:</td>
			<td style="padding-top:10px"> <input type="text" name="data[Usuario][usuario]" /> </td>       
		</tr>
		<tr>
			<td style="font-family:Arial; font-size:12px; padding-top:5px">Contraseña:</td>
			<td style="padding-top:5px"> <input type="password" name="data[Usuario][contrasena]" /> </td>       
		</tr> 
		<tr>
			<td></td>
			<td style="padding-top:5px"><input type="submit" value="Ingresar" /> </td>       
		</tr>  
	</table>
</fieldset>
</form>
</td>
</tr>
</table>
</div>