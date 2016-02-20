<?php
require_once ('/home8/facultad/public_html/odontologia/admin/graficas/jpgraph/jpgraph.php');
require_once ('/home8/facultad/public_html/odontologia/admin/graficas/jpgraph/jpgraph_bar.php');
require('fpdf.php');

$indicador = $_GET['a'];
$ls_titulo_grafica;
$ls_titulo2_grafica;
$ls_leyenda_x;
$ls_leyenda_y;

$mysqli= new mysqli("localhost","facultad", "1942OMOC$'controlescolar", "facultad_odontologia");
if($mysqli->connect_errno){
    echo "Fallo al conectar a MySQL:(". $mysqli->connect_errno.")". $mysqli->connect_errno;
}

$resultado=$mysqli->query("call sp_reportes(". $indicador.")");
$parametro_1= array();
$parametro_2 = array();

while($row=$resultado->fetch_assoc()){

   $parametro_1[]=$row['indicador'];
   $parametro_2[]=$row['conteo'];

}

switch ($indicador)
{
case "1":

   $ls_titulo_grafica = 'Genero';

  break;

case "2":

    $ls_titulo_grafica = 'Al momento de elegir el posgrado, la Facultad de Odontologia fue su:';

  break;

case "3":

   $ls_titulo_grafica ='El posgrado que eligió cubrió sus expectativas de formación?';

case "4.1":

   $ls_titulo_grafica = 'Como valora las materias que cursó en el plan de estudios de su posgrado?';

   $ls_titulo2_grafica = 'Adecuadas en carga horaria';

case "4.2":

   $ls_titulo_grafica = 'Como valora las materias que cursó en el plan de estudios de su posgrado?';

   $ls_titulo2_grafica = 'Adecuadas en la relación teoría y práctica';

  break;

case "4.3":

   $ls_titulo_grafica = 'Como valora las materias que cursó en el plan de estudios de su posgrado?';

   $ls_titulo2_grafica = 'Congruencia entre la formacion y la linea de investigacion?';

  break;

case "4.4":

   $ls_titulo_grafica = 'Como valora las materias que cursó en el plan de estudios de su posgrado?';

   $ls_titulo2_grafica = 'Contenidos actualizados';

  break;

case "5.1":

  $ls_titulo_grafica = 'Valore los servicios del posgrado:';

  $ls_titulo2_grafica = 'Promocion y dufision de convocatoria';

break;

case "5.2":

  $ls_titulo_grafica = 'Valore los servicios del posgrado';

  $ls_titulo2_grafica = 'Proceso de seleccion';

break;

case "5.3":

  $ls_titulo_grafica = 'Valore los servicios del posgrado';

  $ls_titulo2_grafica = 'Curso propedeutico';

break;

case "5.4":

  $ls_titulo_grafica = 'Valore los servicios del posgrado';

  $ls_titulo2_grafica = 'Tutorias';

break;

case "5.5":

  $ls_titulo_grafica = 'Valore los servicios del posgrado';

  $ls_titulo2_grafica = 'Disponibilidad de material didactico';

break;

case "5.6":

  $ls_titulo_grafica = 'Valore los servicios del posgrado';

  $ls_titulo2_grafica = 'Acceso a los servicios de computo';

break;

case "5.7":

  $ls_titulo_grafica = 'Valore los servicios del posgrado';

  $ls_titulo2_grafica = 'Programas de vinculacion nacionales e internacionales';

break;

case "5.8":

  $ls_titulo_grafica = 'Valore los servicios del posgrado';

  $ls_titulo2_grafica = 'Bases de datos actualizadas del area';

break;

case "5.9":

  $ls_titulo_grafica = 'Valore los servicios del posgrado';

  $ls_titulo2_grafica = 'Disponibilidad de material bibliografico';

break;

case "5.10":

  $ls_titulo_grafica = 'Valore los servicios del posgrado';

  $ls_titulo2_grafica = 'Actividades y eventos de difusion';

break;

case "5.11":

  $ls_titulo_grafica = 'Valore los servicios del posgrado';

  $ls_titulo2_grafica = 'Programa de apoyo para la publicacion cientifica';

break;

case "5.12":

  $ls_titulo_grafica = 'Valore los servicios del posgrado';

  $ls_titulo2_grafica = 'Programas de apoyo para becas';

break;

case "5.13":

  $ls_titulo_grafica = 'Valore los servicios del posgrado';

  $ls_titulo2_grafica = 'Programa de movilidad estudiantil interinstitucional';

break;

case "5.14":

  $ls_titulo_grafica = 'Valore los servicios del posgrado';

  $ls_titulo2_grafica = 'Costos';

break;

case "6.1":

  $ls_titulo_grafica = 'Valore la infraestructura del posgrado';

  $ls_titulo2_grafica = 'Clinicas';

break;

case "6.2":

  $ls_titulo_grafica = 'Valore la infraestructura del posgrado';

  $ls_titulo2_grafica = 'Laboratorios';

break;

case "6.3":

  $ls_titulo_grafica = 'Valore la infraestructura del posgrado';

  $ls_titulo2_grafica = 'Centro de esterilizacion';

break;

case "6.4":

  $ls_titulo_grafica = 'Valore la infraestructura del posgrado';

  $ls_titulo2_grafica = 'Laboratorio de computo';

break;

case "6.5":

  $ls_titulo_grafica = 'Valore la infraestructura del posgrado';

  $ls_titulo2_grafica = 'Espacios para desarrollar sus actividades de estudio';

break;

case "6.6":

  $ls_titulo_grafica = 'Valore la infraestructura del posgrado';

  $ls_titulo2_grafica = 'Biblioteca';

break;

case "6.7":

  $ls_titulo_grafica = 'Valore la infraestructura del posgrado';

  $ls_titulo2_grafica = 'Instalaciones deportivas';

break;

case "6.8":

  $ls_titulo_grafica = 'Valore la infraestructura del posgrado';

  $ls_titulo2_grafica = 'Estacionamiento';

break;

case "6.9":

  $ls_titulo_grafica = 'Valore la infraestructura del posgrado';

  $ls_titulo2_grafica = 'Condiciones generales de las instalaciones';

break;

case "7.1":

  $ls_titulo_grafica = 'Para que los egresados tengan mayor capacidad de incorporarse al ámbito laboral, ¿qué modificaciones al posgrado sugiere';

  $ls_titulo2_grafica = 'Enfatizar los aspectos prácticos en la mayoría de las materias.';

break;

case "7.2":

  $ls_titulo_grafica = 'Para que los egresados tengan mayor capacidad de incorporarse al ámbito laboral, ¿qué modificaciones al posgrado sugiere';

  $ls_titulo2_grafica = 'Actualización de los contenidos';

break;

case "7.3":

  $ls_titulo_grafica = 'Para que los egresados tengan mayor capacidad de incorporarse al ámbito laboral, ¿qué modificaciones al posgrado sugiere';

  $ls_titulo2_grafica = 'Dar mayor peso a la investigación';

break;

case "7.4":

  $ls_titulo_grafica = 'Para que los egresados tengan mayor capacidad de incorporarse al ámbito laboral, ¿qué modificaciones al posgrado sugiere';

  $ls_titulo2_grafica = 'Complementar y enriquecer los contenidos con cursos y conferencias';

break;

case "7.5":

  $ls_titulo_grafica = 'Para que los egresados tengan mayor capacidad de incorporarse al ámbito laboral, ¿qué modificaciones al posgrado sugiere';

  $ls_titulo2_grafica = 'Reducir las materias teóricas';

break;

case "7.6":

  $ls_titulo_grafica = 'Para que los egresados tengan mayor capacidad de incorporarse al ámbito laboral, ¿qué modificaciones al posgrado sugiere';

  $ls_titulo2_grafica = 'Otro';

break;

case "8.1":

  $ls_titulo_grafica = 'Trabajo';

break;

case "8.2":

  $ls_titulo_grafica = 'Ejerces la profesión: ';

break;

case "10":

  $ls_titulo_grafica = 'Que tanto influyó tu preparación de posgrado en el empleo actual:';

break;

case "11.1":

   $ls_titulo_grafica = '¿En cuál de los siguientes aspectos considera que impactó el posgrado que cursó? ';
   $ls_titulo2_grafica = 'Mejores alternativas de desarrollo profesional y personal';

 break;
 
case "11.2":

  $ls_titulo_grafica = '¿En cuál de los siguientes aspectos considera que impactó el posgrado que cursó?';
  $ls_titulo2_grafica = 'Posibilidad de incursionar en campos científicos';

break;

case "11.3":

   $ls_titulo_grafica = '¿En cuál de los siguientes aspectos considera que impactó el posgrado que cursó?';
  $ls_titulo2_grafica = 'Apertura de oportunidades ';

break;

case "11.4":

   $ls_titulo_grafica = '¿En cuál de los siguientes aspectos considera que impactó el posgrado que cursó?';
  $ls_titulo2_grafica = 'Una mejor situación laboral ';

break;

case "11.5":

   $ls_titulo_grafica = '¿En cuál de los siguientes aspectos considera que impactó el posgrado que cursó?';
  $ls_titulo2_grafica = 'Otro, Especifique:';

break;

case "12.1":

   $ls_titulo_grafica = 'Si después de sus estudios de posgrado ha publicado';
  $ls_titulo2_grafica = 'Libros';

break;

case "12.2":

   $ls_titulo_grafica = 'Si después de sus estudios de posgrado ha publicado';
  $ls_titulo2_grafica = 'Artículos en revistas arbitradas';

break;

case "12.3":

   $ls_titulo_grafica = 'Si después de sus estudios de posgrado ha publicado';
  $ls_titulo2_grafica = 'Artículos en revistas no arbitradas';

break;

case "12.4":

   $ls_titulo_grafica = 'Si después de sus estudios de posgrado ha publicado';
  $ls_titulo2_grafica = 'Otro, Especifique:';

break;

case "16.1":

   $ls_titulo_grafica = 'Si desea recibir información sobre las actividades que se realizan en esta Facultad marque con una “X” el tema de su interés:';
  $ls_titulo2_grafica = 'Posgrados';

break;

case "16.2":

   $ls_titulo_grafica = 'Si desea recibir información sobre las actividades que se realizan en esta Facultad marque con una “X” el tema de su interés:';
  $ls_titulo2_grafica = 'Diplomados';

break;

case "16.3":

   $ls_titulo_grafica = 'Si desea recibir información sobre las actividades que se realizan en esta Facultad marque con una “X” el tema de su interés:';
  $ls_titulo2_grafica = 'Investigación';

break;

case "16.4":

   $ls_titulo_grafica = 'Si desea recibir información sobre las actividades que se realizan en esta Facultad marque con una “X” el tema de su interés:';
  $ls_titulo2_grafica = 'Eventos académicos (congresos, conferencias, seminarios, talleres)';

break;

case "16.5":

   $ls_titulo_grafica = 'Si desea recibir información sobre las actividades que se realizan en esta Facultad marque con una “X” el tema de su interés:';
  $ls_titulo2_grafica = 'Eventos culturales';

break;

case "16.6":

   $ls_titulo_grafica = 'Si desea recibir información sobre las actividades que se realizan en esta Facultad marque con una “X” el tema de su interés:';
  $ls_titulo2_grafica = 'Posgrados';

break;

case "16.7":

   $ls_titulo_grafica = 'Si desea recibir información sobre las actividades que se realizan en esta Facultad marque con una “X” el tema de su interés:';
  $ls_titulo2_grafica = 'Eventos recreativos y deportivos';

break;

case "16.8":

   $ls_titulo_grafica = 'Si desea recibir información sobre las actividades que se realizan en esta Facultad marque con una “X” el tema de su interés:';
  $ls_titulo2_grafica = 'Eventos sociales';

break;

case "16.9":

   $ls_titulo_grafica = 'Si desea recibir información sobre las actividades que se realizan en esta Facultad marque con una “X” el tema de su interés:';
  $ls_titulo2_grafica = 'Otro, Especifique: ';

break;
}

