<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
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

        $validatedData = $request->validate([
            'companyid'       => 'required|exists:company,companyid',
            'name'            => 'required|string|max:255',
            'account_number'  => 'required|string',
            'iban'            => 'required|string',
            'type'            => 'required|in:savings,current,business',
            'balance'         => 'required',
            'contact'         => 'required|string|max:15',
            'address'         => 'nullable|string|max:500',
            'date'            => 'required|date',
        ]);

        Product::create($validatedData);

        // Redirect back with a success message
        return redirect()
            ->back()
            ->with('success', 'Customer created successfully!');
    }


}
