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
                    $pdf->Image($image_file, 10, 4, 27, '', 'PNG', '', 'T', false, 300, '', false, false, 0, false, false, false);
                    $pdf->SetFont('akaash', 'B', 18);
                    $pdf->MultiCell(120, 5, 'ਪੰਜਾਬੀ ਯੂਨੀਵਰਿਸਟੀ, ਪਿਟਆਲਾ', 0, 'C', 0, 2, 45, 7,true);
                    $pdf->SetFont('akaash', 'B', 12);
                    $pdf->MultiCell(125, 5, '( 1961 ਦੇ ਪੰਜਾਬ ਐਕਟ ਨੰਬਰ 35 ਤਿਹਤ ਸਥਾਪਤ )', 0, 'C', 0, 2, 42, 17,true);
                    $pdf->MultiCell(125, 5, '( ਕਾਲਜ ਸੈਕਸ਼ਨ )', 0, 'C', 0, 2, 45, 23,true);
                    $style = array('width' => 0.5, 'cap' => 'butt', 'join' => 'miter', 'dash' => 0, 'color' => array(255, 0, 0));
                    $pdf->Line(0, 30, 230, 30, $style);
                    PDF::Image($uni_img, 0, 50, 200, 120, '', '', 'M', true, 80, '', false, false, 0, false, false, false); 
                    $pdf->SetMargins(15,40, 15);
                });
                PDF::setFooterCallback(function($pdf){
                    $pdf->SetY(-13);
                    $style = array('width' => 0.3, 'cap' => 'butt', 'join' => 'miter', 'dash' => 0, 'color' => array(255, 206,206));
                    $pdf->Line(0, 340, 230, 340, $style);
                    $pdf->SetFont('akaash', ' ', 9);
                    $pdf->MultiCell(60, 5, ' ਪੰਨਾ: '.$pdf->getAliasNumPage(), 0, '', 0, 0, 96, '',true);

                });
         }
         else{
            PDF::setHeaderCallback(function($pdf) {

                if(PDF::PageNo()===1){
                    $image_file = public_path().'\images\mini-logo2.png';
                    $uni_img=public_path().'\images\uni.jpg';
                    $pdf->Image($image_file, 10, 4, 27, '', 'PNG', '', 'T', false, 300, '', false, false, 0, false, false, false);
                    $pdf->SetFont('akaash', 'B', 18);
                    $pdf->MultiCell(120, 5, 'ਪੰਜਾਬੀ ਯੂਨੀਵਰਿਸਟੀ, ਪਿਟਆਲਾ', 0, 'C', 0, 2, 45, 7,true);
                    $pdf->SetFont('akaash', 'B', 12);
                    $pdf->MultiCell(125, 5, '( 1961 ਦੇ ਪੰਜਾਬ ਐਕਟ ਨੰਬਰ 35 ਤਿਹਤ ਸਥਾਪਤ )', 0, 'C', 0, 2, 42, 17,true);
                    $pdf->MultiCell(125, 5, '( ਕਾਲਜ ਸੈਕਸ਼ਨ )', 0, 'C', 0, 2, 45, 23,true);
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
                $pdf->SetFont('akaash', 'B', 10);
                $pdf->MultiCell(55, 5, 'ਪੰਨਾ: '.$pdf->getAliasNumPage().'/'.$pdf->getAliasNbPages(), 0, '', 0, 0, 96, '',true);
            });
        }    

        PDF::SetAuthor('Punjabi University');
        PDF::SetTitle($title);
        PDF::SetSubject('Punjabi University');       
        PDF::SetFontSubsetting(false);
        PDF::SetFontSize('10px');
        PDF::SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);
        PDF::AddPage('P', $page);
        
           PDF::SetFont($font) ;
        
        PDF::writeHTML($view);
        PDF::lastPage();
        PDF::Output($title.'.pdf', 'I');
    }
}