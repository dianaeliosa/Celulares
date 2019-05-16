<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Celular extends Model
{
    protected $table = 'celulares';
    protected $primaryKey = 'id';
    protected $fillable = ['marca','color', 'precio', 'descripcion'];
}
