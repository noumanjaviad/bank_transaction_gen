@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
    <!-- Form Start -->
    <div class="container-fluid pt-4 px-4">
        <div class="col-sm-12 col-xl-8">
            <div class="col-12 bg-light rounded h-100 p-4">
                <h6 class="mb-4">Transaction Form</h6>
                <form action="" method="POST">
                    @csrf
                    <div class="row mb-3">
                        <label for="add amount" class="col-sm-2 col-form-label">Add Amount</label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control" id="balance" name="credit" required
                                min="0">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="account_number" class="col-sm-2 col-form-label">Deduct Amount</label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control" id="account_number" name="debit"
                                placeholder="Enter amount" required min="0">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="refrence number" class="col-sm-2 col-form-label">Refrence No</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="balance" name="refrence">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="transaction type" class="col-sm-2 col-form-label">Transaction Type</label>
                        <div class="col-sm-10">
                            <select class="form-control" id="" name="">
                                <option value="" disabled selected>Select transaction type</option>
                                @foreach ($transactionTypes as $transaction)
                                {{-- {{dd($transaction)}} --}}
                                    {{-- <option value="{{ $company->companyid }}">{{ $company->name }}</option> --}}
                                    <option value="{{$transaction->transactiontype_id}}">{{$transaction->name}}</option>
                                    {{-- <option value="">test1</option> --}}
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="date" class="col-sm-2 col-form-label">Transaction Date</label>
                        <div class="col-sm-10">
                            <input type="date" class="form-control" id="date" name="date">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="date" class="col-sm-2 col-form-label">Value Date</label>
                        <div class="col-sm-10">
                            <input type="date" class="form-control" id="date" name="date">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="description" class="col-sm-2 col-form-label">Description</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" id="address" name="address" rows="3" placeholder="Enter your address"></textarea>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-10 offset-sm-2">
                            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                            <button type="button" class="btn btn-secondary"
                                onclick="window.location.href='your-cancel-url';">Cancel</button>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
    {{-- start customer show section --}}
    @include('Admin.transaction.show_transaction', ['transactions' => $transactions])
    {{-- end customer show section --}}
@endsection
