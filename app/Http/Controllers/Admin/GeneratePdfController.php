<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use Barryvdh\Snappy\Facades\SnappyPdf;
use Illuminate\Support\Facades\Log;

class GeneratePdfController extends Controller
{
    public function test(Request $request)
    {

        // $data = [
        //     'logo' => public_path('image/logo.png'),
        //     'footerImage1' => public_path('image/footer1.JPG'),
        //     'footerImage2' => public_path('image/footer2.JPG'),
        //     'customer_name' => 'MR. ARFAN ALI',
        //     'account_details' => [
        //         'date' => '07/11/2024',
        //         'branch' => 'DUBAI MALL BRANCH',
        //         'currency' => 'UAE DIRHAM',
        //         'account_no' => '1015851695701',
        //         'iban' => 'AE66 0260 0010 1585 1695 701',
        //         'account_type' => 'Current Account',
        //     ],
        //     'transactions' => [
        //         [
        //             'date' => '07-06-2024',
        //             'description' => 'POS-PURCHASE<br>HARAM RESTAURANT CONFEC DUBAI:AE',
        //             'debits' => '60.00',
        //             'credits' => '-',
        //             'balance' => '35,288.63',
        //         ],
        //     ],
        // ];
        // return view('Admin.pdf.latest', compact('data'));
        // Define the dates in their stored formats
        $productid=93;
        $vdate = '12-02-2012'; // DD-MM-YYYY
        $date = '08/27/2024'; // MM/DD/YYYY

        // Query transactions
        $trans = Transaction::where('vdate', $vdate)
            ->where('date', $date)
            ->where('productid', $productid)
            ->with('product') // Eager load product details
            ->get();
        return view('Admin.pdf.latest', compact('trans'));
    }

    // public function generatePdf()
    // {
    //     $imagePath = public_path('image/logo.png');
    //     $footerImage1 = public_path('image/footer1.JPG');
    //     $footerImage2 = public_path('image/footer2.JPG');
    //     $data = [
    //         'logo' => $imagePath,
    //         'footerImage1'=>$footerImage1,
    //         'footerImage2'=>$footerImage2,
    //         'customer_name' => 'MR. ARFAN ALI',
    //         'account_details' => [
    //             'date' => '07/11/2024',
    //             'branch' => 'DUBAI MALL BRANCH',
    //             'currency' => 'UAE DIRHAM',
    //             'account_no' => '1015851695701',
    //             'iban' => 'AE66 0260 0010 1585 1695 701',
    //             'account_type' => 'Current Account',
    //         ],
    //         'transactions' => [
    //             [
    //                 'date' => '07-06-2024',
    //                 'description' => 'POS-PURCHASE<br>HARAM RESTAURANT CONFEC DUBAI:AE',
    //                 'debits' => '60.00',
    //                 'credits' => '-',
    //                 'balance' => '35,288.63',
    //             ],
    //         ],
    //     ];

    //     $pdf = Pdf::loadView('Admin.pdf.index_gen', compact('data'));
    //     // ->setOptions([
    //     //     'defaultFont' => 'Amiri',
    //     //     'isHtml5ParserEnabled' => true,
    //     //     'isRemoteEnabled' => true,
    //     // ]);
    //     // dd($pdf);
    //     // return view('Admin.pdf.test_gen',compact('d'));
    //     return $pdf->download('statement.pdf');
    // }
    // public function generatePdf()
    // {

    //     $data = [
    //         'logo' => public_path('image/logo.png'),
    //         'footerImage1' => public_path('image/footer1.JPG'),
    //         'footerImage2' => public_path('image/footer2.JPG'),
    //         'customer_name' => 'MR. ARFAN ALI',
    //         'account_details' => [
    //             'date' => '07/11/2024',
    //             'branch' => 'DUBAI MALL BRANCH',
    //             'currency' => 'UAE DIRHAM',
    //             'account_no' => '1015851695701',
    //             'iban' => 'AE66 0260 0010 1585 1695 701',
    //             'account_type' => 'Current Account',
    //         ],
    //         'transactions' => [
    //             [
    //                 'date' => '07-06-2024',
    //                 'description' => 'POS-PURCHASE<br>HARAM RESTAURANT CONFEC DUBAI:AE',
    //                 'debits' => '60.00',
    //                 'credits' => '-',
    //                 'balance' => '35,288.63',
    //             ],
    //         ],
    //     ];

    //     $pdf = Pdf::loadView('Admin.pdf.test_gen', compact('data'))
    //     ->set_option('defaultFont', 'Amiri');
    //     return $pdf->download('statement.pdf');
    // }

    public function generatePdf()
    {
        $data = [
            'logo' => public_path('image/logo.png'),
            'footerImage1' => public_path('image/footer1.JPG'),
            'footerImage2' => public_path('image/footer2.JPG'),
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
            ],
        ];

        $pdf = Pdf::loadView('Admin.pdf.test_gen', compact('data'));
        return $pdf->download('statement.pdf');
    }

    // public function generatePdf()
    // {
    //     try {
    //         // Prepare data for the PDF
    //         $data = [
    //             'logo' => asset('image/logo.png'),
    //             'footerImage1' => asset('image/footer1.JPG'),
    //             'footerImage2' => asset('image/footer2.JPG'),
    //             'customer_name' => 'MR. ARFAN ALI',
    //             'account_details' => [
    //                 'date' => '07/11/2024',
    //                 'branch' => 'DUBAI MALL BRANCH',
    //                 'currency' => 'UAE DIRHAM',
    //                 'account_no' => '1015851695701',
    //                 'iban' => 'AE66 0260 0010 1585 1695 701',
    //                 'account_type' => 'Current Account',
    //             ],
    //             'transactions' => [
    //                 [
    //                     'date' => '07-06-2024',
    //                     'description' => 'POS-PURCHASE<br>HARAM RESTAURANT CONFEC DUBAI:AE',
    //                     'debits' => '60.00',
    //                     'credits' => '-',
    //                     'balance' => '35,288.63',
    //                 ],
    //             ],
    //         ];

    //         // Load the view into the PDF generator
    //         $pdf = SnappyPdf::loadView('Admin.pdf.test_gen', compact('data'));

    //         // Set additional options (if needed)
    //         $pdf->setOption('lowquality', true); // Optional: improves speed by reducing quality
    //         $pdf->setTimeout(120); // Optional: increase timeout if necessary

    //         // Return the generated PDF for download
    //         return $pdf->download('statement.pdf');
    //     } catch (\Exception $e) {
    //         // Log the error for debugging
    //         log::error('PDF Generation Error: ' . $e->getMessage());

    //         // Return a friendly error response
    //         return response()->json([
    //             'message' => 'An error occurred while generating the PDF.',
    //             'error' => $e->getMessage(),
    //         ], 500);
    //     }
    // }


    // public function generatePdf(){
    //     $filePath = storage_path('Admin/pdf/test_gen');
    //     dd($filePath);
    //     // Check if the file exists
    //     if (file_exists($filePath)) {
    //         // Return the file as a download response
    //         return response()->download($filePath);
    //     }

    //     // Return an error response if the file does not exist
    //     return redirect()->back()->with('error', 'File not found.');
    // }


}
