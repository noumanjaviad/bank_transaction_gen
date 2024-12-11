<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Company;
use App\Models\Product;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    /**
     * Store a newly created customer in the database.
     *
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        // dd($request->all());

        $validatedData = $request->validate([
            'companyid'       => 'required|exists:company,companyid',
            'name'            => 'required|string|max:255',
            'account_number'  => 'required|string',
            'iban'            => 'required|string',
            'type'            => 'required|in:savings,current,business',
            'contact'         => 'required|string|max:15',
            'address'         => 'nullable|string|max:500',
            'date'            => 'required|date',
        ]);
        // dd($validatedData);

        Product::create($validatedData);
        return redirect()
            ->back()
            ->with('success', 'Customer created successfully!');
    }

     /**
     * Show the form for editing the specified customer.
     *
     * @param int $id
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $customer = Product::findOrFail($id);
        $companies = Company::select('companyid', 'name')->get();

        return view('Admin.customer.edit_customer', compact('customer', 'companies'));
    }

    /**
     * Update the specified customer in the database.
     *
     * @param Request $request
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, $id)
    {
        // dd($request->all());
        $validatedData = $request->validate([
            'companyid'       => 'required|exists:company,companyid',
            'name'            => 'required|string|max:255',
            'account_number'  => 'required|string',
            'iban'            => 'required|string',
            'type'            => 'required|in:savings,current,business',
            'contact'         => 'required|string|max:15',
            'address'         => 'nullable|string|max:500',
            'date'            => 'nullable|date',
        ]);

        $customer = Product::findOrFail($id);
        $customer->update($validatedData);

        return redirect()
            ->route('get_form')
            ->with('success', 'Customer updated successfully!');
    }

    /**
     * Remove the specified customer from the database.
     *
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        $customer = Product::findOrFail($id);
        $customer->delete();

        return redirect()
            ->route('get_form')
            ->with('success', 'Customer deleted successfully!');
    }


}
