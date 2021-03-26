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
                            <div class="container">
                                <div class="row">
                                    @foreach($menus1 as $menu)
                                    <div class="col-md-3">
                                        <div class="card card-custom bg-white border-white mt-3">
                                            <div class="card-custom-img" style="background-image: url('assets/images/{{ $menu->menu_image }}');">
                                            </div>
                                            <div class="card-custom-avatar">
                                                <img class="img-fluid" src="assets/images/{{$menu->menu_image}}" alt="Avatar" />
                                            </div>
                                            <div class="card-body" style="overflow-y: auto">
                                                <h5 class="card-title">{{ $menu->menu_name }}</h5>
                                                <h6 class="card-text">Rp {{ number_format($menu->menu_price, 2)}} </h6> <br>
                                                <p class="card-text" name="menu_desc">{{$menu->menu_desc}}</p>
                                            </div>
                                            <div class="card-footer" style="background: inherit; border-color: inherit;">
                                                <form action="/kirim_menu/{{  $menu->menu_price }}/{{  $menu->id }}" method="POST" id="checkItem">
                                                    @csrf
                                                    @if(isset($users) && $users->status == 2)
                                                    {{-- <button type="submit" class="btn btn-primary float-right">Add</button> --}}
                                                    <div class="input-group">
                                                        <input type="number" aria-label="Jumlah Order" placeholder="0" class="form-control" name="count" min="1" max="10">
                                                        <button type="submit" class="btn btn-primary float-right">Add</button>
                                                    </div>
                                                    @endif
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                    @if(isset($users) && $users->status == 2)
                                    <a href="{{url('/detail')}}">Order</a>
                                    @endif
                                </div>
                            </div>
                        </article>

                        <article id='tabs-2'>
                            <div class="container">
                                <div class="row">
                                    @foreach($menus2 as $menu2)
                                    <div class="col-md-3">
                                        <div class="card card-custom bg-white border-white mt-3">
                                            <div class="card-custom-img" style="background-image: url('assets/images/{{ $menu2->menu_image }}');">
                                            </div>
                                            <div class="card-custom-avatar">
                                                <img class="img-fluid" src="assets/images/{{$menu2->menu_image}}" alt="Avatar" />
                                            </div>
                                            <div class="card-body" style="overflow-y: auto">
                                                <h5 class="card-title">{{ $menu2->menu_name }}</h5>
                                                <h6 class="card-text">Rp {{ number_format($menu2->menu_price, 2)}} </h6> <br>
                                                <p class="card-text" name="menu_desc">{{$menu2->menu_desc}}</p>
                                            </div>
                                            <div class="card-footer" style="background: inherit; border-color: inherit;">
                                                <form action="/kirim_menu/{{  $menu2->menu_price }}/{{  $menu2->id }}" method="POST" id="checkItem">
                                                    @csrf
                                                    @if(isset($users) && $users->status == 2)
                                                    {{-- <button type="submit" class="btn btn-primary float-right">Add</button> --}}
                                                    <div class="input-group">
                                                        <input type="number" aria-label="Jumlah Order" placeholder="0" class="form-control" name="count" min="1" max="10">
                                                        <button type="submit" class="btn btn-primary float-right">Add</button>
                                                    </div>
                                                    @endif
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                    @if(isset($users) && $users->status == 2)
                                    <a href="{{url('/detail')}}">Order</a>
                                    @endif
                                </div>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>