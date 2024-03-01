<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'posts';
    protected $primaryKey = 'post_id';

    protected $fillable = ['post_id','user_id','treatment_id','count','picture','comment','review'];

    public static $rules = [
        'post_id' => 'integer',
        'user_id' => 'integer',
        'treatment_id' => 'integer',
        'count' => 'intefer',
        'picture' => 'string',
        'comment' => 'text',
        'review' => 'integer',
    ];

    public function user(){
        return $this->belongsTo(User::class,'user_id','user_id');
    }

    public function treatments(){
        return $this->belongsToMany(Treatment::class,'posttreatments','post_id','treatment_id')
        ->withPivot('count','picture','comment','review');
    }
    
    use HasFactory;
}
