<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quote extends Model
{
    use HasFactory;
    protected $table = 'quotes';

      protected $fillable = [
        'name',
        'email',
        'phone',
        'move_from',
        'move_to',
        'transport_type',
        'transport_date',
        'transport_time',
        'message',
        'services_id'
    ];
}
