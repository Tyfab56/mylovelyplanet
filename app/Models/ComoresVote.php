<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ComoresVote extends Model
{
    protected $table = 'comoresvotes';  // Nom de la table

    protected $fillable = [
        'user_id',
        'spot_id',
    ];

    // Relation avec le modèle User
    public function user()
    {
        return $this->belongsTo(ComoresUser::class);
    }
}
