<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Company;
use App\Models\Product;
use App\Models\Transaction;
use App\Models\TransactionType;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function getHomePage()
    {
        return view('index');
    }

    public function getCreateForm()
    {
        $customers = Product::with('company')->paginate(10);

        $companies = Company::select('companyid', 'name')->get();
        // dd($customers);
        return view('Admin.customer.create_customer', compact('customers', 'companies'));
    }

    public function getCreateTransactionForm()
    {
        $transactionTypes = TransactionType::select('transactiontype_id', 'name')->get();
        // dd($transactionTypes);
        $transactions = Transaction::with('product')->get();
        // dd($transactions);
        return view('Admin.transaction.create_transaction', compact('transactionTypes', 'transactions'));
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
