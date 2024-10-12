<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ComoresSpot extends Model
{
    use HasFactory;

    protected $table = 'comoresspots'; // Nom de la table
    protected $fillable = ['name', 'ile', 'description', 'image', 'lang', 'link'];

    // Si vous voulez utiliser created_at/updated_at, sinon, vous pouvez les désactiver
    public $timestamps = true;
}
