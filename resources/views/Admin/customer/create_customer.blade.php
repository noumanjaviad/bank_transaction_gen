@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
    <!-- Form Start -->
    <div class="container-fluid pt-4 px-4">
        <div class="col-sm-12 col-xl-8">
            <div class="col-12 bg-light rounded h-100 p-4">
                <h6 class="mb-4">Customer Form</h6>
                <form action="{{ route('customers.store') }}" method="POST">
                    @csrf
                    <div class="row mb-3">
                        <label for="companyid" class="col-sm-2 col-form-label">Select Bank</label>
                        <div class="col-sm-10">
                            <select class="form-control" id="companyid" name="companyid">
                                <option value="" disabled selected>Select a bank</option>
                                @foreach ($companies as $company)
                                    <option value="{{ $company->companyid }}">{{ $company->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="name" class="col-sm-2 col-form-label">Customer Name</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="name">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="account_number" class="col-sm-2 col-form-label">Account Number</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="account_number" name="account_number" placeholder="Enter account number">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="iban" class="col-sm-2 col-form-label">IBAN</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="iban" name="iban" placeholder="Enter IBAN">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="type" class="col-sm-2 col-form-label">Account Type</label>
                        <div class="col-sm-10">
                            <select class="form-select" id="type" name="type">
                                <option selected disabled>Select account type</option>
                                <option value="savings">Savings</option>
                                <option value="current">Current</option>
                                <option value="business">Business</option>
                            </select>
                        </div>
                    </div>
                    {{-- <div class="row mb-3">
                        <label for="balance" class="col-sm-2 col-form-label">Amount</label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control" id="balance" name="balance" required min="0">
                        </div>
                    </div> --}}

                    <div class="row mb-3">
                        <label for="date" class="col-sm-2 col-form-label">Transaction Date</label>
                        <div class="col-sm-10">
                            <input type="date" class="form-control" id="date" name="date">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="contact" class="col-sm-2 col-form-label">Contact</label>
                        <div class="col-sm-10">
                            <input type="tel" class="form-control" id="contact" name="contact" placeholder="Enter contact number">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="address" class="col-sm-2 col-form-label">Address</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" id="address" name="address" rows="3" placeholder="Enter your address"></textarea>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-10 offset-sm-2">
                            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                            <button type="button" class="btn btn-secondary" onclick="window.location.href='your-cancel-url';">Cancel</button>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
    {{-- {{dd($product)}} --}}
    {{-- start customer show section --}}
    @include('Admin.customer.show_customer',['customers' => $customers])
    {{-- end customer show section --}}
@endsection
