<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;
use App\Models\User;
use App\Models\Order;
use App\Models\OrderDetail;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{

    // public $name, $phone, $time, $number_people;

    public function home()
    {
        $menu1 = Menu::take(3)->get();
        $menu2 = Menu::skip(9)->take(3)->get();
        $menu3 = Menu::skip(5)->take(3)->get();
        $menu4 = Menu::skip(12)->take(3)->get();

        // if (isset($user)) {
        $user = Auth::user();

        // $username = $user->name;
        // $useremail = $user->email;
        // $userstatus = $user->status;
        return view(
            'home',
            ['menus1' => $menu1, 'menus2' => $menu2, 'menus3' => $menu3, 'menus4' => $menu4, 'users' => $user]
        );
        // } else {
        //     return view(
        //         'home',
        //         ['menus1' => $menu1, 'menus2' => $menu2, 'menus3' => $menu3, 'menus4' => $menu4]
        //     );
        // }


        // var_dump($users->status);
    }

    public function menu(Request $request)
    {
        $users = Auth::user();
        if (isset($request) && $users->status == 1) {
            $name = $request->name;
            $phone = $request->phone;
            $time = $request->time;
            $seat = (int)$request->number_people;

            Order::insert([
                'cust_name' => $name,
                'phone_no' => $phone,
                'seat' => $seat,
                'time' => $time,
                'user_id' => $users->id
            ]);
            // $usersTest = User::where('status', 1)->first();
            $users->status = 2;
            $users->update();
        }
        $menu1 = Menu::take(8)->get();
        $menu2 = Menu::skip(8)->take(8)->get();
        return view(
            'menu',
            ['menus1' => $menu1, 'menus2' => $menu2, 'users' => $users]
        );
    }

    public function booking()
    {
        $users = Auth::user();
        return view(
            'booking',
            ['users' => $users]
        );
    }

    public function detail()
    {
        $users = Auth::user();
        $order = Order::where('user_id', $users->id)->get();
        foreach ($order as $order1) {
            dd($order1->id);
        }

        // $orderdetail = OrderDetail::where('order_id', $id)->get();
        // , 'coba' => $order2 
        // , 'orderdetails' => $orderdetail
        // return view(
        //     'detail',
        //     ['users' => $users, 'orders' => $order, 'orderdetails' => $orderdetail]
        // );
        // dd($id);
    }

    public function success()
    {
        $users = Auth::user();
        $order = Order::first()->get();
        // $order = Order::where('user_id', $users->id)->where('status', 0)->get();
        return view(
            'booking-success',
            ['users' => $users, 'orders' => $order]
        );
    }

    // public function reserve(Request $request)
    // {
    //     $name = $request->name;
    //     $phone = $request->phone;
    //     $time = $request->time;
    //     $seat = (int)$request->number_people;
    //     $users = Auth::user();
    //     Order::insert([
    //         'cust_name' => $name,
    //         'phone_no' => $phone,
    //         'seat' => $seat,
    //         'time' => $time,
    //         'user_id' => $users->id
    //     ]);
    //     // $usersTest = User::where('status', 1)->first();
    //     $users->status = 2;
    //     $users->update();
    //     $menu1 = Menu::take(8)->get();
    //     $menu2 = Menu::skip(8)->take(8)->get();
    //     return view(
    //         'menu',
    //         ['menus1' => $menu1, 'menus2' => $menu2, 'users' => $users]
    //     );
    // }

    public function addToCheckout(Request $request)
    {
        $menu_price = $request->menu_price;
        $menu_id = $request->menu_id;

        $order = Order::where('user_id', Auth::user()->id)->first();

        $order->total_price += $menu_price;
        $order->update();

        OrderDetail::create([
            'price' => $menu_price,
            'menu_id' => $menu_id,
            'order_id' => $order->id,
        ]);

        return redirect()->back();
    }
}
