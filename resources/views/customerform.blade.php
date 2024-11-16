


@extends('layouts.app') <!-- Extend the layout -->

@section('title', 'Customers Data') <!-- Set the title -->
@push('customertablecss')
<style>
       /* General Styles */
form {
    width: 300px;
    margin: 0 auto;
    padding: 20px;
    background-color: #f9f9f9;
    border-radius: 8px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
}

label {
    display: block;
    margin-bottom: 8px;
    font-weight: bold;
    color: #333;
}

input[type="text"] {
    width: 100%;
    padding: 10px;
    margin-bottom: 15px;
    border: 1px solid #ccc;
    border-radius: 4px;
    font-size: 16px;
    box-sizing: border-box; /* Ensures padding doesn't affect width */
}

input[type="text"]:focus {
    border-color: #007BFF;
    outline: none;
}

input[type="submit"] {
    width: 100%;
    padding: 12px;
    background-color: sandybrown;
    color: white;
    border: none;
    border-radius: 4px;
    font-size: 16px;
    cursor: pointer;
    box-sizing: border-box;
    transition: background-color 0.3s ease;
}

input[type="submit"]:hover {
    background-color: brown;
}

input[type="submit"]:focus {
    outline: none;
}

    </style>
@endpush

@section('content') <!-- Content section -->
<form action="/addcustomer" method="POST">
    @csrf
<label for="cname">Name</label>
<input type="text" name='cname'><br>
<label for="cmobile">Mobile</label>
<input type="text" name='cmobile'><br>
<label for="cemail">Email</label>
<input type="text" name='cemail'><br>
<label for="caddress">Address</label>
<input type="text" name='caddress'>
<input type="submit">
</form>
@endsection
