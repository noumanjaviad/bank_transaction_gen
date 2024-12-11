<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Transaction;
use App\Models\TransactionType;
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
                'description' => 'nullable|string',
                'transactiontype_id' => 'required|exists:transactiontype,transactiontype_id',
                'date' => 'nullable|date',
                'vdate' => 'nullable|date',
                'reference' => 'nullable|string|max:255',
            ]);
            $lastTransaction = Transaction::where('productid', $validatedData['productid'])
                ->latest('transactionid')
                ->first();
            // dd($lastTransaction);
            $openingBalance = $lastTransaction->balance ?? 0;
            $credit = $validatedData['credit'] ?? 0;
            $debit = $validatedData['debit'] ?? 0;
            $newBalance = $openingBalance + $credit - $debit;

            Transaction::create([
                'credit' => $credit ?? 0,
                'debit' => $debit ?? 0,
                'balance' => $newBalance ?? 0,
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
            Log::error('Transaction Store Error: ' . $e->getMessage());

            return redirect()->back()->with('error', 'Something went wrong. Transaction not saved.');
        }
    }

    public function edit($id)
    {
        $transaction = Transaction::findOrFail($id);
        $transactionTypes = TransactionType::all(); // Assuming TransactionType exists
        return view('Admin.transaction.edit_transaction', compact('transaction', 'transactionTypes'));
    }
    public function updateTransaction(Request $request, $transactionId)
    {
        // dd($request->all());
        try {
            $validatedData = $request->validate([
                'credit' => 'nullable|numeric|min:0',
                'debit' => 'nullable|numeric|min:0',
                'description' => 'nullable|string',
                'transactiontype_id' => 'nullable|exists:transactiontype,transactiontype_id',
                'date' => 'nullable|date',
                'vdate' => 'nullable|date',
                'reference' => 'nullable|string|max:255',
            ]);

            $transaction = Transaction::findOrFail($transactionId);

            $lastTransaction = Transaction::where('productid', $transaction->productid ?? null)
                ->where('transactionid', '<>', $transactionId)
                ->latest('transactionid')
                ->first();

            $openingBalance = $lastTransaction->balance ?? 0;
            $credit = $validatedData['credit'] ?? 0;
            $debit = $validatedData['debit'] ?? 0;
            $newBalance = $openingBalance + $credit - $debit;

            $transaction->update([
                'credit' => $credit,
                'debit' => $debit,
                'balance' => $newBalance,
                'description' => $validatedData['description'],
                'transactiontype_id' => $validatedData['transactiontype_id'],
                'date' => $validatedData['date'],
                'vdate' => $validatedData['vdate'],
                'reference' => $validatedData['reference'],
            ]);

            return redirect()->route('get_transaction_form')->with('success', 'Transaction updated successfully.');
        } catch (\Illuminate\Validation\ValidationException $e) {
            return redirect()->back()->withErrors($e->errors())->withInput();
        } catch (\Exception $e) {
            Log::error('Transaction Update Error: ' . $e->getMessage());
            return redirect()->back()->with('error', 'Something went wrong. Transaction not updated.');
        }
    }


    public function deleteTransaction($transactionId)
    {
        try {
            $transaction = Transaction::findOrFail($transactionId);
            $transaction->delete();

            return redirect()->back()->with('success', 'Transaction deleted successfully.');
        } catch (\Exception $e) {
            Log::error('Transaction Delete Error: ' . $e->getMessage());

            return redirect()->back()->with('error', 'Something went wrong. Transaction not deleted.');
        }
    }
}
