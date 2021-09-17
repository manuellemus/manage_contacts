<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;
    protected $table = 'contacts';
    public $timestamps = false;
    protected $fillable = [
        'name',
        'last_name',
        'email',
        'phone',
        'adress',
        'added_by',
    ];
}