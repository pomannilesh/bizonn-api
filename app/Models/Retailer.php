<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Retailer extends Model
{
    use HasFactory;
    protected $table    = 'retailers';
    public $primaryKey  = 'reatiler_id';
    public $timestamps  = false;
    
    protected $fillable = [
        'shop_name',
        'email',
        'phone',
        'shop_image',
        'address',
        'city',
        'zipcode',
        'lat',
        'lng',
        'status',
        'created_at',
    ];

  
}
