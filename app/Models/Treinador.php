<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Treinador extends Authenticatable
{
   protected $table = 'treinador';

   protected $fillable = [
    'name',
    'email',
    'password',

   ];
