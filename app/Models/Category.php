<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';
    protected $primaryKey = 'category_id';

    protected $fillable = ['category_id','category'];

    public static $rules = [
        'category_id' => 'integer',
        'category' => 'string',
    ];

    

    use HasFactory;
}
