<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostTreatment extends Model
{
    protected $table = 'posttreatments';

    protected $fillable = ['post_id','treatment_id','count','picture','comment'];

    use HasFactory;
}
