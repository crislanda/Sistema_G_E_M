<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class locaciones extends Model
{
     use HasFactory;
protected $table = 'locaciones';
protected $primaryKey = 'locacion_id';
protected $fillable = ['nombre', 'direccion', 'capacidad'];
public $timestamps = false;

public function eventos()
{
    return $this->hasMany(Evento::class);
}
}
