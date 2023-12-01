<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
class ProjectDetail extends Model
{
    use HasFactory;
    protected $table = 'projectdetail';
 
    public function Project(): BelongsTo
    {
        return $this->belongsTo(Project::class, 'project_id', 'id');
    }
    
    public function Beat(): BelongsTo
    {
        return $this->belongsTo(Beat::class, 'beat_id', 'id');
    }
}
