<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html lang="en">
<head>
	<style type="text/css" media="screen">
		<!--
			BODY {
				margin: 10px;
				padding: 0;
			}
			H1 {
				margin-bottom: 2px;
				font-family: Garamond, "Times New Roman", Times, Serif;
			}
			FIELDSET {
				border: 1px solid #ccc;
				padding: 1em;
				margin: 0;
			}
			LEGEND {
				color: #666666;
			}
			INPUT {
				display: block;
				font-family: Arial, verdana;
				padding: 7px;
				border: 1px solid #999;
				margin: 10px;
			} 
		-->
	</style> 
</head>
<body>
	<br /><br />
	<center>
		<h1>Social login</h1>
		<br />
		<br /> 
		<table width="380" border="0" cellpadding="2" cellspacing="2">
		  <tr>
			<td valign="top"><fieldset>
				<legend>Formulario</legend>
				<table width="00%" border="0" cellpadding="2" cellspacing="2">
				  <tr>
					<td><div align="right"><strong>login</strong></div></td>
					<td><input type="text" name="textfield" id="textfield" /></td>
				  </tr>
				  <tr>
					<td><div align="right"><strong>password</strong></div></td>
					<td><input type="text" name="textfield2" id="textfield2" /></td>
				  </tr>
				  <tr>
					<td>&nbsp;</td>
					<td><div align="center">
						<input type="submit" value="OK" />
					  </div></td>
				  </tr>
				</table>
			  </fieldset></td>
		  </tr>
		  <tr>
			<td valign="top" align="right">
				<img src="arrow.gif" align="texttop" style="margin-top:-5px;" >
				<!-- CODE REQUIRED BY THE WIDGET -->
					<link media="screen" rel="stylesheet" href="../widget/css/colorbox.css" />
					<script src="../widget/js/jquery.min.js"></script>
					<script src="../widget/js/jquery.colorbox.js"></script> 
					<script>
						$(document).ready(function(){
							$(".widget_link").colorbox({iframe:true, innerWidth:430, innerHeight:222});
						}); 
					</script>
				<!-- /WIDGET -->
				<!-- 
					LINK TO THE WIDGET 
						return_to: call back this page after authenticatin the user
						ts: nocache
				--> 
					<a href="../widget/?_ts=<?php echo time(); ?>&return_to=<?php echo urlencode( $CURRENT_URL ); ?>" class='widget_link' title="HybridAuth Social Sign On Widget">Inicia sesion con Facebook,Twitter</a>
			</td>
		  </tr>
		</table> 
		<br /><br /><br />
		
	</center> 
</body>
</html>