class PDF extends FPDF
{
// Cabecera de página

		function Header()
		{
		
			// Logos
			$this->Image('logo_uabc.png',10,13,20);
			$this->Image('logo_odonto.png',180,11,20);
			// Arial bold 15
			
			$this->SetFont('Arial','B',15);
			// Movernos a la derecha
			$this->Cell(80);
			// Título
			 $this->Cell(30,10,'Universidad Autonoma de Baja California',0,0,'C');
			 $this->Ln(10);
			 $this->Cell(190,10,'Facultad de Odontología Mexicali',0,0,'C');
			 $this->Ln(10);
			 $this->SetFont('Arial','B',10); 
			 $this->Cell(190,10,'Coordinación de Posgrado e Investigación',0,0,'C');
			 $this->Ln(10);
			 $this->Cell(190,10,$titulo,0,0,'C');
			 $this->Ln(20);
		}

		
		function Footer()
		{
			// Posición: a 1,5 cm del final
			$this->SetY(-15);
			// Arial italic 8
			$this->SetFont('Arial','I',8);
			// Número de página
			$this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
		}

		 function cabeceraHorizontal($cabecera,$titulo)
			{
				$this->SetXY(20, 70);
				$this->SetFont('Arial','B',10);
				$this->SetFillColor(118,146,60);//Fondo verde de celda
				//$this->SetTextColor(240, 255, 240); //Letra color blanco
				$this->CellFitSpace(30,7,'',1, 0 , 'C', true);
				foreach($cabecera as $fila)
				{
		 
					$this->CellFitSpace(30,7, utf8_decode($fila),1, 0 , 'C', true);
		 
				}
			}
		 
