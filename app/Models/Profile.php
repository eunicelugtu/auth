<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    //
    protected $fillable = [
        // 'username',
        // 'email',
        'birthday',
        'contact no.',
        'bio'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
