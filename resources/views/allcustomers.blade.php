@extends('layouts.app') <!-- Extend the layout -->

@section('title', 'Customers Data') <!-- Set the title -->
@push('customertablecss')
<style>
        table {
            width: 90%;
            border-collapse: collapse; /* Merges border lines for a cleaner look */
            margin: 20px; /* Space above the table */
        }
        th, td {
            border: 1px solid black; /* Border around cells */
            padding: 12px; /* Space inside each cell (adjust the value as needed) */
            text-align: left; /* Align text to the left */
        }
        th {
            background-color: #f2f2f2; /* Header background color */
        }
        tr:nth-child(even) {
            background-color: #f9f9f9; /* Stripe effect for even rows */
        }
    </style>
@endpush

@section('content') <!-- Content section -->
    <h1>Customers</h1>

    <table border=1>
        <thead>
            <tr>
                <th>Name</th>
                <th>Mobile</th>
                <th>Email</th>
                <th>Address</th>
                <th>Created at</th>
                <th>Updated at</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $customer) <!-- Loop through the $data array -->
                <tr>
                    <td>{{ $customer->name }}</td> <!-- Display customer name -->
                    <td>{{ $customer->mobile }}</td> <!-- Display customer mobile -->
                    <td>{{ $customer->email }}</td> <!-- Display customer email -->
                    <td>{{ $customer->address }}</td> <!-- Display customer address -->
                    <td>{{ $customer->created_at }}</td>
                    <td>{{ $customer->updated_at }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
