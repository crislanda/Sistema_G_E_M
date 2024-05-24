<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ventas extends Model
{

    use HasFactory;
    protected $table = 'ventas';
    protected $primaryKey = 'venta_id';
    protected $fillable = ['boleto_id', 'fecha_venta', 'cantidad_venta', 'total_venta'];
    public $timestamps = false;

    public function boleto()
    {
        return $this->belongsTo(Boleto::class);
    }
}
