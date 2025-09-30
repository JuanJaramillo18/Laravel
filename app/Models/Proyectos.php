<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Proyectos extends Model
{
    protected $table = 'proyectos';

    protected $fillable = [
        'nombre',
        'descripcion',
    ];
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($proyect) {
            $proyect->user_id = auth()->id();
        });
    }
}