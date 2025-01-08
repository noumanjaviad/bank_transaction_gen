@extends('layouts.app')

@section('title', 'Create Transaction')

@section('content')
    <!-- Notification Section -->
    <div class="container-fluid pt-4 px-4">
        <!-- Success Message -->
        @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        <!-- Error Message -->
        @if (session('error'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{ session('error') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        <!-- Validation Errors -->
        @if ($errors->any())
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
    </div>

    <!-- Form Start -->
    <div class="container-fluid pt-4 px-4">
        <div class="col-sm-12 col-xl-8">
            <div class="col-12 bg-light rounded h-100 p-4">
                <h6 class="mb-4">Transaction Form</h6>
                <form action="{{ route('store_transaction') }}" method="POST">
                    @csrf
                    <!-- Add Amount -->
                    <div class="row mb-3">
                        <label for="add_amount" class="col-sm-2 col-form-label">Add Amount</label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control" id="balance" name="credit" step="0.01" min="0">
                        </div>
                    </div>

                    <!-- Product ID (Hidden) -->
                    <input type="hidden" name="productid" value="{{ $product->productid }}">

                    <!-- Deduct Amount -->
                    <div class="row mb-3">
                        <label for="deduct_amount" class="col-sm-2 col-form-label">Deduct Amount</label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control" id="account_number" name="debit" step="0.01" min="0">
                        </div>
                    </div>

                    <!-- Reference Number -->
                    <div class="row mb-3">
                        <label for="reference_number" class="col-sm-2 col-form-label">Reference No</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="reference_number" name="reference">
                        </div>
                    </div>

                    <!-- Transaction Type -->
                    {{-- <div class="row mb-3">
                        <label for="transaction_type" class="col-sm-2 col-form-label">Transaction Type</label>
                        <div class="col-sm-10">
                            <select class="form-control" id="transaction_type" name="transactiontype_id" required>
                                <option value="" disabled selected>Select transaction type</option>
                                @foreach ($transactionTypes as $transaction)
                                    <option value="{{ $transaction->transactiontype_id }}">{{ $transaction->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div> --}}

                    <div class="row mb-3">
                        <label for="transaction_type" class="col-sm-2 col-form-label">Transaction Type</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" id="description" name="transactiontype_id" rows="3"></textarea>
                        </div>
                    </div>

                    <!-- Transaction Date -->
                    <div class="row mb-3">
                        <label for="transaction_date" class="col-sm-2 col-form-label">Transaction Date</label>
                        <div class="col-sm-10">
                            <input type="date" class="form-control" id="transaction_date" name="date" required>
                        </div>
                    </div>

                    <!-- Value Date -->
                    <div class="row mb-3">
                        <label for="value_date" class="col-sm-2 col-form-label">Value Date</label>
                        <div class="col-sm-10">
                            <input type="date" class="form-control" id="value_date" name="vdate">
                        </div>
                    </div>

                    <!-- Description -->
                    <div class="row mb-3">
                        <label for="description" class="col-sm-2 col-form-label">Description</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" id="description" name="description" rows="3" placeholder="Enter your description"></textarea>
                        </div>
                    </div>

                    <!-- Submit and Cancel Buttons -->
                    <div class="row">
                        <div class="col-sm-10 offset-sm-2">
                            <button type="submit" class="btn btn-primary">Submit</button>
                            <button type="button" class="btn btn-secondary" onclick="history.go(-1);">Cancel</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Include Transaction Display Section -->
    @include('Admin.transaction.show_transaction', ['transactions' => $transactions])
@endsection
