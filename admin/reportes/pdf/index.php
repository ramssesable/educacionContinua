<?php
include('conex.php');

$content = " 
	<style>
		strong{
			color: #006600;
			font-size: 18px;
		}
	</style>
	<table border='0'>
			<tr>
				<td rowspan='4'><img src='../../img/logo_uabc.png' width='60' /></td>
				<th colspan='2' width='600' align='center'><strong>Universidad Autónoma de Baja California</strong></th>
				<td rowspan='4'><img src='../../img/logo_odonto.png' width='70' /></td>
			</tr>
			<tr>
				<th colspan='2' align='center'>Facultad de Odontología</th>
			</tr>
			<tr>
				<th colspan='2' align='center'>Coordinación de Posgrado e Investigación</th>
			</tr>
			<tr>
				<th colspan='2' align='center'>Programa de seguimiento a Egresados</th>
			</tr>
			<tr>
				<td colspan='4' height='50'></td>
			</tr>
			<tr>
				<td colspan='4' height='25' align='center' style='color: #0d4680;font-weight: bold;font-size: 19px;'>Reporte de Genero</td>
			</tr>
			<tr>
				<td rowspan='2'></td>
				<th align='center' style='background-color: #76923c;color:#FFFFFF;'>Hombres</th>
				<th align='center' style='background-color: #76923c;color:#FFFFFF;'>Mujeres</th>
				<td rowspan='2'></td>
			</tr>";
    $h=0;
    $m=0;

    $result = mysql_query('SELECT sexo FROM datos_personales');
    while ($row=mysql_fetch_assoc($result)) {
        if ($row['sexo'] == 'M') {
            $h++;
       }
       if ($row['sexo'] == 'F') {
            $m++;
       }
    }					
$content.=" <tr>
				<td align='center' style='background-color: #FFFFFF;color: #000000;padding: auto;'>". $h ."</td>	
				<td align='center' style='background-color: #FFFFFF;color: #000000;padding: auto;'>". $m ."</td>	
			</tr>
			<tr>
				<td colspan='4' height='50'></td>
			</tr>
			<tr>
				<td colspan='4' align='center'>Mexicali Baja California Copyright 2014 © <img src='../../img/conacyt.png' width='30' alt='conacyt' /></td>
			</tr>
	</table>

	<iframe src="'../../graficas/js_graficas/genero_g.php'" width="'800'" height="'500'" frameborder="'0'"></iframe>
";

require_once(dirname(__FILE__).'/html2pdf/html2pdf.class.php');
$html2pdf = new HTML2PDF('P','A4','fr');
$html2pdf->WriteHTML($content);
$html2pdf->Output('reporte.pdf');
?>