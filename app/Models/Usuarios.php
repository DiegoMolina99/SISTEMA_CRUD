<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class Usuarios extends Model
{
   use HasFactory;
   protected $Tabla= 'usuarios';
   protected $fillable = ['Apodo', 'Contrasenha'];

   public $timestamps= false;
}