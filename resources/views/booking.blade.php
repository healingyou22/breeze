@extends('layouts/template')

@section('title', 'Reservation Now!')

@section('booking')
<!-- ***** Booking Area Start ***** -->
<div class="main-booking" id="booking">
    <div class="card-booking mb-3" style="max-width: 1150px;">
        <div class="row g-0">
            <div class="col-md-7">
                <img src="assets/images/booking.jpg" alt="">
            </div>
            <div class="card-body">
            
                <form action="/menu" name="booking" method="GET">
                    @csrf
                    <div class="left-content">
                        <h3>Booking Now!</h3><br>
                        <div class="form-group form-input">
                            <input type="name" name="name" id="name" value="" required />
                            <label for="name" class="form-label">Your Name</label>
                        </div>
                        <div class="form-group form-input">
                            <input type="number" name="phone" id="phone" value="" required />
                            <label for="phone" class="form-label">Your phone number</label>
                        </div>
                        <div class="form-radio">
                            <div class="input-group mb-3">
                                <select class="form-select" name="time" id="time" required>
                                    <option selected>Choose Your Time</option>
                                    <option value="Breakfast">Breakfast Time</option>
                                    <option value="Dinner">Dinner Time</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-radio">
                            <label class="label-radio"> Select Your Dining Space</label>
                            <div class="radio-item-list">
                                <span class="radio-item actived">
                                    <input type="radio" name="number_people" value="2" id="number_people_2" />
                                    <label for="number_people_2">2</label>
                                </span>
                                <span class="radio-item actived">
                                    <input type="radio" name="number_people" value="4" id="number_people_4" />
                                    <label for="number_people_4">4</label>
                                </span>
                                <span class="radio-item actived">
                                    <input type="radio" name="number_people" value="6" id="number_people_6" />
                                    <label for="number_people_6">6</label>
                                </span>
                            </div>
                        </div>

                        <div class="form-group btn-right">
                            <input type="submit" value="Book Now" class="submit" id="submit" name="submit" />
                        </div>

                    </div>
                    </form>
            </div>
        </div>
    </div>
</div>
@endsection