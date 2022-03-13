<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class categoria extends Model
{
     use HasFactory;
    protected $table='categoria';
    public $timestamps=false;
    protected $fillable=[
        'id_categoria', 'descripcion',
    ];

    protected $primaryKey='id_categoria';
}
