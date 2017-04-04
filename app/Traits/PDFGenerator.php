<?php

namespace App\Traits;

use PDF;
use Carbon\Carbon;
use view;

trait PDFGenerator {


    public function getPDF($view,$letterexists,$font,$page,$title = "Report"){

        $mytime = Carbon::now()->setTimezone('Asia/Kolkata');
        if ($letterexists) {
                 PDF::setHeaderCallback(function($pdf) {
                    $image_file = public_path().'\images\mini-logo2.png';
                    $uni_img=public_path().'\images\uni.jpg';
                    $pdf->Image($image_file, 10, 5, 25, '', 'PNG', '', 'T', false, 300, '', false, false, 0, false, false, false);
                    $pdf->SetFont('helvetica', 'B', 22);
                    $pdf->MultiCell(120, 5, 'Punjabi University, Patiala.', 0, 'L', 0, 2, 45, 12,true);
                    $pdf->SetFont('helvetica', 'B', 12);
                    $pdf->MultiCell(125, 5, '(Established under Punjab Act No. 35 of 1961)', 0, 'L', 0, 0, 42, '',true);
                    $style = array('width' => 0.5, 'cap' => 'butt', 'join' => 'miter', 'dash' => 0, 'color' => array(255, 0, 0));
                    $pdf->Line(0, 30, 230, 30, $style);
                    PDF::Image($uni_img, 0, 50, 200, 120, '', '', 'M', true, 80, '', false, false, 0, false, false, false); 
                    $pdf->SetMargins(15,40, 15);
                });
                PDF::setFooterCallback(function($pdf){
                    $pdf->SetY(-13);
                    $style = array('width' => 0.3, 'cap' => 'butt', 'join' => 'miter', 'dash' => 0, 'color' => array(255, 206,206));
                    $pdf->Line(0, 340, 230, 340, $style);
                    $pdf->SetFont('anmollipi', ' ', 9);
                    $pdf->MultiCell(60, 5, ' pMnw: '.$pdf->getAliasNumPage(), 0, '', 0, 0, 96, '',true);

                });
         }
         else{
            PDF::setHeaderCallback(function($pdf) {

                if(PDF::PageNo()===1){
                    $image_file = public_path().'\images\mini-logo2.png';
                    $uni_img=public_path().'\images\uni.jpg';
                    $pdf->Image($image_file, 10, 5, 25, '', 'PNG', '', 'T', false, 300, '', false, false, 0, false, false, false);
                    $pdf->SetFont('helvetica', 'B', 22);
                    $pdf->MultiCell(120, 5, 'Punjabi University, Patiala.', 0, 'L', 0, 2, 45, 12,true);
                    $pdf->SetFont('helvetica', 'B', 12);
                    $pdf->MultiCell(125, 5, '(Established under Punjab Act No. 35 of 1961)', 0, 'L', 0, 0, 42, '',true);
                    $style = array('width' => 0.5, 'cap' => 'butt', 'join' => 'miter', 'dash' => 0, 'color' => array(255, 0, 0));
                    $pdf->Line(0, 30, 230, 30, $style);
                    PDF::Image($uni_img, 0, 50, 200, 120, '', '', 'M', true, 80, '', false, false, 0, false, false, false); 
                    $pdf->SetMargins(15,40, 15);
                }
                else
                {
                    $uni_img=public_path().'\images\uni.jpg';
                    PDF::Image($uni_img, 0, 50, 200, 120, '', '', 'M', true, 80, '', false, false, 0, false, false, false); 
                    $pdf->SetMargins(15,15, 15);
                }

            });

            PDF::setFooterCallback(function($pdf){
                $mytime = Carbon::now()->setTimezone('Asia/Kolkata');
                $pdf->SetY(-15);
                $pdf->SetFont('helvetica', 'B', 10);
                $pdf->MultiCell(55, 5, 'Page '.$pdf->getAliasNumPage().'/'.$pdf->getAliasNbPages(), 0, '', 0, 0, 96, '',true);
            });
        }    

        PDF::SetAuthor('Punjabi University');
        PDF::SetTitle($title);
        PDF::SetSubject('Punjabi University');       
        PDF::SetFontSubsetting(false);
        PDF::SetFontSize('10px');
        PDF::SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);
        PDF::AddPage('P', $page);
        
           PDF::SetFont('akaash') ;
        
        PDF::writeHTML($view);
        PDF::lastPage();
        PDF::Output($title.'.pdf', 'I');
    }
}