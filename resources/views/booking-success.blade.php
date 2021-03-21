@extends('layouts/template')

@section('title', 'Reservation Success')

@section('booking-success')
<section class="section" id="about">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-6 col-xs-12">
                <div class="left-text-content">
                    <div class="section-heading">
                        <h6>Reservation Success</h6>
                        <h2>Please Bring this Ticket!</h2><br>
                    </div>
                </div>
                @foreach($orders as $user)                
                <div class="image-success">
                    <div class="image-body">
                        <div class="font-success">
                            <h4>Mr/Mrs {{$user -> cust_name}} ({{$user -> phone_no}})</h4>
                            <h5>For {{$user -> time}} ({{$user -> seat}} Person)</h5>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
@endsection