@extends('layouts.app')

@section('title', 'Customer Details - NBD')

@section('content')

    <div class="col-12 mt-5 container-fluid">
        <div class="bg-light rounded h-100 p-4">
            <h6 class="mb-4">NBD Customer</h6>
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
                    @foreach ($NbdCustomers as $nbdCustomer)
                        {{-- {{dd($customer->company->name)}} --}}
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td>{{ $nbdCustomer->name }}</td>
                            <td>{{ $nbdCustomer->company->name }}</td>
                            <td>{{ $nbdCustomer->account_number }}</td>
                            <td>{{ $nbdCustomer->iban }}</td>
                            <td>{{ $nbdCustomer->type }}</td>
                            <td>{{ $nbdCustomer->contact }}</td>
                            <td>{{ $nbdCustomer->address }}</td>
                            <td>
                                <a href="{{route('search',$nbdCustomer->productid)}}" class="btn btn-success  mb-2 btn-sm "  id="downloadPDF" >Generate PDF</a>
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
            <div class="d-flex justify-content-center">
                {{ $NbdCustomers->links() }}
            </div>
        </div>
    </div>
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.3/html2pdf.bundle.min.js"></script>
    <script>
        document.getElementById('downloadPDF').addEventListener('click', function () {
            const element = document.getElementById('content');
            const options = {
                margin: 1,
                filename: 'Statement_of_Account.pdf',
                html2canvas: { scale: 2 },
                jsPDF: { orientation: 'portrait' }
            };

            html2pdf().set(options).from(element).save();
        });
    </script> --}}
@endsection

