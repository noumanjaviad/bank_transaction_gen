<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class TransactionController extends Controller
{
    public function storeTransaction(Request $request)
    {
        try {
            $validatedData = $request->validate([
                'credit' => 'nullable|numeric|min:0',
                'debit' => 'nullable|numeric|min:0',
                'productid' => 'required|exists:product,productid',
                'description' => 'nullable|string|max:255',
                'transactiontype_id' => 'required|exists:transactiontype,transactiontype_id',
                'date' => 'required',
                'vdate' => 'required',
                'reference' => 'nullable|string|max:255',
            ]);

            Transaction::create([
                'credit' => $validatedData['credit'] ?? 0,
                'debit' => $validatedData['debit'] ?? 0,
                'productid' => $validatedData['productid'],
                'description' => $validatedData['description'],
                'transactiontype_id' => $validatedData['transactiontype_id'],
                'date' => $validatedData['date'],
                'vdate' => $validatedData['vdate'],
                'reference' => $validatedData['reference'],
            ]);

            return redirect()->back()->with('success', 'Transaction stored successfully.');
        } catch (\Exception $e) {
            // Log the error for debugging purposes
            Log::error('Transaction Store Error: '.$e->getMessage());

            return redirect()->back()->with('error', 'Something went wrong. Transaction not saved.');
        }
    }


}
