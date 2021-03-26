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
                    <div class="col-sm-5">
                        <label type="text" class="form-control" aria-label="City">{{ $user -> cust_name }}</label>
                    </div>
                    <div class="col-sm-3">
                        <label type="text" class="form-control" aria-label="City">{{ $user-> phone_no  }}</label>
                    </div>
                    <div class="col-sm-2">
                        <label type="text" class="form-control" aria-label="State">{{ $user -> time }}</label>
                    </div>
                    <div class="col-sm-2">
                        <label type="text" class="form-control" aria-label="State">{{ $user-> seat }} Person</label>
                    </div>
                </div> <br>
                @endforeach

                <div class="left-text-content">
                    <div class="section-heading">
                        <h2>Your Order Menu</h2><br>
                    </div>
                </div>

                <table class="table table-bordered">
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
                        @foreach($order_detail as $order_detail)
                        <tr>
                            <td>{{ $i++ }}</td>
                            <td>{{ $order_detail->menu->menu_name }}</td>
                            <td>Rp {{ number_format($order_detail->price, 2)}}</td>
                            <td>{{ $order_detail->count}}</td>
                            <td>Rp {{ number_format($sub = ($order_detail->price) * ($order_detail->count), 2) }}</td>
                            <td>
                                <a href="" class="btn btn-danger btn-xs">x</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                    <caption>*The food and beverages listed above do not include tax</caption>
            </div>
            </table>

            <div class="row g-3">
                <div class="col-sm-8">
                    <label type="text" class="form-control" aria-label="City">Total Harga</label>
                </div>
                <div class="col-sm-4">
                    <label type="text" class="form-control" aria-label="City">Rp {{ number_format(($order1->total_price), 2) }}</label>
                </div>
            </div>

            <div class="row g-3">
                <div class="col-sm-8">
                    <label type="text" class="form-control" aria-label="City">Tax 15%</label>
                </div>
                <div class="col-sm-4">
                    <label type="text" class="form-control" aria-label="City">Rp {{ number_format((0.15 * $order1->total_price), 2) }}</label>
                </div>
            </div>

            <div class="row g-3">
                <div class="col-sm-8">
                    <label type="text" class="form-control" aria-label="City">Total Harga (include tax 15%) </label>
                </div>
                <div class="col-sm-4">
                    <label type="text" class="form-control" aria-label="City">Rp {{ number_format($order1->total_price + (0.15 * $order1->total_price), 2) }}</label>
                </div>
            </div> <br>

            <a href="/success" class="btn btn-primary float-right">Submit</a>
            <a href="/menu" class="btn btn-warning float-right">Order Menu Again</a>

        </div>
    </div>
    </div>
</section>
@endsection