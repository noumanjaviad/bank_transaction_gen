@extends('layouts.app')

@section('title', 'Customers Details - Mashriq')

@section('content')

    <div class="col-12 mt-5 container-fluid">
        <div class="bg-light rounded h-100 p-4">
            <h6 class="mb-4">Mashriq Customer</h6>
            <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Customer Name</th>
                        <th scope="col">Bank</th>
                        <th scope="col">Account Number</th>
                        <th scope="col">IBAN</th>
                        <th scope="col">Account Type</th>
                        <th scope="col">Contact</th>
                        <th scope="col">Address</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($mahriqCustomers as $mashriqCustomer)
                        {{-- {{dd($customer->company->name)}} --}}
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td>{{ $mashriqCustomer->name }}</td>
                            <td>{{ $mashriqCustomer->company->name }}</td>
                            <td>{{ $mashriqCustomer->account_number }}</td>
                            <td>{{ $mashriqCustomer->iban }}</td>
                            <td>{{ $mashriqCustomer->type }}</td>
                            <td>{{ $mashriqCustomer->contact }}</td>
                            <td>{{ $mashriqCustomer->address }}</td>
                            <td>
                                <a href="{{route('search',$mashriqCustomer->productid)}}" class="btn btn-success mb-2 btn-sm">Generate PDF</a>
                                {{-- <a href="{{ route('customers.edit', $customer->id) }}" --}}
                                {{-- <a href="{{route('get_transaction_form')}}"
                                        class="btn btn-success mb-2 btn-sm">Start Transaction</a>
                                    <a href=""
                                        class="btn btn-warning btn-sm">Edit</a>
                                    <form action="{{ route('customers.destroy', $customer->id) }}" method="POST"
                                    <form action="" method="POST"
                                       style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                    </form> --}}

                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            </div>
            <div class="d-flex ">
                {{ $mahriqCustomers->links() }}
            </div>
        </div>
    </div>

@endsection
