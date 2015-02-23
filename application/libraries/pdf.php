<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

require_once APPPATH . 'third_party/tcpdf/tcpdf.php';

class Pdf extends TCPDF
{
    function __construct()
    {
        parent::__construct();
    }
    
    //Page header
    public function Header() {
        // Logo
        $image_file = K_PATH_IMAGES.'logocarrito.png';
        $this->Image($image_file, 10, 10, 60, '', 'png', '', 'T', false, 300, '', false, false, 0, false, false, false);
       
        // Set font
        //$this->SetFont('helvetica', 'B', 20);
        // Title
       //$this->Cell(0, 25, 'FACTURA DE LA COMPRA', 0, false, 'C', 0, '', 0, false, 'M', 'M');
       //$this->writeHTMLCell($w = 0, $h = 0, $x = '80', $y = '11', 'FACTURA DE LA COMPRA', $border = 0, $ln = 1, $fill = 0, $reseth = true, $align = 'C', $autopadding = true);
    }
    
    // Page footer
	public function Footer() {
		// Position at 15 mm from bottom
		$this->SetY(-15);
		// Set font
		$this->SetFont('helvetica', 'I', 8);
		// Page number
		$this->Cell(0, 10, 'Page '.$this->getAliasNumPage().'/'.$this->getAliasNbPages(), 0, false, 'C', 0, '', 0, false, 'T', 'M');
	}
	
	public function DatosFacturacion($nomfactura){
	    $txt = "Shopping Cart Componentes\n" . "SL CIF: B73347494\n" . "Avda Europa, 2-3, Pol.Ind. Las Salinas" . "Alhama de Huelva\n" . "30840.Murcia.";
	    
	    // set cell padding
	    $this->setCellPaddings(1, 1, 1, 1);
	    
	    // set cell margins
	    $this->setCellMargins(1, 1, 1, 1);
	    
	    // set color for background
	    $this->SetFillColor(255, 255, 227);
	    $this->SetFont('helvetica', 'B', 20);
	    $this->Cell($w = 0, $h = 0, $nomfactura, $border = 0, $ln = 2, $align = 'C');
	    
	    // set font
	    $this->SetFont('times', 'BI', 12);
	    
	    // Vertical alignment
	    $this->MultiCell(90, 20, $txt, 1, 'J', 1, 0, '', '', true, 0, false, true, 40, 'T');
	    
	    $this->MultiCell(0, 20, $txt, 1, 'J', 1, 0, '', '', true, 0, false, true, 40, 'T');
	    
	    $this->Ln(30);
	}
}