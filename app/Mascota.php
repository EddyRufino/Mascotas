<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mascota extends Model
{
    protected $guarded = [];

    protected $casts = [
        'fecha_nac' => 'date',
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
