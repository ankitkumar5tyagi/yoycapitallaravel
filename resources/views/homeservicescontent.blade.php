@extends('layouts.app') <!-- Layout ko extend kiya -->

@section('content') <!-- Content section -->
    
<div class="services">
    <h1 class="ourservices">Our Services</h1>
    <p class="servicepagepara"><b>Government Document Facilitation:</b> We assist in obtaining vital documents such as Aadhaar, PAN Card, Driving License, Passport, Voter ID, Income/Caste/Domicile Certificates, Marriage Certificates, Birth/Death Certificates, and Vehicle services.<br><br>

<b>Taxation Services:</b> Our team provides comprehensive taxation support, including ITR filing, GST registration, GSTR filing, and GST amendments/cancellation.<br><br>

<b>Investment Services:</b> We offer tailored investment solutions, including mutual funds, stocks and shares, trading, and equity and commodity investments.<br><br>

<b>Insurance Services:</b> Protect what matters most with our range of insurance products, including life insurance, health insurance, motor insurance, and general insurance.<br><br>

<b>Courier & Cargo Services:</b> We handle domestic and international courier needs, ensuring safe and timely delivery of letters, parcels, and other items.<br><br></p>

<div class="servicecontent">
    @foreach($services as $service)
    <!-- Assign unique modal IDs dynamically using $loop->index -->
    <a href="#" onclick="openModal(event, 'modal{{$loop->index}}')" class="service-link">
        <article class="service">
            <img class="serviceimg" src="{{$service->image_url}}" alt="{{$service->title}}">
            <p class="sername">{{$service->title}}</p>
        </article>
    </a>
    

    <!-- Modal Structure for each service -->
    <div id="modal{{$loop->index}}" class="custom-modal">
        <div class="custom-modal-content">
            <span class="close-button" onclick="closeModal('modal{{$loop->index}}')">&times;</span>
            <article style="padding:20px">
                <img style="float:right; width:200px; height:200px" src="{{$service->image_url}}" alt="Passport">
                <h2 style="margin:10px">{{$service->title}}</h2>
                <p>{{$service->description}}</p>
                <ol style="margin:10px">
                    @if($service->document_list)
                        @foreach(explode(',', $service->document_list) as $document)
                            <li>{{ trim($document) }}</li>
                        @endforeach
                    @else
                        <p>No documents required.</p>
                    @endif
                </ol>
                <p style="margin:10px">{{$service->note}}</p>
            </article>
        </div>
    </div>
    @endforeach
</div>


@endsection