<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Client extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'email', 'team_id'];

    public function team() : BelongsTo {
        return $this->belongsTo(Team::class);
    }

}
