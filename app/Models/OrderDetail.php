<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    public function Order()
    {
        return $this->belongsTo(Order::class, 'order_id', 'id');
    }

    public function Menu()
    {
        return $this->belongsTo(Menu::class, 'menu_id', 'id');
    }

    protected $fillable = [
        'price', 'menu_id', 'order_id'
    ];
}