			function datosHorizontal($datos)
			{
				$this->SetXY(20,77);
				$this->SetFont('Arial','',10);
				$this->SetFillColor(52, 120, 79); //Gris tenue de cada fila
				$this->SetTextColor(3, 3, 3); //Color del texto: Negro
				$bandera = false; //Para alternar el relleno
				$this->CellFitSpace(30,7, 'Num. de Personas',1, 0 , 'C' );
				foreach($datos as $fila)
				{
					//Usaremos CellFitSpace en lugar de Cell
					$this->CellFitSpace(30,7, utf8_decode($fila),1, 0 , 'C' );
		   

					$bandera = !$bandera;//Alterna el valor de la bandera
				}
			}
		 
			function tablaHorizontal($cabeceraHorizontal, $datosHorizontal)
			{
				$this->cabeceraHorizontal($cabeceraHorizontal);
				$this->datosHorizontal($datosHorizontal);
			}
		 
			//***** Aquí comienza código para ajustar texto *************
			//***********************************************************
			function CellFit($w, $h=0, $txt='', $border=0, $ln=0, $align='', $fill=false, $link='', $scale=false, $force=true)
			{
				//Get string width
				$str_width=$this->GetStringWidth($txt);
		 
				//Calculate ratio to fit cell
				if($w==0)
					$w = $this->w-$this->rMargin-$this->x;
				$ratio = ($w-$this->cMargin*2)/$str_width;
		 
				$fit = ($ratio < 1 || ($ratio > 1 && $force));
				if ($fit)
				{
					if ($scale)
					{
						
						$horiz_scale=$ratio*100.0;
						
						$this->_out(sprintf('BT %.2F Tz ET',$horiz_scale));
					}
					else
					{
					   
						$char_space=($w-$this->cMargin*2-$str_width)/max($this->MBGetStringLength($txt)-1,1)*$this->k;
					  
						$this->_out(sprintf('BT %.2F Tc ET',$char_space));
					}
					
					$align='';
				}
		 
			  
				$this->Cell($w,$h,$txt,$border,$ln,$align,$fill,$link);
		 
			 
				if ($fit)
					$this->_out('BT '.($scale ? '100 Tz' : '0 Tc').' ET');
			}
		 
