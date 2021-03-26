@extends('layouts/template')

@section('title', 'BeQueen Cafe Beach | Menu')

@section('menu')
<section class="section" id="offers">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="row" id="tabs">
                    <div class="col-lg-12">
                        <div class="heading-tabs">
                            <div class="row">
                                <div class="col-lg-6 offset-lg-3">
                                    <ul>
                                        <li><a href='#tabs-1'><img src="assets/images/tab-icon-01.png" alt="">Foods</a></li>
                                        <li><a href='#tabs-2'><img src="assets/images/tab-icon-03.png" alt="">Drinks</a></a></li><br><br>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <article id='tabs-1'>
                            <div class="row row-cols-2 row-cols-md-4">
                                @foreach($menus1 as $menu)
                                <div class="col">
                                    <div class="card h-100">
                                        <img src="assets/images/{{$menu->menu_image}}" class="card-img-top" alt="">
                                        <div class="card-body">
                                            <h5 class="card-title">{{ $menu->menu_name }}</h5>
                                            <h6 class="card-text">Rp {{ number_format($menu->menu_price, 2)}} </h6> <br>
                                            <p class="card-text" name="menu_desc">{{$menu->menu_desc}}</p> <br>

                                            <form action="/kirim_menu/{{  $menu->menu_price }}/{{  $menu->id }}" method="POST" style="padding: 0%; margin: 0%">
                                                @csrf
                                                @if(isset($users) && $users->status == 2)
                                                <!-- <button type="submit" class="btn btn-outline-secondary">+</button> -->

                                                <div class="input-group mb-3">
                                                    <input type="number" aria-label="Jumlah Order" placeholder="0" class="form-control" name="count" min="1" max="10" aria-describedby="button-addon2">
                                                    <button type="submit" class="btn btn-info">+</button>
                                                </div>

                                                @endif
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div> <br>

                            <a class="btn btn-warning float-right" href="{{url('/detail')}}" role="button" style="width: 100%;">Order</a>


                        </article>

                        <article id='tabs-2'>
                            <div class="row row-cols-2 row-cols-md-4">
                                @foreach($menus2 as $menu2)
                                <div class="col">
                                    <div class="card h-100">
                                        <img src="assets/images/{{$menu2->menu_image}}" class="card-img-top" alt="">
                                        <div class="card-body">
                                            <h5 class="card-title">{{ $menu2->menu_name }}</h5>
                                            <h6 class="card-text">Rp {{ number_format($menu2->menu_price, 2)}} </h6> <br>
                                            <p class="card-text" name="menu_desc">{{$menu2->menu_desc}}</p> <br>

                                            <form action="/kirim_menu/{{  $menu2->menu_price }}/{{  $menu2->id }}" method="POST" style="padding: 0%; margin: 0%">
                                                @csrf
                                                @if(isset($users) && $users->status == 2)
                                                <!-- <button type="submit" class="btn btn-outline-secondary">+</button> -->

                                                <div class="input-group mb-3">
                                                    <input type="number" aria-label="Jumlah Order" placeholder="0" class="form-control" name="count" min="1" max="10" aria-describedby="button-addon2">
                                                    <button type="submit" class="btn btn-info">+</button>
                                                </div>

                                                @endif
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div> <br>

                            <a class="btn btn-warning float-right" href="{{url('/detail')}}" role="button" style="width: 100%;">Order</a>

                        </article>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>