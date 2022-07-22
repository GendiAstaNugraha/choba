@extends('layouts.customer')

@section('content')
<main class="main-content position-relative border-radius-lg ">
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <div class="card mb-4">
                    <div class="card-header pb-0">
                            <h5>Shopping Cart</h5>
                    </div>

                    @if (session()->has('status'))
                    <div class="alert alert-success d-flex align-items-center" role="alert">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class=" me-2 bi bi-check-circle-fill" viewBox="0 0 16 16">
                            <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                        </svg>
                        <div>
                            {{ session('status') }}
                        </div>
                    </div>
                    @endif

                    <div class="card-body px-0 pt-0 pb-2">
                        <div class="table-responsive p-0">
                            <table class="table align-items-center mb-0">
                                <thead>
                                    <tr>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">No</th>
                                        <th class="text-secondary opacity-7"> </th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Product</th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Unit Price</th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Quantity</th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Total</th>
                                        <th class="text-secondary opacity-7"> </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                    $no = 1;
                                    @endphp
                                    @foreach ($data as $item)
                                    <tr>
                                        <td>
                                            <h6 class="mb-0 ms-3 text-sm">{{ $no++ }}</h6>
                                        </td>
                                        <td>
                                            <img src="{{ asset('assets/img/bg-profile.jpg') }}" alt="" height="50px" width="50px">
                                        </td>
                                        <td>
                                            <h6 class="mb-0 ms-3 text-sm">{{ $item->name }}</h6>
                                        </td>
                                        <td>
                                            <h6 class="mb-0 text-sm">Rp {{ $item->email }}</h6>
                                        </td>
                                        <td>
                                            <input type="number" value="1" min="1" max="10" class="border-0">
                                        </td>
                                        <td>
                                            <h6 class="mb-0 text-sm">Rp {{ $item->email }}</h6>
                                        </td>
                                        <td>
                                            <a href="/admin/admin/delete/{{ $item->id }}" onclick="return confirm('Are you sure?')" class=" text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit item">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                                    <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z" />
                                                    <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z" />
                                                </svg>
                                                Delete
                                            </a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>

<div class="carr-body my-5">
<button>dfg</button>
</div>

                    <div class="card-footer text-end row">
                        <h5 href="" class="col me-5 mt-2">Total : Rp 1000</h5>
                        <button href="" class="col btn">Checkout</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
