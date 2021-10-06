<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PhoneUser extends Model
{
    use HasFactory;
    protected $table    = 'phone_no_users';
    public $primaryKey  = 'phone_id';
    public $timestamps  = false;
    
    protected $fillable = [
        'phone_no',
        'otp',
        'created_at'
    ];

  
}
