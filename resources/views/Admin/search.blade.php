@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
    <!-- Form Start -->
    <div class="container-fluid pt-4 px-4">
        <div class="col-sm-12 col-xl-8">
            <div class="col-12 bg-light rounded h-100 p-4">
                <h6 class="mb-4">Find Transaction</h6>
                <form action="{{ route('search.transaction') }}" method="POST">
                    <input type="hidden" name="productid" value="{{$id}}">
                    @csrf
                    <div class="row mb-3">
                        <label for="companyid" class="col-sm-2 col-form-label">From Date</label>
                        <div class="col-sm-10">
                            <input type="date" class="form-control" name="from_date">
                        </div>
                        {{-- <div class="col-sm-10">
                            <select class="form-control" id="companyid" name="companyid">
                                <option value="" disabled selected>Select a bank</option>
                                @foreach ($companies as $company)
                                    <option value="{{ $company->companyid }}">{{ $company->name }}</option>
                                @endforeach
                            </select>
                        </div> --}}
                    </div>

                    <div class="row mb-3">
                        <label for="name" class="col-sm-2 col-form-label">To Date</label>
                        <div class="col-sm-10">
                            <input type="date" class="form-control" name="to_date">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-10 offset-sm-2">
                            <button type="submit" name="submit" class="btn btn-primary" target="_blank">Submit</button>
                            <button type="button" class="btn btn-secondary" onclick="window.location.href='your-cancel-url';">Cancel</button>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
@endsection
