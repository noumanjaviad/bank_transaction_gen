<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class GeneratePdfController extends Controller
{
    public function test(){
        $data = [
            'customer_name' => 'MR. ARFAN ALI',
            'account_details' => [
                'date' => '07/11/2024',
                'branch' => 'DUBAI MALL BRANCH',
                'currency' => 'UAE DIRHAM',
                'account_no' => '1015851695701',
                'iban' => 'AE66 0260 0010 1585 1695 701',
                'account_type' => 'Current Account',
            ],
            'transactions' => [
                [
                    'date' => '07-06-2024',
                    'description' => 'POS-PURCHASE<br>HARAM RESTAURANT CONFEC DUBAI:AE',
                    'debits' => '60.00',
                    'credits' => '-',
                    'balance' => '35,288.63',
                ],
                // Add more transactions as needed
            ],
        ];
        return view('Admin.pdf.transaction',compact('data'));
    }
    public function generatePdf()
    {
        $data = [
            'customer_name' => 'MR. ARFAN ALI',
            'account_details' => [
                'date' => '07/11/2024',
                'branch' => 'DUBAI MALL BRANCH',
                'currency' => 'UAE DIRHAM',
                'account_no' => '1015851695701',
                'iban' => 'AE66 0260 0010 1585 1695 701',
                'account_type' => 'Current Account',
            ],
            'transactions' => [
                [
                    'date' => '07-06-2024',
                    'description' => 'POS-PURCHASE<br>HARAM RESTAURANT CONFEC DUBAI:AE',
                    'debits' => '60.00',
                    'credits' => '-',
                    'balance' => '35,288.63',
                ],
                // Add more transactions as needed
            ],
        ];

        $pdf = Pdf::loadView('Admin.pdf.transaction', $data);
        return $pdf->download('statement.pdf');
    }
}
