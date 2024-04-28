<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GetQuote extends Model
{
    use HasFactory;

    //  public function product_d(){
    //     return $this->hasOne('App\Models\Product','id','product_id');
    // }

    protected $table = 'get_quotes'; // Adjust this if your table name is different

    // Define fillable attributes if needed
    // protected $fillable = ['name', 'email', 'phone', 'city', 'product_id'];

}
