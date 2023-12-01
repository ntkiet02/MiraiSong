<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Musician extends Model
{
    protected $table = 'musician';
    public function Beat(): HasMany
    {
        return $this->hasMany(Beat::class, 'musician_id', 'id');
    }
    use HasFactory;
}
