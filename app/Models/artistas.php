<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class artistas extends Model
{
    use HasFactory;
protected $table = 'artistas';
protected $primaryKey = 'artista_id';
protected $fillable = ['nombre', 'genero', 'pais_origen'];
public $timestamps = true;

public function eventos()
    {
        return $this->hasMany(Evento::class);
    }
}
