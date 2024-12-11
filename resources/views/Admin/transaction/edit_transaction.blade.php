@extends('layouts.app')

@section('title', 'Edit Transaction')

@section('content')
<div class="container-fluid pt-4 px-4">
    <div class="col-sm-12 col-xl-8">
        <div class="col-12 bg-light rounded h-100 p-4">
            <h6 class="mb-4">Edit Transaction</h6>
            <form action="{{ route('update_transaction', $transaction->transactionid) }}" method="POST">
                @csrf
                {{-- @method('PUT') --}}
                <div class="row mb-3">
                    <label for="credit" class="col-sm-2 col-form-label">Credit</label>
                    <div class="col-sm-10">
                        <input type="number" class="form-control" name="credit" value="{{ $transaction->credit }}">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="debit" class="col-sm-2 col-form-label">Debit</label>
                    <div class="col-sm-10">
                        <input type="number" class="form-control" name="debit" value="{{ $transaction->debit }}">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="reference" class="col-sm-2 col-form-label">Reference</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="reference" value="{{ $transaction->reference }}">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="transactiontype_id" class="col-sm-2 col-form-label">Transaction Type</label>
                    <div class="col-sm-10">
                        <select class="form-control" name="transactiontype_id" required>
                            <option value="" disabled>Select Transaction Type</option>
                            @foreach ($transactionTypes as $type)
                                <option value="{{ $type->transactiontype_id }}"
                                    {{ $type->transactiontype_id == $transaction->transactiontype_id ? 'selected' : '' }}>
                                    {{ $type->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="date" class="col-sm-2 col-form-label">Transaction Date</label>
                    <div class="col-sm-10">
                        <input type="date" class="form-control" name="date" value="{{ $transaction->date }}">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="vdate" class="col-sm-2 col-form-label">Value Date</label>
                    <div class="col-sm-10">
                        <input type="date" class="form-control" name="vdate" value="{{ $transaction->vdate }}">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="description" class="col-sm-2 col-form-label">Description</label>
                    <div class="col-sm-10">
                        <textarea class="form-control" name="description" rows="3">{{ $transaction->description }}</textarea>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-10 offset-sm-2">
                        <button type="submit" class="btn btn-primary">Update</button>
                        <button type="button" class="btn btn-secondary">Cancel</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
