<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Project extends Model
{
    use HasFactory;
    protected $table = 'project';
 
    public function Rapper(): BelongsTo
    {
        return $this->belongsTo(Rapper::class, 'rapper_id', 'id');
    }
    
    public function Status(): BelongsTo
    {
        return $this->belongsTo(Status::class, 'status_id', 'id');
    }
    
    public function ProjectDetail(): HasMany
    {
        return $this->hasMany(ProjectDetail::class, 'project_id', 'id');
    }
}
