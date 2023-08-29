<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Team extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    public function users() : BelongsToMany {
        return $this->belongsToMany(User::class);
    }

    public function members() : BelongsToMany {
        return $this->belongsToMany(User::class, 'team_user', 'team_id', 'user_id');
    }

    public function clients() : HasMany {
        return $this->hasMany(Client::class);
    }
}
