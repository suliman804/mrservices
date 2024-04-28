<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
        protected $fillable = [
        'first_name',
        'last_name',
        'company_name',
        'email',
        'contact',
        'country',
        'city',
        'state',
        'address',
        'postal_code',
        'payment',
        'total_amount'
        // Add any additional fields you need
    ];

    public function items()
    {
        return $this->hasMany(OrderItem::class);
    }
}
