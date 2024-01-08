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
    protected $fillable = [
        'rapper_id', // Thêm trường rapper_id vào mảng fillable
        'beat_id',
        'status_id',
        'projectname',
        'projectname_slug',
        'lyric',
        
        // ... các trường khác
    ];
    public function Rapper(): BelongsTo
    {
        return $this->belongsTo(Rapper::class, 'rapper_id', 'id');
    }
    
    public function Status(): BelongsTo
    {
        return $this->belongsTo(Status::class, 'status_id', 'id');
    }
    
    public function Beat(): BelongsTo
    {
        return $this->belongsTo(Beat::class, 'beat_id', 'id');
    }
}
