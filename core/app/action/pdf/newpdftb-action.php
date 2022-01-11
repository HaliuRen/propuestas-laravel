<?php
require('fpdf/fpdf.php');

$fpdf=new fpdf();
$fpdf->AddPage('P','letter');

$p = new ViewPdfData();

class pdf  extends fpdf
{

		public function header()

		{   
			$this->SetFont('Courier','',9);
			$this->SetXY(43,10);
 			$this->write(25,'2020 "Año de Laura Méndez de Cuenca; emblema de la Mujer Mexiquense"');
 			$this->Ln(5);
			$this->SetY(22);
 			$this->SetFont('Arial','B',11);
 			$this->cell(0,12,'DIRECCIÓN GENERAL DE EDUCACIÓN MEDIA SUPERIOR',0,0,'C');
 			$this->Ln(5);
 			$this->SetX(48);
 			$this->write(15,'TELEBACHILLERATO COMUNITARIO DEL ESTADO DE MÉXICO');
 			$this->Ln(2);
 			$this->SetFont('Arial','B',10);
			$this->SetX(80);
 			$this->write(30,'PROPUESTA DE PERSONAL');

 			$this->Image('storage/edomex.png',5,3,48,15,'png');
 			$this->Image('storage/edomexm.png',165,8,45,10,'png');
		}

		public function footer()
		{


			$this->Image('storage/ppagina.png',5,208,200,70,'png');
		}

}

$estudio = EstudiosData::getByCurpL($_GET["id2"]);

$estudiop = EstudiosData::getByCurpP($_GET["id2"]);

$propuesta = ViewPdfData::getIdPdfTb($_GET["id"]);


$fpdf=new pdf('P','mm','letter',true);
$fpdf->AddPage('P','letter');


$fpdf->SetFont('Arial','',10);

$fpdf->SetY(50);
$fpdf->Cell(30,10,'Plantel TBC: '.$propuesta->Nombre_Cct);
$fpdf->Ln(5);
$fpdf->Cell(30,10,'Zona Escolar: '.$propuesta->Zona);
$fpdf->Ln(5);
$fpdf->Cell(30,10,'Municipio: '.$propuesta->municipio);
$fpdf->Ln(5);
$fpdf->Cell(30,10,'Turno: '.$propuesta->turno);

$fpdf->SetFont('Arial','',10);
$fpdf->SetXY(110,55);

$fpdf->Cell(30,10,'C.C.T.: '.$propuesta->Cct);
$fpdf->Ln(5);
$fpdf->SetXY(110,60);
$fpdf->Cell(30,10,'Localidad: '.$propuesta->localidad);
$fpdf->Ln(5);
$fpdf->SetXY(110,65);
$fpdf->Cell(30,10,'Ciclo Escolar: 2020-2021');
 

$fpdf->SetFont('Arial','B',10);
 $fpdf->SetXY(10,80);

$fpdf->write(15,'PROPUESTA');
$fpdf->SetFont('Arial','',10);
$fpdf->SetXY(10,90);
$fpdf->Cell(30,10,'Nombre Docente: ' .$propuesta->PA_Paterno." ".$propuesta->PA_Materno." ".$propuesta->PNombre);
$fpdf->Ln(5);
$fpdf->Cell(30,10,'CSP: '.$propuesta->PCve_Emp);
$fpdf->Ln(5);
$fpdf->Cell(30,10,'RFC: '.$propuesta->PRfc);
$fpdf->Ln(5);
$fpdf->Cell(30,10,'CURP: '.$propuesta->PCurp);
$fpdf->Ln(5);
$fpdf->Cell(30,10,'Dirección: '.$propuesta->Domicilio);
$fpdf->Ln(5);
$fpdf->Cell(30,10,'Colonia: '.$propuesta->Colonia);
$fpdf->Ln(5);
$fpdf->Cell(30,10,'Municipio y Ciudad:');
$fpdf->Ln(5);
$fpdf->Cell(30,10,'Codigo Postal: '.$propuesta->CP);
$fpdf->Ln(5);
$fpdf->Cell(30,10,'Entidad Nacimiento:'.$propuesta->Entidad_Nacimiento);
$fpdf->Ln(5);
$fpdf->Cell(30,10,'Estado Civil: '.$propuesta->Estado_Civil);
$fpdf->Ln(5);
$fpdf->Cell(30,10,'Telefono: '.$propuesta->Telefono);
$fpdf->Ln(5);
$fpdf->Cell(30,10,'Correo Electronico: '.$propuesta->Email);
$fpdf->Ln(5);
$fpdf->Cell(30,10,'Area Disciplinar: '.$propuesta->Area_D);
$fpdf->Ln(5);
$fpdf->Cell(30,10,'Años completos de Servicio: '.$propuesta->Tiempo_Servicio);
$fpdf->Ln(5);
$fpdf->Cell(30,10,'Años de Experiencia Frente a Grupo: '.$propuesta->A_FrenteGrupo);
$fpdf->Ln(5);
$fpdf->Cell(30,10,'Dominio Idioma Ingles: '.$propuesta->D_Ingles);
$fpdf->Ln(5);
$fpdf->Cell(30,10,'Ademas Labora en: '.$propuesta->O_Labora);
$fpdf->Ln(5);
$fpdf->Cell(30,10,'Horas que tiene: '.$propuesta->Horas_OLabora);
$fpdf->Ln(5);
$fpdf->Cell(30,10,'Licenciatura: '.$estudio->desc_nivel);
$fpdf->Ln(5);
$fpdf->Cell(30,10,'Institucion Egreso: '.$estudio->escuela);
$fpdf->Ln(5);
$fpdf->Cell(30,10,'Posgrado: '.$estudiop->desc_nivel);
$fpdf->Ln(5);
$fpdf->Cell(30,10,'Institucion Egreso Posgrado: '.$estudiop->escuela);
$fpdf->Ln(5);



