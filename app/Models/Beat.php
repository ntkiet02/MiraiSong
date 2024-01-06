<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
class Beat extendS Model
{
    use HasFactory;
    protected $table ='beat';
    public function TypeBeat(): BelongsTo
    {
        return $this->belongsTo(TypeBeat::class, 'typebeat_id', 'id');
    }
    
    public function Musician(): BelongsTo
    {
        return $this->belongsTo(Musician::class, 'musician_id', 'id');
    }
    public function Project(): HasMany
    {
      return $this->hasMany(Project::class, 'beat_id', 'id');
    }

}
