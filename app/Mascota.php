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

    public function solicitude()
    {
        return $this->hasOne('App\Solicitude');
    }

    public function getRouteKeyName()
    {
      return 'url';
    }

    public static function create(array $attributes = []) {

        $attributes['user_id'] = auth()->id();

        $mascota = static::query()->create($attributes);

        $mascota->url = \Str::slug($attributes['nombre']) . "-{$mascota->id}";

        $mascota->save();

        return $mascota;
    }
}
