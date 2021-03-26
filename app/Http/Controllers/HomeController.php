<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;
use App\Models\User;
use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\History;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function home()
    {
        $menu1 = Menu::take(3)->get();
        $menu2 = Menu::skip(9)->take(3)->get();
        $menu3 = Menu::skip(5)->take(3)->get();
        $menu4 = Menu::skip(12)->take(3)->get();

        $user = Auth::user();

        return view(
            'home',
            ['menus1' => $menu1, 'menus2' => $menu2, 'menus3' => $menu3, 'menus4' => $menu4, 'users' => $user]
        );
    }

    public function menu(Request $request)
    {
        $users = Auth::user();
        if (isset($request->name) && $users->status == 1) {
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
        if (isset($users) && $users->status == 0) {
            return view(
                'log',
                ['users' => $users]
            );
        } else if (isset($users) && $users->status == 1) {
            return view(
                'booking',
                ['users' => $users]
            );
        } else if (isset($users) && $users->status == 2) {
            $menu1 = Menu::take(8)->get();
            $menu2 = Menu::skip(8)->take(8)->get();
            return view(
                'menu',
                ['menus1' => $menu1, 'menus2' => $menu2, 'users' => $users]
            );
        } else {
            return view(
                'auth.login'
            );
        }
    }

    public function detail()
    {
        $user = Auth::user();
        $order = Order::where('user_id', $user->id)->where('status', 0)->get();
        $order1 = Order::where('user_id', $user->id)->first();
        $order_detail = OrderDetail::where('order_id', $order1->id)->with('Menu')->get();

        return view(
            'detail',
            ['users' => $user, 'orders' => $order, 'order1' => $order1, 'order_detail' => $order_detail]
        );
    }

    public function success()
    {
        $user = Auth::user();
        $order = Order::where('user_id', $user->id)->where('status', 0)->get();
        Order::where('user_id', $user->id)->where('status', 0)->update(['status' => 1]);
        $user->status = 1;
        $user->update();
        $order1 = Order::where('user_id', $user->id)->first();
        // $order_detail = OrderDetail::where('order_id', $order1->id)->with('Menu')->get();
        // foreach ($order_detail as $od) {
        //     History::insert([
        //         'price' => $od->price,
        //         'menu_id' => $od->menu_id,
        //         'order_id' => $od->order_id,
        //         'count' => $od->count
        //     ]);
        // }
        // History::insert($order_detail);
        OrderDetail::where('order_id', $order1->id)->delete();
        return view(
            'booking-success',
            ['users' => $user, 'orders' => $order]
        );
    }

    public function addToCheckout(Request $request)
    {
        $menu_price = $request->menu_price;
        $menu_id = $request->menu_id;
        if (isset($request->count) != 0) {
            $order = Order::where('user_id', Auth::user()->id)->first();

            $total_price_menus = $menu_price * $request->count;
            $order->total_price += $total_price_menus;
            $order->update();

            OrderDetail::create([
                'price' => $menu_price,
                'menu_id' => $menu_id,
                'order_id' => $order->id,
                'count' => $request->count
            ]);
        }
        return redirect()->back();
    }
}
