<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    protected $fillable = [
        'team'
    ];

    public function users()
    {
        return $this->belongsToMany(User::class);
    }

    public function activities()
    {
        return $this->belongsToMany(Activity::class);
    }
}