			function CellFitSpace($w, $h=0, $txt='', $border=0, $ln=0, $align='', $fill=false, $link='')
			{
				$this->CellFit($w,$h,$txt,$border,$ln,$align,$fill,$link,false,false);
			}
		 
		  
			function MBGetStringLength($s)
			{
				if($this->CurrentFont['type']=='Type0')
				{
					$len = 0;
					$nbbytes = strlen($s);
					for ($i = 0; $i < $nbbytes; $i++)
					{
						if (ord($s[$i])<128)
							$len++;
						else
						{
							$len++;
							$i++;
						}
					}
					return $len;
				}
				else
					return strlen($s);
			}


} // end fpdf

$grafico = new Graph(600, 400, 'auto');
$grafico->SetScale("textint");
$grafico->title->Set($ls_titulo_grafica);
$grafico->subtitle->Set($ls_titulo2_grafica);
//$grafico->xaxis->title->Set("Trabajadores");
$grafico->xaxis->SetTickLabels($parametro_1);
$grafico->yaxis->title->Set("Num. de Personas");
$barplot1 = new BarPlot($parametro_2);
$barplot1->SetFillGradient("#4D75E3","white", GRAD_LEFT_REFLECTION);
// 30 pixeles de ancho para cada barra
$barplot1->SetWidth(35);
$grafico->Add($barplot1);
unlink('grafica.png');
$grafico->Stroke("grafica.png");

// Creación del objeto de la clase heredada
$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage('P','Letter');
$pdf->SetFont('Arial','',12);
$pdf->Image('grafica.png',20,110,170);
$miCabecera = $parametro_1;
$misDatos = $parametro_2;
$pdf->cabeceraHorizontal($miCabecera,$ls_titulo_grafica);
$pdf->datosHorizontal($misDatos);
$pdf->Output();

?>