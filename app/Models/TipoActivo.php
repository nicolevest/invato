<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoActivo extends Model
{
    use HasFactory;
    protected $table='tipos_activos';
    protected $primaryKey= 'id';
    public $timestamps=false; //deshabilitar la verificaciín de timestamps en el modelo,

}
