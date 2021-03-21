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

                    <div class="container">
                        <div class="row">
                            @foreach($menus1 as $menu)
                            <div class="col-md-4">
                                <div class="card card-custom bg-white border-white mt-3">
                                    <div class="card-custom-img" style="background-image: url('assets/images/{{ $menu->menu_image }}');">
                                    </div>
                                    <div class="card-custom-avatar">
                                        <img class="img-fluid" src="assets/images/{{$menu->menu_image}}" alt="Avatar" />
                                    </div>
                                    <div class="card-body" style="overflow-y: auto">
                                        <h5 class="card-title">{{ $menu->menu_name }}</h5>
                                        <p class="card-text" name="menu_desc">{{$menu->menu_desc}}</p>
                                        <h6 class="card-text">${{ number_format($menu->menu_price, 2) }}
                                    </div>
                                    <div class="card-footer" style="background: inherit; border-color: inherit;">
                                        <form action="/kirim_menu/{{  $menu->menu_price }}/{{  $menu->id }}" method="POST" id="checkItem">
                                            @csrf
                                            @if(isset($users) && $users->status == 2)
                                            <button type="submit" class="btn btn-primary float-right">Add</button>
                                            @endif
                                        </form>
                                       
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>


                    {{-- @foreach($menus1 as $menu)
                    <form action="/order" method="GET">
                        <div class="col-lg-12">
                            <article id='tabs-1'>
                                <div class="row row-cols-2 row-cols-md-4 g-1">
                                
                                    <div class="col">
                                        <div class="card h-100">
                                            <img src="assets/images/{{$menu->menu_image}}" class="card-img-top" alt="">
                                            <div class="card-body">
                                                <h5 class="card-title" name="menu_name">{{$menu->menu_name}}</h5>
                                                <h6 class="card-text" name="menu_price">${{$menu->menu_price}}</h6>
                                                <p class="card-text" name="menu_desc">{{$menu->menu_desc}}</p><br>
                                                <div class="input-group">
                                                    @if($users->status == 2)
                                                    <input type="number" aria-label="Jumlah Order" placeholder="0" value="" class="form-control" name="count" min="0" max="99">
                                                    <span class="input-group-text">+</span>
                                                    @endif
                                                </div>    
                                            </div> <br>
                                        </div> 
                                    </div>
                                    
                                </div>
                            </article> --}}
                            {{-- <article id='tabs-2'>
                                <div class="row row-cols-2 row-cols-md-4 g-1">
                                @foreach($menus2 as $menu)
                                    <div class="col">
                                        <div class="card h-100">
                                            <img src="assets/images/{{$menu->menu_image}}" class="card-img-top" alt="">
                                            <div class="card-body">
                                                <h5 class="card-title">{{$menu->menu_name}}</h5>
                                                <h6 class="card-text">${{$menu->menu_price}}</h6>
                                                <p class="card-text">{{$menu->menu_desc}}</p><br>
                                                <div class="input-group">
                                                
                                                    @if($users->status == 2)
                                                    <input type="text" aria-label="Jumlah Order" placeholder="0" value="" class="form-control" name="jumlah_order" min="0" max="99">
                                                    <span class="input-group-text">+</span>
                                                    @endif
                                                    
                                                </div>
                                            </div> <br>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </article> --}}
                        {{-- </div> --}}
                    {{-- </form> --}}
                    {{-- @endforeach --}}
                </div>
            </div>
        </div>  
    </div>
</section>
@endsection