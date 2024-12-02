<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @mixin IdeHelperVoiture
 */
class Voiture extends Model
{
   use HasFactory;
   protected $fillable = ['marque', 'modele'];
}
