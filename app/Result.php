<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Result extends Model
{

    protected $fillable = [
        'user_id',
        'result_title',
        'result',
        'status',
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
