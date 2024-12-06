@extends('layouts.app')

@section('title', 'YOY Capital Infra Pvt. Ltd. - Contact Us')

@push('css')
<link rel="stylesheet" href="{{ asset('css/contactformstyle.css') }}">
@endpush

@section('content')
    <div id="container">
        <div class="container">
            <form action="{{ route('contact.submit') }}" method="POST">
                <h1>Send a message to us!</h1>
                @csrf 
                @if (session('success'))
                <div style="color:green; text-align:center;">
                    {{ session('success') }}
                </div>
            @endif        
            @if (session('error'))
                <div style="color:red; text-align:center;">
                    {{ session('error') }}
                </div>
            @endif
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
        <div id="address">
            <h2 style="color:rgb(17,94,97)"> Our Offices</h2>
            <div id="office">
                <img src="/images/mahagunoffice.jpg" alt="Mahagun Mart Office Image">
                <h4>Mahagun Mart Office <br> Office No-123, First-Floor, Mahagun Mart, Sector-16C, Gaur City-2, Greater Noida West, Gautam Buddha Nagar, UP - 201318 <br> Mobile: 8130777505</h4>
            </div>
            <div id="office">
                <img src="/images/gaurcityoffice.jpg" alt="Gaur City Center Office Image">
                <h4>Gaur City Center Office <br> Office No-GF99, Ground-Floor, Yellow Zone, Gaur City Center, Char Murti Chowk, Gaur City-1, Sector-4, Greater Noida West, Gautam Buddha Nagar, UP - 201306 <br> Mobile: 9717018911</h4>
            </div>
        </div>
    </div>
@endsection
