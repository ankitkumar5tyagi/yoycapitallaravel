@extends('layouts.app') <!-- Layout ko extend kiya -->

@section('title', 'YOY Capital Infra Pvt. Ltd. - About Us') <!-- Title set kiya -->

@push('css')
<link rel="stylesheet" href="{{ asset('css/about.css') }}">
@endpush

@section('content') <!-- Content section -->
    <section class="py-5">
	<div class="container">
		<div class="about">
			<div class="aboutfirst">
					<span>Our Story</span>
					<h2 style="color: rgb(249, 140, 34);">About Us</h2>
					<p>Welcome to YOY Capital Infra Pvt. Ltd., your trusted partner in comprehensive service solutions since our establishment in 2016. Mr. Ajay Kumar Jaiswal is the founder and CEO of the Company. YOY Capital is a registered Pvt. Ltd. OPC (One Persion Company). We are dedicated to facilitating essential government documentation and providing a wide range of financial and logistical services designed to meet the diverse needs of our clients.<br><br>

                    At YOY Capital Infra, we pride ourselves on our commitment to quality and excellence. Our expert team leverages extensive industry knowledge to ensure that every service is delivered efficiently and effectively. From government document facilitation to taxation, investment, insurance, and courier services, we strive to simplify processes and enhance convenience for our clients.</p><br>
                    <h2 style="color: rgb(249, 140, 34);">Our Vision</h2>
					<p>To be a leading service provider recognized for our commitment to quality, sustainability, and customer satisfaction.<br><br>

                    At YOY Capital, we are dedicated to building lasting relationships with our clients, stakeholders, and partners through transparency and mutual respect.</p>
			</div>
			<div class="aboutsecond"><img class="aboutimg" src="/images/offices.jpg">
			</div>
		</div>
	</div>
</section>
@endsection