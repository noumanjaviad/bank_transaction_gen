@extends('layouts.app')

@section('title', 'Edit Customer')

@section('content')
    <div class="container-fluid pt-4 px-4">
        <div class="col-sm-12 col-xl-8">
            <div class="col-12 bg-light rounded h-100 p-4">
                <h6 class="mb-4">Edit Customer</h6>
                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
                <form action="{{ route('customers.update', $customer->productid) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="row mb-3">
                        <label for="companyid" class="col-sm-2 col-form-label">Select Bank</label>
                        <div class="col-sm-10">
                            <select class="form-control" id="companyid" name="companyid">
                                <option value="" disabled>Select a bank</option>
                                @foreach ($companies as $company)
                                    <option value="{{ $company->companyid }}"
                                        {{ $customer->companyid == $company->companyid ? 'selected' : '' }}>
                                        {{ $company->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="name" class="col-sm-2 col-form-label">Customer Name</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="name" name="name"
                                value="{{ $customer->name }}">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="account_number" class="col-sm-2 col-form-label">Account Number</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="account_number" name="account_number"
                                value="{{ $customer->account_number }}">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="iban" class="col-sm-2 col-form-label">IBAN</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="iban" name="iban"
                                value="{{ $customer->iban }}">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="type" class="col-sm-2 col-form-label">Account Type</label>
                        <div class="col-sm-10">
                            <select class="form-select" id="type" name="type">
                                <option value="" disabled>Select account type</option>
                                <option value="savings" {{ $customer->type == 'savings' ? 'selected' : '' }}>Savings
                                </option>
                                <option value="current" {{ $customer->type == 'current' ? 'selected' : '' }}>Current
                                </option>
                                <option value="business" {{ $customer->type == 'business' ? 'selected' : '' }}>Business
                                </option>
                            </select>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="date" class="col-sm-2 col-form-label">Transaction Date</label>
                        <div class="col-sm-10">
                            <input type="date" class="form-control" id="date" name="date"
                                value="{{ $customer->date }}">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="contact" class="col-sm-2 col-form-label">Contact</label>
                        <div class="col-sm-10">
                            <input type="tel" class="form-control" id="contact" name="contact"
                                value="{{ $customer->contact }}">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="address" class="col-sm-2 col-form-label">Address</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" id="address" name="address" rows="3">{{ $customer->address }}</textarea>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-10 offset-sm-2">
                            <button type="submit" class="btn btn-primary">Update</button>
                            <button type="button" class="btn btn-secondary"
                                onclick="window.location.href='{{ route('get_form') }}';">Cancel</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
