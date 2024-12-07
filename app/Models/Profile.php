<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    //
    protected $fillable = [
        'birthday',
        'contact_number',
        'bio'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
