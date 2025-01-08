 {{-- <div class="col-12 mt-5 container-fluid">
    <div class="bg-light rounded h-100 p-4">
        <h6 class="mb-4">Category Table</h6>
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
                <tr>
                    <th scope="row">1</th>
                    <td>John</td>
                    <td>Doe</td>
                    <td>jhon@email.com</td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>mark@email.com</td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>jacob@email.com</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
 --}}

 <div class="col-12 mt-5 container-fluid">
     <div class="bg-light rounded h-100 p-4">
         <h6 class="mb-4">Customer Table</h6>
         <table class="table table-bordered">
             <thead>
                 <tr>
                     <th scope="col">#</th>
                     <th scope="col">Transaction date</th>
                     <th scope="col">Value date</th>
                     <th scope="col">Refrence</th>
                     <th scope="col">Type</th>
                     <th scope="col">Balance</th>
                     <th scope="col">Credit</th>
                     <th scope="col">Debit</th>
                     <th scope="col">Action</th>
                 </tr>
             </thead>
             <tbody>
                 {{-- {{dd($transactions)}} --}}
                 @foreach ($transactions as $transaction)
                     {{-- {{dd($transaction)}} --}}
                     <tr>
                         <th scope="row">{{ $loop->iteration }}</th>
                         <td>{{ $transaction->date }}</td>
                         <td>{{ $transaction->vdate }}</td>
                         <td>{{ $transaction->reference }}</td>
                         <td>{{ $transaction->transactiontype_id }}</td>
                         <td>{{ $transaction->balance == 0 ? '-' : $transaction->balance }}</td>
                         <td>{{ $transaction->credit == 0 ? '' : $transaction->credit }}</td>
                         <td>{{ $transaction->debit == 0 ? '' : $transaction->debit }}</td>
                         <td>
                             {{-- <a href="{{ route('customers.edit', $customer->id) }}" --}}
                             {{-- <a href=""
                                class="btn btn-success mb-2 btn-sm">Start Transaction</a> --}}
                             {{-- <a href=""
                                class="btn btn-warning btn-sm">Edit</a> --}}
                             {{-- <form action="{{ route('customers.destroy', $customer->id) }}" method="POST" --}}
                             <a href="{{ route('transactions.edit', $transaction->transactionid) }}"
                                 class="btn btn-warning btn-sm">Edit</a>
                             <form action="{{ route('delete_transaction', $transaction->transactionid) }}"
                                 method="POST" style="display:inline;">
                                 @csrf
                                 @method('DELETE')
                                 <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                             </form>
                         </td>
                     </tr>
                 @endforeach
             </tbody>
         </table>
     </div>
 </div>
