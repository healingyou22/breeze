@extends('layouts/template')

@section('title', 'Detail Reservation')

@section('detail')
<section class="section" id="about">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-6 col-xs-12">
                <div class="left-text-content">
                    <div class="section-heading">
                        <h6>Detail Booking</h6>
                        <h2>Please Check Your Reservation!</h2><br>
                    </div>
                </div>

<div class="row g-3">
@foreach($orders as $user)
{{ $orders->id }}
<div class="col-sm-5">
    <input type="text" class="form-control" placeholder="{{ $user -> cust_name }}" aria-label="City" disabled>
  </div>
  <div class="col-sm-3">
    <input type="text" class="form-control" placeholder="{{ $user-> phone_no  }}" aria-label="City" disabled>
  </div>
  <div class="col-sm-2">
    <input type="text" class="form-control" placeholder="{{ $user -> time }}" aria-label="State" disabled>
  </div>
  <div class="col-sm-2">
    <input type="text" class="form-control" placeholder="{{ $user-> seat }}" aria-label="State" disabled>
  </div>
  
</div> <br>
@endforeach

<div class="left-text-content">
                    <div class="section-heading">
<h2>Your Order Menu</h2><br>
                    </div>
</div>

                <table class="table table-bordered align-middle">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Produk</th>
                            <th>Harga</th>
                            <th>Jumlah</th>
                            <th>Subharga</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                    <a type="text" placeholder="{{ $i = 1 }}" hidden> </a>
                    @foreach($orderdetails as $list)
                        <tr>
                            <td>{{$i++}}</td>
                            <td>{{ $list->order_name}}</td>
                            <td>Rp {{ $list->price}}</td>
                            <td>{{ $list->count}}</td>
                            <td>Rp {{ $sub = ($list->order_id) * ($list->count)}}</td>
                            <td>
                                <a href="" class="btn btn-danger btn-xs">x</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                    <caption>*The food and beverages listed above do not include tax</caption>
                </table> <br>

                <a href="" class="btn btn-warning">Order Menu Again</a>
                <a href="" class="btn btn-primary">Submit</a>
            </div>
        </div>
    </div>
</section>
@endsection