<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Company;
use App\Models\Product;
use App\Models\Transaction;
use App\Models\TransactionType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class HomeController extends Controller
{
    public function getHomePage()
    {
        $totalCustomer = Product::count(); // No need to fetch all records, just count them
        $companyCounts = Product::whereIn('companyid', ['7', '8', '9'])
            ->select('companyid', DB::raw('count(*) as total'))
            ->groupBy('companyid')
            ->pluck('total', 'companyid');

        $nbd = $companyCounts['8'] ?? 0;
        $mashriq = $companyCounts['9'] ?? 0;
        $dubaiIslamic = $companyCounts['7'] ?? 0;
        // dd($totalCustomer,$nbd,$mashriq,$dubaiIslamic);
        return view('index', compact('totalCustomer', 'nbd', 'mashriq', 'dubaiIslamic'));
    }

    public function getCreateForm()
    {
        $customers = Product::with('company')->paginate(10);
        $companies = Company::select('companyid', 'name')->get();

        // dd($customers);
        return view('Admin.customer.create_customer', compact('customers', 'companies'));
    }

    // public function getProduct($productid)
    // {
    //     $product = Product::findOrFail($productid);
    //     return view('Admin.customer.show_customer', compact('product'));
    // }

    public function getCreateTransactionForm($productId)
    {
        $product = Product::findOrFail($productId);
        $transactionTypes = TransactionType::select('transactiontype_id', 'name')->get();
        // dd($transactionTypes);
        $transactions = Transaction::with('product')->get();
        // dd($transactions);
        return view('Admin.transaction.create_transaction', compact('transactionTypes', 'transactions', 'product'));
    }

    public function storeTransaction(Request $request, $productId)
    {
        // dd($request->all(),$productId);
        // Validate the incoming request
        $validated = $request->validate([
            'credit' => 'nullable|numeric|min:0',
            'debit' => 'nullable|numeric|min:0',
            'description' => 'required|string|max:255',
            'transactiontype_id' => 'required|exists:transaction_types,id', // Assuming a `transaction_types` table
            'balance' => 'required|numeric|min:0',
            'date' => 'required|date',
            'vdate' => 'nullable|date',
            'reference' => 'nullable|string|max:255',
        ]);

        try {
            // Create a transaction record
            $transaction = Transaction::create([
                'productid' => $productId,
                'credit' => $validated['credit'] ?? 0,
                'debit' => $validated['debit'] ?? 0,
                'description' => $validated['description'],
                'transactiontype_id' => $validated['transactiontype_id'],
                'balance' => $validated['balance'],
                'date' => $validated['date'],
                'vdate' => $validated['vdate'] ?? null,
                'reference' => $validated['reference'] ?? null,
            ]);

            return redirect()
                ->route('get_transaction_form', $productId)
                ->with('success', 'Transaction created successfully!');
        } catch (\Exception $e) {
            // Log error for debugging
            Log::error('Transaction creation failed: ' . $e->getMessage());

            return redirect()
                ->back()
                ->with('error', 'Failed to create transaction. Please try again.');
        }
    }




    public function getNbdCustomers()
    {
        $NbdCustomers = Product::where('companyid', '8')->with('company')->paginate(10);
        return view('Admin.nbd.show_nbd_customer', compact('NbdCustomers'));
    }
    public function getMashriqCustomers()
    {
        $mahriqCustomers = Product::where('companyid', '9')->with('company')->paginate(10);
        return view('Admin.mashriq.show_mashriq_customer', compact('mahriqCustomers'));
    }

    public function dubaiIslamicCustomers()
    {
        $dubaiIslamicCustomers = Product::where('companyid', '7')->with('company')->paginate(10);
        return view('Admin.dubai_islamic_bank.show_dib_customer', compact('dubaiIslamicCustomers'));
    }
}