$fpdf->SetFont('Arial','B',10);
$fpdf->SetXY(140,80);
$fpdf->write(15,'PLAZA A ASIGNAR');

$fpdf->SetFont('Arial','',10);
$fpdf->SetXY(120,90);
$fpdf->Cell(30,10,'Funcion: '.$propuesta->Funcion." ".$propuesta->Horas.'  Horas');
 $fpdf->SetXY(120,95);
$fpdf->Cell(30,10,'Area: '.$propuesta->Area);
$fpdf->Ln(5);

$fpdf->SetFont('Arial','B',10);
 $fpdf->SetXY(140,100);

$fpdf->write(15,'VIGENCIA CONTRATO');
$fpdf->SetXY(120,110);
$fpdf->SetFont('Arial','',10);
 $fpdf->Cell(30,10,'F. Inicio: '.$propuesta->Fec_Inicio);
$fpdf->SetXY(120,115);
$fpdf->Cell(30,10,'F. Termino: '.$propuesta->Fec_Termino);
$fpdf->Ln(5);

$fpdf->SetFont('Arial','B',10);
 $fpdf->SetXY(140,120);

$fpdf->write(15,'DOCENTE QUE DEJA LA PLAZA');

$fpdf->SetXY(120,130);
$fpdf->SetFont('Arial','',10);
 $fpdf->Cell(30,10,'Nombre: '.$propuesta->APaterno." ".$propuesta->AMaterno." ".$propuesta->Nombre);
$fpdf->SetXY(120,135);
$fpdf->Cell(30,10,'CSP: '.$propuesta->Cve_Emp);
 $fpdf->SetXY(120,140);
$fpdf->Cell(30,10,'RFC: '.$propuesta->Rfc);
 $fpdf->SetXY(120,145);
$fpdf->Cell(30,10,'CURP: '.$propuesta->Curp);
 $fpdf->SetXY(120,150);
$fpdf->Cell(30,10,'Telefono:');
 $fpdf->SetXY(120,155);
$fpdf->Cell(30,10,'Correo Electronico:');
 $fpdf->SetXY(120,160);
$fpdf->Cell(30,10,'Motivo: '.$propuesta->Motivo);
 $fpdf->SetXY(120,160);
$fpdf->SetFont('Arial','',6);
$fpdf->write(30,'* Este fomato contempla la Propuesta para cubrir vacantes,');
 $fpdf->SetXY(120,162);
$fpdf->write(30,'lo que en ningún momento implica una autorización, ya que esta');
$fpdf->SetXY(120,164);
$fpdf->write(30,'dependerá de que se cumplan los requisitos establecidos.');
 
$fpdf->Close();
//$fpdf->OutPut();
$fpdf->OutPut($propuesta->Zona."_".$propuesta->PCve_Emp."_".utf8_decode($propuesta->PA_Paterno."".$propuesta->PA_Materno."".$propuesta->PNombre).'.pdf','D');
?>