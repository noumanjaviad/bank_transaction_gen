 <div class="col-12 mt-5 container-fluid">
     <div class="bg-light rounded h-100 p-4">
         <h6 class="mb-4">Customer Table</h6>
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
                 @foreach ($customers as $customer)
                 {{-- {{dd($customer->company->name)}} --}}
                     <tr>
                         <th scope="row">{{ $loop->iteration }}</th>
                         <td>{{ $customer->name }}</td>
                         <td>{{ $customer->company->name}}</td>
                         <td>{{ $customer->account_number }}</td>
                         <td>{{ $customer->iban }}</td>
                         <td>{{ $customer->type }}</td>
                         <td>{{ $customer->contact }}</td>
                         <td>{{ $customer->address }}</td>
                         <td>
                             {{-- <a href="{{ route('customers.edit', $customer->id) }}" --}}
                                <a href="{{route('get_transaction_form',$customer->productid)}}"
                                 class="btn btn-success mb-2 btn-sm">Start Transaction</a>
                             <a href="{{ route('customers.edit', $customer->productid) }}"
                                 class="btn btn-warning btn-sm">Edit</a>
                             {{-- <form action="{{ route('customers.destroy', $customer->id) }}" method="POST" --}}
                             <form action="{{ route('customers.destroy', $customer->productid) }}" method="POST"
                                style="display:inline;">
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
         <div class="d-flex ">
            {{ $customers->links() }}
        </div>
     </div>
 </div>
