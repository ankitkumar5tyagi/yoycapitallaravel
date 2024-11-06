@extends('layouts.app')

@section('title', 'YOY Capital Infra Pvt. Ltd. - Contact Us')

@push('css')
<link rel="stylesheet" href="{{ asset('css/contactformstyle.css') }}">
@endpush

@section('content')
    <div class="container">
        <h1>Send a message to us!</h1>

        {{-- Display success message --}}
        @if (session('success'))
            <div style="color:green; text-align:center;">
                {{ session('success') }}
            </div>
        @endif

        {{-- Display error message --}}
        @if (session('error'))
            <div style="color:red; text-align:center;">
                {{ session('error') }}
            </div>
        @endif

        <form action="{{ route('contact.submit') }}" method="POST">
            @csrf 
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required placeholder="Your Name">
            
            <label for="mobile">Mobile:</label>
            <input type="tel" id="mobile" name="mobile" required placeholder="Your 10 Digits Mobile Number">
            
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required placeholder="Your Email Id">
            
            <label for="message">Message:</label>
            <textarea id="message" name="message" required placeholder="Your Message"></textarea>
            
            <input type="hidden" name="honeypot"> 
            <input type="submit" value="Submit">
        </form>
    </div>
@endsection
