<?php

namespace App\Models\Auth;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JWTAuth extends Model
{
    // use HasFactory;
    /**
     * The table name
     * 
     * @var string
     */
    protected $table ="users";
    
}
