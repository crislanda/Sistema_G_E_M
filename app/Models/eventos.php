<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class eventos extends Model
{
    use HasFactory;
protected $table = 'eventos';
protected $primaryKey = 'evento_id';
protected $fillable = ['nombre', 'descripcion', 'fecha', 'locacion_id', 'artista_id'];
public $timestamps = false;

public function locacion()
{
    return $this->belongsTo(Locacion::class);
}

public function artista()
{
    return $this->belongsTo(Artista::class);
}
}
