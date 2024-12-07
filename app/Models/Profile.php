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
    protected $guarded = ['user_id'];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
