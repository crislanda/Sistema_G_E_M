<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class boletos extends Model
{
    use HasFactory;
protected $table = 'boletos';
protected $primaryKey = 'boleto_id';
protected $fillable = ['evento_id', 'precio_boleto', 'tipo_boleta'];
public $timestamps = true;

public function evento()
    {
        return $this->belongsTo(Evento::class);
    }

    public function ventas()
    {
        return $this->hasMany(Venta::class);
    }
}
