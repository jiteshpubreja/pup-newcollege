<?php

namespace App\Traits;

use PDF;
use Carbon\Carbon;
use view;

trait PDFGenerator {


    public function getPDF($view){

        $mytime = Carbon::now()->setTimezone('Asia/Kolkata');
        
        PDF::setHeaderCallback(function($pdf) {
            $image_file = public_path().'\images\mini-logo2.png';
            $uni_img=public_path().'\images\uni.jpg';
            $pdf->Image($image_file, 10, 5, 25, '', 'PNG', '', 'T', false, 300, '', false, false, 0, false, false, false);
            $pdf->SetFont('helvetica', 'B', 22);
            $pdf->MultiCell(120, 5, 'Punjabi University, Patiala.', 0, 'L', 0, 2, 45, 12,true);
            $pdf->SetFont('helvetica', 'B', 12);
            $pdf->MultiCell(125, 5, '(Established under Punjab Act No. 35 of 1961)', 0, 'L', 0, 0, 42, '',true);
            $style = array('width' => 0.5, 'cap' => 'butt', 'join' => 'miter', 'dash' => 0, 'color' => array(255, 0, 0));
            $pdf->Line(0, 30, 210, 30, $style);
            PDF::Image($uni_img, 0, 50, 200, 120, '', '', 'M', true, 80, '', false, false, 0, false, false, false); 
        });

        PDF::setFooterCallback(function($pdf){
            $mytime = Carbon::now()->setTimezone('Asia/Kolkata');
            $pdf->SetY(-15);
            $pdf->MultiCell(55, 5, 'Page '.$pdf->getAliasNumPage().'/'.$pdf->getAliasNbPages(), 0, '', 0, 0, 96, '',true);
            $pdf->SetFont('helvetica', 'B', 10);
            $pdf->MultiCell(35, 5, $mytime->toDayDateTimeString(), 0, 'C', 0, 2, 165, '', true);
        });

        PDF::SetAuthor('System');
        PDF::SetTitle('My Report');
        PDF::SetSubject('Report of System');
        PDF::SetMargins(15,40, 15);
        PDF::SetFontSubsetting(false);
        PDF::SetFontSize('10px');
        PDF::SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);
        PDF::AddPage('P', 'A4');
        
        //$template_id = PDF::startTemplate(0, 0, false);
        
        PDF::writeHTML($view);
        //PDF::endTemplate();
        PDF::lastPage();
        //PDF::printTemplate($template_id, 15, '', 0, 0, '', '', true);
        PDF::Output('Report-'.$mytime->toFormattedDateString().'.pdf', 'I');
    }
}