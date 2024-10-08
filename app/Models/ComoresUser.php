<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class ComoresUser extends Authenticatable
{
    use Notifiable;

    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'password',
        'lang_default',
        'email_verif',
        'last_vote_date',
        'daily_votes_remaining',
        'votes_per_day',
        'day_votes_consecutif',
        'votes_max',
        'accepts_communication'
    ];

    protected $hidden = ['password'];
}
