<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Treatment extends Model
{
    protected $table = 'treatments';
    protected $primaryKey = 'treatment_id';

    protected $fillable = [
        'treatment_id','category_id','menu'
    ];

    public static $rules = [
        'treatment_id' => 'integer',
        'category_id' => 'integer',
        'menu' => 'string',
    ];


    use HasFactory;
}
