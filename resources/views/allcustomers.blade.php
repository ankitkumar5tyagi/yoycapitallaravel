@extends('layouts.app') 

@section('title', 'Customers Data')
@push('customertablecss')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<style>
        table {
            width: 90%;
            border-collapse: collapse; /* Merges border lines for a cleaner look */
            margin: 20px auto; /* Space above the table */
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
    <h1 style="text-align: center; padding:10px; color:rgb(15, 96, 80)">Customers</h1>
    <a style="color:rgb(247, 251, 249); padding:10px; background-color:rgb(15,96,80); border: 1px solid rgb(15, 86, 54); border-radius:5%; text-decoration:none; margin-left:20%" href="/customerform">Add New</a>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Mobile</th>
                <th>Email</th>
                <th>Address</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $customer)
                <tr>
                    <td>{{ $customer->id }}</td> 
                    <td><a style="color:rgb(68, 109, 100); text-decoration: none;" href="{{ route('view.customer', $customer->id)}}">{{ $customer->name }}</td> 
                    <td>{{ $customer->mobile }}</td> 
                    <td>{{ $customer->email }}</td> 
                    <td>{{ $customer->address }}</td>
                    <td><a style="color:rgb(247, 251, 249); padding:5px; background-color:rgb(245, 125, 155); border: 1px solid rgb(245, 125, 155); border-radius:5%; text-decoration:none; margin-left:20%" href="{{route ('deletecustomer', $customer->id)}}">Delete</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div style="width:80%; margin:auto">
        {{ $data->links() }}
    </div>
@endsection
